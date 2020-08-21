<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Tampil extends CI_Model
{
// Admin
    public function getdata($tabel)
    {
        $res = $this->db->get($tabel);
        $t = $res->result_array();
        return $t;
    }

    public function getwhere($tabel, $where)
    {
        $res = $this->db->get_where($tabel, array('id' => $where));
        $t = $res->result_array();
        return $t;
    }

    // jarak
    public function jarak()
    {
        $res = $this->db->query('SELECT jarak.id, jarak.id_sekolah, sekolah.sekolah, jarak.id_bimbel, bimbel.nama, jarak FROM jarak INNER join sekolah on jarak.id_sekolah = sekolah.id_sekolah INNER JOIN bimbel on jarak.id_bimbel = bimbel.id_bimbel');
        $t = $res->result_array();
        return $t;
    }

    // getfasilitas
    public function getfasilitas()
    {
        $res = $this->db->query('SELECT getfasilitas.id_bimbel, bimbel.nama, getfasilitas.id_fasilitas, fasilitas.fasilitas FROM fasilitas INNER JOIN getfasilitas on fasilitas.id_fasilitas = getfasilitas.id_fasilitas INNER JOIN bimbel ON getfasilitas.id_bimbel = bimbel.id_bimbel');
        $t = $res->result_array();
        return $t;
    }

    public function getfas($tabel, $where)
    {
        $res = $this->db->get_where($tabel, array('id_fasilitas' => $where));
        $t = $res->result_array();
        return $t;
    }

    public function getfasbimbel($id)
    {
        $res = $this->db->query('SELECT getfasilitas.id_bimbel, bimbel.nama, id_fasilitas FROM getfasilitas INNER JOIN bimbel ON getfasilitas.id_bimbel = bimbel.id_bimbel WHERE getfasilitas.id_bimbel = "'.$id.'"');
        $t = $res->result_array();
        return $t;
    }


    // deskripsi
    public function getdes()
    {
        $res = $this->db->query('SELECT deskripsi.id, deskripsi.id_bimbel, bimbel.nama, judul, keterangan, site, no , email, maps, foto FROM deskripsi INNER JOIN bimbel ON deskripsi.id_bimbel = bimbel.id_bimbel');
        $t = $res->result_array();
        return $t;
    }

    public function getdeswhere($id)
    {
        $res = $this->db->query('SELECT deskripsi.id, deskripsi.id_bimbel, bimbel.nama, judul, keterangan, site, no , email, maps, foto FROM deskripsi INNER JOIN bimbel ON deskripsi.id_bimbel = bimbel.id_bimbel WHERE deskripsi.id = "'.$id.'" ');
        $t = $res ->result_array();
        return $t;
    }
    
// End Admin

// user
    public function wp()
    {
        return $this->db->query("SELECT wp.id_bimbel, wp.hasil, bimbel.nama, bimbel.alamat, bimbel.harga, deskripsi.judul, deskripsi.keterangan,deskripsi.maps, deskripsi.foto FROM wp JOIN bimbel on wp.id_bimbel = bimbel.id_bimbel JOIN deskripsi on bimbel.id_bimbel = deskripsi.id_bimbel ORDER BY hasil DESC");
    }

    public function saw()
    {
        return $this->db->query("SELECT saw.id_bimbel, saw.hasil, bimbel.nama, bimbel.alamat, bimbel.harga, deskripsi.judul, deskripsi.keterangan,deskripsi.maps, deskripsi.foto FROM saw JOIN bimbel on saw.id_bimbel = bimbel.id_bimbel JOIN deskripsi on bimbel.id_bimbel = deskripsi.id_bimbel  ORDER BY hasil DESC");
    }

    public function detail($id)
    {
        return $this->db->query("SELECT bimbel.nama, bimbel.alamat, bimbel.harga, deskripsi.judul, deskripsi.keterangan, deskripsi.site,deskripsi.no,deskripsi.email, deskripsi.maps, deskripsi.foto FROM bimbel JOIN deskripsi on bimbel.id_bimbel = deskripsi.id_bimbel WHERE bimbel.id_bimbel ='$id'  ");
    }
// end user
// login
    public function getlogin($tabel, $where)
    {
        return $this->db->get_where($tabel, $where);
    }
}