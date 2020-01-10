<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_admin extends CI_Model
{
    // Tampilkan Data
    public function Getdata($table)
    {
        $res = $this->db->get($table);
        return $res->result_array();
    }

    // insert Data
    public function Insert()
    {
        $data['id'] = $this->input->post('id');
        $data['nama'] = $this->input->post('nama');
        $data['alamat'] = $this->input->post('alamat');
        $data['sma8'] = $this->input->post('sma8');
        $data['sma9'] = $this->input->post('sma9');
        $data['fasilitas'] = implode(',', $this->input->post('fasilitas'));
        $data['biaya'] = $this->input->post('biaya');
        $data['situs'] = $this->input->post('situs');
        $data['telpon'] = $this->input->post('telpon');
        $data['email'] = $this->input->post('email');
        $data['deskripsi'] = $this->input->post('deskripsi');
        $res = array(
            'id_bimbel' => $data['id'],
            'nama' => $data['nama'],
            'alamat' => $data['alamat'],
            'sma8' => $data['sma8'],
            'sma9' => $data['sma9'],
            'fasilitas' => $data['fasilitas'],
            'biaya' => $data['biaya'],
            'situs' => $data['situs'],
            'telpon' => $data['telpon'],
            'email' => $data['email'],
            'deskripsi' => $data['deskripsi']
        );
        $this->db->insert('bimbel', $res);
        return $res;
    }

    // edit data
    public function Getedit($id)
    {
        return $this->db->get_where('bimbel', array('id_bimbel' => $id));
    }
    function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // Delete
    function delete($where, $table)
    {
        $this->db->where('id_bimbel', $where['id_bimbel']);
        $this->db->delete($table);
    }
    public function deletfoto()
    {
    }
}
