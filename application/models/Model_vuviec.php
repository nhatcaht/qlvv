<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_vuviec extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getHuyenArrToSelect()
    {
        $dataHuyen = $this->db->select('id_HuyenTX, ten_HuyenTX')->from('tbl_huyen_tx')->order_by('ten_HuyenTX ASC')->get()->result_array();
        $listHuyenTX[0] = "--Chọn Huyện, Thị xã--";
        if(isset($dataHuyen) && count($dataHuyen))
        {
            foreach ($dataHuyen as $key => $value) {
                $listHuyenTX[$value['id_HuyenTX']] = $value['ten_HuyenTX'];
            }
        }
        return $listHuyenTX;
    }

    //Lấy xã theo id Huyện
    public function getXaByHuyenArrToSelect($idHuyenTX)
    {
        $dataXaPhuong = $this->db->select('idXaPhuong, tenXaPhuong')->from('tbl_xa_phuong')->where('idHuyenTX', (int)$idHuyenTX)->order_by('tenXaPhuong ASC')->get()->result_array();
        $listtenXaPhuong[0] = "--Chọn Xã, Phường, Thị Trấn--";
        if(isset($dataXaPhuong) && count($dataXaPhuong))
        {
            foreach ($dataXaPhuong as $key => $value) {
                $listtenXaPhuong[$value['idXaPhuong']] = $value['tenXaPhuong'];
            }
        }
        return $listtenXaPhuong;
    }

    public function getHuyenById($id = 0)
        {
            return $this->db->select('id_HuyenTX, ten_HuyenTX')->from('tbl_huyen_tx')->where('id_HuyenTX', int($id))->get()->result_array();
        }  
}