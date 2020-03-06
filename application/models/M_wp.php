<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class M_wp extends CI_Model
{

    public function wp($data)
    {
        // Tahap Awal
        $jar = $this->m_tampil->getsek($data);
        $r = $jar->result_array();

        // hitung jumlah bimbel
        $con = sizeof($r);
        echo "jumlah Bimbel " . $con . "<br>";

        // BOBOT
        $kriteria = array("harga", "fasilitas", "jarak");
        $conk = count($kriteria);
        $bobot = array(59, 53, 40);
        $w = array_sum($bobot);

        echo "total bobot " . $w . "<hr>";

        // normalisasi bobot
        for ($i = 0; $i < $conk; $i++) {
            $v[$i] = round(($bobot[$i] / $w), 4);
            echo "Normalisasi bobot " . $v[$i] . "<br>";
        }

        // ambil jarak
        echo "<hr>";
        $w_jarak = array();
        foreach ($r as $k) {
            echo $k["jarak"];
            $j = round((pow($k["jarak"], -$v[2])), 4);
            array_push($w_jarak, $j);

            echo " Jarak Bimbel " . $j . "<br>";
        }



        // ambil fasilitas
        echo "<hr>";
        $w_fasilitas = array();
        foreach ($r as $d) {
            $fas = $this->m_tampil->getfasbimbel($d["id_bimbel"]);
            $f = $fas->result_array();
            $s = sizeof($f);

            $w = round((pow($s, $v[1])), 4);

            array_push($w_fasilitas, $w);
            echo " Fasilitas Bimbel " . $w . "<br>";
        }

        // Ambil Harga Bimbel
        echo "<hr>";
        $w_harga = array();
        foreach ($r as $h) {
            $har = $this->m_tampil->gethar($h["id_bimbel"]);
            $r = $har->result_array();

            $s = round((pow($r[0]["harga"], -$v[0])), 4);
            array_push($w_harga, $s);

            echo " harga Bimbel " . $s . "<br>";
        }

        echo "<hr>";

        echo "ini yang pake perulangan.<br>";

        $total_hitung = array();
        for ($nn = 0; $nn < $con; $nn++) {
            $hitung = $w_jarak[$nn] * $w_fasilitas[$nn] * $w_harga[$nn];
            echo "Hitung total = $hitung<br>";
            $total =  array_sum($hitung);
            echo $total;
        }


        // $this->pakrian($data);

        // $this->pak($data);

        // $this->ulang($data);
    }

    public function pakrian($data)
    {
        // Tahap Awal
        $jar = $this->m_tampil->getsek($data);
        $r = $jar->result_array();

        // hitung jumlah bimbel
        $con = sizeof($r);
        echo "jumlah Bimbel " . $con . "<br>";

        // BOBOT
        $kriteria = array("harga", "fasilitas", "jarak");
        $conk = count($kriteria);
        $bobot = array(59, 53, 40);
        $w = array_sum($bobot);

        echo "total bobot " . $w . "<hr>";

        // normalisasi bobot
        for ($i = 0; $i < $conk; $i++) {
            $v[$i] = round(($bobot[$i] / $w), 4);
            echo "Normalisasi bobot " . $v[$i] . "<br>";
        }
        // ambil jarak
        echo "<hr>";
        foreach ($r as $k) {
            echo $k["jarak"];
            $s = round((pow($k["jarak"], -$v[2])), 4);

            echo " Jarak Bimbel " . $s . "<br>";
        }
        // ambil fasilitas
        echo "<hr>";
        foreach ($r as $d) {
            $fas = $this->m_tampil->getfasbimbel($d["id_bimbel"]);
            $f = $fas->result_array();
            $z = sizeof($f);

            $w = round((pow($z, $v[1])), 4);

            echo "fasilitas " . $w . "<br>";
        }
        // Ambil Harga Bimbel
        echo "<hr>";
        foreach ($r as $h) {
            $har = $this->m_tampil->gethar($h["id_bimbel"]);
            $r = $har->result_array();
            $c = round((pow($r[0]["harga"], -$v[0])), 4);

            echo " harga Bimbel " . $c . "<br>";
        }

        for ($i = 0; $i < $con; $i++) {
            echo "jarak ke $i : $s <br>";
            echo "fasilitas ke $i : $w <br>";
            echo "harga ke $i : $c <br>";

            $x[$i] = round((pow($s["jarak"], -$v[2])) * (pow($w, $v[1])) * (pow($c[0]["harga"], -$v[0])), 4);
            echo "<pre>";
            echo "<hr>";
            // echo "ini dari s " . $s . "<br>";
            // echo "ini dari w " . $w . "<br>";
            // echo "ini dari hr " . $c . "<br>";
            echo "ini dari x yang ke $i " . $x[$i] . "<br>";


            echo "<hr>";
            echo "</pre>";
        }
    }



    public function pak($data)
    {
        $jar = $this->m_tampil->getsek($data);
        $r = $jar->result_array();
        // hitung jumlah bimbel
        $con = sizeof($r);
        echo "jumlah Bimbel " . $con . "<br>";

        // BOBOT
        $kriteria = array("harga", "fasilitas", "jarak");
        $conk = count($kriteria);
        $bobot = array(59, 53, 40);
        $w = array_sum($bobot);

        echo "total bobot " . $w . "<hr>";

        // normalisasi bobot
        for ($i = 0; $i < $conk; $i++) {
            $v[$i] = round(($bobot[$i] / $w), 4);
            echo "Normalisasi bobot " . $v[$i] . "<br>";
        }

        for ($i = 0; $i <= $con; $i++) {
            $jar = $this->m_tampil->getsek($data);
            $r = $jar->result_array();


            $fas = $this->m_tampil->getfasbimbel($r[$i]["id_bimbel"]);
            $f = $fas->result_array();
            $z = sizeof($f);


            $har = $this->m_tampil->gethar($r[$i]["id_bimbel"]);
            $s = $har->result_array();

            $x[$i] = round((pow($r[$i]["jarak"], -$v[2])) * (pow($z, $v[1])) * (pow($s[0]["harga"], -$v[0])), 4);
            echo "<pre>";
            echo "<hr>";
            echo "ini dari s " . $r[$i]["jarak"] . "<br>";
            echo "ini dari w " . $z . "<br>";
            echo "ini dari hr " . $s[0]["harga"] . "<br>";
            echo "ini dari x yang ke $i " . $x[$i] . "<br>";
            echo "<hr>";
            echo "</pre>";
        }
    }



    public function ulang($data)
    {
        // Tahap Awal
        $jar = $this->m_tampil->getsek($data);
        $r = $jar->result_array();

        // hitung jumlah bimbel
        $con = sizeof($r);
        echo "jumlah Bimbel " . $con . "<br>";

        // BOBOT
        $kriteria = array("harga", "fasilitas", "jarak");
        $conk = count($kriteria);
        $bobot = array(59, 53, 40);
        $w = array_sum($bobot);

        echo "total bobot " . $w . "<hr>";

        // normalisasi bobot
        for ($i = 0; $i < $conk; $i++) {
            $v[$i] = round(($bobot[$i] / $w), 4);
            echo "Normalisasi bobot " . $v[$i] . "<br>";
        }

        for ($i = 0; $i < $con; $i++) {

            foreach ($r as $j) {
                $s = round((pow($j["jarak"], -$v[2])), 4);

                // echo " Jarak Bimbel " . $s . "<br>";

                foreach ($r as $f) {
                    $fas = $this->m_tampil->getfasbimbel($f["id_bimbel"]);
                    $f   = $fas->result_array();
                    $d   = sizeof($f);

                    $w   = round((pow($d, $v[1])), 4);

                    // echo "fasilitas " . $w . "<br>";

                    foreach ($r as $h) {
                        $har = $this->m_tampil->gethar($h["id_bimbel"]);
                        $b   = $har->result_array();
                        $hr   = round((pow($b[0]["harga"], -$v[0])), 4);

                        // print_r($b);
                        // echo "harga" . $hr . "<br>";

                        $x[$i] = round((pow($j["jarak"], -$v[2])) * (pow($d, $v[1])) * (pow($b[0]["harga"], -$v[0])), 4);
                        echo "<pre>";
                        echo "<hr>";
                        echo "ini dari s $i  " . $s . "<br>";
                        echo "ini dari w $i  " . $w . "<br>";
                        echo "ini dari hr $i  " . $hr . "<br>";
                        echo "ini dari x yang ke $i " . $x[$i] . "<br>";
                        echo "<hr>";
                        echo "</pre>";
                    }
                }
            }
        }
    }
}
