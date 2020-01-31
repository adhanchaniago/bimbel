<?php
(defined('BASEPATH')) or exit('no direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_tampil');
    }

    public function index()
    {
        $this->load->view('login/login');
    }

    public function masuk()
    {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $where = array(
            'user' => $user,
            'pass' => $pass
        );
        $cek = $this->m_tampil->cek_login("akun", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama' => $user,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("C_tampil"));
        } else {
            echo "login gagal";
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
