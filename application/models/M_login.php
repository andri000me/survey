<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	var $table = 'data_user';
	/*
	var $table1 = 'data_member';
	var $table2 = 'member_paket';
	var $table3 = 'data_aktifasi';
	var $table4 = 'token';
	*/
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

//admin

	public function get_by_id($username)
	{
	$this->db->select("*");
        $this->db->from($this->table);

	$this->db->where('username',$username);
	$query = $this->db->get();

		return $query->num_rows();
	}

	public function get_pass($username)
	{
	$this->db->select("*");
        $this->db->from($this->table);
	$this->db->where('username',$username);
		$query = $this->db->get();

		return $query->row();
	}

//member

	public function get_member($username)
	{
	$this->db->select("*");
        $this->db->from($this->table1);

	$this->db->where('username',$username);
	$query = $this->db->get();

		return $query->num_rows();
	}

	public function get_email($email)
	{
	$this->db->select("*");
        $this->db->from($this->table1);

	$this->db->where('email',$email);
	$query = $this->db->get();

		return $query->num_rows();
	}


	public function save($data)
	{
		$this->db->insert($this->table1, $data);
		return $this->db->insert_id();
	}

	public function save_unik($data)
	{
		$this->db->insert($this->table3, $data);
		return $this->db->insert_id();
	}


	public function get_mailset()
	{
	$this->db->select("*");
        $this->db->from('data_email');
		$query = $this->db->get();

		return $query->row();
	}

	function unik_id() { 
        $q = $this->db->query("SELECT MAX(id) AS idmax FROM data_member");
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "1";
        }
        $kar = 'MPAY'; //karakter depan kodenya
	$dt = date('dmy');
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$dt.$kd;
	}

	public function get_act($unik)
	{
	$this->db->select("*");
        $this->db->from($this->table3);
	$this->db->where('id_unik',$unik);
	$query = $this->db->get();

		return $query->num_rows();
	}


	public function update($where, $data)
	{
		$this->db->update($this->table1, $data, $where);
		return $this->db->affected_rows();
	}


	public function get_token()
	{
	$this->db->select("*");
        $this->db->from($this->table4);

	$this->db->where('id',1);
	$query = $this->db->get();

		return $query->row();
	}


	public function get_data($unik)
	{
	$this->db->select("*");
        $this->db->from($this->table1);
	$this->db->where('unik',$unik);
		$query = $this->db->get();

		return $query->row();
	}

}

/* End of file M_skpd.php */
/* Location: ./application/models/M_kompetensi_bidang.php */
