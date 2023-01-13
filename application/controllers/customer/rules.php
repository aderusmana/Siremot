<?php 

	
	 class Rules extends CI_Controller{

	 	public function index()
	 {
	 	$this->load->view('template_customer/header');
   		$this->load->view('customer/rules');
   		$this->load->view('template_customer/footer');
	 	}
	 }
	 
	  ?>