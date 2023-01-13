<?php 
class rental_model extends CI_model{
	
	public function get_data($table){
		return $this->db->get($table);
	}
	 function edit_data($where,$table){
    return $this->db->get_where($table,$where);
}

	public function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	 public function update_data($table,$data,$where){
    $this->db->update($table,$data,$where);
  }

	public function delete_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_id_motor($id)

	{
		$hasil = $this->db->where('id_motor',$id)->get('motor');
		if($hasil->num_rows()> 0){
			return$hasil->result();
		}else{
			return false;
		}
	}

	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db ->where('username',$username)
							->where('password',md5($password))
							->limit(1)
							->get('customer');


			if($result->num_rows() > 0){
				return $result->row();
			}else{
				return FALSE;
			}
		}

		public function update_password($where,$data,$table)
		{
				$this->db->where($where);
				$this->db->update($table,$data);
		}

		public function downloadPembayaran($id)
		{
			$query = $this->db->get_where('transaksi',array('id_rental' =>$id));
			return $query->row_array();
		}

		public function find($where,$table){
    //Query mencari record berdasarkan ID-nya
    $hasil= $this->db->where('id_motor', $where)
      ->limit(1)
      ->get($table);
    if($hasil->num_rows()> 0){
      return $hasil->row();
    } else {
      return array();
    }
  }


		public function kode_otomatisrental(){
    $this->db->select('right(id_rental,3) as kode', false);
    $this->db->order_by('id_rental','desc');
    $this->db->limit(1);
    $query=$this->db->get('transaksi');
    if($query->num_rows()<>0){
      $data=$query->row();
      $kode=intval($data->kode)+1;
    }else{
      $kode=1;
    }
    $tgl=date('dmY');
    $kodemax=str_pad($kode,3,"0", STR_PAD_LEFT);
    $kodejadi='REN'.$tgl.$kodemax;

    return $kodejadi;  
}


	public function kode_otomatismotor(){
    $this->db->select('right(id_motor,3) as kode', false);
    $this->db->order_by('id_motor','desc');
    $this->db->limit(1);
    $query=$this->db->get('motor');
    if($query->num_rows()<>0){
      $data=$query->row();
      $kode=intval($data->kode)+1;
    }else{
      $kode=1;
    }
    $tgl=date('dmY');
    $kodemax=str_pad($kode,3,"0", STR_PAD_LEFT);
    $kodejadi='MOT'.$tgl.$kodemax;

    return $kodejadi;  
}

	public function kode_otomatiscustomer(){
    $this->db->select('right(id_customer,3) as kode', false);
    $this->db->order_by('id_customer','desc');
    $this->db->limit(1);
    $query=$this->db->get('customer');
    if($query->num_rows()<>0){
      $data=$query->row();
      $kode=intval($data->kode)+1;
    }else{
      $kode=1;
    }
    $tgl=date('dmY');
    $kodemax=str_pad($kode,3,"0", STR_PAD_LEFT);
    $kodejadi='CUS'.$tgl.$kodemax;

    return $kodejadi;  
}

	public function kode_otomatistype(){
    $this->db->select('right(id_type,3) as kode', false);
    $this->db->order_by('id_type','desc');
    $this->db->limit(1);
    $query=$this->db->get('type');
    if($query->num_rows()<>0){
      $data=$query->row();
      $kode=intval($data->kode)+1;
    }else{
      $kode=1;
    }

    $kodemax=str_pad($kode,3,"0", STR_PAD_LEFT);
    $kodejadi='TIP'.$kodemax;

    return $kodejadi;  
}
public function get_laporan($tgl1, $tgl2) {
    $this->db->from('transaksi');
    $this->db->join('motor', 'transaksi.id_motor = motor.id_motor', 'LEFT');
    $this->db->join('customer', 'transaksi.id_customer = customer.id_customer', 'LEFT');
     if (!empty($tgl1)) {
      $this->db->where( ['$tgl1'] AND ['$tgl2']);
    }
    return $this->db->get()->result();
  }

	}	
		
	


?>