<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_Hapus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_delete');
    }

    public function delbim()
    {
        // $id = $this->uri->statment(2);
        $this->m_delete->delbim();
        redirect('c_tampil');
    }

    public function delschol()
    {
        // $id = $this->uri->statment(2);
        $this->m_delete->delsekolah();
        redirect('c_tampil/sekolah');
    }

    public function deljarak()
    {
        // $id = $this->uri->statment(2);
        $this->m_delete->deljar();
        redirect('c_tampil/sekolah');
    }

    public function delfas()
    {
        $this->m_delete->delfas();
        redirect('c_tampil/fasilitas');
    }
    public function delfasi()
    {
        $this->m_delete->delfasi();
        redirect('c_tampil/fasilitas');
    }

    public function deldes()
    {
        $this->m_delete->deldes();
        redirect('c_tampil/deskripsi');
    }

    public function delkri()
    {
        $this->m_delete->delkri();
        redirect('c_tampil/kriteria');
    }
}
