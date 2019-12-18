<?php
defined('BASEPATH') or exit('No derict script access allowed');
class C_Admin extends CI_Controller
{
    // function __construct()
    // {
    //     parent::__construct();

    //     $this->load->model('M_admin');
    //     $this->load->model('url');
    // }


    public function index()
    {

        $data = array();
        $this->load->model("m_admin");
        $data = $this->m_admin->dasboard();
        $data["myview"] = "admin/content";
        $this->load->view("admin/v_admin", $data);
    }

    public function tambah()
    {
        $data = array();
        $data["controller"] = $this->router->class;;
        $this["method"] = $this->router->method;;
        $this->load->view('v_admin', $data);
    }
}
