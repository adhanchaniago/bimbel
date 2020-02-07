<?php
defined('BASEPATH') or exit('No direcr script access allowed');
class M_Tampung extends CI_Model
{

    public function harga($min, $max)
    {
        // $min = $this->input->post('min');
        // $max = $this->input->post('max');

        $harga = $this->db->query('SELECT * FROM bimbel WHERE harga BETWEEN ' . $min . ' and ' . $max . '');
        $res = $harga->result_array();
        return $res;
    }
    public function fas($table)
    {
        $fas = $this->db->get($table);
        $res = $fas->result_array();
        return $res;
    }
    public function jar($table)
    {
        $fas = $this->db->get($table);
        $res = $fas->result_array();
        return $res;
    }
    public function getjar($id)
    {
        $res = $this->db->get_where('jarak', array('id_sekolah' => $id));
        $t = $res->result_array();
        return $t;
    }
    public function har($table)
    {
        $res = $this->db->get_where('jarak', array('id_bimbel' => $table));
        $t = $res->result_array();
        return $t;
    }

    // public function fasilitas()
    // {

    //     $harga = $this->harga();
    //     $con = sizeof($harga);
    //     echo $con . "<br>";
    //     print_r($harga);
    //     if ($con == 0) {
    //         echo "<script type='text/javascript'>
    //         alert('fasilitas tidak dapat ditampilkan, tambahkan jumlah maximun');
    //         history.back(self);
    //         </script>
    //         ";
    //         echo "wawa";
    //         // redirect('welcome/fasnol');
    //     } else {
    //         redirect('welcome/fasilitas');
    //     }
    // }
    public function fasact($id)
    {
        $res = $this->db->get_where('getfasilitas', array('id_bimbel' => $id));
        // $res = $this->db->query('SELECT id_fasilitas FROM getfasilitas WHERE id_bimbel =' . $id . '');
        $t = $res->result_array();
        return $t;
    }
}
