<?php
class Mlist extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
	function level1_list()
	{
		$sql="select * from level1";
		$query=$this->db->query($sql);
		if($query->num_rows() > 0)
		{
		return $query->result_array();
		}
		return 0;
	}
}
?>