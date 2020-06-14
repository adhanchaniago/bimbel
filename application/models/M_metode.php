<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class M_metode extends CI_Model
{

    public function wp($data)
    {
        // hapus database
        $this->db->query("TRUNCATE vektor");
        // Tahap Awal
        $jar = $this->m_tampil->getsek($data);
        $r   = $jar->result_array();

        // hitung jumlah bimbel
        $con = sizeof($r);
        // echo "jumlah Bimbel " . $con . "<br>";

        // BOBOT
        $bobot    = array();
        $kriteria = $this->m_tampil->kriteria();
        $ker      = $kriteria->result_array();
        $conk     = count($ker);
        foreach ($ker as $key) {
            $w = $key["bobot"];
            array_push($bobot, $w);
        }
        $t = array_sum($bobot);
        // echo "total bobot " . $t . "<hr>";

        // normalisasi bobot
        for ($i = 0; $i < $conk; $i++) {
            $v[$i] = ($bobot[$i] / $t);
            // echo "Normalisasi bobot " . $v[$i] . "<br>";
        }

        // ambil jarak
        // echo "<hr>";
        $v_jarak = array();
        foreach ($r as $k) {

            $j = pow($k["jarak"], -$v[2]);

            array_push($v_jarak, $j);
            // echo $k["id_bimbel"];
            // echo " Jarak Bimbel " . $j . "<br>";
        }

        // ambil fasilitas
        // echo "<hr>";
        $v_fasilitas = array();
        foreach ($r as $d) {
            $fas = $this->m_tampil->getfasbimbel($d["id_bimbel"]);
            $f   = $fas->result_array();
            $s   = sizeof($f);

            $wf = pow($s, $v[1]);

            array_push($v_fasilitas, $wf);
            // echo $d["id_bimbel"];
            // echo " fasilitas " . $wf . "<br>";
        }

        // Ambil Harga Bimbel
        // echo "<hr>";
        $v_harga = array();
        foreach ($r as $h) {
            $har = $this->m_tampil->gethar($h["id_bimbel"]);
            $bu   = $har->result_array();
            
            $s = pow($bu[0]["harga"], -$v[0]);

            array_push($v_harga, $s);
            // echo $h["id_bimbel"];
            // echo " harga Bimbel " . $s . "<br>";
        }

        // echo "<hr>";

        // echo "ini yang pake perulangan <br>";

        $totals = array();
        for ($l = 0; $l < $con; $l++) {
            $vs = $v_jarak[$l] * $v_fasilitas[$l] * $v_harga[$l];

            array_push($totals, $vs);
            // echo $r["id_bimbel"];
            // echo "Hasil perhitungan vs " . $vs . "<br>";
        }
        $totalvs = array_sum($totals);

        // echo "<br>total vs $totalvs<br>";

        $nilai = array();
        for ($p = 0; $p < $con; $p++) {
            $vv = $totals[$p] / $totalvs;
            array_push($nilai, $vv);
            // echo "<br>hasil perhitungan vv $vv <br> ";
        }

        //upload database 
        $poa=0;
        foreach ($r as $ndeh ) {
            
        $this->db->query("INSERT INTO vektor (id_bimbel ,hasil) values ('".$ndeh["id_bimbel"]."','$nilai[$poa]')");
        $poa++;
        }


        // arsort($nilai);
        // $rank        = 0;
        // foreach ($nilai as $key => $nilai) {
        //     echo ++$rank . " v {$key} = {$nilai} <br>";
        // }
     

    }

    public function saw($data)
    {
        // echo "<hr> Ini Mulai perhitungan SAW";
        // Hapus Database
        $this->db->query("TRUNCATE saw");
        // Tahap Awal
        $jar = $this->m_tampil->getsek($data);
        $r   = $jar->result_array();

        // hitung jumlah bimbel
        $con = sizeof($r);

        // BOBOT
        $kriteria = array("harga", "fasilitas", "jarak");
        $conk     = count($kriteria);
        $bobot    = array(59, 53, 40);

        $v_jarak = array();
        foreach ($r as $k) {
            array_push($v_jarak, $k["jarak"]);
        }
        // echo "jarak max " . (max($v_jarak));

        // ambil fasilitas
        // echo "<hr>";
        $v_fasilitas = array();
        foreach ($r as $d) {
            $fas = $this->m_tampil->getfasbimbel($d["id_bimbel"]);
            $f   = $fas->result_array();
            $s   = sizeof($f);
            array_push($v_fasilitas, $s);
        }
        // echo "fasilitas max " . (max($v_fasilitas)) . "<br>";

        // Ambil Harga Bimbel
        // echo "<hr>";
        $v_harga = array();
        foreach ($r as $h) {
            $har = $this->m_tampil->gethar($h["id_bimbel"]);
            $jol   = $har->result_array();
            array_push($v_harga, $jol[0]["harga"]);
        }
        // echo " harga max " . (max($v_harga)) . "<br>";

        // perhitungan matriks

        // perhitungan Jarak
        // echo "<hr>";
        $nilai_j = array();
        for ($j = 0; $j < $con; $j++) {
            $hitung_j = (min($v_jarak)) / $v_jarak[$j];
            array_push($nilai_j, $hitung_j);
            // echo "Jarak R$j = " . $hitung_j . "<br>";
        }

        // Perhitungan Fasilitas
        // echo "<hr>";
        $nilai_f = array();
        for ($i = 0; $i < $con; $i++) {
            $hitung_f = $v_fasilitas[$i] / (max($v_fasilitas));
            array_push($nilai_f, $hitung_f);
            // echo "fasilitas R$i = " . $hitung_f . "<br>";
        }

        // perhitungan harga
        // echo "<hr>";
        $nilai_h = array();
        for ($g = 0; $g < $con; $g++) {
            $hitung_h = (min($v_harga)) / $v_harga[$g];
            array_push($nilai_h, $hitung_h);
            // echo "Harga R $g = " . $hitung_h . "<br>";
        }

        // Perhitungan nilai preferensi
        // echo "<hr>";
        $rank = array();
        for ($a = 0; $a < $con; $a++) {
            $total_nilai = $nilai_h[$a] * $bobot[0] + $nilai_f[$a] * $bobot[1] + $nilai_j[$a] * $bobot[2];
            array_push($rank, $total_nilai);
            // echo "Ini Total Nilai A$a = $total_nilai <br>";
        }

        // Perangkingan
        // echo "<hr>";
        // arsort($rank);
        // $no = 0;
        // foreach ($rank as $key => $rank) {
        //     echo ++$no . " A {$key} = {$rank} <br>";
        // }

        //upload database 
        $poa=0;
        foreach ($r as $ndeh ) {
        $this->db->query("INSERT INTO saw (id_bimbel ,hasil) values ('".$ndeh["id_bimbel"]."','$rank[$poa]')");
        $poa++;
        }
    }

//     public function ulang($data)
    //     {
    //     // Tahap Awal
    //         $jar = $this->m_tampil->getsek($data);
    //         $r = $jar->result_array();

//     // hitung jumlah bimbel
    //         $con = sizeof($r);
    //         echo "jumlah Bimbel ". $con."<br>";

//     // BOBOT
    //         $kriteria = array("harga", "fasilitas", "jarak");
    //         $conk = count($kriteria);
    //         $bobot = array(59, 53, 40);
    //         $w = array_sum($bobot);

//         echo "total bobot " .$w."<hr>";

//     // normalisasi bobot
    //         for ($i=0; $i < $conk; $i++) {
    //             $v[$i] = round(($bobot[$i]/$w),4);
    //             echo "Normalisasi bobot " .$v[$i]."<br>";
    //         }

//         for($i=0;$i<$con; $i++){

//             foreach($r as $j){
    //             $s=round((pow($j["jarak"],-$v[2])),4);

//             echo " Jarak Bimbel " .$s."<br>";

//             foreach ($r as $f) {
    //             $fas = $this->m_tampil->getfasbimbel($f["id_bimbel"]);
    //             $f   = $fas->result_array();
    //             $d   = sizeof($f);

//             $w   = round((pow($d, $v[1])),4);

//             echo "fasilitas ".$w."<br>";

//             foreach ($r as $h) {
    //             $har = $this->m_tampil->gethar($h["id_bimbel"]);
    //             $b   = $har->result_array();
    //             $hr   =round((pow($b[0]["harga"],-$v[0])),4);

//             // print_r($b);
    //             echo "harga ".$hr."<br>";

//             $x[$i] =round((pow($j["jarak"],-$v[2]))*(pow($d, $v[1]))*(pow($b[0]["harga"], -$v[0])),4);
    // echo "<pre>";
    // echo "<hr>";
    //             echo "ini dari s ". $s."<br>";
    //             echo "ini dari w ".$w."<br>";
    //             echo "ini dari hr ".$hr."<br>";
    //             echo "ini dari x yang ke $i ".$x[$i]."<br>";
    // echo "<hr>";
    // echo "</pre>";
    //             }
    //             }
    //             }
    //         }
    //     }
}
