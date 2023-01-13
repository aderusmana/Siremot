<?php 

	class Auth extends CI_Controller{

		public function login()
		{

			$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() != false){
			$this->load->view('template_admin/header');
      			$this->load->view('login');
      			$this->load->view('template_admin/footer');

			$where = array('username'=>$username, 'password'=>md5($password));

			$data = $this->rental_model->edit_data($where,'admin');
			$d = $this->rental_model->edit_data($where,'admin')->row();
			$cek = $data->num_rows();

			if($cek > 0)
			{
				$session = array('id_admin' => $d->id_admin,'nama_admin' => $d->nama_admin,'status' =>'login');
				$this->session->set_userdata($session);
				redirect('admin/dashboard');
			
			}

			else{
				$dt = $this->rental_model->edit_data($where,'customer');
				$hasil = $this->rental_model->edit_data($where,'customer')->row();
				$proses = $dt->num_rows();

				if($proses > 0){
					$session = array('id_customer' => $hasil->id_customer, 'nama' => $hasil->nama, 'status' => 'login');
					$this->session->set_userdata($session);
					redirect('welcome');
			}

			else{
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Login Gagal,Username dan Password Salah !!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				
			}
		}
		}else{
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Anda Belum Memasukan Username Dan Password !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				$this->load->view('template_admin/header');
      			$this->load->view('login');
      			$this->load->view('template_admin/footer');
				
			}
		}
	




		public function _rules()
		{
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
		}
	


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}

	public function ganti_password()
	{
			$this->load->view('template_admin/header');
			$this->load->view('ganti_password');
			$this->load->view('template_admin/footer');
	}

	public function ganti_password_aksi()
	{
		$pass_baru = $this->input->post('pass_baru');
		$ulang_pass = $this->input->post('ulang_pass');

		$this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulang_pass]');
    $this->form_validation->set_rules('ulang_pass','Ulangi Password Baru','required');


		if($this->form_validation->run() != false){
			$data = array('password' => md5($pass_baru));
			$id = array('id_customer' => $this->session->userdata('id_customer'));
		
			$this->rental_model->update_password($id,$data,'customer');
			$this->session->set_flashdata('pesan','<div class="alert alert-  alert-dismissible fade show" role="alert">
				  Username Atau Password Berhasil Diupdate, Silahkan Login !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				redirect('auth/login');

			
			
		}else{
			$this->load->view('template_admin/header');
			$this->load->view('ganti_password');
			$this->load->view('template_admin/footer');
		}
	}
} 
	?>