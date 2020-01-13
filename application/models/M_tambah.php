<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Tambah extends CI_Model
{

    //tambah bimbel
    public function insert()
    {
        $data["id"] = $this->input->post('id');
        $data["nama"] = $this->input->post('nama');
        $data["alamat"] = $this->input->post('alamat');

        $res = array(
            'id_bimbel' => $data["id"],
            'nama' => $data["nama"],
            'alamat' => $data["alamat"],
        );

        $res = $this->db->insert("bimbel", $res);
        return $res;
    }

    // Tambah Sekolah
    public function addschool()
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
        $res = $this->db->insert("sekolah", $res);
        return $res;
    }


    //tambah foto
    public function insertimg()
    {
        $id = $this->input->post('id_bimbel');
        $foto = $_FILES['poto']['name'];
        $tmp = $_FILES['poto']['tmp_name'];
        $fotobaru = date('dmYHis') . $foto;

        $path = "aset/img/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = array(
                "id_foto" => $id,
                "foto" => $fotobaru
            );

            $res = $this->db->insert("foto", $res);
            return $res;
        }
    }


    // tambah fasilitas
    public function addfasilitas()
    {
        $data["idfasilitas"] = $this->input->post('idfasilitas');
        $data["fasilitas"] = $this->input->post('fasilitas');

        $res = array(
            'id_fasilitas' => $data["idfasilitas"],
            'fasilitas' => $data["fasilitas"]
        );
        $res = $this->db->insert("fasilitas", $res);
        return $res;
    }

    // tambah fasilitas
    public function addesk()
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
        $res = $this->db->insert("deskripsi", $res);
        return $res;
    }

    // tambah Paket
    public function addpaket()
    {
        $data["id"] = $this->input->post('id');
        $data["deskripsi"] = $this->input->post('deskripsi');
        $data["harga"] = $this->input->post('harga');
        $res = array(
            'id_paket' => $data["id"],
            'deskripsi' => $data["deskripsi"],
            'harga' => $data["harga"]
        );
        $res = $this->db->insert("paket", $res);
        return $res;
    }
}
