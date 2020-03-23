<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_util extends CI_Model {

	public $table = 'pricelist';
	public $table2 = 'data_paket';
	public $table3 = 'kupon';
	public $table4 = 'member_paket';
	public $table5 = 'data_member';
	public $table6 = 'data_kategori';
	public $table7 = 'data_produk';
	public $table8 = 'ppob_trans';
	public $table9 = 'ppob_bpjs';
	public $table10 = 'ppob_pra';
	var $column_order = array('produk_bill.nama', null); //set column field database for datatable orderable
	var $column_search = array('produk_bill.nama'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('produk_bill.jns' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

//admin

	private function _get_datatables_query()
	{
	$this->db->select("pricelist.*, produk_bill.nama, produk_bill.kode, produk_bill.deskripsi, produk_bill.jns, data_kategori.kat");
        $this->db->from($this->table);
	$this->db->join('produk_bill', 'pricelist.id_produk = produk_bill.id');
	$this->db->join('data_kategori', 'pricelist.id_kat = data_kategori.id');

		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
	$this->db->select("pricelist.*, produk_bill.nama, produk_bill.kode, produk_bill.deskripsi, produk_bill.jns, data_kategori.kat");
        $this->db->from($this->table);
	$this->db->join('produk_bill', 'pricelist.id_produk = produk_bill.id');
	$this->db->join('data_kategori', 'pricelist.id_kat = data_kategori.id');
		return $this->db->count_all_results();
	}

	public function get_paket()
	{
	$this->db->select("data_paket.*, master_paket.m_paket");
        $this->db->from($this->table2);
	$this->db->join('master_paket', 'data_paket.id_paket = master_paket.id');
	$this->db->where('data_paket.id_paket',1);

		$query = $this->db->get();
		return $query->result_array();
	}


	public function get_paket2()
	{
	$this->db->select("data_paket.*, master_paket.m_paket");
        $this->db->from($this->table2);
	$this->db->join('master_paket', 'data_paket.id_paket = master_paket.id');
	$this->db->where('data_paket.id_paket',2);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_paket3()
	{
	$this->db->select("data_paket.*, master_paket.m_paket");
        $this->db->from($this->table2);
	$this->db->join('master_paket', 'data_paket.id_paket = master_paket.id');
	$this->db->where('data_paket.id_paket',3);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function cari_paket($id)
	{
	$this->db->select("data_paket.*, master_paket.m_paket");
        $this->db->from($this->table2);
	$this->db->join('master_paket', 'data_paket.id_paket = master_paket.id');
	$this->db->where('data_paket.id',$id);

		$query = $this->db->get();
		return $query->row();
	}

	public function cari_jkupon($kpn)
	{
	$this->db->select("kupon.*, data_paket.nama_paket");
        $this->db->from($this->table3);
	$this->db->join('data_paket', 'kupon.id_mpaket = data_paket.id');
	$this->db->where('kupon.vocer',$kpn);
	$this->db->where('kupon.act',1);

		$query = $this->db->get();
		return $query->num_rows();
	}

	public function cari_kupon($kpn)
	{
	$this->db->select("kupon.*, data_paket.nama_paket");
        $this->db->from($this->table3);
	$this->db->join('data_paket', 'kupon.id_mpaket = data_paket.id');
	$this->db->where('kupon.vocer',$kpn);
	$this->db->where('kupon.act',1);

		$query = $this->db->get();
		return $query->row();
	}

	public function pakai_kupon($id_kpn)
	{
	$this->db->select("*");
        $this->db->from($this->table4);
	$this->db->where('id_member',$this->session->userdata('id'));
	$this->db->where('id_kupon',$id_kpn);

		$query = $this->db->get();
		return $query->num_rows();
	}

	public function cari_paketkupon($id)
	{
	$this->db->select("data_paket.*, master_paket.m_paket");
        $this->db->from($this->table2);
	$this->db->join('master_paket', 'data_paket.id_paket = master_paket.id');
	$this->db->where('data_paket.id',$id);

		$query = $this->db->get();
		return $query->row();
	}


	function unik_id() { 
        $q = $this->db->query("SELECT MAX(id) AS idmax FROM member_paket");
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "1";
        }
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kd;
	}


	public function save($data)
	{
		$this->db->insert($this->table4, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table4, $data, $where);
		return $this->db->affected_rows();
	}


	public function paket_aktif()
	{
	$this->db->select("*");
        $this->db->from($this->table4);
	$this->db->where('id_member',$this->session->userdata('id'));
	$this->db->where('stat_paket',1);

		$query = $this->db->get();
		return $query->row();
	}

	public function get_mailset()
	{
	$this->db->select("*");
        $this->db->from('data_email');
		$query = $this->db->get();

		return $query->row();
	}

	public function get_mem()
	{
	$this->db->select("*");
        $this->db->from($this->table5);
	$this->db->where('id',$this->session->userdata('id'));
		$query = $this->db->get();
		return $query->row();
	}

	public function get_invo($inv)
	{
	$this->db->select("member_paket.*, data_paket.nama_paket, kupon.vocer, master_paket.m_paket, data_member.nama_toko, data_member.email, data_member.alurl, data_member.nohp");
        $this->db->from($this->table4);
	$this->db->join('data_member', 'member_paket.id_member = data_member.id');
	$this->db->join('data_paket', 'member_paket.id_paket = data_paket.id');
	$this->db->join('master_paket', 'data_paket.id_paket = master_paket.id');
	$this->db->join('kupon', 'member_paket.id_kupon = kupon.id', 'left');
		$this->db->where('member_paket.inv',$inv);
		$query = $this->db->get();

		return $query->row();
	}

	public function update_member($where, $data)
	{
		$this->db->update($this->table5, $data, $where);
		return $this->db->affected_rows();
	}

	public function get_pasca()
	{
	$this->db->select("*");
        $this->db->from($this->table6);
	$this->db->where('id_tipe',1);
	$this->db->where('jns',1);
	$this->db->order_by('kat');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_ppob($idpasca)
	{
	$this->db->select("data_produk.*,produk_bill.nama, produk_bill.kode");
        $this->db->from($this->table7);
	$this->db->join('produk_bill', 'data_produk.id_bill = produk_bill.id');
	$this->db->where('data_produk.id_kat',$idpasca);
	$this->db->order_by('produk_bill.nama');

		$query = $this->db->get();
		return $query->result_array();
	}


	public function get_ppob_produk($idprod)
	{
	$this->db->select("data_produk.*,produk_bill.nama, produk_bill.kode");
        $this->db->from($this->table7);
	$this->db->join('produk_bill', 'data_produk.id_bill = produk_bill.id');
	$this->db->where('data_produk.id',$idprod);
//	$this->db->order_by('produk_bill.nama');

		$query = $this->db->get();
		return $query->row();
	}

	public function get_ppob_pra($idprod)
	{
	$this->db->select("data_produk.*,produk_bill.nama, produk_bill.kode, produk_bill.price");
        $this->db->from($this->table7);
	$this->db->join('produk_bill', 'data_produk.id_bill = produk_bill.id');
	$this->db->where('data_produk.id',$idprod);
//	$this->db->order_by('produk_bill.nama');

		$query = $this->db->get();
		return $query->row();
	}

	public function get_bpjs()
	{
	$this->db->select("*");
        $this->db->from($this->table6);
	$this->db->where('id_tipe',1);
	$this->db->where('jns',0);
	$this->db->order_by('kat');

		$query = $this->db->get();
		return $query->result_array();
	}

	function unik_ppob() { 
        $q = $this->db->query("SELECT MAX(id) AS idmax FROM ppob_trans");
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "1";
        }
        $kar = 'BY'; //karakter depan kodenya
//        $kar = 'D'; //karakter depan kodenya
	$dt = date('dmy');
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$dt.$kd;
	}

	function unik_ppobjs() { 
        $q = $this->db->query("SELECT MAX(id) AS idmax FROM ppob_bpjs");
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "1";
        }
        $kar = 'BPJS'; //karakter depan kodenya
//        $kar = 'D'; //karakter depan kodenya
	$dt = date('dmy');
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$dt.$kd;
	}

	function unik_pra() { 
        $q = $this->db->query("SELECT MAX(id) AS idmax FROM ppob_pra");
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "1";
        }
        $kar = 'TOP'; //karakter depan kodenya
//        $kar = 'D'; //karakter depan kodenya
	$dt = date('dmy');
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kar.$dt.$kd;
	}


	function unik_tr() { 
        $q = $this->db->query("SELECT MAX(id) AS idmax FROM ppob_trans");
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "1";
        }
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kd;
	}

	function unik_trbpjs() { 
        $q = $this->db->query("SELECT MAX(id) AS idmax FROM ppob_bpjs");
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "1";
        }
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kd;
	}

	function unik_trpra() { 
        $q = $this->db->query("SELECT MAX(id) AS idmax FROM ppob_pra");
        $kd = ""; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                $kd = sprintf("%s", $tmp); //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = "1";
        }
        //gabungkan string dengan kode yang telah dibuat tadi
        return $kd;
	}


	public function save_trans($data)
	{
		$this->db->insert($this->table8, $data);
		return $this->db->insert_id();
	}

	public function delete_ppob($idorder)
	{
		$this->db->where('id_order', $idorder);
		$this->db->delete($this->table8);
	}

	public function update_ppob($where, $data)
	{
		$this->db->update($this->table8, $data, $where);
		return $this->db->affected_rows();
	}

	public function update_pra($where, $data)
	{
		$this->db->update($this->table10, $data, $where);
		return $this->db->affected_rows();
	}


	public function save_transbpjs($data)
	{
		$this->db->insert($this->table9, $data);
		return $this->db->insert_id();
	}

	public function update_bpjs($where, $data)
	{
		$this->db->update($this->table9, $data, $where);
		return $this->db->affected_rows();
	}

	public function get_callmem($idmember)
	{
	$this->db->select("*");
        $this->db->from($this->table5);
	$this->db->where('id',$idmember);
		$query = $this->db->get();
		return $query->row();
	}



	public function get_pra()
	{
	$this->db->select("*");
        $this->db->from($this->table6);
	$this->db->where('id_tipe',2);
	$this->db->where('jns',1);
	$this->db->order_by('kat');

		$query = $this->db->get();
		return $query->result_array();
	}


	public function save_pra($data)
	{
		$this->db->insert($this->table10, $data);
		return $this->db->insert_id();
	}


}

/* End of file M_skpd.php */
/* Location: ./application/models/M_kompetensi_bidang.php */
