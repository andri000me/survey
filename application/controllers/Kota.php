<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {

	public $konten = array('main_view' => '', );

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kota', 'kota', TRUE);
	}
//adm
	public function index()
	{
		if (($this->session->userdata('stlog'))!=1){
		redirect(site_url('login/logout'));
		}

		$data = array('prov'=> $this->kota->get_prov()
		);


		$this->konten['main_view'] = $this->load->view('kota', $data, TRUE);
		$this->load->view('template/dashboard', $this->konten);



	}


	public function ajax_list()
	{
		$list = $this->kota->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $us) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = strtoupper($us->nama_kota);
			$row[] = strtoupper($us->namaprov);
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_kota('."'".$us->id."'".')"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->kota->count_all(),
						"recordsFiltered" => $this->kota->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_add()
	{
$st=$this->session->userdata('stlog');
$sta=$this->session->userdata('stat');
		$validasi = array(
				array(
				'field' => 'namaprov',
				'label' => 'Nama Provinsi',
				'rules' => 'required'
				),

				array(
				'field' => 'nama',
				'label' => 'Nama Kab/Kota',
				'rules' => 'required'
				)

			);

		$this->form_validation->set_rules($validasi);
		$this->form_validation->set_error_delimiters('', '');

if($st!=1){
$data['status'] = false;
$data['kliru'] = 'Sesi anda habis, silakan refresh browser anda!';
echo json_encode($data);
}elseif ($sta!=1){
$data['kliru'] = 'Anda Tidak diperkenankan';
$data['status'] = false;
echo json_encode($data);
}elseif ($this->form_validation->run() == FALSE){
	$data['kliru'] = validation_errors();
	$data['status'] = false;
	echo json_encode($data);
}else{
	$data = array(
		'id_prov' => $this->input->post('idprov'),
		'nama_kota' => $this->input->post('nama'),
	);
	$insert = $this->kota->save($data);

/*	$data1 = array(
		'user' => $this->session->userdata('username'),
		'ket' => 'Add Data Kota / Kab '.$this->input->post('namaprov'),
		'status' => 1
	);

		$insertlog = $this->kota->save_log($data1);*/

		$data['kliru'] = 'Sukses Tambah Data!';
		$data['status'] = true;
		echo json_encode($data);
}
	}

	public function ajax_edit($id)
	{
		$data = $this->kota->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_update()
	{
$st=$this->session->userdata('stlog');
$sta=$this->session->userdata('stat');

		$validasi = array(
				array(
				'field' => 'namaprov',
				'label' => 'Nama Provinsi',
				'rules' => 'required'
				),

				array(
				'field' => 'nama',
				'label' => 'Nama Kab/Kota',
				'rules' => 'required'
				)

			);

		$this->form_validation->set_rules($validasi);
		$this->form_validation->set_error_delimiters('', '');

if($st!=1){
	$data['status'] = false;
	$data['kliru'] = 'Sesi anda habis, silakan refresh browser anda!';
	echo json_encode($data);
}elseif ($sta!=1){
$data['kliru'] = 'Anda Tidak diperkenankan';
$data['status'] = false;
echo json_encode($data);
}elseif ($this->form_validation->run() == FALSE){
	$data['kliru'] = validation_errors();
	$data['status'] = false;
	echo json_encode($data);
}else{
	$data = array(
		'id_prov' => $this->input->post('idprov'),
		'nama_kota' => $this->input->post('nama'),
	);
	$this->kota->update(array('id' => $this->input->post('id')), $data);

/*	$data1 = array(
		'user' => $this->session->userdata('username'),
		'ket' => 'Update Data Kota/Kab '.$this->input->post('namaprov'),
		'status' => 2
	);

	$insertlog = $this->kota->save_log($data1);*/

	$data['status'] = true;
	echo json_encode($data);
}
	}


}

/* End of file eselon.php */
/* Location: ./application/controllers/eselon.php */
