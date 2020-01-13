<?php
defined('BASEPATH') or exit('No direct script  access allowed');
class C_Tambah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tambah');
    }

    // tambah bimbel
    public function addbimbel()
    {
        $this->m_tambah->insert();
        redirect('c_tampil');
    }

    // tambah sekolah
    public function insertschool()
    {
        $this->m_tambah->addschool();
        redirect('c_tampil/sekolah');
    }

    // tambah fasilitas
    public function fasact()
    {
        $this->m_tambah->addfasilitas();
        redirect('c_tampil/fasilitas');
    }

    // tambah Deskripsi
    public function addesk()
    {
        $this->m_tambah->addesk();
        redirect('c_tampil/deskripsi');
    }

    // tambah Deskripsi
    public function addpaket()
    {
        $this->m_tambah->addpaket();
        redirect('c_tampil/paket');
    }
}
