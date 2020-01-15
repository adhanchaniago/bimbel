<?php
defined('BASEPATH') or exit('No derict script access allowed');
class C_Tampil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tampil');
    }

    // Bimbel
    public function index()
    {
        $data['dasboard'] = [
            'tampil' => $this->m_tampil->getdata('bimbel')
        ];
        $this->page('admin/content', $data['dasboard']);
    }
    public function tambah()
    {
        $data = [];
        $this->page('admin/v_tambah', $data);
    }
    public function edit($id)
    {

        $data['bimbel'] = [
            'edit' => $this->m_tampil->getedit($id)
        ];
        $this->page('admin/v_formedit', $data['bimbel']);
    }

    // Sekolah
    public function sekolah()
    {
        $data['sekolah'] = [
            'tampil' => $this->m_tampil->getdata('sekolah')
        ];
        $this->page('admin/v_sekolah', $data['sekolah']);
    }
    public function addschool()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('bimbel')
        ];
        $this->page('admin/v_addschol', $data);
    }
    public function editjarak($id)
    {
        // $id = $this->uri->statement(3);
        $data["sekolah"] = [
            'edit' => $this->m_tampil->getschool($id),
            'bimbel' => $this->m_tampil->getbimbel()
        ];
        $this->page('admin/v_editschol', $data["sekolah"]);
    }

    // Jarak
    public function addjarak()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('bimbel')
        ];
        $this->page('admin/v_addschol', $data);
    }
    public function editschol($id)
    {
        // $id = $this->uri->statement(3);
        $data["sekolah"] = [
            'edit' => $this->m_tampil->getschool($id),
            'bimbel' => $this->m_tampil->getbimbel()
        ];
        $this->page('admin/v_editschol', $data["sekolah"]);
    }


    // fasilitas
    public function fasilitas()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('fasilitas'),
            'getfas' => $this->m_tampil->getdata('getfasilitas')
        ];
        $this->page('admin/v_fasilitas', $data);
    }
    public function addfas()
    {
        $data = [];
        $this->page('admin/v_addfasilitas', $data);
    }
    public function editfas($id)
    {
        $data = [
            'fasilitas' => $this->m_tampil->getfas($id)
        ];
        $this->page('admin/v_editfasilitas', $data);
    }

    // Get fasilitas
    public function addfasbimbel()
    {
        $data = [
            'bimbel' => $this->m_tampil->getdata('bimbel'),
            'tampil' => $this->m_tampil->getdata('fasilitas')
        ];
        $this->page('admin/addfasbimbel', $data);
    }

    // Deskripsi
    public function deskripsi()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('deskripsi')
        ];
        $this->page('admin/v_deskripsi', $data);
    }
    public function addesk()
    {
        $data = [];
        $this->page('admin/adddesk', $data);
    }
    public function editdesk($id)
    {
        $data = [
            'desk' => $this->m_tampil->getdes($id)
        ];
        $this->page('admin/v_editdesk', $data);
    }

    // Paket
    public function paket()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('paket')
        ];
        $this->page('admin/v_paket', $data);
    }
    public function addpaket()
    {
        $data = [];
        $this->page('admin/v_addpaket', $data);
    }
    public function editpaket($id)
    {
        $data = [
            'paket' => $this->m_tampil->getpaket($id)
        ];
        $this->page('admin/v_editpaket', $data);
    }

    // Foto 
    public function foto()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('foto')
        ];
        $this->page('admin/v_foto', $data);
    }
    public function addfoto()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('bimbel')
        ];
        $this->page('admin/v_tambahfoto', $data);
    }
    public function editfoto($id)
    {
        $data = [
            'tampil' => $this->m_tampil->getfoto($id)
        ];
        $this->page('admin/v_editfoto', $data);
    }


    public function page($content, $data)
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dasboard');
        $this->load->view($content, $data);
        $this->load->view('admin/footer');
    }
}
