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
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer');
    }

    public function list_sumbangan()
    {
        $data['sumbangan'] = $this->db->get('sumbangan')->result_array();
        $data['title'] = 'List Sumbangan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('petugas/list_sumbangan', $data);
        $this->load->view('templates/footer');
    }

    public function detail_sumbangan($id)
    {

        $data['title'] = 'Detail Sumbangan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['sumbangan'] = $this->User_model->getSumbanganById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('petugas/detail_sumbangan', $data);
        $this->load->view('templates/footer');
    }
    function accept_status($id)
    {
        if ($this->User_model->update_status($id, 'Disetujui')) {
            $this->_sendEmail($id, $this->input->get('mail'));
            $this->session->set_flashdata('notif', 'Berhasil menyetujui sumbangan.');

            redirect('petugas/list_sumbangan');
        } else {
            $this->session->set_flashdata('notif', 'Gagal menyetujui sumbangan.');

            redirect('admin/detail_sumbangan/' . $id);
        }
    }

    function reject_status($id)
    {
        if ($this->User_model->update_status($id, 'Ditolak')) {
            $this->_sendEmail($id, $this->input->get('mail'));
            $this->session->set_flashdata('notif', 'Berhasil menolak sumbangan.');

            redirect('petugas/list_sumbangann');
        } else {
            $this->session->set_flashdata('notif', 'Gagal menolak sumbangan.');

            redirect('admin/detail_sumbangan/' . $id);
        }
    }

    private function _sendEmail($id, $mail)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'timotheamarbun@gmail.com',
            'smtp_pass' => 'timotheasm14',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('', 'Sedekah');
        $this->email->to($mail);
        $this->email->subject('Testing');
        $this->email->message('
        <center>
        <h1>Sumbangan</h2>
        <h2>Sedekah</h2>
        <h4>Berikut adalah link untuk mendownload hasil pesetujuan sumbangan:</h4>
        
        ');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}
