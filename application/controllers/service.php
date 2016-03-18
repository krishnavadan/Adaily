<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller 
{
	
	public function index()
	{
		$this->load->view('common/header.php');
		$this->load->view('services/services.php');
		$this->load->view('common/footer.php');
	}
	
}
?>