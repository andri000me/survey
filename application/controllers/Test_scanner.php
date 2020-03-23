<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test_scanner extends CI_Controller
{

    public $konten = array('main_view' => '',);

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('m_prov', 'prov', TRUE);
    }

    public function index()
    {
        if (($this->session->userdata('stlog')) != 1) {
            redirect(site_url('login/logout'));
        }
        // $this->konten['main_view'] = $this->load->view('test', '', TRUE);
        // $this->load->view('template/dashboard', $this->konten);
        $this->load->view('test');
    }
}
