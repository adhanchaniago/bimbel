<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_tampil');
		$this->load->model('m_tampung');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
		$data = [];

		$this->page('user/harga', $data);
	}

	public function harga()
	{
		$harga = $this->m_tampung->harga();
		$con = sizeof($harga);
		echo $con . "<br>";
		print_r($harga);
		if ($con == 0) {
			echo "<script type='text/javascript'>
            alert('fasilitas tidak dapat ditampilkan, tambahkan jumlah maximun');
            history.back(self);
            </script>
            ";
			echo "wawa";
			// redirect('welcome/fasnol');
		} else {
			foreach ($harga as $h) {
				$fasx = $this->m_tampung->fasact($h["id_bimbel"]);
				echo "<br>";
				print_r($fasx);
			}
			$data = [
				'fas' => $this->m_tampung->fas('fasilitas')
			];
			$this->page('user/v_fas', $data);
		}
	}

	public function fasilitas()
	{
		$harga = $this->m_tampung->harga();

		foreach ($harga as $h) {
			$fasx = $this->m_tampung->fasact($h["id_bimbel"]);
			echo $fasx;
		}
		$data = [
			'fas' => $this->m_tampung->fas('fasilitas')
		];
		$this->page('user/v_fas', $data);
	}
	public function fasact()
	{
		$fasx = $this->input->post('fasilitas');
		$imfas = implode(",", $fasx);
		$this->m_tampung->fasact();
	}

	public function jarak()
	{
		$data = [
			'jar' => $this->m_tampung->jar('sekolah')
		];
		$this->page('user/jarak', $data);
	}

	public function hitung()
	{
		$harga = $this->m_tampil->getdata('bimbel');

		$jarak = $this->m_tampil->getdata('jarak');

		$kriteria = array("harga", "fasilitas", "jarak");
		$conk = count($kriteria);

		$w = array(59, 53, 40);

		// normalisasi bobot
		$totalw = 59 + 53 + 40;
		echo $totalw;
		for ($i = 0; $i < $conk; $i++) {
			$wp[$i] = round(($w[$i] / $totalw), 4);
			echo "<br>";
			echo $wp[$i];
		}

		foreach ($harga as $har) {
			$biaya = pow($har["harga"], -$wp[0]);
			echo "<br>biaya " . $biaya . "<br>";

			foreach ($harga as $b) {
				$fasilitas = $this->m_tampung->fasact($b["id_bimbel"]);
				// echo "<br>";

				$p = sizeof($fasilitas);
				echo $p;
				$hitfas = pow($p, $wp[1]);
				echo "<br>hitung fasilitas " . $hitfas;
				foreach ($jarak as $jar) {
					$getjar = pow($jar["jarak"], -$wp[2]);
					echo "<br>jarak " . $getjar . "<br>";
				}
			}
		}
	}


	public function page($content, $data)
	{
		$this->load->view('user/header');
		$this->load->view($content, $data);
		$this->load->view('user/footer');
	}
}
