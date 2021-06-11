<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
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
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('petugas/profile', $data);
        $this->load->view('templates/admin_footer');
	}
	
	public function kirimEmail(){
		$config = [
			'mailtype'	=>'html',
			'charset'	=>'utf-8',
			'protocol'	=>'smtp',
			'smtp_host'	=>'smtp.gmail.com',
			'smtp_user'	=>'lycanthrope748@gmail.com',
			'smtp_pass'	=>'admin098765!',
			'smtp_crypto'=>'ssl',
			'smtp_port'	=>'465',
			'crlf'		=>"\r\n",
			'newline'	=>"\r\n"
		];
		
		$this->load->library('email', $config);
		
		$this->email->from('lycanthrope748@gmail.com');
		
		$user = $this->input->post('email');
		$this->email->to($user); 
		
		$rincian = ""; //berisi rincian email
		$rincianEmail = $rincian;

		$isipesan=$rincianEmail."\nTerima Kasih telah menyumbang ";
		
		$this->email->subject('Aktivasi Akun Anda');
		
		$this->email->message($isipesan);
		
		$this->email->send();
	}

	public function pdf() //fungsi generate pdf dari halaman php
    {
        $this->load->library('pdf');
        $html = $this->load->view('GeneratePdfView', [], true); //GeneratePdfView ada di folder views
        $this->pdf->createPDF($html, 'mypdf', true);
	}

	public function petugas(){
		$this->load->view('ini view petugas');
	}

}
