<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class C_wp extends CI_Controller
{
    public function __Construct()
    {
        parent::__construct();
        $this->load->model('m_wp');
        $this->load->model('m_tampil');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function wp()
    {
        $sekola = $this->input->post('sekolah');
        $data["data"] = [
            'wp' => $this->m_wp->wp($sekola)
        ];
        $this->load->view('user/wp', $data["data"]);
    }
}
