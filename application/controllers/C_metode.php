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
		$sekola = $this->input->post('sekolah');
		$this->m_metode->wp($sekola);
		$this->m_metode->saw($sekola);
		$this->metode();
	}

	public function metode()
	{
		$data["data"]=[
			'wp' => $this->m_tampil->wp(),
			'saw' => $this->m_tampil->saw()
		];
		$this->page('user/v_halu',$data["data"]);
	}

	public function page($content, $data)
	{
		$this->load->view('user/header');
		$this->load->view($content,$data);
		$this->load->view('user/footer');
	}
}
