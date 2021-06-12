<?php

class User_Model extends CI_Model
{

	public function input_sumbangan($table, $data)
	{
		$this->db->insert($table, $data);
	}


	public function getSumbanganById($id)
	{
		return $this->db->get_where('sumbangan', ['id' => $id])->row_array();
	}
	public function update_status($id, $status)
	{
		$this->db->set('status', $status);
		$this->db->where('id', $id);
		return true;
	}
}
