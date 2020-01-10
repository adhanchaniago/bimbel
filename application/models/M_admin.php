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
        $data["email"] = $this->input->post('email');
        $data["telpon"] = $this->input->post('telpon');

        $res = array(
            'id_bimbel' => $data["id"],
            'nama' => $data["nama"],
            'alamat' => $data["alamat"],
            'email' => $data["email"],
            'telpon' => $data["telpon"],
        );

        $res = $this->db->insert("bimbel", $res);
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

    // tambah sekolah
    public function insertschool()
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

    // Get data
    public function getdata($table)
    {
        $res = $this->db->get($table);
        $t = $res->result_array();
        return $t;
    }

    // edit data
    public function Getedit($id)
    {
        return $this->db->get_where('bimbel', array('id_bimbel' => $id));
    }
    public function editschol($id)
    {
        return $this->db->get_where('sekolah', array('id_sekolah' => $id));
    }

    public function update()
    {
        $data["id"] = $this->input->post('id');
        $data["nama"] = $this->input->post('nama');
        $data["alamat"] = $this->input->post('alamat');
        $data["email"] = $this->input->post('email');
        $data["telpon"] = $this->input->post('telpon');

        $res = array(
            'id_bimbel' => $data["id"],
            'nama' => $data["nama"],
            'alamat' => $data["alamat"],
            'email' => $data["email"],
            'telpon' => $data["telpon"],
        );
        $this->db->where(array('id_bimbel' => $data["id"]));
        $this->db->update('bimbel', $res);
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

    // delete
    public function delete($data)
    {
        $this->db->where(array('id_bimbel' => $data));
        $this->db->delete('bimbel');
    }


    public function deletfoto($data)
    {

        $this->db->where('id_bimbel', $data['id_bimbel']);
        $this->db->delete('foto', $data);
        unlink("aset/img/" . $data['foto']);
    }
}
