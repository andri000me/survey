<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_merchant extends CI_Model
{

	var $table = 'data_merchant';
	var $column_order = array('data_merchant.nama_merc', 'data_merchant.alamat', 'data_kota.nama_kota', 'data_prov.namaprov', null); //set column field database for datatable orderable
	var $column_search = array('data_merchant.nama_merc'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('data_merchant.id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//admin

	private function _get_datatables_query()
	{

		$this->db->select("data_merchant.*, data_kota.nama_kota, data_prov.namaprov");
		$this->db->from($this->table);
		$this->db->join('data_kota', 'data_merchant.id_kota = data_kota.id');
		$this->db->join('data_prov', 'data_kota.id_prov = data_prov.id');

		$i = 0;

		foreach ($this->column_search as $item) // loop column 
		{
			if ($_POST['search']['value']) // if datatable send POST for search
			{

				if ($i === 0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if (isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
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
		$this->db->select("data_merchant.*, data_kota.nama_kota, data_prov.namaprov");
		$this->db->from($this->table);
		$this->db->join('data_kota', 'data_merchant.id_kota = data_kota.id');
		$this->db->join('data_prov', 'data_kota.id_prov = data_prov.id');
		return $this->db->count_all_results();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function get_by_id($id)
	{
		$this->db->select("data_merchant.*, data_kota.nama_kota, data_prov.namaprov");
		$this->db->from($this->table);
		$this->db->join('data_kota', 'data_merchant.id_kota = data_kota.id');
		$this->db->join('data_prov', 'data_kota.id_prov = data_prov.id');
		$this->db->where('data_merchant.id', $id);
		$query = $this->db->get();

		return $query->row();
	}


	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	public function get_kota()
	{
		$this->db->select("data_kota.*,  data_prov.namaprov")
			->from('data_kota')
			->order_by('data_kota.id');
		$this->db->join('data_prov', 'data_kota.id_prov = data_prov.id');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function save_log($data)
	{
		$this->db->insert('log', $data);
		return $this->db->insert_id();
	}
}

/* End of file */
/* Location: */
