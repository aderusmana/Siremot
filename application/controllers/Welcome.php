<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

   	public function index()
   {
   		
   		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,motor m,customer cs WHERE tr.id_motor=m.id_motor AND tr.id_customer=cs.id_customer  AND status_rental='Selesai'")->result();
   		$this->load->view('template_customer/header');
   		$this->load->view('customer/dashboard',$data);
   		$this->load->view('template_customer/footer');

   	}

   	
   }
 ?>