<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller 
{
	
	public function index()
	{
		$this->load->view('common/header.php');
		$this->load->view('contact/contact.php');
		$this->load->view('common/footer.php');
	}
	
}
?>