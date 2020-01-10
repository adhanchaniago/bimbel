<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_metod');
		$this->load->model('m_admin');
	}

	public function index()
	{

		$min = [
			'tampil' => $this->db->query('SELECT biaya from bimbel')
		];
		$this->load->view('v_start', $min);
	}

	public function hitung()
	{
		$this->m_metod->hitungwp();
		// $data['tampil'] = [
		// 	'tampil' => $this->m_metod->hitungwp('bimbel')
		// ];
		// $this->m_metod->hitungsaw();
		$this->load->view('maps');
	}











	// Perhitungan Wp
	// public function hitungwp()
	// {
	// 	$query = $this->db->query('SELECT id_bimbel FROM bimbel');
	// 	$row = $query->row_array();
	// 	$alter = count($row);
	// 	var_dump($alter);
	// 	echo $row['id_bimbel'];
	// 	$kriteria = array("Biaya", "fasilitas", "Jarak");
	// 	$jum_kriteria = count($kriteria);

	// 	$w = array(59, 53, 40);
	// 	$totalw = 59 + 53 + 40;

	// 	$wp[0] = round(($w[0] / $totalw), 2);
	// 	$wp[1] = round(($w[1] / $totalw), 2);
	// 	$wp[2] = round(($w[2] / $totalw), 2);

	// 	echo print_r($wp);

	// 	$biaya = $this->input->post('biaya');
	// 	$fasilitas = $this->input->post('fasilitas');
	// 	// $data = $fasilitas)->row_array();
	// 	$hitung = count($data);

	// 	$jarak = $this->input->post('jarak');

	// 	$a[0][0] = $biaya;
	// 	$a[0][1] = $fasilitas;
	// 	$a[0][2] = $jarak;
	// 	$a[1][0] = $biaya;
	// 	$a[1][1] = $fasilitas;
	// 	$a[1][2] = $jarak;
	// 	$a[2][0] = $biaya;
	// 	$a[2][1] = $fasilitas;
	// 	$a[2][2] = $jarak;

	// 	for ($i = 0; $i < $alter; $i++) {
	// 		$S[$i] = 1;
	// 		for ($j = 0; $j < $alter; $j++) {
	// 			if ($j == 0 or $j == 2) {
	// 				$p = 0 - $wp[$j];
	// 			} else {
	// 				$p = $wp[$j];
	// 			}
	// 			$S[$i] = $S[$i] * pow($a[$i][$j], $p);
	// 		}
	// 		$totalS = $totalS + $S[$i];
	// 		echo $totalS;
	// 	}
	// 	$rangkingawal = 0;
	// 	for ($i = 0; $i < $alter; $i++) {
	// 		$V[$i] = $S[$i] / $totalS;
	// 		if ($V[$i] > $rangkingawal) {
	// 			$rangkingawal = $V[$i];
	// 			$pilihan = $row['id_bimbel'];
	// 			$hasil = $V[$i];
	// 			$urutan = $i;
	// 		}
	// 	}
	// 	// Hasil Akhir
	// 	echo "Hasil perangkingan yang di pilih adalah Vektor V ke-" . $urutan . " yaitu :<br><b>" . $pilihan . "</b> dengan nilai <b>" . $hasil . "</b>";
	// }


	// // Hitung SAW
	// public function hitungsaw()
	// {
	// 	//Buat array bobot { C1 = 35%; C2 = 25%; C3 = 25%; dan C4 = 15%.}
	// 	$bobot = array(0.39, 0.36, 0.26);
	// 	$query = $this->db->query('SELECT id_bimbel FROM bimbel');
	// 	$row = $query->row_array();
	// 	// $alter = count($row);
	// 	var_dump($row);
	// }
}
