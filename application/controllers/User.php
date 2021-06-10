<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'User Page';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/user_header', $data);
		$this->load->view('templates/user_sidebar', $data);
		$this->load->view('user/home', $data);
		$this->load->view('templates/user_footer');
	}

	public function profile()
	{
		$data['title'] = 'User Page';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/user_header', $data);
		$this->load->view('templates/user_sidebar', $data);
		$this->load->view('user/profile', $data);
		$this->load->view('templates/user_footer');
	}

	public function sumbangan(){
		$this->load->view('User/sumbangan');
	}

	public function contact(){
		$this->load->view('User/contact');
	}

	public function about(){
		$this->load->view('User/about');
	}

	public function tambah_sumbangan() {
		echo $this->session->flashdata('notif');
		var_dump($this->session->flashdata('data'));
		$this->load->view('user/sumbangan', $this->session->flashdata('data'));
	}

	public function tambah_sumbangan_act()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$sifat = $this->input->post('sifat');
		$kelulusan = $this->input->post('kelulusan');
		$sumbangan = $this->input->post('sumbangan');
		$keterangan_sumbangan = $this->input->post('keterangan_sumbangan');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'sifat' => $sifat,
			'kelulusan' => $kelulusan,
			'sumbangan' => $sumbangan,
			'keterangan_sumbangan' => $keterangan_sumbangan
		);

		$this->User_Model->input_sumbangan('sumbangan', $data);

		// redirect(base_url().'user/sumbangan');
	}

	public function home()
	{
		$this->load->view('user/home');
	}
}
