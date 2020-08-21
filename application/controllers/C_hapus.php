<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_Hapus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_delete');
        $this->load->model('m_tampil');
    }

// Admin
    // Bimbel
    public function delbim($where)
    {
        $bimbel = $this->m_tampil->getwhere('bimbel',$where);
        foreach ($bimbel as $key) {
            $id = $key['id'];
            $idbim = $key['id_bimbel'];
        }

        $this->m_delete->delwhere('bimbel',$id);
        $this->m_delete->delwherebim('deskripsi',$idbim);
        $this->m_delete->delwherebim('getfasilitas', $idbim);
        $this->m_delete->delwherebim('jarak', $idbim);

        redirect(base_url('c_tampil/index'));    
    }

    // Deskripsi
    public function deldes($where)
    {
        $this->m_delete->delwhere('deskripsi',$where);
        redirect(base_url('c_tampil/deskripsi'));
    }

    // Sekolah
    public function delschol($where)
    {
        $bimbel = $this->m_tampil->getwhere('sekolah',$where);
        foreach ($bimbel as $key) {
            $id = $key['id'];
            $idsek = $key['id_sekolah'];
        }

        $this->m_delete->delwhere('sekolah',$id);
        $this->m_delete->delwherejar('jarak',$idsek);
       
        redirect(base_url('c_tampil/sekolah')); 
    }

    // Jarak Sekolah
    public function deljarak($where)
    {
        $this->m_delete->delwhere('jarak', $where);
        redirect(base_url('c_tampil/sekolah'));    
    }

    // Fasilitas
    public function delfas($where)
    {
        $this->m_delete->delfaswhere('fasilitas', $where);
        $this->m_delete->delfas('getfasilitas', $where);

        redirect(base_url('c_tampil/fasilitas')); 
    }

    // Get Falitas
    public function delfasi($id, $where)
    {
        $this->m_delete->delfasbim('getfasilitas', $id, $where);

        redirect(base_url('c_tampil/fasilitas'));
    }

    // Kriteria
    public function delkri($where)
    {
        $this->m_delete->delwhere('kriteria',$where);
        redirect(base_url('c_tampil/kriteria'));    
    }
// End Admin
}
