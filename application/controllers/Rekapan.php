<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekapan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rekapan');
    }
    public function index()
    {
        $data['title'] = 'Rekapan';
        $data['user'] = $this->db->get_where('t_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['rekapan'] = $this->M_rekapan->get_data('t_penyewaan')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/rekapan', $data);
        $this->load->view('templates/footer');
    }
}
