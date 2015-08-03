<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends CI_Controller {
    public $authentication;
    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
        public function __construct() {
            parent::__construct();
            $this->load->library(array('form_validation', 'My_authentication'));
            $this->load->helper(array('form', 'url'));
            $this->load->model('Model_users');
            $this->authentication = $this->my_authentication->checkSession();
            if(isset($this->authentication) && count($this->authentication) > 0) redirect('admin/index');
        }
        
        //Code quản lý đăng nhập
        public function login()
	{
            if($this->input->post('submit'))
            {   //Set rules
                $this->form_validation->set_rules('email', 'Email đăng nhập', 'trim|required|valid_email');
                $this->form_validation->set_rules('password', 'Mật khẩu', 'trim|required|callback__authentication');
                //Set Message
                $this->form_validation->set_message('required', '%s không được để trống');
                $this->form_validation->set_message('valid_email', '%s phải đúng định dạng email');
                //Set dinh dang loi in ra
                
                $this->form_validation->set_error_delimiters('<div class="notification error information png_bg"><div>', '</div></div>');
                if($this->form_validation->run())
                {
                    $email = trim($this->input->post('email'));
                    $user = $this->Model_users->get('id, email, password, salt',array('email' => $email));
                    if(isset($user) && !empty($user))
                    {
                        $last_login = gmdate('Y-m-d H:i:s', time() + 7*3600);
                        $user_agent = $_SERVER['HTTP_USER_AGENT'];
                        $user['user-agent'] = $user_agent;
                        $user['last_login'] = $last_login;
                        $flag = $this->Model_users->update(array('last_login' => $last_login, 'user-agent' => $user_agent), array('email' => $email), 'tbl_users');
                        session_start();
                        if($flag['type'] == 'successful')
                        {
                            $remember = (int)$this->input->post('remember');
                            if($remember >= 1)
                            {
                                $this->session->set_userdata('authentication', json_encode($user));
                            }
                            elseif($remember == 0)
                            {
                                $_SESSION['authentication'] = json_encode($user);
                            }
                            $this->session->set_flashdata('message_flashdata', array('type' => 'successful', 'message' => 'Bạn đã đăng nhập thành công'));
                            redirect('admin/index');
                            
                        }
                    }
                }
            }
            
            $data['meta_title'] = 'Login';
            $data['template'] = 'backend/Authentication/login';
            $this->load->view('backend/layouts/login', isset($data) ? $data : NULL);
	}
        //Code quản lý đăng nhập
        public function logout()
	{
            if(!isset($this->authentication) && count($this->authentication) == 0) redirect('authentication/login');
            if(isset($_SESSION['authentication']))
            {
                unset($_SESSION['authentication']);
            }
            $this->session->unset_userdata('authentication');
            redirect('admin/index');
	}
        
        //Hàm xác thực đăng nhập
        public function _authentication($value = '', $email = '')
        {
            $email = trim($this->input->post('email'));
            $password = trim($this->input->post('password'));
            $count = $this->Model_users->total(array('email' => $email));
            if($count == 0)
            {
                return FALSE;
            }
            $user = $this->Model_users->get('email, password, salt',array('email' => $email));
            if($user['password'] != md5(md5(md5($password).md5($user['salt']))))
            {
                $this->form_validation->set_message('_authentication', 'Mật khẩu không đúng');
                return FALSE;
            }
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */