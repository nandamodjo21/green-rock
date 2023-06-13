<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class Authentication extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_api');
    }

    public function login_post()
    {
        $email = $this->post('email');
        $password = md5($this->post('password'));

        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $data = $this->M_api->getUser($email,$password)->row_array();
        if ($data) {
            return
                $this->response([
                    'status' => true,
                    'message' => 'Berhasil Login',
                    'data' => $data
                ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'No users were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function register_post()
    {
        $query = array(

            'nama' => $this->post('nama'),
            'email' => $this->post('email'),
            'image' => "default.jpg",
            'password' => md5($this->post('password')),
            'role_id' => "2",
            'is_active' => "1"
            

        );
        $this->db->set('id_user', 'UUID()', false);

        $data = $this->db->insert('t_user', $query);
        if ($data) {
            return
                $this->response([
                    'status' => true,
                    'message' => 'Berhasil registrasi',
                ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Can not insert user'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
