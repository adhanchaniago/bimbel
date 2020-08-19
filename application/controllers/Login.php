<?php
(defined('BASEPATH')) or exit('no direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_tampil');
    }

    public function index()
    {
        $this->load->view('login/login');
    }

    public function cek()
    {
        $config = array(
            array(
                'field' => 'user',
                'label' => 'username',
                'rules' => 'required'
            ),
            array(
                'field' => 'pass',
                'label' => 'password',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $this->index();
        }else{
            $this->masuk();
        }
    }

    public function masuk()
    {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $where = array(
            'user' => $user,
            'pass' => $pass
        );
        $cek = $this->m_tampil->getlogin("akun", $where);

        if ($cek -> num_rows() !=0) {

            $data_session = array(
                'nama' => $user,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("C_tampil"));
        } else {
            echo "<script type='text/javascript'>
            alert('Username atau password salah');
            window.location.href='" . base_url('login') . "';
            </script>
            ";
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
