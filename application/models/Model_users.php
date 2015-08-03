<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_users extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }
    
    //Lấy giá trị trong bảng theo điều kiện
    public function total($para_where = NULL)
    {
        $this->db->from('tbl_users');
        if(isset($para_where) && count($para_where))
        {
            $this->db->where($para_where);
        }
            return $this->db->count_all_results();
    }
    
    public function get($select = 'email', $param_where = NULL)
    {
        $this->db->select($select)->from('tbl_users');
        if(isset($param_where) && count($param_where))
        {
            $this->db->where($param_where);
        }
        return $this->db->get()->row_array();
    }
    
    //Cập nhật dữ liệu vào bảng
    public function update($param_data = NULL, $param_where = NULL, $param_table = NULL) 
    {
        $this->db->where($param_where)->update($param_table, $param_data);
        if($this->db->affected_rows() > 0)
        {
            return array(
                'type' => 'successful',
                'message' => 'Đăng nhập thành công'
                );
        }
        else
            {
                return array(
                    'type' => 'error',
                    'message' => 'Lỗi! vấn đề xảy ra khi đăng nhập'
                );
            }
    }
}