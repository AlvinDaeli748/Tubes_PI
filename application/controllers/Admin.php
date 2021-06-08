<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function dashboard(){
		$this->load->view('admin/admin');
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
			redirect('Admin/dashboard');
		}
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		$this->session->set_flashdata('logged_out', 'Anda Telah Logout');
		redirect('Admin');
	}

	public function ket_sumbangan() {
		$this->load->view('admin/admin_sumbangan');
	}

	public function petugas() {
		$this->load->view('admin/petugas');
	}
}
