<?php
defined('BASEPATH') or exit('No derict script access allowed');
class C_Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_metod');
    }

    public function index()
    {
        $data['dasboard'] = [
            'tampil' => $this->m_admin->getdata('bimbel')
        ];
        $this->page('admin/content', $data['dasboard']);
    }


    //tambah data
    public function tambah()
    {
        $data = [];
        $this->page('admin/v_tambah', $data);
    }

    public function tambahact()
    {
        $data['input'] = [
            'tambah' => $this->m_admin->insert()
        ];
        redirect('c_admin');
    }


    //Foto
    public function foto()
    {
        $data['foto'] = [
            'foto' => $this->m_admin->getdata('foto')
        ];
        $this->page('admin/v_foto', $data['foto']);
    }

    public function tambahfoto()
    {
        $data['tambah'] = [
            'bimbel' => $this->m_admin->getdata('bimbel')
        ];
        $this->page('admin/v_tambahfoto', $data['tambah']);
    }

    public function fotoact()
    {
        $data['tambah'] = [
            'foto' => $this->m_admin->insertimg('foto')
        ];
        redirect('c_admin/foto');
    }


    // Edit
    public function edit()
    {
        $data['tampil'] = [
            'bimbel' => $this->m_admin->getdata('bimbel')
        ];
        $this->page('admin/v_edit', $data['tampil']);
    }

    public function page($content, $data)
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dasboard');
        $this->load->view($content, $data);
        $this->load->view('admin/footer');
    }
}
