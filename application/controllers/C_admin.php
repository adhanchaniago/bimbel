<?php
defined('BASEPATH') or exit('No derict script access allowed');
class C_Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_metod');
    }

    public function index()
    {
        $data['dasboard'] = [
            'tampil' => $this->m_admin->getdata('bimbel')
        ];
        $this->page('admin/content', $data['dasboard']);
    }


    //tambah data
    public function tambah()
    {
        $data = [];
        $this->page('admin/v_tambah', $data);
    }

    public function tambahact()
    {
        $data['input'] = [
            'tambah' => $this->m_admin->insert()
        ];
        redirect('c_admin');
    }


    //Foto
    public function foto()
    {
        $data['foto'] = [
            'foto' => $this->m_admin->getdata('foto')
        ];
        $this->page('admin/v_foto', $data['foto']);
    }
    public function tambahfoto()
    {
        $data['tambah'] = [
            'bimbel' => $this->m_admin->getdata('bimbel')
        ];
        $this->page('admin/v_tambahfoto', $data['tambah']);
    }
    public function fotoact()
    {
        $data['tambah'] = [
            'foto' => $this->m_admin->insertimg('foto')
        ];
        redirect('c_admin/foto');
    }
    public function deletfoto($id)
    {
        $data = array('id_bimbel' => $id);
        $this->m_admin->deletfoto($data);
        redirect('c_admin/foto');
    }


    // EditS
    public function edit()
    {

        $data['tampil'] = [
            'bimbel' => $this->m_admin->getdata('bimbel')
        ];
        $this->page('admin/v_edit', $data['tampil']);
    }
    public function formedit()
    {
        $id = $this->uri->segment(3);
        $data['tampil'] = [
            'edit' => $this->m_admin->Getedit($id)
        ];
        $this->page('admin/v_formedit', $data['tampil']);
    }
    public function editact()
    {
        $data["id"] = $this->input->post('id');
        $data["nama"] = $this->input->post('nama');
        $data["alamat"] = $this->input->post('alamat');
        $data["sma8"] = $this->input->post('sma8');
        $data["sma9"] = $this->input->post('sma9');
        $data["fasilitas"] = implode(",", $this->input->post('fasilitas'));
        $data["biaya"] = $this->input->post('biaya');
        $data["situs"] = $this->input->post('situs');
        $data["telpon"] = $this->input->post('telpon');
        $data["email"] = $this->input->post('email');
        $data["deskripsi"] = $this->input->post('deskripsi');

        $res = array(
            'id_bimbel' => $data["id"],
            'nama' => $data["nama"],
            'alamat' => $data["alamat"],
            'sma8' => $data["sma8"],
            'sma9' => $data["sma9"],
            'fasilitas' => $data["fasilitas"],
            'biaya' => $data["biaya"],
            'situs' => $data["situs"],
            'telpon' => $data["telpon"],
            'email' => $data["email"],
            'deskripsi' => $data["deskripsi"]
        );
        $where = array('id_bimbel' => $data["id"]);
        $this->m_admin->update($where, $res, 'bimbel');
        redirect('c_admin/edit');
    }


    //Halaman Delete
    public function delete($id)
    {
        $data = array('id_bimbel' => $id);
        $this->m_admin->delete($data);
        $this->m_admin->deletfoto($data);
        redirect('c_admin/edit', 'refresh');
    }


    public function page($content, $data)
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dasboard');
        $this->load->view($content, $data);
        $this->load->view('admin/footer');
    }
}
