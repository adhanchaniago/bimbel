<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class M_metode extends CI_Model
{

    public function wp($data)
    {
        // Hapus data di database
        $this->db->query("TRUNCATE wp");

        // Normalisasi bobot
        $kriteria = $this->m_tampil->kriteria();

        $bobot = array();
        foreach ($kriteria->result_array() as $k) {
        array_push($bobot, $k["bobot"]);
        }

        $totalbbt = array_sum($bobot);
        $conk = count($bobot);

        for ($i=0; $i < $conk ; $i++) { 
            $n[$i] = $bobot[$i]/$totalbbt;

            // echo "hasil".$n[$i]."<br>";
        }   

        // bimbel
        $bimbel = $this->m_tampil->getdata("bimbel");
        $conbim = count($bimbel);

        $hitung_v = [];
        foreach ($bimbel as $b) {
           $bim = $this->db->query("SELECT bimbel.id_bimbel, bimbel.harga, COUNT(getfasilitas.id_bimbel) AS fasilitas, jarak.jarak , jarak.id_sekolah FROM bimbel JOIN jarak ON bimbel.id_bimbel = jarak.id_bimbel JOIN getfasilitas on jarak.id_bimbel = getfasilitas.id_bimbel WHERE bimbel.id_bimbel = '".$b["id_bimbel"]."' AND jarak.id_sekolah = '".$data."' ");
           $t = $bim->result_array();

           array_push($hitung_v, $t);
           // echo "</pre>";
           // var_dump($t);
           // echo "</pre>";
        }
       // print_r($hitung_v);
  

        // hitung v
        $total_v = array();
        for ($i=0; $i < $conbim; $i++) { 
        $v[$i] = pow($hitung_v[$i][0]["harga"], -$n[0])*pow($hitung_v[$i][0]["fasilitas"], $n[1])*pow($hitung_v[$i][0]["jarak"], -$n[2]);
        array_push($total_v, $v[$i]);
        // echo $v[$i]."<br>";
        }
        $hitung_vs = array_sum($total_v);

        // echo"ini total". $hitung_vs;

        // hitung vs
        for ($j=0; $j < $conbim; $j++) { 
            $vs[$j] = $v[$j]/$hitung_vs;
            // echo $vs."<br>";
        }

        // upload
        $poa=0;
        foreach ($bimbel as $ndeh ) {
            
        $this->db->query("INSERT INTO wp (id_bimbel ,hasil) values ('".$ndeh["id_bimbel"]."','$vs[$poa]')");
        $poa++;
        }
    }

    public function saw($data)
    {
        // hapus database
        $this->db->query("TRUNCATE saw");

        // bimbel
        $bimbel = $this->m_tampil->getdata("bimbel");
        $conbim = count($bimbel);

        $hitung_v = [];
        foreach ($bimbel as $b) {
           $bim = $this->db->query("SELECT bimbel.id_bimbel, bimbel.harga, COUNT(getfasilitas.id_bimbel) AS fasilitas, jarak.jarak , jarak.id_sekolah FROM bimbel JOIN jarak ON bimbel.id_bimbel = jarak.id_bimbel JOIN getfasilitas on jarak.id_bimbel = getfasilitas.id_bimbel WHERE bimbel.id_bimbel = '".$b["id_bimbel"]."' AND jarak.id_sekolah = '".$data."' ");
           $t = $bim->result_array();

           array_push($hitung_v, $t);
        }

        // bobot
        $kriteria = $this->m_tampil->kriteria();

        $bobot = array();
        foreach ($kriteria->result_array() as $k) {
        array_push($bobot, $k["bobot"]);
        }

        $conk = count($bobot);

        // perhitungan v
        $harga = array();
        foreach ($hitung_v as $h) {
        $har = $h[0]["harga"];
        array_push($harga,$har);
        }

        $fasilitas = array();
        foreach ($hitung_v as $f) {
        $fas = $f[0]["fasilitas"];

        array_push($fasilitas,$fas);
        }

        $jarak = array();
        foreach ($hitung_v as $j) {
        $jar = $j[0]["jarak"];

        array_push($jarak,$jar);
        }
        $v_harga = array();
        $v_fasilitas = array();
        $v_jarak = array();
        for ($i=0; $i < $conbim; $i++) { 
            $hit_har = (min($harga))/$hitung_v[$i][0]["harga"];
            $hit_fas = $hitung_v[$i][0]["fasilitas"] / (max($fasilitas));
            $hit_jar = (min($jarak))/$hitung_v[$i][0]["jarak"];
            array_push($v_harga,$hit_har);
            array_push($v_fasilitas,$hit_fas);
            array_push($v_jarak,$hit_jar);
        }

         // hitung vs
        $total_vs = array();
        for ($x=0; $x < $conbim; $x++) {
            $vs = ($v_harga[$x]*$bobot[0])+($v_fasilitas[$x]*$bobot[1])+($v_jarak[$x]*$bobot[2]);
            array_push($total_vs,$vs);
        }

        //upload database 
       $poa=0;
        foreach ($bimbel as $ndeh ) {
        $this->db->query("INSERT INTO saw (id_bimbel ,hasil) values ('".$ndeh["id_bimbel"]."','$total_vs[$poa]')");
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
