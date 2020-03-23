<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller
{

	public $konten = array('main_view' => '',);

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user', 'user', TRUE);
	}

	public function index()
	{
		if (($this->session->userdata('stlog')) != 1) {
			redirect(site_url('login/logout'));
		}
		if (($this->session->userdata('stat')) != 1) {
			redirect(site_url('dashboard'));
		}

		$this->konten['main_view'] = $this->load->view('user', '', TRUE);
		$this->load->view('template/dashboard', $this->konten);
	}

	public function ajax_list()
	{
		$list = $this->user->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $us) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = strtoupper($us->nama_petugas);
			$row[] = $us->username;
			if (($us->status) == 1) {
				$stu = "Administrator";
			} else if (($us->status) == 2) {
				$stu = "Surveyor";
			} else {
				$stu = "Operator";
			}
			$row[] = $stu;

			//add html for action
			$row[] =
				'<div class="action-buttons">
			<a class="green" href="javascript:void(0)" onclick="edit_user(' . "'" . $us->id . "'" . ')"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
			
			</div>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->user->count_all(),
			"recordsFiltered" => $this->user->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_add()
	{
		$st = $this->session->userdata('stlog');
		$validasi = array(
			array(
				'field' => 'uname',
				'label' => 'Username',
				'rules' => 'required'
			),

			array(
				'field' => 'passb',
				'label' => 'Password',
				'rules' => 'required'
			),

			array(
				'field' => 'nama',
				'label' => 'Nama',
				'rules' => 'required'
			),

			array(
				'field' => 'status',
				'label' => 'Status',
				'rules' => 'required'
			)
		);

		$this->form_validation->set_rules($validasi);
		$this->form_validation->set_error_delimiters('', '');

		$u = $this->input->post('uname');
		$cek = $this->user->get_by_user($u);

		$pass = $this->input->post('passb');
		$epass =  $this->encryption->encrypt($pass);

		if ($st != 1) {
			$data['status'] = false;
			$data['kliru'] = 'Sesi anda habis, silakan refresh browser anda!';
			echo json_encode($data);
		} elseif ($this->form_validation->run() == FALSE) {
			$data['kliru'] = validation_errors();
			$data['status'] = false;
			echo json_encode($data);
		} elseif ($cek > 0) {
			$data['kliru'] = 'Username sudah ada';
			$data['status'] = false;
			echo json_encode($data);
		} elseif (!preg_match("/^[a-zA-Z0-9]*$/", $u)) {
			$data['kliru'] = 'Username tidak boleh ada spasi/titik';
			$data['status'] = false;
			echo json_encode($data);
		} elseif (!preg_match("/^[a-zA-Z0-9]*$/", $pass)) {
			$data['kliru'] = 'Password tidak boleh ada spasi/titik';
			$data['status'] = false;
			echo json_encode($data);
		} else {

			$data = array(
				'username' => $this->input->post('uname'),
				'password' => $epass,
				'nama_petugas' => $this->input->post('nama'),
				'status' => $this->input->post('status'),
			);
			$insert = $this->user->save($data);
			$data['kliru'] = 'Sukses Tambah Data';
			$data['status'] = true;
			echo json_encode($data);
		}
	}

	public function ajax_edit($id)
	{
		$data = $this->user->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_update()
	{
		$st = $this->session->userdata('stlog');

		$validasi = array(

			array(
				'field' => 'nama',
				'label' => 'Nama Petugas',
				'rules' => 'required'
			),
			array(
				'field' => 'status',
				'label' => 'Status',
				'rules' => 'required'
			)
		);

		$this->form_validation->set_rules($validasi);
		$this->form_validation->set_error_delimiters('', '');

		$pass = $this->input->post('passb');

		if ($st != 1) {
			$data['status'] = false;
			$data['kliru'] = 'Sesi anda habis, silakan refresh browser anda!';
			echo json_encode($data);
		} elseif ($this->form_validation->run() == FALSE) {
			$data['kliru'] = validation_errors();
			$data['status'] = false;
			echo json_encode($data);
		} elseif (!preg_match("/^[a-zA-Z0-9]*$/", $pass)) {
			$data['kliru'] = 'Password tidak boleh ada spasi/titik';
			$data['status'] = false;
			echo json_encode($data);
		} else {

			if ($pass == null) {

				$data2 = array(
					'nama_petugas' => $this->input->post('nama'),
					'status' => $this->input->post('status')
				);
			} else {
				$epass =  $this->encryption->encrypt($pass);
				$data2 = array(
					'nama_petugas' => $this->input->post('nama'),
					'status' => $this->input->post('status'),
					'password' => $epass
				);
			}

			$this->user->update(array('id' => $this->input->post('id')), $data2);

			$data['kliru'] = 'Update User Sukses!!';
			$data['status'] = true;

			echo json_encode($data);
		}
	}

	public function ajax_editpass($id)
	{
		$data = $this->user->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_updatepass()
	{
		$pass = $this->input->post('passg', TRUE);
		$passb = $this->input->post('passlg', TRUE);
		$epass =  $this->encryption->encrypt($pass);
		$usern = $this->input->post('namag', TRUE);

		$st = $this->session->userdata('stlog');
		$validasi = array(
			array(
				'field' => 'namag',
				'label' => 'Nama Anda',
				'rules' => 'required'
			),

			array(
				'field' => 'email_mitra',
				'label' => 'Email Anda',
				'rules' => 'required|valid_email'
			),

			array(
				'field' => 'nohp_mitra',
				'label' => 'No HP Anda',
				'rules' => 'required|numeric'
			),

		);

		$this->form_validation->set_rules($validasi);
		$this->form_validation->set_error_delimiters('', '');

		if ($st != 1) {
			$data['status'] = false;
			$data['kliru'] = 'Sesi anda habis, silakan refresh browser anda!';
			echo json_encode($data);
		} elseif ($this->form_validation->run() == FALSE) {
			$data['kliru'] = validation_errors();
			$data['status'] = false;
			echo json_encode($data);
		} elseif (!preg_match("/^[a-zA-Z0-9]*$/", $pass)) {
			$data['kliru'] = 'Password tidak boleh ada spasi/titik';
			$data['status'] = false;
			echo json_encode($data);
		} elseif ($pass !== $passb) {
			$data['kliru'] = 'Password tidak sama';
			$data['status'] = false;
			echo json_encode($data);
		} else {

			$uname = $this->input->post('usernameg');
			$saiki = strtotime("now");

			$filePath = './foto/';
			$config['upload_path'] = $filePath;
			$nmfile1 = $uname;
			$config['file_name'] =  $nmfile1;
			$config['allowed_types'] = 'jpg|png';
			$config['remove_space'] = TRUE;
			$config['overwrite'] = TRUE;
			$config['max_size'] = 20000;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('user_filefoto');
			$dok = $this->upload->data();
			if ($pass == null) {

				if (!($this->upload->do_upload('user_filefoto'))) {
					$data = array(

						'nama_petugas' => $this->input->post('namag'),
						'email' => $this->input->post('email_mitra'),
						'nohp' => $this->input->post('nohp_mitra'),
					);
					//		$this->user->update(array('id' => $this->input->post('id_pass')), $data);
				} else {
					$data = array(

						'nama_petugas' => $this->input->post('namag'),
						'email' => $this->input->post('email_mitra'),
						'nohp' => $this->input->post('nohp_mitra'),
						'foto' => $dok['file_name'],
					);
					$config2['image_library'] = 'gd2';
					$config2['source_image'] = $this->upload->upload_path . $this->upload->file_name;
					$config2['new_image'] = './resize/'; // folder tempat menyimpan hasil resize
					$config2['maintain_ratio'] = TRUE;
					$config2['width'] = 160; //lebar setelah resize menjadi 100 px
					$config2['height'] = 160; //lebar setelah resize menjadi 100 px
					$this->load->library('image_lib', $config2);
					$this->image_lib->resize();
					$this->session->set_userdata('foto', $dok['file_name']);

					//		$this->user->update(array('id' => $this->input->post('id_pass')), $data);

				}
			} else {

				if (!($this->upload->do_upload('user_filefoto'))) {

					$data = array(

						'nama_petugas' => $this->input->post('namag'),
						'email' => $this->input->post('email_mitra'),
						'nohp' => $this->input->post('nohp_mitra'),
						'password' => $epass,
					);
					//		$this->user->update(array('id' => $this->input->post('id_pass')), $data);
				} else {
					$data = array(

						'nama_petugas' => $this->input->post('namag'),
						'password' => $epass,
						'email' => $this->input->post('email_mitra'),
						'nohp' => $this->input->post('nohp_mitra'),
						'foto' => $dok['file_name'],
					);
					$config2['image_library'] = 'gd2';
					$config2['source_image'] = $this->upload->upload_path . $this->upload->file_name;
					$config2['new_image'] = './resize/'; // folder tempat menyimpan hasil resize
					$config2['maintain_ratio'] = TRUE;
					$config2['width'] = 160; //lebar setelah resize menjadi 100 px
					$config2['height'] = 160; //lebar setelah resize menjadi 100 px
					$this->load->library('image_lib', $config2);
					$this->image_lib->resize();

					$this->session->set_userdata('foto', $dok['file_name']);

					//		$this->user->update(array('id' => $this->input->post('id_pass')), $data);
				}
			}

			$this->user->update(array('id' => $this->input->post('id_pass')), $data);
			$data['kliru'] = 'Update Profile Sukses, silakan Refresh Browser Anda';
			$data['status'] = true;
			echo json_encode($data);
		}
	}


	public function ajax_open($id)
	{
		$st = $this->session->userdata('stlog');

		if ($st != 1) {
			$data['status'] = false;
			$data['kliru'] = 'Sesi anda habis, silakan refresh browser anda!';
			echo json_encode($data);
		} else {
			$data = array(
				'stat_ig' => 1,
			);
			$this->user->update(array('id' => $id), $data);
			$data['kliru'] = 'Sukses Buka Akun Instagram!';
			$data['status'] = true;
			echo json_encode($data);
		}
	}


	public function subscribe($id)
	{
		$member = $this->user->get_by_id($id);
		$waktu = time();
		$id_list = '68445';
		$token = hash_hmac("sha256", "yudigopels" . "::" . "o4K2ekfLs7iS1TmVEzbGrxZJMqYUFAgDyudigopels" . "::" . $waktu, "o4K2ekfLs7iS1TmVEzbGrxZJMqYUFAgDyudigopels");

		$nama_list = $this->tbio->nama_list($waktu, $token, $id_list);
		$hasil = json_decode($nama_list, true);
		$nlist = $hasil['data']['public_name'];

		$name = $member->nama_toko;
		$email = $member->email;
		$list_email = $this->tbio->add_subscriber($waktu, $token, $id_list, $name, $email);
		//	echo $list_email;

		$data['kliru'] = 'Tambah Subscriber Email Sukses Pada List = ' . $nlist;
		$data['status'] = true;
		echo json_encode($data);
	}
}
