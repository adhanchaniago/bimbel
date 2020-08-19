<?php
defined('BASEPATH') or exit('No derect script access allowed');
class C_Edit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_update');
        $this->load->model('m_tampil');
        $this->load->library('form_validation');
    }

// Admin
    // Bimbel
    public function editbim()
    {
        $config = array(
            array(
                'field' => 'idbim',
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
            $where = $this->input->post('id');
            $data = [
                'tampil' => $this->m_tampil->getwhere('bimbel', $where)
            ];
            $this->page('admin/v_formedit',$data);
        }else{
            $this->m_update->updatebim();
        }
    }

    // Deskripsi
    public function editdes()
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
                'rules' => 'required|numeric'
            ),
            array(
                'field' => 'maps',
                'label' => 'Maps',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run($config)==false) {
            $where = $this->input->post('id');
            $data = [
                'tampil' => $this->m_tampil->getwhere('deskripsi',$where)
            ];
            $this->page('admin/v_editdesk',$data);
        }
        else{
            $this->m_update->deskripsi();
        }
    }

    // Sekolah
    public function editschoolact()
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
            $where = $this->input->post('id');
            $data = [
                'tampil' => $this->m_tampil->getwhere('sekolah',$where)
            ];
            $this->page('admin/v_editschol',$data);
        }else{
            $this->m_update->editscol();
        }
    }

    // Jarak Sekolah
    public function editjarak()
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
            $this->page('admin/v_editjarak',$data);
        }else{
            $this->m_update->editjar();
        }
    }

    // Fasilitas
    public function editfasilitas()
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
            $where = $this->input->post('idfasilitas');
            $data = [
                'tampil' => $this->m_tampil->getfas('fasilitas',$where)
            ];
            $this->page('admin/v_editfasilitas',$data);
        }else{
            $this->m_update->editfas();
        }
    }

    // Get Falitas
    public function editfasbimbel()
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
            $this->page('admin/v_editget',$data);
        }else{
            $this->m_update->editfasbim();
        }
    }
    // Kriteria
    public function editkriteria()
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
            $where = $this->input->post('id');
            $data = [
                'tampil' => $this->m_tampil->getwhere('kriteria',$where)
            ];
            $this->page('admin/v_editkriteria',$data);
        }else{
            $this->m_update->editkriteria();
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
