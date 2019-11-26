<?php
(defined('BASEPATH')) or exit('no direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/head');
        $this->load->view('admin/dasboard');
        $this->load->view('admin/footer');
    }
}
