 <?php

	class Transaksi extends CI_Controller
	{

		public function index()
		{


			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,motor m,customer cs WHERE tr.id_motor=m.id_motor AND tr.id_customer=cs.id_customer")->result();
			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/data_transaksi', $data);
			$this->load->view('template_admin/footer');
		}

		public function pembayaran($id)
		{
			$where = array('id_rental' => $id);
			$data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id'")->result();

			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/konfirmasi_pembayaran', $data);
			$this->load->view('template_admin/footer');
		}

		public function cek_pembayaran()
		{
			$id 		= $this->input->post('id_rental');
			$status_pembayaran	= $this->input->post('status_pembayaran');

			$data = array(
				'status_pembayaran'		=> $status_pembayaran
			);


			$where = array(

				'id_rental' => $id
			);

			$this->rental_model->update_data('transaksi', $data, $where);
			redirect('admin/transaksi');
		}

		public function download_pembayaran($id)
		{
			$this->load->helper('download');
			$filePemabayaran = $this->rental_model->downloadPembayaran($id);
			$file = 'assets/upload/bukti/' . $filePemabayaran['bukti_pembayaran'];
			force_download($file, NULL);
		}

		public function transaksi_selesai($id)
		{
			$where = array('id_rental' => $id);
			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id'")->result();

			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/transaksi_selesai', $data);
			$this->load->view('template_admin/footer');
		}

		public function transaksi_selesai_aksi()
		{
			$id 						       = $this->input->post('id_rental');
			$tanggal_pengembalian 		= $this->input->post('tanggal_pengembalian');
			$status_rental 				= $this->input->post('status_rental');
			$status_pengembalian 		= $this->input->post('status_pengembalian');
			$tanggal_kembali            = $this->input->post('tanggal_kembali');
			$denda                      = $this->input->post('denda');
			$harga                        = $this->input->post('harga');


			$x                  = strtotime($tanggal_pengembalian);
			$y                  = strtotime($tanggal_kembali);
			$jmlHari            = abs(($x - $y) / (60 * 60 * 24));
			$total_denda        = $jmlHari * $denda;

			$data = array(
				'tanggal_pengembalian'  => $tanggal_pengembalian,
				'status_rental'			=> $status_rental,
				'status_pengembalian'	=> $status_pengembalian,
				'total_denda'           => $total_denda
			);

			$where = array(
				'id_rental'  => $id
			);

			$this->rental_model->update_data('transaksi', $data, $where);

			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Transaksi berhasil diUpdate !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
			redirect('admin/transaksi');
		}

		public function print_transaksi($id)
		{
			$where = array('id_rental' => $id);
			$data['title'] = "Kwitansi Bukti Selesai Rental";
			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,motor m,customer cs WHERE tr.id_motor=m.id_motor AND tr.id_customer=cs.id_customer AND tr.id_rental='$id'")->result();

			$this->load->view('template_admin/header');
			$this->load->view('admin/print_transaksi', $data);
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
			redirect('admin/transaksi');
		}
	} ?>