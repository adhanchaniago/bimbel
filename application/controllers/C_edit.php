<?php
defined('BASEPATH') or exit('No derect script access allowed');
class C_Edit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_update');
    }

    // edit bimbel
    public function editact()
    {
        $this->m_update->edit();
        redirect('c_tampil');
    }

    // edit sekolah
    public function editschoolact()
    {
        $this->m_update->updatesekolah();
        redirect('c_tampil/sekolah');
    }

    // edit sekolah
    public function editjarak()
    {
        $this->m_update->updatejaraksekolah();
        redirect('c_tampil/sekolah');
    }

    // edit fasilitas
    public function editfasilitas()
    {
        $this->m_update->updatefas();
        redirect('c_tampil/fasilitas');
    }

    // edit fasilitas bimbel
    public function editfasbimbel()
    {
        $this->m_update->updateget();
        redirect('c_tampil/fasilitas');
    }

    // edit Deskripsi
    public function editdes()
    {
        $this->m_update->updatedes();
        redirect('c_tampil/deskripsi');
    }

    // edit Deskripsi
    public function editpaket()
    {
        $this->m_update->updatepaket();
        redirect('c_tampil/paket');
    }

    // edit kriteria
    public function editkriteria()
    {
        $this->m_update->updatekriteria();
        redirect('c_tampil/kriteria');
    }
}
