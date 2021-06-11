<?php 

class User_Model extends CI_Model{	
	
	public function input_sumbangan($table,$data){
 		$this->db->insert($table,$data);
 	}
}
?>
