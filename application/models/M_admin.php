<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Admin extends CI_Model
{
    //tambah data
    public function insert()
    {
        $data["id"] = $this->input->post('id');
        $data["nama"] = $this->input->post('nama');
        $data["alamat"] = $this->input->post('alamat');
        $data["along"] = $this->input->post('along');
        $data["fasilitas"] = implode(",", $this->input->post('fasilitas'));
        $data["biaya"] = $this->input->post('biaya');
        $data["situs"] = $this->input->post('situs');
        $data["telpon"] = $this->input->post('telpon');
        $data["email"] = $this->input->post('email');
        $data["deskripsi"] = $this->input->post('deskripsi');

        $res = array(
            'id_bimbel' => $data["id"],
            'nama' => $data["nama"],
            'alamat' => $data["alamat"],
            'alamatlong' => $data["along"],
            'fasilitas' => $data["fasilitas"],
            'biaya' => $data["biaya"],
            'situs' => $data["situs"],
            'telpon' => $data["telpon"],
            'email' => $data["email"],
            'deskripsi' => $data["deskripsi"]
        );

        $res = $this->db->insert("bimbel", $res);
        return $res;
    }

    //tambah foto
    public function insertimg($table)
    {
        $id = $this->input->post('id_bimbel');
        $foto = $_FILES['poto']['name'];
        $tmp = $_FILES['poto']['tmp_name'];
        $fotobaru = date('dmYHis') . $foto;

        $path = "aset/img/" . $fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $res = array(
                "id_bimbel" => $id,
                "foto" => $fotobaru
            );

            $res = $this->db->insert("foto", $res);
            return $res;
        }
    }

    public function getdata($table)
    {
        $res = $this->db->get($table);
        $t = $res->result_array();
        return $t;
    }
}
