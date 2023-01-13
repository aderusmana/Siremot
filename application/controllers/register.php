<?php 

	 class Register extends CI_Controller{

	 	public function index()
	 {
	 	$this->_rules();

	 	if($this->form_validation->run() == FALSE){
	 		$this->load->view('template_admin/header');
   			$this->load->view('register');
   			$this->load->view('template_admin/footer');
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
				$config['file_name'] = 'KTP'.time();

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
				  Berhasil Register, Silahkan Login !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				redirect('auth/login');

	 	}
	 	
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