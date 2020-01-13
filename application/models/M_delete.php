<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_delete extends CI_Model
{
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
