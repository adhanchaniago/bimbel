<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class M_metode extends CI_Model
{

    public function wp()
    {
        // Hapus data di database
        $this->db->query("TRUNCATE wp");

        // Normalisasi bobot
        $kriteria = $this->m_tampil->getdata('kriteria');

        $bobot = array();
        foreach ($kriteria as $k) {
        array_push($bobot, $k["bobot"]);
        }

        $totalbbt = array_sum($bobot);
        $conk = count($bobot);

        for ($i=0; $i < $conk ; $i++) { 
            $n[$i] = $bobot[$i]/$totalbbt;

            // echo "hasil".$n[$i]."<br>";
        }   

        // bimbel
        $data = $this->session->userdata('sekolah');
        $bimbel = $this->m_tampil->getdata('bimbel');
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

    public function saw()
    {
        // hapus database
        $this->db->query("TRUNCATE saw");

        // bimbel
        $data = $this->session->userdata('sekolah');
        $bimbel = $this->m_tampil->getdata("bimbel");
        $conbim = count($bimbel);

        $hitung_v = [];
        foreach ($bimbel as $b) {
           $bim = $this->db->query("SELECT bimbel.id_bimbel, bimbel.harga, COUNT(getfasilitas.id_bimbel) AS fasilitas, jarak.jarak , jarak.id_sekolah FROM bimbel JOIN jarak ON bimbel.id_bimbel = jarak.id_bimbel JOIN getfasilitas on jarak.id_bimbel = getfasilitas.id_bimbel WHERE bimbel.id_bimbel = '".$b["id_bimbel"]."' AND jarak.id_sekolah = '".$data."' ");
           $t = $bim->result_array();

           array_push($hitung_v, $t);
        }

        // bobot
        $kriteria = $this->m_tampil->getdata('kriteria');

        $bobot = array();
        foreach ($kriteria as $k) {
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
}
