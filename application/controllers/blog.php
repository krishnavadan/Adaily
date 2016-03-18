<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller 
{
	
	public function index()
	{
		$this->load->view('common/header.php');
		$this->load->view('blog/blog.php');
		$this->load->view('common/footer.php');
	}
	
}
?>