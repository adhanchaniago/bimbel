<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Tampil extends CI_Model
{
    // tampil
    public function getdata($table)
    {
        $res = $this->db->get($table);
        $t = $res->result_array();
        return $t;
    }

    // tampil bimbel
    public function getedit($id)
    {
        $res = $this->db->get_where('bimbel', array('id_bimbel' => $id));
        return $res;
    }

    // tampil sekolah
    public function getschool($id)
    {
        return $this->db->get_where('sekolah', array('id_sekolah' => $id));
    }

    public function getbimbel()
    {
        $res = $this->db->query('SELECT id_bimbel from bimbel');
        return $res->result_array();
    }

    // tampil sekolah
    public function getfas($id)
    {
        return $this->db->get_where('fasilitas', array('id_fasilitas' => $id));
    }

    // tampil Deskripsi
    public function getdes($id)
    {
        return $this->db->get_where('deskripsi', array('id_des' => $id));
    }

    // tampil Paket
    public function getpaket($id)
    {
        return $this->db->get_where('paket', array('id_paket' => $id));
    }
}