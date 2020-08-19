<?php
defined('BASEPATH') or exit('No derict script access allowed');
class C_Tampil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('m_tampil');
    }

// Admin
    // Bimbel
    public function index()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('bimbel')
        ];
        $this->page('admin/content',$data);
    }

    public function tambah()
    {
        $this->page('admin/v_tambah');
    }

    public function edit($where)
    {
        $data = [
            'tampil' => $this->m_tampil->getwhere('bimbel',$where)
        ];
        $this->page('admin/v_formedit',$data);
    }

    // Fasilitas
    public function fasilitas()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('fasilitas'),
            'getfas' => $this->m_tampil->getfasilitas()
        ];
        $this->page('admin/v_fasilitas',$data);
    }

    public function addfas()
    {
        $this->page('admin/v_addfasilitas');
    }

    public function editfas($where)
    {
        $data = [
            'tampil' => $this->m_tampil->getfas('fasilitas',$where)
        ];
        $this->page('admin/v_editfasilitas',$data);
    }

    // Get Fasilitas
    public function addfasbimbel()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('fasilitas'),
            'bimbel' => $this->m_tampil->getdata('bimbel')
        ];
        $this->page('admin/addfasbimbel',$data);
    }

    public function editfasbimbel($where)
    {
        $data = [
            'tampil' => $this->m_tampil->getfasbim('getfasilitas',$where)
        ];
        $this->page('admin/v_editget',$data);
    }

    // Sekolah
    public function sekolah()
    {
        $data = [
            'tampil' => $this->m_tampil->jarak(),
            'sekolah' => $this->m_tampil->getdata('sekolah')
        ];
        $this->page('admin/v_sekolah',$data);
    }

    public function addschool()
    {
        $this->page('admin/v_addschol');
    }

    public function editsekolah($where)
    {
        $data = [
            'tampil' => $this->m_tampil->getwhere('sekolah', $where)
        ];
        $this->page('admin/v_editschol',$data);
    }


    // Jarak Sekolah
    public function addjarak()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('bimbel'),
            'sekolah' => $this->m_tampil->getdata('sekolah')
        ];
        $this->page('admin/v_addjarak',$data);
    }

    public function editjarak($where)
    {
        $data = [
            'tampil' => $this->m_tampil->getwhere('jarak', $where)       ];
        $this->page('admin/v_editjarak',$data);
    }
    // Deskripsi
    public function deskripsi()
    {
        $data = [
            'tampil' =>$this->m_tampil->getdes()
        ];
        $this->page('admin/v_deskripsi',$data);
    }

    public function addesk()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('bimbel')
        ];
        $this->page('admin/adddesk',$data);
    }

    public function editdesk($where)
    {
        $data = [
            'tampil' =>$this->m_tampil->getwhere('deskripsi', $where),
            'des' => $this->m_tampil->getdes()
        ];
        $this->page('admin/v_editdesk',$data);
    }

    // Kriteria
    public function kriteria()
    {
        $data = [
            'tampil' => $this->m_tampil->getdata('kriteria')
        ];
        $this->page('admin/v_kriteria',$data);
    }

    public function addkriteria()
    {
        $this->page('admin/v_tambahkriteria');
    }

    public function editkriteria($where)
    {
        $data = [
            'tampil' => $this->m_tampil->getwhere('kriteria',$where)
        ];
        $this->page('admin/v_editkriteria',$data);
    }
// End Admin

    public function page($content=true, $data=true)
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dasboard');
        $this->load->view($content, $data);
        $this->load->view('admin/footer');
    }
}
