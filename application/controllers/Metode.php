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
        foreach ($jar as $j) {
            echo "<br>";
            print_r($j);
            echo "<br>";
            $harga = $j["id_bimbel"];
            echo $harga;
            echo "<br>";
            $har = $this->m_tampung->har($harga);
            // echo "<br>";
            // print_r($har);
            // foreach ($har as $h) {
            //     $hr = $this->m_tampung->har($h);
            //     print_r($hr);
            // }
        }
    }
}
