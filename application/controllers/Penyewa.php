<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyewa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_penyewa');
    }
    public function index()
    {
        $data['title'] = 'Penyewa';
        $data['user'] = $this->db->get_where('t_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['penyewa'] = $this->M_penyewa->get_data('registrasi')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/penyewa', $data);
        $this->load->view('templates/footer');
    }
}
