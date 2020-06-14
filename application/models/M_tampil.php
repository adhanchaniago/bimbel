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

    // tampil tabel nama bimbel 
    public function getbim($table)
    {
        $res = $this->db->query('SELECT ' . $table . ' FROM bimbel');
        $t = $res->result_array();
        return $t;
    }

    // tampil bimbel
    public function getedit($id)
    {
        $res = $this->db->get_where('bimbel', array('idbim' => $id));
        return $res;
    }
    public function gethar($id)
    {
        $res = $this->db->query("SELECT harga FROM bimbel WHERE id_bimbel = '$id'");
        return $res;
    }

    // tampil sekolah
    public function getschool($id)
    {
        return $this->db->get_where('sekolah', array('idsek' => $id));
    }

    public function getbimbel()
    {
        $res = $this->db->query('SELECT id_bimbel from bimbel');
        return $res->result_array();
    }

    // tampil jarak
    public function getjar($id)
    {
        return $this->db->get_where('jarak', array('idjar' => $id));
    }
    public function getsek($id)
    {
        return $this->db->get_where('jarak', array('id_sekolah' => $id));
    }

    // tampil fasilitas
    public function getfas($id)
    {
        return $this->db->get_where('fasilitas', array('id_fasilitas' => $id));
    }

    // tampil fasilitas bimbel
    public function getfasbimbel($id)
    {
        return $this->db->get_where('getfasilitas', array('id_bimbel' => $id));
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

    // tampil Paket
    public function getfoto($id)
    {
        return $this->db->get_where('foto', array('id_foto' => $id));
    }

    // tampil kriteria
    public function getkriteria($id)
    {
        return $this->db->get_where('kriteria', array('id_kriteria' => $id));
    }

    public function kriteria()
    {
        return $this->db->get('kriteria');
    }

    // Login
    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    // metode
    public function wp()
    {
        return $this->db->query("SELECT * FROM vektor ORDER BY hasil DESC");
    }

    public function saw()
    {
        return $this->db->query("SELECT * FROM saw ORDER BY hasil DESC");
    }
}
