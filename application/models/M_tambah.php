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
        $data["harga"] = $this->input->post('harga');
        $res = array(
            'id_bimbel' => $data["id"],
            'nama' => $data["nama"],
            'alamat' => $data["alamat"],
            'harga' => $data["harga"]
        );

        $res = $this->db->insert("bimbel", $res);
        return $res;
    }

    // Tambah jarak Sekolah
    public function jarakschool()
    {
        $data["id_sekolah"] = $this->input->post('id_sekolah');
        $data["id_bimbel"] = $this->input->post('id_bimbel');

        $data["jarak"] = $this->input->post('jarak');

        $res = array(
            'id_sekolah' => $data["id_sekolah"],
            'id_bimbel' => $data["id_bimbel"],

            'jarak' => $data["jarak"]
        );
        $res = $this->db->insert("jarak", $res);
        return $res;
    }

    // Tambah jarak Sekolah
    public function addschool()
    {
        $data["idsekolah"] = $this->input->post('idsekolah');
        $data["sekolah"] = $this->input->post('sekolah');


        $res = array(
            'id_sekolah' => $data["idsekolah"],
            'sekolah' => $data["sekolah"],

        );
        $res = $this->db->insert("sekolah", $res);
        return $res;
    }


    //tambah foto
    public function addfoto()
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
    public function addfasilitasbimbel()
    {
        $data["idbimbel"] = $this->input->post('idbimbel');
        $data["idfas"] = $this->input->post('idfas');
        $con = count($data["idfas"]);

        for ($i = 0; $i < $con; $i++) {
            $data["idfas"][$i] . "-";
        }
        $fas = implode("-", $data["idfas"]);

        $f = explode("-", $fas);


        for ($i = 0; $i < $con; $i++) {

            $res = array(
                'id_bimbel' => $data["idbimbel"],
                'id_fasilitas' => $f[$i]
            );


            $res = $this->db->insert("getfasilitas", $res);
        }

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

    // tambah Kriteria
    public function addkriteria()
    {
        $data["kriteria"] = $this->input->post('kriteria');
        $data["bobot"] = $this->input->post('bobot');
        $data["keterangan"] = $this->input->post('keterangan');
        $res = array(
            'kriteria' => $data["kriteria"],
            'bobot' => $data["bobot"],
            'keterangan' => $data["keterangan"]
        );
        $res = $this->db->insert("kriteria", $res);
        return $res;
    }

    // tambah deskripsi
    public function addesk()
    {
        $data["id"] = $this->input->post('id');
        $data["deskripsi"] = $this->input->post('deskripsi');
        $data["keterangan"] = $this->input->post('keterangan');
        $data["maps"] = $this->input->post('maps');
        $res = array(
            'id_des' => $data["id"],
            'judul' => $data["deskripsi"],
            'keterangan' => $data["keterangan"],
            'maps' => $data["maps"]
        );
        $res = $this->db->insert("deskripsi", $res);
        return $res;
    }
}
