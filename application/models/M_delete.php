<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_delete extends CI_Model
{
// Admin
	public function delwhere($tabel, $where)
	{
		$this->db->delete($tabel, ['id'=>$where]);
	}
// End Admin
}
