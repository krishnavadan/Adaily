<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function adddata($data=array())
	{
		$this->db->insert('customer',$data);
		$id = $this->db->insert_id();
		return $id;
	}
	
	public function getdata($id=NULL)
	{
		if($id!='')
		{
			$this->db->select("c.*");
			$this->db->from("customer c");
			$this->db->where("c.id = ".$id." ");
		}
			$query = $this->db->get('customer');
			$arrData = $query->result_array();
			
			//var_dump($arrData);
			return $arrData;
	}
}
?>