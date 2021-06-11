<?php 

class Admin_Model extends CI_Model{	
	
	public function login($uname, $pass)
	{
		$this->db->from('user');
		$this->db->where('uname', $uname);
		$this->db->where('pass', md5($pass));

		$query = $this->db->get();

		if ($query->num_rows()==1) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function input_sumbangan($table,$data){
 		$this->db->insert($table,$data);
 	}

	public function tampil_petugas() {
		return $this->db->get('user')->result_array(); 
	}
	
	public function tambah_petugas($table, $data) {
		$this->db->insert($table, $data);
	}

	public function hapus_petugas($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
	}

}
