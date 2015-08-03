<?php

/* 
 Kiểm tra đường dần bất kỳ có nằm trong đường dẫn cho phép hay không
 Nhằm mục đích phân quyền với những người dùng không được vào những
 đường dẫn không cho phép
 */
 if(!defined('BASEPATH')) exit('No direct script access allowed');

class My_checkrole {
    public $CI;
    public function __construct() {
        // $this->CI =& get_instance();
    }

    public function checkRole($curentUri, $permissions)
    {
        if (isset($permissions) && count($permissions) && in_array($curentUri, $permissions) == FALSE)
        {
            return array(
                    'type' => 'error',
                    'message' => 'Lỗi! Bạn không có quyền ở đây'
                );
        }
        return TRUE;
    }
}