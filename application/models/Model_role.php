<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_role extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function getPermission($select = 'permissions', $param_where = NULL, $table)
    {
        $this->db->select($select)->from($table);
        if(isset($param_where) && count($param_where))
        {
            $this->db->where($param_where);
        }
        $permissions = $this->db->get()->result_array();
        if(isset($permissions) && count($permissions))
        {
            $temp = NULL;
            foreach ($permissions as $key => $value)
            {
                $temp[] = $value['permissions'];
            }
            return $temp;
        }
        return NULL;
    }
}