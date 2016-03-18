<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Admin_model");	
	}
	
	public function index()
	{
		$this->load->view('admin/navmenu_admin');
		$this->load->view('admin/side_admin');
		$this->load->view('admin/adminview');
		$this->load->view('admin/footer_admin');
	}
	
	public function getdata()
	{
		$arrData = $this->Admin_model->getdata();
		$data['phpgrid'] = $arrData;
		
		$this->load->view('admin/navmenu_admin');
		$this->load->view('admin/side_admin');
		//$this->load->view('admin/list', $data);
		require_once(APPPATH. 'libraries/phpGrid_Lite/conf.php'); // APPPATH is path to application folder
    //$data['phpgrid'] = new C_DataGrid("SELECT * FROM Orders", "orderNumber", "Orders"); //$this->ci_phpgrid->example_method(3);

    $this->load->view('admin/list',$data);
		
		$this->load->view('admin/footer_admin');
		//$this->load->view('admin/adminview');
		
		
	}
	
	public function adddata()
	{
		$this->load->view('admin/navmenu_admin');
		$this->load->view('admin/side_admin');
		$this->load->view('admin/adminview');
		$this->load->view('admin/footer_admin');
		if($this->input->post('submit')!='')
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('featureimage'))
			{
				$error = array('error' => $this->upload->display_errors());
				echo print_r($error);exit;
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
			}
			
			if ( ! $this->upload->do_upload('coverimage'))
			{
				$error = array('error' => $this->upload->display_errors());
				echo print_r($error);exit;
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
			}
			
			if ( ! $this->upload->do_upload('icon'))
			{
				$error = array('error' => $this->upload->display_errors());
				echo print_r($error);exit;
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
			}
			$file = $_FILES;
			//var_dump($file);
			//var_dump($file['featureimage']['name']);
			//break;
			//var_dump($data);
			$tfile = $file['featureimage']['name'];
			$tfile1 = $file['coverimage']['name'];
			$tfile2 = $file['icon']['name'];
			//break;
			
   			$this->load->helper('form');
			$arrInsert = array();
			$arrInsert['s_name'] = $this->input->post('s_name');
			$arrInsert['title'] = $this->input->post('title');
			$arrInsert['short_desc'] = $this->input->post('short_desc');
			$arrInsert['long_desc'] = $this->input->post('long_desc');
			$arrInsert['tags'] = $this->input->post('tags');
			$arrInsert['featureimage'] = $tfile;
			$arrInsert['coverimage'] = $tfile1;
			$arrInsert['icon'] = $tfile2;
			$arrInsert['slug'] = $this->input->post('slug');
			$arrInsert['isfeatured'] = $this->input->post('isfeatured');
			$this->Admin_model->adddata($arrInsert);
			redirect("admin");
		}
	}
	
	public function editdata($id=NULL)
	{
		$arrCuUsser = $this->session->userdata("current_user");
		$data['cuser']= $arrCuUsser;
		//echo $intUid;
		$arrdata = $this->Admin_model->getdata($id);
		
		if($this->input->post('submit')!='')
		{
			$arrInsert = array();
			$arrInsert['fname'] = $this->input->post('fname');
			$arrInsert['lname'] = $this->input->post('lname');
			$arrInsert['email'] = $this->input->post('email');
			$arrInsert['user_name'] = $this->input->post('user_name');
			$arrInsert['password'] = $this->input->post('password');
			$arrInsert['phone'] = $this->input->post('phone');
			$arrInsert['dob'] = $this->input->post('dob');
			$arrInsert['id']    =  $id;
			$id = $this->Admin_model->editdata($arrInsert);
			redirect("admin");
		}
		
		$data['user'] = $arrdata;
		$this->load->view('admin/navmenu_admin');
		$this->load->view('admin/side_admin');
		$this->load->view("admin/editdata",$data);
		$this->load->view('admin/footer_admin');
	}
	
	public function deletedata($id=NULL)
	{
		$this->Admin_model->deletedata($id);
		redirect("admin");	
	}
}
?>
