<?php
defined('BASEPATH') or exit('No direcr script access allowed');
class M_Tampung extends CI_Model
{
    public function getbim($table)
    {
        $res = $this->db->query('SELECT ' . $table . ' FROM bimbel');
        $t = $res->result_array();
        return $t;
    }
    public function getjar($id)
    {
        $res = $this->db->get_where('jarak', array('id_sekolah' => $id));
        $t = $res->result_array();
        return $t;
    }
    public function getjr($table)
    {
        $res = $this->db->query('SELECT id_fasilitas FROM getfasilitas WHERE id_sekolah = ' . $table . '');
        $t = $res->result_array();
        return $t;
    }
    public function getfas($table)
    {
        $res = $this->db->query('SELECT id_fasilitas FROM getfasilitas WHERE id_bimbel =  ". $table . "');
        $t = $res->result_array();
        return $t;
    }
    public function criteria()
    {
        $res = $this->db->query('SELECT bimbel.id_bimbel, bimbel.harga,jarak.jarak, getfasilitas.id_fasilitas , skala.skala
        FROM bimbel 
        LEFT JOIN jarak ON bimbel.id_bimbel=jarak.id_bimbel 
        LEFT JOIN getfasilitas on jarak.id_bimbel=getfasilitas.id_bimbel
        LEFT JOIN skala on getfasilitas.id_fasilitas=skala.id_fasilitas');
        $t = $res->result_array();
        return $t;
    }

    public function bobot()
    {
        $w = $this->db->get('kriteria');
        $r = $w->result_array();
        return $r;
    }



    public function hitung()
    {
        $data["max"] = $this->input->post('max');
        $data["min"] = $this->input->post('min');
        // $data["idfas"] = implode(",", $this->input->post('idfas'));
        $data["sekolah"] = $this->input->post('sekolah');

        $id = $this->getbim('id_bimbel');
        $jubim = count($id);
        $har = $this->getbim('harga');
        $fas = $this->getfas('id_bimbel');
        // $jufas = count($fas);
        $jar = $this->getjar('id_sekolah');

        $t = $this->db->criteria();

        // $query = mysqli_query("SELECT * FROM bimbel where harga between " . $data["max"] . " and " . $data["min"] . "");

        // $c = array();

        // $w = array();

        // $n = 0;
        // while ($criteria = $t->fetch_assoc()) {
        //     $W[$id_kriteria] = $criteria['weight'];
        //     $C[] = $criteria;
        //     ++$n;
        // }
        // $result->free();

        var_dump($t);
    }















































































    // $kriteria = array("harga", "fasilitas", "jarak");
    // $conk = count($kriteria);

    // $w = array(59, 53, 40);

    // normalisasi bobot
    // $totalw = 59 + 53 + 40;
    // for ($i = 0; $i < $conk; $i++) {
    //     $wp[$i] = round(($w[$i] / $totalw), 2);
    // }
    // $wp[0] = round(($w[0] / $totalw), 2);
    // $wp[1] = round(($w[1] / $totalw), 2);
    // $wp[2] = round(($w[2] / $totalw), 2);

    // foreach ($har as $key) {
    //     if (in_array($data["biaya"], $key['harga'], true)) {
    //         $l = pow($data["biaya"], -$wp[0]);
    //     } else {
    //         $l = array(pow($key['harga'], -$wp[0]));
    //     }


    //     var_dump($l);
    // }

    // for ($i = 0; $i < $jubim; $i++) {
    //     $h = array_search($data["biaya"], $har);

    //     var_dump($h[$i]);
    // }

    // foreach ($id as $key) {
    //     $where =  "id_bimbel=" . $key['id_bimbel'] . "";
    //     $select = $this->db->SELECT('id_fasilitas FROM getfasilitas where id_bimbel = ' $wher '');
    //     $t = $select->result_array();

    //     var_dump($t);
    // }
    // }














    public function tampung()
    {
        $_SESSION["biaya"] = $this->input->post('biaya');
        $_SESSION["idfas"] = $this->input->post('idfas');
        $_SESSION["sekolah"] = $this->input->post('sekolah');
        // $cont = count($data["idfas"]);
        // var_dump($cont);
        // print_r($data["idfas"]);
        // $res = array(
        //     'biaya' => $data["biaya"],
        //     'fasilitas' => $data["idfas"],
        //     'jarak' => $data["sekolah"]

        // );
        print_r($_SESSION);
        echo "<br>";
        echo $_SESSION["biaya"];
        echo "<br>";
        $w = implode("-", $_SESSION["idfas"]);
        print_r($w);

        echo "<br>";
        $n = explode("-", $w);
        print_r($n);
        echo "<br>";
        $c = count($n);
        printf($c);
        echo $_SESSION["sekolah"];
        echo "<hr>";
    }
}
