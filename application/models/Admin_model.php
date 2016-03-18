<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function adddata($data=array())
	{
		$this->db->insert('services',$data);
		$id = $this->db->insert_id();
		return $id;
	}
	
	public function getdata($id=NULL)
	{
		if($id!='')
		{
			$this->db->select("s.*");
			$this->db->from("services s");
			$this->db->where("s.s_id = ".$s_id." ");
		}
			$query = $this->db->get('services');
			$arrData = $query->result_array();
			
			//var_dump($arrData);
			return $arrData;
	}
	
	public function editdata($data=array())
	{
		$arrUpdate = array();
		$arrUpdate['fname'] = $data['fname'];
		$arrUpdate['lname'] = $data['lname'];
		$arrUpdate['email'] = $data['email'];
		$arrUpdate['user_name'] = $data['user_name'];
		$arrUpdate['password'] = $data['password'];
		$arrUpdate['phone'] = $data['phone'];
		$arrUpdate['dob'] = $data['dob'];
		
		//var_dump($arrUpdate);
		//var_dump($data['id']);
		//break;
		$this->db->where("id = ".$data['id']." ");
		$this->db->update("user",$arrUpdate);
	}
	
	public function deletedata($id=NULL)
	{
		$this->db->where("id = '".$id."' ");
		$this->db->delete("user");	
	}
	
	public function UserExit($data=array())
	{
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where("user_name = '".$data['user_name']."' AND password = '".($data['password'])."' ");
		$query=$this->db->get();
		$arrUsers = $query->result_array();
		return $arrUsers;
	}
	
}
?>