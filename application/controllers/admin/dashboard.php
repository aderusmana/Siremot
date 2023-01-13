<?php 

   class Dashboard extends CI_Controller{

   	public function index()
   {
   		$this->load->view('template_admin/header');
   		$this->load->view('template_admin/sidebar');
   		$this->load->view('admin/dashboard');
   		$this->load->view('template_admin/footer');

   	}
   }
 ?>