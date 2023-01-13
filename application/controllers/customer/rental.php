<?php 

	class Rental extends CI_Controller
	{

		public function tambah_rental($id)
		{

			 if($this->session->userdata('status') != "login"){
            redirect(base_url("auth/login"));
             }else{
				$data['detail'] = $this->rental_model->get_id_motor($id);
				
				$this->load->view('template_customer/header');
   				$this->load->view('customer/tambah_rental',$data);
   				$this->load->view('template_customer/footer');

		}
	}

		public function tambah_rental_aksi()
		{

			
			
			$id_customer				= $this->session->userdata('id_customer');
			$id_motor 					= $this->input->post('id_motor');
			$tanggal_rental 			= $this->input->post('tanggal_rental');
			$tanggal_kembali 			= $this->input->post('tanggal_kembali');
			$denda 						= $this->input->post('denda');
			$harga 						= $this->input->post('harga');
			

			$data = array(
				'id_rental'				 => $this->rental_model->kode_otomatisrental(),
				'id_customer'          	 	=> $id_customer,
				'id_motor'           			=> $id_motor,
				'tanggal_rental'           	=> $tanggal_rental,
				'tanggal_kembali'          	 => $tanggal_kembali,
				'denda'           				=> $denda,
				'harga'           				=> $harga,
				'tanggal_pengembalian'         => '-',
				'status_rental'           		=> 'Belum Selesai',
				'status_pengembalian'           => 'Belum Kembali',
				'total_denda'          			 => '0'


			);


			$this->rental_model->insert_data($data,'transaksi');
				$status = array(

						'status'=>'0');

				$id = array(
						'id_motor' => $id_motor);


				$this->rental_model->update_data('motor',$status,$id);

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Transaksi berhasil ,Silahkan Lakukan Pembayaran!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				redirect('customer/transaksi');


		
		}
		
  

		
	} ?>