<?php 

class Data_motor extends CI_Controller{
	public function index()
	{
		$data['motor'] = $this->rental_model->get_data('motor')->result();
		$data['type']  = $this->rental_model->get_data('type')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_motor',$data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_motor()
	{
		$data['type']  = $this->rental_model->get_data('type')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/tambah_motor',$data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_motor_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_motor();
		}else{
			$kode_type					=$this->input->post('kode_type');
			$merk						=$this->input->post('merk');
			$no_plat					=$this->input->post('no_plat');
			$warna						=$this->input->post('warna');
			$tahun						=$this->input->post('tahun');
			$status						=$this->input->post('status');
			$harga						=$this->input->post('harga');
			$denda						=$this->input->post('denda');
			$helm						=$this->input->post('helm');
			$bensin						=$this->input->post('bensin');
			$jas_hujan					=$this->input->post('jas_hujan');
			$gambar						=$_FILES['gambar']['name'];
			if($gambar=''){}else{
				$config ['upload_path']	='./assets/upload/motor';
				$config ['allowed_types']= '.jpg|jpeg|png|gif';

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('gambar')){
					echo "Upload Image failed";
				}else{
					$gambar=$this->upload->data('file_name');
				}
			}
			$data =array(
				'id_motor'		=> $this->rental_model->kode_otomatismotor(),
				'kode_type'		=>$kode_type,
				'merk'			=>$merk,
				'no_plat'		=>$no_plat,
				'tahun'			=>$tahun,	
				'warna'			=>$warna,
				'status'		=>$status,
				'harga'			=>$harga,
				'denda'			=>$denda,
				'helm'			=>$helm,
				'bensin'		=>$bensin,
				'jas_hujan'		=>$jas_hujan,
				'gambar'		=>$gambar,);
				

				$this->rental_model->insert_data($data,'motor');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Motor Success Add !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				redirect('admin/data_motor');

			}
		}

		public function update_motor($id){
			$where = array('id_motor' => $id);
			$data['motor'] = $this->db->query("SELECT * FROM motor m,type tp WHERE m.kode_type =tp.kode_type AND m.id_motor = '$id'")->result();
			$data['type'] = $this->rental_model->get_data('type')->result();
			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/update_motor',$data);
			$this->load->view('template_admin/footer');
		}


		public function update_motor_aksi()
		{
			$this->_rules();
			if($this->form_validation->run() == FALSE)
			{
				$this->update_motor();
			}else{
			$id							=$this->input->post('id_motor');	
			$kode_type					=$this->input->post('kode_type');
			$merk						=$this->input->post('merk');
			$no_plat					=$this->input->post('no_plat');
			$warna						=$this->input->post('warna');
			$tahun						=$this->input->post('tahun');
			$status						=$this->input->post('status');
			$harga						=$this->input->post('harga');
			$denda						=$this->input->post('denda');
			$helm						=$this->input->post('helm');
			$bensin						=$this->input->post('bensin');
			$jas_hujan					=$this->input->post('jas_hujan');
			$gambar						=$_FILES['gambar']['name'];
			if($gambar){
				$config ['upload_path']	='./assets/upload/motor';
				$config ['allowed_types']= 'jpg|jpeg|png|gif';

				$this->load->library('upload',$config);

				if($this->upload->do_upload('gambar')){
					$gambar=$this->upload->data('file_name');
					$this->db->set('gambar',$gambar);
					
				}else{
					echo $this->upload->display_errors();
					
				}
			}
			$data =array(
				'kode_type'		=>$kode_type,
				'merk'			=>$merk,
				'no_plat'		=>$no_plat,
				'tahun'			=>$tahun,	
				'warna'			=>$warna,
				'status'		=>$status,
				'harga'			=>$harga,
				'denda'			=>$denda,
				'helm'			=>$helm,
				'bensin'		=>$bensin,
				'jas_hujan'		=>$jas_hujan,
				);
			$where = array (
			'id_motor' => $id );

				$this->rental_model->update_data('motor',$data,$where);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Motor Success Update !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				redirect('admin/data_motor');
			}
		}
		public function _rules()
		{
			$this->form_validation->set_rules('kode_type','Kode Type','required');
			$this->form_validation->set_rules('merk','Merk','required');
			$this->form_validation->set_rules('no_plat','No Plat','required');
			$this->form_validation->set_rules('tahun','Tahun','required');
			$this->form_validation->set_rules('warna','Warna','required');
			$this->form_validation->set_rules('status','Status','required');
			$this->form_validation->set_rules('harga','Harga','required');
			$this->form_validation->set_rules('denda','Denda','required');
			$this->form_validation->set_rules('helm','Helm','required');
			$this->form_validation->set_rules('bensin','Bensin','required');
			$this->form_validation->set_rules('jas_hujan','Jas hujan','required');

			

		}

		public function detail_motor($id)
		{
			$data['detail'] = $this->rental_model->get_id_motor($id);
			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidebar');
			$this->load->view('admin/detail_motor',$data);
			$this->load->view('template_admin/footer');
		}

		public function delete_motor($id)
		{
			$where = array('id_motor' => $id);
			$this->rental_model->delete_data($where,'motor');
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data Motor Success Deleted !.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div> ');
				redirect('admin/data_motor');

		}

	}


		?>