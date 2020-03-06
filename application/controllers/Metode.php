<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Metode extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tampil');
        $this->load->model('m_tampung');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function metode()
    {
        $jarak = $this->input->post('sekolah');


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
        $jar = $this->m_tampung->getjar($jarak);
        for ($i = 0; $i < 6; $i++) {
            $row = mysqli_fetch_row($jar);
            echo $row[2];
        }
    }
}
