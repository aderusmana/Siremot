<?php 

	
	 class Contact extends CI_Controller{

	 	public function index()
	 {
	 	$this->load->view('template_customer/header');
   		$this->load->view('customer/contact');
   		$this->load->view('template_customer/footer');
	 	}
	 }
	 
	  ?>