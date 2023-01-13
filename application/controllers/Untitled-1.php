<?php 

	class Auth extends CI_Controller{

		public function login()
		{
			$this->_rules();
			
			if($this->form_validation->run() == false){
				$this->load->view('template_admin/header');
				$this->load->view('login');
				$this->load->view('template_admin/footer');
			}else{
				$username = $this->input->post('username');
				$password = md5($this->input->post('password')) ;

				$cek = $this->rental_model->cek_login($username,$password);

				if ($cek == FALSE){
					$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Username atau Password Salah !.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div> ');
					redirect('auth/login');
				}else{
					$this->session->set_userdata('username',$cek->username);
					$this->session->set_userdata('level',$cek->level);
					$this->session->set_userdata('nama',$cek->nama);
					switch ($cek->level) {
						case 1 : redirect('admin/dashboard');
					
								break;
						case 2 : redirect('customer/dashboard');
					
								break;
						
						default:
							
								break;
					}
				}
				
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
