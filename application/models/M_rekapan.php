<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_rekapan extends CI_Model
{
    public function get_data()
    {
        return $this->db->query("SELECT u.nama_lengkap,p.nama_barang,p.stok,p.lama_sewa,DATE_FORMAT(p.tgl_sewa, '%d-%m-%Y %H:%i:%s') AS tgl_sewa,p.tgl_kembali FROM `t_penyewaan` p, tbl_user u WHERE u.id_user=p.user_id;");
    }
}