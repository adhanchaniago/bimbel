<?php
if (defined('BASEPATH')) exit or ('no direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/admin');
    }
}
