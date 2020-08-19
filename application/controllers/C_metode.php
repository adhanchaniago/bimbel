<?php
defined('BASEPATH') OR EXIT ('No direct script access allowed');
/**
 * 
 */
class C_metode extends CI_Controller
{
	public function __Construct()
	{
		parent :: __construct();
		$this->load->model('m_metode');
		$this->load->model('m_tampil');
		$this->load->library('session');
		$this->load->helper('url');
	}



	public function index()
	{
		$data_session = array(
                'sekolah' => $this->input->post('sekolah'),
            );
        $this->session->set_userdata($data_session);

		$this->metode();
	}

	public function metode()
	{
		$this->m_metode->wp();
		$this->m_metode->saw();
		$data["data"]=[
			'wp' => $this->m_tampil->wp(),
			'saw' => $this->m_tampil->saw()
		];
		$this->page('user/v_halu',$data["data"]);
	}

	public function detail($id)
    {
        $data = [
            'detail' => $this->m_tampil->detail($id),
            'fasilitas' => $this->m_tampil->getfasbimbel($id)
        ];
        $this->page('user/detail', $data);
    }

	public function page($content, $data)
	{
		$this->load->view('user/header');
		$this->load->view($content,$data);
		$this->load->view('user/footer');
	}
}
