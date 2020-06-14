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

    // tambah jarak sekolah
    public function jarakschool()
    {
        $this->m_tambah->jarakschool();
        redirect('c_tampil/sekolah');
    }

    // tambah sekolah
    public function addschool()
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

    // tambah fasilitas bimbel
    public function addfasbimbel()
    {
        $this->m_tambah->addfasilitasbimbel();
        redirect('c_tampil/fasilitas');
    }

    // tambah Deskripsi
    public function addesk()
    {
        $this->m_tambah->addesk();
        redirect('c_tampil/deskripsi');
    }

    // tambah Paket
    public function addpaket()
    {
        $this->m_tambah->addpaket();
        redirect('c_tampil/paket');
    }

    // tambah foto
    public function addfoto()
    {
        $this->m_tambah->addfoto();
        redirect('c_tampil/foto');
    }

    // tambah kriteria
    public function addkriteria()
    {
        $this->m_tambah->addkriteria();
        redirect('c_tampil/kriteria');
    }
}
