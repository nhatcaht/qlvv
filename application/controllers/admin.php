<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
        public $authentication;


    public function __construct() {
            parent::__construct();
            $this->load->helper(array('string', 'url'));
            $this->load->library(array('mystring'));
            $this->authentication = $this->my_authentication->checkSession();
            if(!isset($this->authentication) || count($this->authentication) == 0) redirect('authentication/login');
        }

        public function index()
	   {
            $data['meta_title'] = 'Home page';
            $data['active'] = 'homepage';
            $data['template'] = 'backend/home/index';
            $data['authentication'] = $this->authentication;
            $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
        }

    	public function view()
    	{
            $data['meta_title'] = 'View';
            $data['active'] = 'view';
            $data['template'] = 'backend/home/view';
            $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
    	}

    	public function add()
    	{
            $data['meta_title'] = 'Add';
            $data['active'] = 'add';
            $data['template'] = 'backend/home/add';
            $this->load->view('backend/layouts/admin', isset($data) ? $data : NULL);
    	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */