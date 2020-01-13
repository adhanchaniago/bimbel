<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Update extends CI_Model
{
    // edit bimbel
    public function edit()
    {
        $data["id"] = $this->input->post('id');
        $data["nama"] = $this->input->post('nama');
        $data["alamat"] = $this->input->post('alamat');

        $res = array(
            'id_bimbel' => $data["id"],
            'nama' => $data["nama"],
            'alamat' => $data["alamat"]
        );

        $this->db->where(array('id_bimbel' => $data["id"]));
        $this->db->update('bimbel', $res);
        echo "berhasil";
    }

    // update sekolah
    public function updatesekolah()
    {
        $data["idsekolah"] = $this->input->post('idsekolah');
        $data["id_bimbel"] = $this->input->post('id_bimbel');
        $data["sekolah"] = $this->input->post('sekolah');
        $data["jarak"] = $this->input->post('jarak');

        $res = array(
            'id_sekolah' => $data["idsekolah"],
            'id_bimbel' => $data["id_bimbel"],
            'sekolah' => $data["sekolah"],
            'jarak' => $data["jarak"]
        );
        $this->db->where(array('id_sekolah' => $data["idsekolah"]));
        $this->db->update('sekolah', $res);
    }

    // Update Fasilitas
    public function updatefas()
    {
        $data["idfasilitas"] = $this->input->post('idfasilitas');
        $data["fasilitas"] = $this->input->post('fasilitas');

        $res = array(
            'id_fasilitas' => $data["idfasilitas"],
            'fasilitas' => $data["fasilitas"],
        );

        $this->db->where(array('id_fasilitas' => $data['idfasilitas']));
        $this->db->update('fasilitas', $res);
    }

    // Update Desk
    public function updatedes()
    {
        $data["id"] = $this->input->post('id');
        $data["judul"] = $this->input->post('deskripsi');
        $data["keterangan"] = $this->input->post('keterangan');
        $data["maps"] = $this->input->post('maps');
        $res = array(
            'id_des' => $data["id"],
            'judul' => $data["judul"],
            'keterangan' => $data["keterangan"],
            'maps' => $data["maps"],
        );
        $this->db->where(array('id_des' => $data['id']));
        $this->db->update('deskripsi', $res);
    }

    // Update Paket
    public function updatepaket()
    {
        $data["id"] = $this->input->post('id');
        $data["deskripsi"] = $this->input->post('deskripsi');
        $data["harga"] = $this->input->post('harga');
        $res = array(
            'id_paket' => $data["id"],
            'deskripsi' => $data["deskripsi"],
            'harga' => $data["harga"]
        );
        $this->db->where(array('id_paket' => $data["id"]));
        $this->db->update('paket', $res);
    }
}
