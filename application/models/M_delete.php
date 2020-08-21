<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_delete extends CI_Model
{
// Admin
	public function delwhere($tabel, $where)
	{
		$this->db->delete($tabel, ['id'=>$where]);
	}

	public function delwherebim($tabel, $where)
	{
		$this->db->delete($tabel, ['id_bimbel'=> $where]);	
	}


	// fasilitas
	public function delfaswhere($tabel, $where)
	{
		$this->db->delete($tabel, ['id_fasilitas'=> $where]);
	}

	// fasilitas bimbel
	public function delfas($tabel, $where)
	{
		$this->db->delete($tabel, ['id_fasilitas'=> $where]);
	}

	public function delfasbim($tabel, $id, $where)
	{
		$this->db->delete($tabel, ['id_bimbel'=>$id, 'id_fasilitas'=> $where]);
	}

	// jarak
	public function delwherejar($tabel, $where)
	{
		$this->db->delete($tabel, ['id_sekolah'=> $where]);
	}
// End Admin
}
