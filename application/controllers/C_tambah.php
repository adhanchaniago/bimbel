<?php
defined('BASEPATH') or exit('No direct script  access allowed');
class C_Tambah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tambah');
        $this->load->model('m_tampil');
        $this->load->library('form_validation');
    }

// Admin
    // Bimbel
    public function addbimbel()
    {
        $config = array(
            array(
                'field' => 'id',
                'label' => 'id Bimbel',
                'rules' => 'required'
            ),
            array(
                'field' => 'nama',
                'label' => 'Bimbel',
                'rules' => 'required'
            ),
            array(
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ),
            array(
                'field' => 'harga',
                'label' => 'Harga',
                'rules' => 'required|numeric'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $this->page('admin/v_tambah');
        }else{
            $this->m_tambah->bimbel();
        }
    }

    // Deskripsi
    public function addesk()
    {
        $config = array(
            array(
                'field' => 'deskripsi',
                'label' => 'Judul',
                'rules' => 'required'
            ),
            array(
                'field' => 'keterangan',
                'label' => 'Keterangan',
                'rules' => 'required'
            ),
            array(
                'field' => 'keterangan',
                'label' => 'Keterangan',
                'rules' => 'required'
            ),
            array(
                'field' => 'situs',
                'label' => 'Situs',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'E-Mail',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'telpon',
                'label' => 'No Telpon',
                'rules' => 'required'
            ),
            array(
                'field' => 'maps',
                'label' => 'Maps',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run($config)==false) {
            $data = [
                'tampil' => $this->m_tampil->getdata('bimbel')
            ];
            $this->page('admin/adddesk',$data);
        }
        else{
            $this->m_tambah->deskripsi();
        }
    }

    // Sekolah
    public function addschool()
    {
        $config = array(
            array(
                'field' => 'idsekolah',
                'label' => 'Id Sekolah',
                'rules' => 'required'
            ),
            array(
                'field' => 'sekolah',
                'label' => 'Sekolah',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $this->page('admin/v_addschol');
        }else{
            $this->m_tambah->addschool();
        }
    }

    // Jarak Sekolah
    public function jarakschool()
    {
        $config = array(
            array(
                'field' => 'jarak',
                'label' => 'Jarak Sekolah',
                'rules' => 'required|numeric'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $data = [
                'tampil' =>$this->m_tampil->getdata('bimbel'),
                'sekolah' => $this->m_tampil->getdata('sekolah')
            ];
            $this->page('admin/v_addjarak',$data);
        }else{
            $this->m_tambah->jarakschool();
        }
    }

    // Fasilitas
    public function fasact()
    {
        $config = array(
            array(
                'field' => 'idfasilitas',
                'label' => 'Id Fasilitas',
                'rules' => 'required'
            ),
            array(
                'field' => 'fasilitas',
                'label' => 'Fasilitas',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $this->page('admin/v_addfasilitas');
        }else{
            $this->m_tambah->addfasilitas();
        }
    }

    // Get Falitas
    public function addfasbimbel()
    {
        $config = array(
            array(
                'field' => 'idfas',
                'label' => 'Fasilitas',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $data = [
                'bimbel' => $this->m_tampil->getdata('bimbel'),
                'tampil' => $this->m_tampil->getdata('fasilitas')
            ];
            $this->page('admin/addfasbimbel',$data);
        }else{
            $this->m_tambah->addfasilitasbimbel();
        }
    }

    // Kriteria
    public function addkriteria()
    {
        $config = array(
            array(
                'field' => 'kriteria',
                'label' => 'Kriteria',
                'rules' => 'required'
            ),
            array(
                'field' => 'bobot',
                'label' => 'Bobot',
                'rules' => 'required|numeric'
            ),
            array(
                'field' => 'keterangan',
                'label' => 'Keterangan',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $this->page('admin/v_tambahkriteria');
        }else{
            $this->m_tambah->addkriteria();
        }
    }
// End Admin
    public function page($content='true', $data='true')
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dasboard');
        $this->load->view($content, $data);
        $this->load->view('admin/footer');
    }
}
