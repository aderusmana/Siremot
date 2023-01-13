<?php 

class Laporan extends CI_Controller{

 	public function index()
 	{
    $dari = $this->input ->post('dari');
    $sampai = $this->input ->post('sampai');
    $this->_rules();

if($this->form_validation->run() == FALSE){
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/filter_laporan');
    $this->load->view('template_admin/footer');
}else{
    $data['laporan'] = $this->db->query("SELECT * FROM transaksi tr,motor m,customer cs WHERE tr.id_motor=m.id_motor AND tr.id_customer=cs.id_customer AND date(tanggal_rental) >='$dari' AND date(tanggal_rental) <='$sampai'AND status_rental='Selesai'")->result();

    
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/data_laporan',$data);
    $this->load->view('template_admin/footer');
 		}
  }

  public function print_laporan()
  {
    $dari = $this->input->get('dari');
    $sampai = $this->input->get('sampai');
    $data['title'] = "PRINT LAPORAN TRANSAKSI";
    $data['laporan'] = $this->db->query("SELECT * FROM admin ad,transaksi tr,motor m,customer cs WHERE tr.id_motor=m.id_motor AND tr.id_customer=cs.id_customer AND date(tanggal_rental) >='$dari' AND date(tanggal_rental) <='$sampai'AND status_rental='Selesai'")->result();
    $data2['laporan'] = $this->rental_model->get_data('admin')->result();

        $this->load->view('template_admin/header');
        $this->load->view('admin/print_laporan',$data,$data2);
    
  }
  public function _rules()
  {
    $this->form_validation->set_rules('dari','Dari Tanggal','required');
    $this->form_validation->set_rules('sampai','Sampai Tanggal','required');
  }

 }?>