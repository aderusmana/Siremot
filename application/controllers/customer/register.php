<?php 

	
	 class Register extends CI_Controller{

	 	public function index()
	 {
	 	$this->load->view('template_customer/header');
   		$this->load->view('register');
   		$this->load->view('template_customer/footer');
	 	}
	 }
	 
	  ?>