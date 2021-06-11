<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->Login_Model->isNotLogin()) redirect(site_url('Login'));		
	}

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

	public function dashboard(){
		// $data = var_dump($this->session->userdata);
		$this->load->view('admin/dashboard');
	}

	public function checkDB($pass){
		$uname = $this->input->post('uname');
		$result = $this->User_Model->login($uname, $pass);
		if ($result) {
			foreach ($result as $value) {
				$session = $value->uname;
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

	public function list_petugas() {
		$data['user'] = $this->Admin_Model->tampil_petugas();
		$this->load->view('admin/list_petugas', $data);
	}

	public function tambah_petugas() {
		$this->load->view('admin/tambah_petugas');
	}

	public function tambah_petugas_act() {
		$nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $no_hp = $this->input->post('no_hp');

		$data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'no_hp' => $no_hp,
        );

        $this->Admin_Model->tambah_petugas('user', $data);

		redirect(base_url().'Admin/list_petugas');
	}

	public function hapus_petugas($id) {
		$where = array('id' => $id);
		$this->Admin_Model->hapus_petugas($where, 'user');
		redirect('admin/list_petugas');
	}

}
