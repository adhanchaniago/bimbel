<?php
defined('BASEPATH') or exit('No direct access allowed');
class M_metod extends CI_Model
{
    public function hitungwp()
    {
        $res = $this->db->query('SELECT * FROM bimbel');
        $t = $res->result_array();
        return $t;
        echo $t;
    }
}
