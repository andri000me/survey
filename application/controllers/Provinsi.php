<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Provinsi extends CI_Controller
{

    public $konten = array('main_view' => '',);

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_prov', 'prov', TRUE);
    }

    public function index()
    {
        if (($this->session->userdata('stlog')) != 1) {
            redirect(site_url('login/logout'));
        }

        $this->konten['main_view'] = $this->load->view('provinsi', '', TRUE);
        $this->load->view('template/dashboard', $this->konten);
    }


    public function ajax_list()
    {
        $list = $this->prov->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $us) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = strtoupper($us->namaprov);

            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_prov(' . "'" . $us->id . "'" . ')"><i class="glyphicon glyphicon-edit"></i> Edit</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->prov->count_all(),
            "recordsFiltered" => $this->prov->count_filtered(),
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
                'field' => 'namaprov',
                'label' => 'Nama Provinsi',
                'rules' => 'required'
            )

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
    } else {
        $data = array(
            'namaprov' => $this->input->post('namaprov')
        );

        $insert = $this->prov->save($data);
        $data['kliru'] = 'Sukses Tambah Data Provinsi';
        $data['status'] = true;
        echo json_encode($data);
        }
    }

public function ajax_edit($id)
    {
       $data = $this->prov->get_by_id($id);
       echo json_encode($data);
    }

public function ajax_update()
    {
       $st = $this->session->userdata('stlog');
       $validasi = array(
            array(
                'field' => 'namaprov',
                'label' => 'Nama Provinsi',
                'rules' => 'required'
            )
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
    } else {
        $data = array(
            'namaprov' => $this->input->post('namaprov')
        );

        $this->prov->update(array('id' => $this->input->post('id')), $data);
        $data['kliru'] = 'Sukses Update Data Master Provinsi!';
        $data['status'] = true;
        echo json_encode($data);
    }
    }
}
