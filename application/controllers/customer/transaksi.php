<?php


class Transaksi extends CI_Controller
{

	public function index()
	{

		$customer = $this->session->userdata('id_customer');
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,motor m,customer cs WHERE tr.id_motor=m.id_motor AND tr.id_customer=cs.id_customer AND cs.id_customer='$customer' ORDER BY id_rental DESC")->result();

		$this->load->view('template_customer/header');
		$this->load->view('customer/transaksi', $data);
		$this->load->view('template_customer/footer');
	}


	public function pembayaran($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,motor m,customer cs WHERE tr.id_motor=m.id_motor AND tr.id_customer=cs.id_customer AND tr.id_rental='$id' ORDER BY id_rental DESC")->result();

		$this->load->view('template_customer/header');
		$this->load->view('customer/pembayaran', $data);
		$this->load->view('template_customer/footer');
	}

	public function pembayaran_aksi()
	{
		$id 						= $this->input->post('id_rental');
		$bukti_pembayaran			= $_FILES['bukti_pembayaran']['name'];
		if ($bukti_pembayaran) {
			$config['upload_path']	= './assets/upload/bukti';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|gif';
			$config['file_name'] = 'bukti_pembayaran' . date();

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('bukti_pembayaran')) {
				$bukti_pembayaran = $this->upload->data('file_name');
				$this->db->set('bukti_pembayaran', $bukti_pembayaran);
			} else {
				echo $this->upload->display_errors();
			}
		}
		$data   = array(

			'bukti_pembayaran'			=> $bukti_pembayaran,



		);

		$where  = array(
			'id_rental'		=> $id
		);



		$this->rental_model->update_data('transaksi', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Bukti Pembayaran Berhasil Di Upload !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
		redirect('customer/transaksi');
	}

	public function testimoni()
	{

		$id 						= $this->input->post('id_rental');
		$testimoni					= $this->input->post('testimoni');


		$data   = array(
			'testimoni'					=> $testimoni,


		);

		$where  = array(
			'id_rental'		=> $id
		);



		$this->rental_model->update_data('transaksi', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  TERIMA KASIH ATAS TESTIMONI ANDA !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
		redirect('customer/transaksi');
	}


	public function cetak_invoice($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,motor m,customer cs WHERE tr.id_motor=m.id_motor AND tr.id_customer=cs.id_customer AND tr.id_rental='$id' ")->result();

		$this->load->view('customer/cetak_invoice', $data);
	}




	public function delete_rental($id)
	{
		$w = array('id_rental' => $id);
		$data = $this->rental_model->edit_data($w, 'transaksi')->row();
		$ww = array('id_motor' => $data->id_motor);
		$data2 = array('status' => '1');
		$this->rental_model->update_data('motor', $data2, $ww);
		$this->rental_model->delete_data($w, 'transaksi');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data Rental Success Deleted !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
		redirect('customer/transaksi');
	}
}
