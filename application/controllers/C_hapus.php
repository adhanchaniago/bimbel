<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_Hapus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_delete');
    }

// Admin
    // Bimbel
    public function delbim($where)
    {
        $this->m_delete->delwhere('bimbel',$where);
        redirect(base_url('c_tampil/index'));    
    }
    // Deskripsi

    // Sekolah

    // Jarak Sekolah
    public function deljarak($where)
    {
        $this->m_delete->delwhere('jarak',$where);
        redirect(base_url('c_tampil/sekolah'));    
    }

    // Fasilitas

    // Get Falitas

    // Kriteria
    public function delkri($where)
    {
        $this->m_delete->delwhere('kriteria',$where);
        redirect(base_url('c_tampil/kriteria'));    
    }
// End Admin
}
