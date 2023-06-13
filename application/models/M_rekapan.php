<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_rekapan extends CI_Model
{
    public function get_data($tabel)
    {
        return $this->db->get($tabel);
    }
}
