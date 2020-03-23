<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_edc extends CI_Controller
{

    public $konten = array('main_view' => '',);

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_edc', 'edc', TRUE);
    }

    public function index()
    {
        if (($this->session->userdata('stlog')) != 1) {
            redirect(site_url('login/logout'));
        }

        $this->konten['main_view'] = $this->load->view('master_edc', '', TRUE);
        $this->load->view('template/dashboard', $this->konten);
    }


    public function ajax_list()
    {
        $list = $this->edc->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $us) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = strtoupper($us->merk);
            $row[] = $us->tipe;
            $row[] = $us->part_number;
            $row[] = $us->sn_awal;
            $row[] = $us->sn_update;
            $row[] = $us->crm;
            $row[] = $us->tid;
            $row[] = $us->ket2;
            $row[] = $us->warna;

            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_edc(' . "'" . $us->id . "'" . ')"><i class="glyphicon glyphicon-edit"></i> Edit</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->edc->count_all(),
            "recordsFiltered" => $this->edc->count_filtered(),
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
                'field' => 'merk',
                'label' => 'Merk',
                'rules' => 'required'
            ),

            array(
                'field' => 'tipe',
                'label' => 'Type',
                'rules' => 'required'
            ),

            array(
                'field' => 'partnum',
                'label' => 'Part Number',
                'rules' => 'required'
            ),

            array(
                'field' => 'snawal',
                'label' => 'SN Awal',
                'rules' => 'required'
            ),

            array(
                'field' => 'snupdate',
                'label' => 'SN Update',
                'rules' => 'required'
            ),

            array(
                'field' => 'tipe',
                'label' => 'Type',
                'rules' => 'required'
            ),

            array(
                'field' => 'tid',
                'label' => 'Type',
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
                'merk' => $this->input->post('merk'),
                'tipe' => $this->input->post('tipe'),
                'part_number' => $this->input->post('partnum'),
                'sn_awal' => $this->input->post('snawal'),
                'sn_update' => $this->input->post('snupdate'),
                'crm' => $this->input->post('crm'),
                'tid' => $this->input->post('tid'),
                'ket2' => $this->input->post('ket2'),
                'warna' => $this->input->post('warna')
            );

            $insert = $this->edc->save($data);
            $data['kliru'] = 'Sukses Tambah Data EDC';
            $data['status'] = true;
            echo json_encode($data);
        }
    }

    public function ajax_edit($id)
    {
        $data = $this->edc->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_update()
    {
        $st = $this->session->userdata('stlog');

        $validasi = array(
            array(
                'field' => 'merk',
                'label' => 'Merk',
                'rules' => 'required'
            ),

            array(
                'field' => 'tipe',
                'label' => 'Type',
                'rules' => 'required'
            ),

            array(
                'field' => 'partnum',
                'label' => 'Part Number',
                'rules' => 'required'
            ),

            array(
                'field' => 'snawal',
                'label' => 'SN Awal',
                'rules' => 'required'
            ),

            array(
                'field' => 'snupdate',
                'label' => 'SN Update',
                'rules' => 'required'
            ),

            array(
                'field' => 'tipe',
                'label' => 'Type',
                'rules' => 'required'
            ),

            array(
                'field' => 'tid',
                'label' => 'Type',
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
                'merk' => $this->input->post('merk'),
                'tipe' => $this->input->post('tipe'),
                'part_number' => $this->input->post('partnum'),
                'sn_awal' => $this->input->post('snawal'),
                'sn_update' => $this->input->post('snupdate'),
                'crm' => $this->input->post('crm'),
                'tid' => $this->input->post('tid'),
                'ket2' => $this->input->post('ket2'),
                'warna' => $this->input->post('warna')
            );

            $this->edc->update(array('id' => $this->input->post('id')), $data);
            $data['kliru'] = 'Sukses Update Data Master EDC!';
            $data['status'] = true;
            echo json_encode($data);
        }
    }
}
