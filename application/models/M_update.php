<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Update extends CI_Model
{
    // edit bimbel
    public function edit()
    {
        $data["idbim"] = $this->input->post('idbim');
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

        $this->db->where(array('idbim' => $data["idbim"]));
        $this->db->update('bimbel', $res);
    }

    // update sekolah
    public function updatesekolah()
    {
        $data["idsek"] = $this->input->post('idsek');
        $data["idsekolah"] = $this->input->post('idsekolah');
        $data["sekolah"] = $this->input->post('sekolah');


        $res = array(
            'id_sekolah' => $data["idsekolah"],
            'sekolah' => $data["sekolah"],

        );
        $this->db->where(array('idsek' => $data["idsek"]));
        $this->db->update('sekolah', $res);
    }

    // update Jarak sekolah
    public function updatejaraksekolah()
    {
        $data["idjar"] = $this->input->post('idjar');
        $data["id_sekolah"] = $this->input->post('id_sekolah');
        $data["id_bimbel"] = $this->input->post('id_bimbel');
        $data["jarak"] = $this->input->post('jarak');

        $res = array(
            'id_sekolah' => $data["id_sekolah"],
            'id_bimbel' => $data["id_bimbel"],
            'jarak' => $data["jarak"]
        );
        $this->db->where(array('idjar' => $data["idjar"]));
        $this->db->update('jarak', $res);
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

    // Update Fasilitas
    public function updateget()
    {

        $data["id"] = $this->input->post('id');
        $data["idfas"] = $this->input->post('idfas');
        $con = count($data["idfas"]);
        echo $data["id"];
        echo $con;
        for ($i = 0; $i < $con; $i++) {
            $data["idfas"][$i] . "-";
        }
        $fas = implode("-", $data["idfas"]);

        $f = explode("-", $fas);


        for ($i = 0; $i < $con; $i++) {

            $res = array(
                'id_bimbel' => $data["id"],
                'id_fasilitas' => $f[$i]
            );
            print_r($res);
            $this->db->where(array('id_bimbel' => $data['id']));
            $this->db->update('getfasilitas', $res);
        }
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

    // edit kriteria
    public function updatekriteria()
    {
        $data["kriteria"] = $this->input->post('kriteria');
        $data["bobot"] = $this->input->post('bobot');
        $data["keterangan"] = $this->input->post('keterangan');
        $res = array(
            'kriteria' => $data["kriteria"],
            'bobot' => $data["bobot"],
            'keterangan' => $data["keterangan"]
        );
        $this->db->where(array('id_kriteria' => $data["id"]));
        $this->db->update('kriteria', $res);
    }
}
