<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Admin Page';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates/admin_footer');
	}
	public function dashboard()
	{
		// $data = var_dump($this->session->userdata);
		$this->load->view('admin/dashboard');
	}

	public function checkDB($pass)
	{
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

	public function loginExc()
	{
		$this->form_validation->set_rules('uname', 'Uname', 'trim|required');
		$this->form_validation->set_rules('pass', 'Pass', 'trim|required|callback_checkDB');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Error');
		} else {
			redirect('Admin/dashboard');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		$this->session->set_flashdata('logged_out', 'Anda Telah Logout');
		redirect('Admin');
	}

	public function ket_sumbangan()
	{
		$this->load->view('admin/admin_sumbangan');
	}

	public function petugas()
	{
		$this->load->view('admin/petugas');
	}
}
