<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login', 'login', TRUE);
	}

	// Index login
	public function index() {
		if (($this->session->userdata('stlog'))==1){
		redirect(site_url('dashboard'));
		}else{
		$this->load->view('login');
		}
	}
	
	// Logout di sini
	public function logout() {
		$this->simple_login->logout();	
	}	

	public function ajax_login()
	{

		$validasi = array(
				array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required'
				),

				array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
				)
			);

		$this->form_validation->set_rules($validasi);
		$this->form_validation->set_error_delimiters('', '');

if ($this->form_validation->run() == false){
	$data['kliru'] = validation_errors();
	$data['status'] = false;
	echo json_encode($data);
}else{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$loginmasuk = $this->login->get_by_id($username);

	if(($loginmasuk)==1) {
		$cekpass = $this->login->get_pass($username);
		$epass=$cekpass->password;
		$dpass=$this->encryption->decrypt($epass);

		if(($password)==($dpass)){

			$id 	= $cekpass->id;
			$foto = $cekpass->foto;
			$stlog=1;
			$sta = $cekpass->status;

		
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('nama', $cekpass->nama_petugas);
			$this->session->set_userdata('id_login', uniqid(rand()));
			$this->session->set_userdata('stlog', $stlog);
			$this->session->set_userdata('stat', $sta);
			$this->session->set_userdata('id', $id);
			$this->session->set_userdata('foto', $foto);
		


		$data['kliru'] = 'Login Sukses!';
		$data['url']="dashboard";
		$data['status'] = true;
		}else{
		$data['kliru'] = 'Password Salah!';
		$data['status'] = false;
		}//password konfirmasi

	}else{

	$data['kliru'] = 'Username Tidak Ada!';
	$data['status'] = false;
	}

	echo json_encode($data);

}

	}


	public function ajax_register()
	{

		$validasi = array(
				array(
				'field' => 'nama',
				'label' => 'Nama Toko',
				'rules' => 'required'
				),

				array(
				'field' => 'hp',
				'label' => 'Nomor HP',
				'rules' => 'required'
				),

				array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email'
				),

				array(
				'field' => 'usernamer',
				'label' => 'Username',
				'rules' => 'required'
				),

				array(
				'field' => 'passr',
				'label' => 'Password',
				'rules' => 'required'
				),

				array(
				'field' => 'passbr',
				'label' => 'Password Konfirmasi',
				'rules' => 'required'
				),


/*				array(
				'field' => 'user_ig',
				'label' => 'Username Instagram',
				'rules' => 'required'
				),
*/
				array(
				'field' => 'alurl',
				'label' => 'Url Toko',
				'rules' => 'required'
				)


			);

		$this->form_validation->set_rules($validasi);
		$this->form_validation->set_error_delimiters('', '');

	$username = $this->input->post('usernamer');
	$password = $this->input->post('passr');
	$passb= $this->input->post('passbr');

if ($this->form_validation->run() == false){
	$data['kliru'] = validation_errors();
	$data['status'] = false;
	echo json_encode($data);
}elseif(($this->input->post('ok'))==null) { 
	$data['kliru'] = 'Centang Saya Setuju!';
	$data['status'] = false;
	echo json_encode($data);
}elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
$data['kliru'] = 'Username tidak boleh ada spasi/titik';
$data['status'] = false;
echo json_encode($data);
}elseif(!preg_match("/^[a-zA-Z0-9]*$/",$password)){
$data['kliru'] = 'Password tidak boleh ada spasi/titik';
$data['status'] = false;
echo json_encode($data);
}elseif($password !== $passb){
$data['kliru'] = 'Password Konfirmasi tidak sama';
$data['status'] = false;
echo json_encode($data);
}else{

		
		$mail = $this->input->post('email');

		$loginmasuk = $this->login->get_member($username);
		$ada = $this->login->get_email($mail);

		$string=preg_replace('~[^\\pL\d]+~u', '-', $this->input->post('alurl'));
                $trim=trim($string); 
                $slug=strtolower(str_replace(" ", "-", $trim));

		$sl = $this->login->get_slug($slug);


	if(($loginmasuk)==1) {

		$data['kliru'] = 'Username Sudah Ada!';
		$data['status'] = false;
	}elseif(($ada)==1) {
		$data['kliru'] = 'Email Sudah Ada!';
		$data['status'] = false;
	}elseif(($sl)==1) {
		$data['kliru'] = 'URL Toko Sudah Ada!';
		$data['status'] = false;
	}else{

		$epass=$this->encryption->encrypt($password);
		if(($password)!=($passb)){
		$data['kliru'] = 'Password Konfirmasi Tidak Sama!';
		$data['status'] = false;
		}elseif(($password)==($passb)){

//isidata
		$idunik=$this->login->unik_id();
			$data = array(
				'unik' => $idunik,
				'nama_toko' => $this->input->post('nama'),
				'nohp' => $this->input->post('hp'),
				'username' => $username,
				'password' => $epass,
//				'akun_ig' => $this->input->post('user_ig'),
				'status' => 0,
				'email' => $mail,
				'alurl' => $slug
			);

			$insert = $this->login->save($data);

			$eunik=encrypt_url($idunik);
			$data1 = array(
				'id_unik' => $idunik,
				'link_act' => $eunik,
			);
			$insert2 = $this->login->save_unik($data1);

//isidata
//kirimemail

$cekset = $this->login->get_mailset();
$mailset=$cekset->email;
$mailpass=$cekset->password;
$passadm =  $this->encryption->decrypt($mailpass);
$ssln=$cekset->ssln;
$portn=$cekset->portn;

$nama=$this->input->post('nama');

$this->load->library('email');

   $config = array();
   $config['charset'] = 'utf-8';
   $config['useragent'] = 'Toko.IG'; //bebas sesuai keinginan kamu
   $config['protocol']= "ssmtp";
   $config['mailtype']= "html";
   $config['smtp_host']= $ssln;
   $config['smtp_port']= $portn;
   $config['smtp_timeout']= "5";
   $config['smtp_user']= $mailset;              //isi dengan email anda
   $config['smtp_pass']= $passadm;            // isi dengan password dari email anda
   $config['crlf']="\r\n";
   $config['newline']="\r\n";
 
   $config['wordwrap'] = TRUE;

$this->email->initialize($config);
$this->email->from($mailset,'Toko.BIO');
$this->email->bcc('bayuanggadotcom@gmail.com');


$this->email->to($mail);
$this->email->subject($nama);
$this->email->message("Registrasi Berhasil dengan username <strong>".$username."</strong>, silahkan klik ".site_url("login/register")."/".$eunik." untuk aktifasi akun anda");

	if(!$this->email->Send()) {
	$data['status'] = false;
	$data['kliru'] = 'Pengiriman Email Sukses dan '.show_error($this->email->print_debugger()).' Segera hubungi admin kami';
	}else{
	$data['kliru'] = 'Registrasi Sukses, Silakan Cek email anda!';
	$data['status'] = true;
	}

		$data['url']="login";
		}//password
	}//loginmasuk

echo json_encode($data);

}//validation

	}

	public function register($eunik) {
		$this->load->view('register');

//		$data = array(	
//				'eunik'=>decrypt_url($eunik),
//		);
//		$this->load->view('register', $data, TRUE);

	}


	public function aktifasi($eunik)
	{

//		$unik = $this->encryption->decrypt($eunik);
		$act = $this->login->get_act(decrypt_url($eunik));
		$member = $this->login->get_data(decrypt_url($eunik));
		$name = $member->nama_toko;
		$email = $member->email;


	if(($act)==1) {

		$tgb=date('Y-m-d');

		$data = array(
				'aktif' => 1,
				'tgl' => $tgb,

			);
		$this->login->update(array('unik' => decrypt_url($eunik)), $data);

	$waktu = time();
	$id_list = '68445';
	$token = hash_hmac("sha256","yudigopels"."::"."o4K2ekfLs7iS1TmVEzbGrxZJMqYUFAgDyudigopels"."::".$waktu,"o4K2ekfLs7iS1TmVEzbGrxZJMqYUFAgDyudigopels");

	$nama_list = $this->tbio->nama_list($waktu,$token,$id_list);
	$hasil = json_decode($nama_list, true);
	$nlist = $hasil['data']['public_name'];

	$list_email = $this->tbio->add_subscriber($waktu,$token,$id_list,$name,$email);


	$data['kliru'] = 'Aktifasi Berhasil, Silakan Login!';
	$data['status'] = true;

	}else{

	$data['kliru'] = 'Link Aktifasi Salah!';
	$data['status'] = false;
	}

	echo json_encode($data);

	}





}
