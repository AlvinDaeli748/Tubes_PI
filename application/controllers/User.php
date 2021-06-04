<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	// function __construct(){
	// 	parent::__construct();		
	// 	$this->load->model('uModel');
 
	// }
		
	public function index(){
		$this->load->view('User/login');
	}

	public function checkDB($pass){
		$uname = $this->input->post('uname');
		$result = $this->uModel->login($uname, $pass);
		if ($result) {
			$session = array();
			foreach ($result as $value) {
				$session = array(
					'uname' 	=> $value->uname,
					'nama' 	=> $value->nama
				);
				$this->session->set_userdata('logged_in', $session);
			}
			return true;
		} else {
			return false;
		}
	}

	public function loginExc(){
		$this->form_validation->set_rules('uname', 'Uname', 'trim|required');
		$this->form_validation->set_rules('pass', 'Pass', 'trim|required|callback_checkDB');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Error');
		} else {
			redirect('Berhasil');
		}
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		// $this->session->sess_destroy();
		$this->session->set_flashdata('logged_out', 'Anda Telah Logout');
		redirect('login');
	}


}
