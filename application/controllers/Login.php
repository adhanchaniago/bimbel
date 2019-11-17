<?php
if (defined('BASEPATH')) exit or ('no direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login/login');
    }
}
