<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		if (($this->session->userdata('stlog')) != 1) {
			redirect(site_url('login/logout'));
		}

		$this->konten['main_view'] = $this->load->view('template/konten', '', TRUE);
		$this->load->view('template/dashboard', $this->konten);
	}
}
