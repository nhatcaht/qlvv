<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function index()
	{
		$data['meta_title'] = 'Home page';
		$data['active'] = 'homepage';
		$data['template'] = 'frontend/home/index';
		$this->load->view('frontend/layouts/home', isset($data) ? $data : NULL);
	}

	public function fullwidth()
	{
		$data['meta_title'] = 'Full width';
		$data['active'] = 'fullwidth';
		$data['template'] = 'frontend/home/fullwidth';
		$this->load->view('frontend/layouts/home', isset($data) ? $data : NULL);
	}

	public function styledemo()
	{
		$data['meta_title'] = 'Style demo';
		$data['active'] = 'styledemo';
		$data['template'] = 'frontend/home/styledemo';
		$this->load->view('frontend/layouts/home', isset($data) ? $data : NULL);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */