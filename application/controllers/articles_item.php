<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_item extends CI_Controller {
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
	 public function __construct()
	 {
            parent::__construct();
            $this->load->helper(array('form', 'url', 'nhattv_string'));
            $this->load->library(array('pagination', 'form_validation', 'mystring'));
            $this->load->model(array('Model_articles_category', 'Model_articles_item'));
            $this->authentication = $this->my_authentication->checkSession();
            if(!isset($this->authentication) || count($this->authentication) == 0) redirect('authentication/login');
	 }

	public function index()
	{
            $data['meta_title'] = 'articles_item homepage';
            $data['active'] = 'articles_item-homepage';
            $data['template'] = 'backend/articles_item/index';
            $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
	}
        // Hiển thị các bài viết
	public function view($page = 1)
	{
            $this->_action();
            //Đoạn code phân
            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
            
            $config['first_link'] = 'Trang đầu';
            
            $config['last_link'] = 'Trang cuối';
            
            $config['cur_tag_open'] = '<a title="3" class="number current">';
            $config['cur_tag_close'] = '</a>';
            
            
            $config['base_url'] = 'http://localhost/nhattv/ci/index.php/articles_item/view/';
            $config['total_rows'] = $this->Model_articles_item->total('news_item');
            
            $config['per_page'] = 3;
            $config['use_page_numbers'] = TRUE;

            $this->pagination->initialize($config);
            $data['list_pagination'] = $this->pagination->create_links();
            $total_page = ceil($config['total_rows']/$config['per_page']);
            $page = ($page > $total_page) ? $total_page : $page;
            $page = ($page < 1) ? 1 : $page;
            $page = $page - 1;
            ////End Đoạn code phân trang
            
            //Lấy dữ liệu ra
            $data['list_articles_item'] = $this->Model_articles_item->view($page * $config['per_page'], $config['per_page']);
            
            //Khai báo một số biến đi kèm
            //var_dump($data['list_articles_category']);die;
            $data['active'] = 'articles_item-view';
            $data['meta_title'] = 'articles_item view';
            $data['template'] = 'backend/articles_item/view';
            $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
	}
        
        public function _action()
        {
            if($this->input->post('submit'))
                {
                    $fullUrl = $this->mystring->fullUrl();
                    $fullUrl = !empty($fullUrl) ? $fullUrl : 'articles_item/view';
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
                            $flag = $this->Model_articles_item->del_arrlist($checkbox);
                            $this->session->set_flashdata('message_flashdata', $flag);
                            redirect($fullUrl);
                        }

                        // Chọn hành động ẩn tin
                        elseif($action == 'hide' && is_array($checkbox) && count($checkbox))
                        {
                            $flag = $this->Model_articles_item->hide_item($checkbox);
                            $this->session->set_flashdata('message_flashdata', $flag);
                            redirect($fullUrl);
                        }
                        elseif($action == 'show' && is_array($checkbox) && count($checkbox))
                            {
                                //Hiển thị tất cả các tin bị ẩn
                                $flag = $this->Model_articles_item->show($checkbox);
                                $this->session->set_flashdata('message_flashdata', $flag);
                                redirect($fullUrl);
                            }
                        else 
                            {
                                $this->session->set_flashdata('message_flashdata', $flag);
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
            if($this->input->post('submit'))
            {
                //Set rules
                $this->form_validation->set_rules('title', 'Tiêu đề', 'trim|required');
                $this->form_validation->set_rules('description', 'Mô tả', 'trim|required');
                $this->form_validation->set_rules('content', 'Mô tả', 'trim|required');
                $this->form_validation->set_rules('cat_id', 'Danh mục', 'trim|required|is_natural_no_zero');
                //Set Message
                $this->form_validation->set_message('required', 'Trường %s không được để trống');
                $this->form_validation->set_message('min_length', 'Độ dài trường %s ít nhất %s ký tự');
                $this->form_validation->set_message('is_natural_no_zero', 'Trường %s phải được chọn');
                if($this->form_validation->run())
                {
                    $flag = $this->Model_articles_item->add();
                    $this->session->set_flashdata('message_flashdata', $flag);
                    redirect('articles_item/view');
                }
            }
            $data['articles_item_list'] = $this->Model_articles_item->getDropdown();
            $data['active'] = 'articles_item-add';
            $data['meta_title'] = 'articles_item add';
            $data['template'] = 'backend/articles_item/add';
            $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
	}
        // Hàm xóa dữ liệu
	public function del($id = 0)
	{
            //Lấy biến redirect chuyển lên để sau khi làm trả về trang sửa
            $redirect = $this->input->get('redirect');
            $redirect = !empty($redirect) ? base64_decode($redirect) : 'articles_item/view';   
            
            //Kiểm tra dữ liệu tồn tại hay không
            //Nếu không tồn tại thì chuyển hướng và đưa ra thông báo
            $articles_item = $this->Model_articles_item->get($id);
            if(!isset($articles_item) || count($articles_item) == 0 )
            {
                $this->session->set_flashdata('message_flashdata', array('type' => 'error', 'message' => 'Lỗi! Danh mục này không tồn tại'));
                redirect($redirect);
                die;
            }
            
            //Xóa dữ liệu
            if($this->input->post('submit'))
            {
                $flag = $this->Model_articles_item->del($articles_item['id']);
                $this->session->set_flashdata('message_flashdata', $flag);
                redirect($redirect);
                die;
            }
            $data['articles_item_list'] = $this->Model_articles_item->getDropdown();
            $data['articles_item'] = $articles_item;
            $data['meta_title'] = 'Delete';
            $data['template'] = 'backend/articles_item/del';
            $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
	}
        
        public function edit($id = 0)
	{
            //Lấy biến redirect chuyển lên để sau khi làm trả về trang sửa
            $redirect = $this->input->get('redirect');
            $redirect = !empty($redirect) ? base64_decode($redirect) : 'articles_category/view';   
            //Kiểm tra dữ liệu tồn tại hay không
            //Nếu không tồn tại thì chuyển hướng và đưa ra thông báo
            $articles_item = $this->Model_articles_item->get($id);
            if(!isset($articles_item) || count($articles_item) == 0 )
            {
                $this->session->set_flashdata('message_flashdata', array('type' => 'error', 'message' => 'Lỗi! Bài viết này không tồn tại'));
                redirect($redirect);
                die;
            }
            
            //Sửa dữ liệu
            if($this->input->post('submit'))
            {
                //Set rules
                $this->form_validation->set_rules('title', 'Tiêu đề', 'trim|required');
                $this->form_validation->set_rules('description', 'Mô tả', 'trim|required');
                $this->form_validation->set_rules('content', 'Nội dung', 'trim|required');
                
                //Set message
                $this->form_validation->set_message('required', 'Trường %s không được để trống');
                if($this->form_validation->run())
                {
                    $flag = $this->Model_articles_item->edit($articles_item['id']);
                    $this->session->set_flashdata('message_flashdata', $flag);
                    redirect($redirect);
                    die;
                }
            }
            $data['articles_item_list'] = $this->Model_articles_item->getDropdown();
            $data['articles_item'] = $articles_item;
            $data['meta_title'] = 'Edit item';
            $data['template'] = 'backend/articles_item/edit';
            $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */