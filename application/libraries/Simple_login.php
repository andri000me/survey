<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 

class Simple_login {
	// SET SUPER GLOBAL
	var $CI = NULL;
	var $normal = NULL;
	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->library('encryption');
	}
	// Proteksi halaman
	public function cek_login() {
		if($this->CI->session->userdata('username') == '') {
			$this->CI->session->set_flashdata('sukses','Anda belum login');
			redirect(site_url('login'));
		}
	}
	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('nama_toko');
		$this->CI->session->unset_userdata('id_token');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->unset_userdata('stlog');
		$this->CI->session->unset_userdata('stat');
		$this->CI->session->unset_userdata('foto');
		$this->CI->session->unset_userdata('paket');
		$this->CI->session->unset_userdata('serv');
		$this->CI->session->unset_userdata('serv4');
		$this->CI->session->unset_userdata('jpaket');
		$this->CI->session->unset_userdata('npaket');
		$this->CI->session->unset_userdata('akhir');
		$this->CI->session->unset_userdata('akhir3');
		$this->CI->session->unset_userdata('akhir4');
		$this->CI->session->unset_userdata('statig');
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect(site_url('login'));
	}

	public function logout_bank() {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('bank');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->unset_userdata('stlogbank');
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect(site_url('login_bank'));
	}

}
