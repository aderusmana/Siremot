<?php 

class Data_customer extends CI_Controller{

	public function index()
	{
		$data['customer'] = $this->rental_model->get_data('customer')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_customer',$data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_customer()
	{
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambah_customer');
		$this->load->view('template_admin/footer');
	}

	public function tambah_customer_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_customer();
		}else{
			$nama							=$this->input->post('nama');
			$username						=$this->input->post('username');
			$alamat							=$this->input->post('alamat');
			$gender							=$this->input->post('gender');
			$no_telp						=$this->input->post('no_telp');
			$nik							=$this->input->post('nik');
			$password						=md5 ($this->input->post('password'));
			$foto							= $_FILES['foto']['name'];
			if($foto=''){}else{
				$config ['upload_path']		='./assets/upload/foto';
				$config ['allowed_types']	= 'jpg|jpeg|png|gif';

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('foto')){
					echo "Upload Gagal" ;die();
						
				}else{
					$foto=$this->upload->data('file_name');
					
				}
			}
			$data =array(
				'id_customer'	=> $this->rental_model->kode_otomatiscustomer(),
				'nama'			=>$nama,
				'username'		=>$username,
				'alamat'		=>$alamat,
				'gender'		=>$gender,
				'no_telp'		=>$no_telp,
				'nik'			=>$nik,
				'password'		=>$password,
				'foto'			=>$foto,);
				

				$this->rental_model->insert_data($data,'customer');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Customer Success Add !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				redirect('admin/data_customer');

			}
		}

		public function update_customer($id)
		{
			$where = array('id_customer' => $id);
			$data['customer'] = $this->db->query("SELECT * FROM customer WHERE id_customer = '$id'")->result();
			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/update_customer',$data);
			$this->load->view('template_admin/footer');
		}

		public function update_customer_aksi()
		{
		$this->_rules();
		
			$id 							=$this->input->post('id_customer');
			$nama							=$this->input->post('nama');
			$username						=$this->input->post('username');
			$alamat							=$this->input->post('alamat');
			$gender							=$this->input->post('gender');
			$no_telp						=$this->input->post('no_telp');
			$nik							=$this->input->post('nik');
			$password						=md5($this->input->post('password'));
			$foto							=$_FILES['foto']['name'];
			if($foto){
				$config ['upload_path']	='./assets/upload/foto';
				$config ['allowed_types']= 'jpg|jpeg|png|gif';

				$this->load->library('upload',$config);

				if($this->upload->do_upload('foto')){
					$foto=$this->upload->data('file_name');
					$this->db->set('foto',$foto);
					
				}else{
					echo $this->upload->display_errors();
					
				}
			}
			$data =array(
				'nama'			=>$nama,
				'username'		=>$username,
				'alamat'		=>$alamat,
				'gender'		=>$gender,
				'no_telp'		=>$no_telp,
				'nik'			=>$nik,
				'password'		=>$password,
				);

			$where = array(
				'id_customer' =>$id
			);
				

				$this->rental_model->update_data('customer',$data,$where);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Customer Success Update !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				redirect('admin/data_customer');

			}
		
		public function delete_customer($id)
		{
			$where = array('id_customer' => $id);
			$this->rental_model->delete_data($where,'customer');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data Customer Success Deleted !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				redirect('admin/data_customer');


		}


		public function _rules()
		{
			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('alamat','Alamat','required');
			$this->form_validation->set_rules('gender','Gender','required');
			$this->form_validation->set_rules('no_telp','No.Telepon','required');
			$this->form_validation->set_rules('nik','NIK','required');
			$this->form_validation->set_rules('password','Password','required');

	}
}
?> 