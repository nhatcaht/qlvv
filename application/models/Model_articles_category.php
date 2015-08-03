<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_articles_category extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }
    //Thêm dữ liệu vào bảng
    public function add() 
    {
        $data_insr = array(
            'title' => $this->input->post('title'),
            'slug' => $this->mystring->slug($this->input->post('title')),
            'description' => $this->input->post('description'),
            'created' => gmdate('Y-m-d H:i:s', time() + 7*3600)
        );
        $this->db->insert('news_category', $data_insr);
        if($this->db->affected_rows() > 0)
        {
            return array(
                'type' => 'successful',
                'message' => 'Thêm dữ liệu thành công'
                );
        }
        else
            {
                return array(
                    'type' => 'error',
                    'message' => 'Lỗi! Không có dữ liệu nào được thêm vào'
                );
            }
    }
    
    //Thêm dữ liệu vào bảng
    public function edit($id = 0) 
    {
        $data_edit = array(
            'title' => $this->input->post('title'),
            'slug' => $this->mystring->slug($this->input->post('title')),
            'description' => $this->input->post('description'),
            'created' => gmdate('Y-m-d H:i:s', time() + 7*3600)
        );
        $this->db->where('id_cat', (int)$id)->update('news_category', $data_edit);
        if($this->db->affected_rows() > 0)
        {
            return array(
                'type' => 'successful',
                'message' => 'Chỉnh sữa dữ liệu thành công'
                );
        }
        else
            {
                return array(
                    'type' => 'error',
                    'message' => 'Lỗi! Không có dữ liệu nào được chỉnh sửa'
                );
            }
    }
    
    //Xóa dữ liệu
    public function del($id = 0) 
    {
        $this->db->delete('news_category', array('id_cat' => (int)$id));
        if($this->db->affected_rows() > 0)
        {
            return array(
                'type' => 'successful',
                'message' => 'Xóa dữ liệu thành công'
                );
        }
        else
            {
                return array(
                    'type' => 'error',
                    'message' => 'Lỗi! Không có dữ liệu nào bị xóa'
                );
            }
    }
    
    //Xóa mảng id_cat dữ liệu
    public function del_arrlist($id_arr) 
    {
        $this->db->where_in('id_cat', $id_arr)->delete('news_category');
        if($this->db->affected_rows() > 0)
        {
            return array(
                'type' => 'successful',
                'message' => 'Xóa dữ liệu thành công'
                );
        }
        else
            {
                return array(
                    'type' => 'error',
                    'message' => 'Lỗi! Không có dữ liệu nào bị xóa'
                );
            }
    }
    
    //Kiểm tra dữ liệu tồn tại không
    public function get($id =0)
    {
        return $this->db->select('*')->from('news_category')->where('id_cat', (int)$id)->get()->row_array();
    }
    
    //Lấy số trường trong bảng
    public function total($table = null)
    {
        return $this->db->from($table)->count_all_results();
    }


    //Lấy dữ liệu ra
    public function view($start, $limit)
    {
       return $this->db->select('id_cat, title, description,public, created')->from('news_category')->order_by('id_cat', 'ASC')->limit($limit, $start)->get()->result_array();
    }
    
    //Ẩn dữ liệu
    public function hide_category($id_arr)
    {
        $data = array('public' => 0);
        $this->db->where_in('id_cat', $id_arr)->update('news_category', $data);
        if($this->db->affected_rows() > 0)
        {
            return array(
                'type' => 'successful',
                'message' => 'Ẩn dữ liệu thành công'
                );
        }
        else
            {
                return array(
                    'type' => 'error',
                    'message' => 'Lỗi! Không có dữ liệu nào bị ẩn'
                );
            }
    }
    
    //Show tất cả dữ liệu ra ngoài
    public function show($id_arr)
    {
        $data = array('public' => 1);
        $this->db->where_in('id_cat', $id_arr)->update('news_category', $data);
        if($this->db->affected_rows() > 0)
        {
            return array(
                'type' => 'successful',
                'message' => 'Show dữ liệu thành công'
                );
        }
        else
            {
                return array(
                    'type' => 'error',
                    'message' => 'Lỗi! Không có dữ liệu nào hiển thị'
                );
            }
    }
}