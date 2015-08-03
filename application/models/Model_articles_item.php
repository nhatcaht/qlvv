<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_articles_item extends CI_Model
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
            'content' => $this->input->post('content'),
            'category' => $this->input->post('cat_id'),
            'created' => gmdate('Y-m-d H:i:s', time() + 7*3600)
        );
        $this->db->insert('news_item', $data_insr);
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
            'content' => $this->input->post('content'),
            'category' => $this->input->post('cat_id'),
            'update' => gmdate('Y-m-d H:i:s', time() + 7*3600)
        );
        $this->db->where('id', (int)$id)->update('news_item', $data_edit);
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
        $this->db->delete('news_item', array('id' => (int)$id));
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
        $this->db->where_in('id', $id_arr)->delete('news_item');
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
        return $this->db->select('id, title, description, content, category')->from('news_item')->where('id', (int)$id)->get()->row_array();
    }
    
    //Lấy số trường trong bảng
    public function total($table = null)
    {
        return $this->db->from($table)->count_all_results();
    }


    //Lấy dữ liệu ra
    public function view($start, $limit)
    {
       return $this->db->select('id, news_item.title as title, news_item.description as description, news_item.public as public, news_item.created as created, news_category.title as cat_title')->from('news_item')->join('news_category', 'news_category.id_cat = news_item.category')->order_by('id', 'DESC')->limit($limit, $start)->get()->result_array();
    }
    
    //Ẩn dữ liệu
    public function hide_item($id_arr)
    {
        $data = array('public' => 0);
        $this->db->where_in('id', $id_arr)->update('news_item', $data);
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
        $this->db->where_in('id', $id_arr)->update('news_item', $data);
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
    
    //Hàm lấy id và title của category để đưa vào thẻ dropdown
    //Trả về mảng id => title
    public function getDropdown()
    {
        $data = $this->db->select('id_cat, title')->from('news_category')->order_by('title ASC')->get()->result_array();
        $list[0] = '--Chọn danh mục--';
        if(isset($data) && count($data))
        {
            foreach($data as $key => $val)
            {
                $list[$val['id_cat']] = $val['title'];
            }
        }
        return $list;
    }
}