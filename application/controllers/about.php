<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller 
{
	
	public function index()
	{
		$this->load->view('common/header.php');
		$this->load->view('about/about.php');
		$this->load->view('common/footer.php');
	}
	
}
?>