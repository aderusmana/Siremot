<?php 

class Data_type extends CI_Controller{

	public function index()
	{
		$data['type'] = $this->rental_model->get_data('type')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_type',$data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_type()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambah_type');
		$this->load->view('template_admin/footer');
	}

	public function tambah_type_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_type();
		}else{

			$kode_type		=$this->input->POST('kode_type');
			$nama_type		=$this->input->POST('nama_type');

			$data = array (
				'id_type'		=> $this->rental_model->kode_otomatistype(),
				'kode_type'			=>$kode_type,
				'nama_type'			=>$nama_type,
			); 
			$this->rental_model->insert_data($data,'type');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Type Success Add !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				redirect('admin/data_type');
		}
	}


	public function update_type($id)
	{
		$where = array('id_type' => $id);
		$data['type'] = $this->db->query("SELECT * FROM type WHERE id_type ='$id'") ->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/update_type',$data);
		$this->load->view('template_admin/footer');
	}

	public function update_type_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->update_type();
		}else{
			$id  			= $this->input->POST('id_type');
			$kode_type		=$this->input->POST('kode_type');
			$nama_type		=$this->input->POST('nama_type');

			$data = array (
				'id_type'		=> $this->rental_model->kode_otomatistype(),
				'kode_type'			=>$kode_type,
				'nama_type'			=>$nama_type,
			); 

			$where =array (
				'id_type'  =>$id);

			$this->rental_model->update_data('type',$data,$where);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Type Success Update !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				redirect('admin/data_type');
	}
}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_type','Kode Type','required');
		$this->form_validation->set_rules('nama_type','Nama Type','required');
	}

	public function delete_type($id)
	{
		$where = array('id_type' => $id);
		$this->rental_model->delete_data($where,'type');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data Type Success Deleted !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				redirect('admin/data_type');
	}
} ?>