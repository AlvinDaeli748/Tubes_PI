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
}
