<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Customer_model");	
	}
	
	public function index()
	{
		$this->load->view('customer/navmenu_customer');
		$this->load->view('customer/side_customer');
		$this->load->view('customer/customerview');
		$this->load->view('customer/footer_customer');
	}
	
	public function getdata()
	{
		$arrData = $this->Customer_model->getdata();
		$data['info'] = $arrData;
		$this->load->view('customer/navmenu_customer');
		$this->load->view('customer/side_customer');
		$this->load->view('customer/list', $data);
		$this->load->view('customer/footer_customer');
		//$this->load->view('admin/adminview');
	}

	
	public function adddata()
	{
		$this->load->view('customer/navmenu_customer');
		$this->load->view('customer/side_customer');
		$this->load->view('customer/customerview');
		$this->load->view('customer/footer_customer');
		if($this->input->post('submit')!='')
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('images'))
			{
				$error = array('error' => $this->upload->display_errors());
				echo print_r($error);exit;
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
			}
			
			//var_dump($data);
			$tfile =  $data['upload_data']['file_name'];
			//break;
			
			$this->load->helper('form');
			$arrInsert = array();
			$arrInsert['name'] = $this->input->post('name');
			$arrInsert['company_firm'] = $this->input->post('company_firm');
			$arrInsert['address'] = $this->input->post('address');
			$arrInsert['location'] = $this->input->post('location');
			$arrInsert['pincode'] = $this->input->post('pincode');
			$arrInsert['email'] = $this->input->post('email');
			$arrInsert['contact'] = $this->input->post('contact');
			$arrInsert['tfile'] = $tfile;
			$arrInsert['isfeatured'] = $this->input->post('isfeatured');
			$this->Customer_model->adddata($arrInsert);
			redirect("customer");	
			//$this->load->view("home/list");
		}
	}
}
?>