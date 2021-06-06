<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('uModel');
	}
		
	public function sumbangan(){
		$this->load->view('User/sumbangan');
	}

	public function tambah_sumbangan() {
		echo $this->session->flashdata('notif');
		var_dump($this->session->flashdata('data'));
		$this->load->view('user/sumbangan', $this->session->flashdata('data'));
	}

	function tambah_sumbangan_act() {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $sifat = $this->input->post('sifat');
        $kelulusan = $this->input->post('kelulusan');
        $sumbangan = $this->input->post('sumbangan');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'sifat' => $sifat,
            'kelulusan' => $kelulusan,
            'sumbangan' => $sumbangan
        );

        $this->uModel->input_sumbangan('sumbangan', $data);
    }

	// public function checkDB($pass){
	// 	$uname = $this->input->post('uname');
	// 	$result = $this->uModel->login($uname, $pass);
	// 	if ($result) {
	// 		$session = array();
	// 		foreach ($result as $value) {
	// 			$session = array(
	// 				'uname' 	=> $value->uname,
	// 				'nama' 	=> $value->nama
	// 			);
	// 			$this->session->set_userdata('logged_in', $session);
	// 		}
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }

	// public function loginExc(){
	// 	$this->form_validation->set_rules('uname', 'Uname', 'trim|required');
	// 	$this->form_validation->set_rules('pass', 'Pass', 'trim|required|callback_checkDB');
	// 	if ($this->form_validation->run() == FALSE) {
	// 		$this->load->view('Error');
	// 	} else {
	// 		redirect('Berhasil');
	// 	}
	// }

	// public function logout(){
	// 	$this->session->unset_userdata('logged_in');
	// 	// $this->session->sess_destroy();
	// 	$this->session->set_flashdata('logged_out', 'Anda Telah Logout');
	// 	redirect('login');
	// }


}
