<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Home_model");	
	}
	
	public function index()
	{
		$this->load->view('common/header.php');
		$arrData = $this->Home_model->getServices();
		$data['services'] = $arrData;
		$this->load->view('home/h_content.php', $data);
		$this->load->view('common/footer.php');
	}
	
	public function testapi()
	{
		$postdata = file_get_contents("php://input");
		
		
			
	}
	
	public function getservicejson()
	{
		$arrData = $this->Home_model->getServices();
		$data['services'] = $arrData;
		echo json_encode($data);	
	}
	
	public function thanks()
	{
		$this->load->view('common/header.php');
		$this->load->view('home/thanks.php');
		$this->load->view('common/footer.php');
	}
	
	
	public function getdata()
	{
		$arrData = $this->Home_model->getdata();
		$data['info'] = $arrData;
		$this->load->view('home/list', $data);
		//$this->load->view('admin/adminview');
	}
	
	public function adddata()
	{
		$this->load->view('common/header.php');
		$this->load->view('home/h_content.php');
		$this->load->view('common/footer.php');
		if($this->input->post('save')!='')
		{
   			$this->load->helper('form');
			$arrInsert = array();
			$arrInsert['name'] = $this->input->post('name');
			$arrInsert['email'] = $this->input->post('email');
			$arrInsert['contact'] = $this->input->post('contact');
			//var_dump($arrInsert);
			//break;
			$this->Home_model->adddata($arrInsert);
			redirect("home/thanks");
		}
		
	}

}
