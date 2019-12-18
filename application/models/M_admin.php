<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Admin extends CI_Model
{
    public function dasboard()
    {
        $query = $this->db->get("coba");

        $data["tabel"] = $this->table->generate($query);
        return $data;
    }
}
