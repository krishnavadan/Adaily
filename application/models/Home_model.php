<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getdata($id=NULL)
	{
		if($id!='')
		{
			$this->db->select("i.*");
			$this->db->from("inquiry i");
			$this->db->where("i id = ".$id." ");
		}
			$query = $this->db->get('inquiry');
			$arrData = $query->result_array();
			
			//var_dump($arrData);
			return $arrData;
	}
	public function getServices($id=NULL)
	{
		if(!empty($id))
		{
			$this->db->select("s.*");
			$this->db->from("services s");
			$this->db->where("s.isfeatured = 1");
			
			$query = $this->db->get();
			$servicesData = $query->result_array();
		}
		else
		{
			$query = $this->db->get('services');
			$servicesData = $query->result_array();	
		}
		//$query = $this->db->get();
		//$servicesData = $query->result_array();
		
		
		return $servicesData;
	}
	
	public function adddata($data=array())
	{
		$this->db->insert('inquiry',$data);
		$id = $this->db->insert_id();
		return $id;
	}
}
?>