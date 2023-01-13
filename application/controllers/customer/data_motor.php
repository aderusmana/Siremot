<?php 

   class Data_motor extends CI_Controller{

   	public function index()
   {
   		$data['motor'] = $this->rental_model->get_data('motor')->result();
   		$this->load->view('template_customer/header');
   		$this->load->view('customer/data_motor',$data);
   		$this->load->view('template_customer/footer');

   	}

   	public function detail_motor($id)
   {
   		$data['detail'] = $this->rental_model->get_id_motor($id);
   		$this->load->view('template_customer/header');
   		$this->load->view('customer/detail_motor',$data);
   		$this->load->view('template_customer/footer');

   	}
   }
 ?>