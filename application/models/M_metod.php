<?php
defined('BASEPATH') or exit('No direct access allowed');
class M_metod extends CI_Model
{
    public function hitungwp()
    {
        //tahap awal
        $id = $this->getdata('id_bimbel');
        $idc = count($id);
        echo $idc;
        $kriteria = array('Biaya', 'fasilitas', 'jarak');
        $jum_kriteria = count($kriteria);
        // bobot kriteria
        $w = array('59', '53', '40');

        // normalisasi bobot
        $totalw = 59 + 53 + 40;
        $wp[0] = round(($w[0] / $totalw), 2);
        $wp[1] = round(($w[1] / $totalw), 2);
        $wp[2] = round(($w[2] / $totalw), 2);

        //tahap 2 input kriteria
        $data = $this->kriteria();

        // jarak
        $data = $this->jarak();
    }

    function kriteria()
    {
        $biaya = $this->getdata('biaya');

        $fasilitas = $this->getdata('fasilitas');
        $fas = implode(",", $this->input->post('fasilitas'));
        $fasx = explode(",", $fas);
        $jumlahbutuh = sizeof($fasx);
        print_r($fasx);
        echo "<br>";
        $p = 0;
        // $fas = explode(",", $fasilitas);
        // print_r($fasilitas);
        // print_r($fas);
        $con = count($fasilitas);
        for ($i = 0; $i <= $con; $i++) {
            $u[$i] = implode(",", $fasilitas[$i]);
            // var_dump($u[$i]);
            $h = explode(",", $u[$i]);
            echo "<br>";
            var_dump($h);
            echo "<br>";
            // if ($h === $fasx) {
            //     $hitung = $p + 1;
            //     echo "works";
            // } else {
            //     $hitung = $p + 0;
            //     echo "nope";
            // }

            $hitung =  array_diff($fasx, $h);

            $jumlah = sizeof($hitung);
            $terpenuhi = $jumlahbutuh - $jumlah;
            echo "jumlah terpenuhi = " . $terpenuhi;
        }
        // $u = $fasilitas[1];

        // $h = explode(" ", $fasilitas);
        // print_r($h);
    }

    // jarak 
    public function jarak()
    {
        $latitude1 = $this->input->post('latirude');
        $longitude1 = $this->input->post('longitude');

        $latitude2 = -7.784163;
        $longitude2 = 110.401174;
    }

    function biaya()
    {
        $biaya = $this->hitungwp();
        print_r($biaya);
    }




    public function getdata($table)
    {
        $res = $this->db->query('SELECT ' . $table . ' FROM bimbel');
        $t = $res->result_array();
        return $t;
    }
}
