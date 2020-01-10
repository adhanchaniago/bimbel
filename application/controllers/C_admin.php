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

    // Tambah bimbel
    public function index()
    {
        $data['dasboard'] = [
            'tampil' => $this->m_admin->getdata('bimbel')
        ];
        $this->page('admin/content', $data['dasboard']);
    }
    public function tambah()
    {
        $data['tambah'] = [];
        $this->page('admin/v_tambah', $data['tambah']);
    }
    public function tambahact()
    {
        $data['tambah'] = [
            'insert' => $this->m_admin->insert()
        ];
        redirect('c_admin');
    }

    // edit bimbel
    public function edit($id)
    {
        $id = $this->uri->segment(3);
        $data['edit'] = [
            'edit' => $this->m_admin->getedit($id)
        ];
        $this->page('admin/v_formedit', $data['edit']);
    }
    public function editact()
    {
        $this->m_admin->Update();
        redirect('c_admin');
    }

    // deletebimbel
    public function delbimbel()
    {
        $id = $this->uri->segment(3);
        $this->m_admin->delete($id);
        redirect('c_admin');
    }

    // foto
    public function foto()
    {
        $data["foto"] = [
            'foto' => $this->m_admin->getdata('foto')
        ];
        $this->page('admin/v_foto', $data["foto"]);
    }
    public function tambahfoto()
    {
        $data['foto'] = [
            'bimbel' => $this->m_admin->getdata('bimbel')
        ];
        $this->page('admin/v_tambahfoto', $data['foto']);
    }
    public function fotoact()
    {
        $this->m_admin->insertimg();
        redirect('c_admin/foto');
    }

    // Sekolah
    public function sekolah()
    {
        $data['sekolah'] = [
            'tampil' => $this->m_admin->getdata('sekolah')
        ];
        $this->page('admin/v_sekolah', $data['sekolah']);
    }
    public function addschool()
    {
        $data['sekolah'] = [
            'bimbel' => $this->m_admin->getdata('bimbel')
        ];
        $this->page('admin/v_addschol', $data['sekolah']);
    }
    public function insertschool()
    {
        $this->m_admin->insertschool();
        redirect('c_admin/sekolah');
    }
    public function editschol()
    {
        $id = $this->uri->segment(3);
        $data['sekolah'] = [
            'edit' => $this->m_admin->editschol($id),
            'bimbel' => $this->m_admin->getdata('bimbel'),
            'sekolah' => $this->m_admin->getdata('sekolah')
        ];
        $this->page('admin/v_editschol', $data['sekolah']);
    }
    public function editschoolact()
    {
        $this->m_admin->updatesekolah();
        redirect('c_admin/sekolah');
    }

    // Fasilitas
    public function fasilitas()
    {
        $data['fasilitas'] = [
            'fasilitas' => $this->m_admin->getdata('fasilitas'),
            'getfasilitas' => $this->m_admin->getdata('fasilitas')
        ];
        $this->page('admin/v_fasilitas', $data['fasilitas']);
    }


    public function page($content, $data)
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dasboard');
        $this->load->view($content, $data);
        $this->load->view('admin/footer');
    }
}
