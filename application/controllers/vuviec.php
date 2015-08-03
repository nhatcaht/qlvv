<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vuviec extends CI_Controller {

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
        public $authentication;
        public function __construct()
	 {
		parent::__construct();
		$this->load->helper(array('form', 'url', 'nhattv_string'));
        $this->load->library(array('pagination', 'form_validation', 'mystring'));
		$this->load->model('Model_vuviec');
        $this->authentication = $this->my_authentication->checkSession();
        //print_r($this->authentication); die;
        if(!isset($this->authentication) || count($this->authentication) == 0) redirect('authentication/login');
	 }

	public function index()
	{
            $data['meta_title'] = 'vuviec-homepage';
            $data['active'] = 'vuviec-homepage';
            $data['template'] = 'backend/vuviec/index';
            $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
	}
    
    // Hiển thị các danh mục
	public function view($page = 1)
    	{
            $this->processRole();
            $this->_action();
            //Đoạn code phân
            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
            
            $config['first_link'] = 'Trang đầu';
            
            $config['last_link'] = 'Trang cuối';
            
            $config['cur_tag_open'] = '<a title="3" class="number current">';
            $config['cur_tag_close'] = '</a>';
            
            
            $config['base_url'] = 'http://localhost/nhattv/ci/index.php/articles_category/view/';
            $config['total_rows'] = $this->Model_articles_category->total('news_category');
            
            $config['per_page'] = 10;
            $config['use_page_numbers'] = TRUE;

            $this->pagination->initialize($config);
            $data['list_pagination'] = $this->pagination->create_links();
            $total_page = ceil($config['total_rows']/$config['per_page']);
            $page = ($page > $total_page) ? $total_page : $page;
            $page = ($page < 1) ? 1 : $page;
            $page = $page - 1;
            ////End Đoạn code phân trang
            
            //Lấy dữ liệu ra
            $data['list_articles_category'] = $this->Model_articles_category->view($page * $config['per_page'], $config['per_page']);
            
            //Khai báo một số biến đi kèm
            //var_dump($data['list_articles_category']);die;
            $data['active'] = 'articles_category-view';
            $data['meta_title'] = 'articles_category view';
            $data['template'] = 'backend/articles_category/view';
            $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
    	}
        
        // Hàm thực hiện kiểm tra quyền của người dùng, nếu đúng quyền thì tiếp tục, không thì trả về trang chủ
        public function processRole()
        {
            $flag = $this->my_checkrole->checkRole($this->uri->segments['1'].'/'.$this->uri->segments['2'], $this->authentication['permissions']);
            if($flag != 1)
            {
                $this->session->set_flashdata('message_flashdata', $flag);
                redirect('admin/index');
            }
        }

        //Check hành động từ phía người dùng
        public function _action()
        {
            if($this->input->post('submit'))
                {
                    $fullUrl = $this->_fullUrl();
                    $fullUrl = !empty($fullUrl) ? $fullUrl : 'articles_category/view';
                    $this->form_validation->set_rules('checkbox[]', 'Checkbox', 'required');
                    //Set Message
                    $this->form_validation->set_message('required', 'Bạn phải chọn trước khi thực thi');
                    if($this->form_validation->run())
                    {
                        $action = $this->input->post('action');
                        $checkbox = $this->input->post('checkbox');

                        //Nếu chọn hành động xóa
                        if($action == 'delete' && is_array($checkbox) && count($checkbox))
                        {
                            $flag = $this->Model_articles_category->del_arrlist($checkbox);
                            $this->session->set_flashdata('message_flashdata', $flag);
                            redirect($fullUrl);
                        }

                        // Chọn hành động ẩn tin
                        elseif($action == 'hide' && is_array($checkbox) && count($checkbox))
                        {
                            $flag = $this->Model_articles_category->hide_category($checkbox);
                            $this->session->set_flashdata('message_flashdata', $flag);
                            redirect($fullUrl);
                        }
                        elseif($action == 'show' && is_array($checkbox) && count($checkbox))
                            {
                                //Hiển thị tất cả các tin bị ẩn
                                $flag = $this->Model_articles_category->show($checkbox);
                                $this->session->set_flashdata('message_flashdata', $flag);
                                redirect($fullUrl);
                            }
                        else 
                            {
                                $this->session->set_flashdata('message_flashdata', array('type' => 'error', 'message' => 'Bạn phải chọn thao tác'));
                                redirect($fullUrl);
                            }
                    }
                }
        }
        
        // Hàm lấy url hiện tại ở trang web đang hiển thị
        function _fullUrl()
        {
            $pageURL = 'http';
            if (@$_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
            $pageURL .= "://";
            if ($_SERVER["SERVER_PORT"] != "80") {
             $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
            } else {
             $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
            }
            return $pageURL;
        }

    //THêm dữ liệu, xong chuyển về trang view
	public function add()
	{
        //$this->processRole();   //Kiểm tra quyền của người dùng

        //Kiểm tra đã tồn tại số đối tượng nhập
        if(!isset($_SESSION['sodt']) || empty($_SESSION['sodt']))
        {
            redirect('vuviec/khaibaodt'); // Chuyển hướng nhập số đối tượng
        }

        if($this->input->post('lamlai'))
        {
            unset($_SESSION['sodt']);
            redirect('vuviec/index');
        }

        if($this->input->post('submit'))
        {
            //Set rules vụ việc
            $this->form_validation->set_rules('tenvuviec', 'Tên vụ việc', 'trim|required');
            $this->form_validation->set_rules('noidung', 'Nội dung vụ việc', 'trim|required');
            $this->form_validation->set_rules('description', 'Mô tả', 'trim|required|min_length[6]');
            //Set Message
            $this->form_validation->set_message('required', 'Trường %s không được để trống');
            $this->form_validation->set_message('min_length', 'Độ dài trường %s ít nhất %s ký tự');
            if($this->form_validation->run())
            {
                $flag = $this->Model_articles_category->add();
                $this->session->set_flashdata('message_flashdata', $flag);
                redirect('vuviec/view');
            }
        }
        //attach value

        $data['base']= $this->config->item('base_url');
        $data['active'] = 'vuviec-add';
        $data['meta_title'] = 'Thêm vụ việc';
        $data['template'] = 'backend/vuviec/add/index';
        $data['tab_vuviec'] = 'backend/vuviec/add/tab_vuviec';
        $data['tab_doituong'] = 'backend/vuviec/add/tab_doituong';
        $data['tab_thiethai'] = 'backend/vuviec/add/tab_thiethai';
        $data['tab_bihai'] = 'backend/vuviec/add/tab_bihai';
        $data['listHuyen'] = $this->Model_vuviec->getHuyenArrToSelect();
        $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
	}

    //Load xã theo huyện
    public function loadXa($id)
    {
        $res = '<select name="xaXayRa" class="text-input small-input">';
        $dataXP = $this->Model_vuviec->getXaByHuyenArrToSelect($id);
        if(isset($dataXP) && count($dataXP))
        {
        foreach ($dataXP as $key => $value) {
            $res .= '<option value='.$key.'>'.$value.'</option>';
        }
        $res .='</select>';
        echo $res;
        }
        
    }
     
    //Khai báo số đối tượng để nhập đữ liệu
    public function khaibaodt()
    {
        if($this->input->post('submit'))
        {
            //Set rules
            $this->form_validation->set_rules('sodt', 'Số đối tượng', 'trim|required|integer');
            //Set Message
            $this->form_validation->set_message('required', 'Trường %s không được để trống');
            $this->form_validation->set_message('integer', 'Trường %s phải là số');
            if($this->form_validation->run())
            {
                $_SESSION['sodt'] = $this->input->post('sodt');
                redirect('vuviec/add');
            }
        }
        //attach value
        $data['active'] = 'vuviec-add';
        $data['meta_title'] = 'Thêm vụ việc';
        $data['template'] = 'backend/vuviec/khaibaodt';
        $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
    }

        // Hàm xóa dữ liệu
	public function del($id = 0)
	{

        $this->processRole();   //Kiểm tra quyền của người dùng
        //Lấy biến redirect chuyển lên để sau khi làm trả về trang sửa
        $redirect = $this->input->get('redirect');
        $redirect = !empty($redirect) ? base64_decode($redirect) : 'articles_category/view';   
        
        //Kiểm tra dữ liệu tồn tại hay không
        //Nếu không tồn tại thì chuyển hướng và đưa ra thông báo
        $articles_category = $this->Model_articles_category->get($id);
        if(!isset($articles_category) || count($articles_category) == 0 )
        {
            $this->session->set_flashdata('message_flashdata', array('type' => 'error', 'message' => 'Lỗi! Danh mục này không tồn tại'));
            redirect($redirect);
            die;
        }
        
        //Xóa dữ liệu
        if($this->input->post('submit'))
        {
            //Set rules
            $this->form_validation->set_rules('title', 'Tiêu đề', 'trim|required');
            $this->form_validation->set_message('required', 'Trường %s không được để trống');
            if($this->form_validation->run())
            {
                $flag = $this->Model_articles_category->del($articles_category['id_cat']);
                $this->session->set_flashdata('message_flashdata', $flag);
                redirect($redirect);
                die;
            }
        }
        $data['articles_category'] = $articles_category;
        $data['meta_title'] = 'Delete';
        $data['template'] = 'backend/articles_category/del';
        $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
	}
        
    public function edit($id = 0)
       {
        //Lấy biến redirect chuyển lên để sau khi làm trả về trang sửa
        $this->processRole();   //Kiểm tra quyền của người dùng
        $redirect = $this->input->get('redirect');
        $redirect = !empty($redirect) ? base64_decode($redirect) : 'articles_category/view';   

        //Kiểm tra dữ liệu tồn tại hay không
        //Nếu không tồn tại thì chuyển hướng và đưa ra thông báo
        $articles_category = $this->Model_articles_category->get($id);
        if(!isset($articles_category) || count($articles_category) == 0 )
        {
            $this->session->set_flashdata('message_flashdata', array('type' => 'error', 'message' => 'Lỗi! Danh mục này không tồn tại'));
            redirect($redirect);
            die;
        }

        // Kiểm tra mã người tạo và mã của người đăng nhập có giống nhau không
        //Nếu khác thì không cho phép sửa
        if($articles_category['userid_created'] != $this->authentication['id'])
        {
            $this->session->set_flashdata('message_flashdata', array('type' => 'error', 'message' => 'Lỗi! bạn chỉ được sửa danh mục của bạn tạo ra'));
            redirect('admin/index');
        }
        
        //Sửa dữ liệu
        if($this->input->post('submit'))
        {
            
            //Set rules
            $this->form_validation->set_rules('title', 'Tiêu đề', 'trim|required');
            $this->form_validation->set_message('required', 'Trường %s không được để trống');
            if($this->form_validation->run())
            {
                $flag = $this->Model_articles_category->edit($articles_category['id_cat']);
                $this->session->set_flashdata('message_flashdata', $flag);
                redirect($redirect);
                die;
            }
        }
        $data['articles_category'] = $articles_category;
        $data['meta_title'] = 'Edit';
        $data['template'] = 'backend/articles_category/edit';
        $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */