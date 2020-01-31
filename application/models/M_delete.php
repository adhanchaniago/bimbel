<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_delete extends CI_Model
{
    // delete bimbel
    public function delbim()
    {
        $data = $this->uri->segment(3);
        $this->db->where(array('idbim' => $data));
        $this->db->delete('bimbel');
    }

    // del sekolah
    public function delsekolah()
    {
        $data = $this->uri->segment(3);
        $this->db->where(array('idsek' => $data));
        $this->db->delete('sekolah');
    }

    // dell jarak
    public function deljar()
    {
        $data = $this->uri->segment(3);
        $this->db->where(array('idjar' => $data));
        $this->db->delete('jarak');
    }

    // dell fasilitas
    public function delfas()
    {
        $data = $this->uri->segment(3);

        $this->db->where(array('id_fasilitas' => $data));
        $this->db->delete('fasilitas');
        $this->db->where(array('id_fasilitas' => $data));
        $this->db->delete('getfasilitas');
    }
    public function delfasi()
    {
        $data = $this->uri->segment(3);


        $this->db->where(array('id_fasilitas' => $data));
        $this->db->delete('getfasilitas');
    }

    // delet fasilitas
    public function deldes()
    {
        $data = $this->uri->segment(3);


        $this->db->where(array('id_des' => $data));
        $this->db->delete('deskripsi');
    }

    // delet Kriteria
    public function delkri()
    {
        $data = $this->uri->segment(3);


        $this->db->where(array('id_kriteria' => $data));
        $this->db->delete('kriteria');
    }
}
