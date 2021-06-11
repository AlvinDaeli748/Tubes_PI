<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('petugas/dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function profile()
	{
		$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/profile', $data);
		$this->load->view('templates/footer');
	}

	public function role()
	{
		$data['title'] = 'role';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/role', $data);
		$this->load->view('templates/footer');
	}

	public function roleAccess($role_id)
	{
		$data['title'] = 'role';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('templates/footer');
	}

	public function list_petugas() {
		$data['user'] = $this->Admin_Model->tampil_petugas();
		$this->load->view('admin/list_petugas', $data);

	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else {
			$this->db->delete('user_access_menu', $data);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
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
