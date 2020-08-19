<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_tampil');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
		$data = [
			'tampil' => $this->m_tampil->getdata('sekolah')
		];
		$this->page('user/sekolah', $data);
	}

	public function page($content, $data)
	{
		$this->load->view('user/header');
		$this->load->view($content, $data);
		$this->load->view('user/footer');
	}
}
