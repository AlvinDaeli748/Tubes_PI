<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // jika form login disubmit
        // if($this->input->post()){
        //     if($this->Login_Model->doLogin()) redirect(site_url('Admin'));
        // }

        // tampilkan halaman login
        $this->load->view("Admin/login");
	}
	
	public function loginExc(){
		
		if($this->Login_Model->doLogin()) redirect(site_url('Admin'));
		else{
			redirect(site_url('Login'));
		}
        
	}

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('Login'));
    }
}
