<?php
(defined('BASEPATH')) or exit('no direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login/login');
    }
}
