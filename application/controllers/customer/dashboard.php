<?php 

   class Dashboard extends CI_Controller{

   	public function index()
   {
   		$data['motor'] = $this->rental_model->get_data('motor')->result();
   		$this->load->view('template_customer/header');
   		$this->load->view('customer/dashboard',$data);
   		$this->load->view('template_customer/footer');

   	}

   	
   }
 ?>