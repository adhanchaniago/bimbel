<?php
defined('BASEPATH') or exit('No direct access allowed');
class M_metod extends CI_Model
{
    public function hitungwp()
    {
        //tahap awal
        $id = $this->getdata('id_bimbel');
        $idc = count($id);
        $fasilitas = $this->getdata('fasilitas');
        $fas = implode(",", $this->input->post('fasilitas'));
        $fasx = explode(",", $fas);
        $jumlahbutuh = sizeof($fasx);
        $con = count($fasilitas);
        $p = 0;
        for ($i = 0; $i <= $con; $i++) {
            $u[$i] = implode(",", $fasilitas[$i]);
            $h = explode(",", $u[$i]);
            if ($h === $fasx) {
                $hitung = $p + 1;
            } else {
                $hitung = $p + 0;
            }
            $hitung = array_diff($fasx, $h);
            $jumlah = sizeof($hitung);

            $terpenuhi = $jumlahbutuh - $jumlah;
        }

        $jarak = $this->input->post('sma');
        $getjarak = $this->getdata($jarak);
        $harga = $this->input->post('biaya');
        $biaya = $this->getdata('biaya');
        if ($harga == $biaya) {
            $getbiaya = $biaya;
        } else {
            $getbiaya = $harga;
        }

        $kriteria = array('Biaya', 'fasilitas', 'jarak');
        $jum_kriteria = count($kriteria);
        // bobot kriteria
        $w = array('59', '53', '40');

        // normalisasi bobot
        $totalw = 59 + 53 + 40;
        $wp[0] = round(($w[0] / $totalw), 2);
        $wp[1] = round(($w[1] / $totalw), 2);
        $wp[2] = round(($w[2] / $totalw), 2);

        // //tahap 2 input kriteria

        for ($i = 0; $i <= $idc; $i++) {
            $s[$i] = 1;
            for ($j = 0; $j <= $jum_kriteria; $i++) {
                if ($j == 0 or $j == 2) {
                    $a = 0 - $wp[$j];
                } else {
                    $a = $wp[$j];
                }
                $s[$i] = $s[$i] * pow($terpenuhi . $getjarak . $getbiaya, $a);
            }
            $totals = $totals + $s[$i];
        }

        // tahap 3
        $rangkaian = 0;
        for ($i = 0; $i < $idc; $i++) {
            $v[$i] = $s[$i] / $totals;
            if ($v[$i] > $rangkaian) {
                $rangkaian = $v[$i];
                $pilihan = $id[$i];
                $hasil = $v[$i];
                $urutan = $i;
            }
        }
        echo "Hasil perangkingan yang di pilih adalah Vektor V ke-" . $urutan . " yaitu :<br><b>" . $pilihan . "</b> dengan nilai <b>" . $hasil . "</b>";
    }

    public function getdata($table)
    {
        $res = $this->db->query('SELECT ' . $table . ' FROM bimbel');
        $t = $res->result_array();
        return $t;
    }

    public function hitungsaw()
    {
        $id = $this->getdata('id_bimbel');
        $idc = count($id);
        $harga = $this->input->post('biaya');
        $biaya = $this->getdata('biaya');
        if ($harga == $biaya) {
            $getbiaya = $biaya;
        } else {
            $getbiaya = $harga;
        }
        $fasilitas = $this->getdata('fasilitas');
        $fas = implode(",", $this->input->post('fasilitas'));
        $fasx = explode(",", $fas);
        $butuh = sizeof($fasx);
        $con = count($fasilitas);
        $p = 0;
        for ($i = 1; $i <= $con; $i++) {
            $u[$i] = implode(" ", $fasilitas[$i]);
            $h = explode(" ", $u[$i]);
            if ($h === $fasx) {
                $hitung = $p + 1;
            } else {
                $hitung = $p + 0;
            }
            $hitung = array_diff($fasx, $h);
            $jumlah = sizeof($hitung);

            $terpenuhi = $butuh - $jumlah;
        }

        $jarak = $this->input->post('sma');
        $getjarak = $this->getdata($jarak);

        $kriteria = array('Biaya', 'fasilitas', 'jarak');
        $jum_kriteria = count($kriteria);
        // bobot kriteria
        $w = array('59', '53', '40');

        // normalisasi bobot
        $totalw = 59 + 53 + 40;
        $wp[0] = round(($w[0] / $totalw), 2);
        $wp[1] = round(($w[1] / $totalw), 2);
        $wp[2] = round(($w[2] / $totalw), 2);

        $max = max($terpenuhi);
        $mina = $this->db->query('SELECT min(biaya) from bimbel');
        $minb = $this->db->query('SELECT min(' . $jarak . ') from bimbel');
        for ($i = 0; $i <= $idc; $i++) {
            $rbiaya[$i] = $biaya[$i] / $mina;
            $rjarak[$i] = $getbiaya[$i] / $minb;
            $rmax[$i] = $terpenuhi / $max[$i];
            for ($j = 0; $j <= $jum_kriteria; $j++) {
                $a[$i] = $rbiaya[$i] * $wp[$j] + $rjarak[$i] * $wp[$j] + $rmax * $wp[$j];
            }
        }
        print_r($a);
    }
}
