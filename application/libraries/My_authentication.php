<?php

/* 
 Thư viện kiểm tra giá trị session
 */
 if(!defined('BASEPATH')) exit('No direct script access allowed');

class My_authentication {
    public $CI;
    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->model('Model_users');
    }
    public function checkSession()
    {
        if(isset($_SESSION['authentication']) && !empty($_SESSION['authentication']))
            {
                $remember = 0;
                $authentication = $_SESSION['authentication'];
            }
            else
                {
                    $remember = 1;
                    $authentication = $this->CI->session->userdata('authentication');
                }
        //print_r($_SESSION['authentication']); die;
        if(!isset($authentication) || empty($authentication)) return NULL;
        $authentication = json_decode($authentication, TRUE);
        $user = $this->CI->Model_users->get('id, email, roleid', array(
            'email' => $authentication['email'],
            'password' => $authentication['password'],
            'salt' => $authentication['salt'],
            'user-agent' => $authentication['user-agent'],
            'last_login' => $authentication['last_login']
        ));
        
        if(!isset($user) || count($user) == 0)
        {
            if($remember == 0)
            {
                unset($_SESSION['authentication']);
            }else{
                $this->CI->session->unset_userdata('authentication');
            }
            return NULL;
        }
        $user['permissions'] = $this->CI->Model_role->getPermission('permissions', array('roleid' => $user['roleid']), 'tbl_user_permissions');
        unset($user['roleid']);
        return $user; 
    }
}