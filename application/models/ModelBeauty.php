<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelBeauty extends CI_Model {
public function __construct() {
		parent::__construct();
	
	}
	public function insert($tablename, $where)
	{
		return $this->db->insert($tablename, $where);
	}

	public function get_data_id($id)
	{
		$query = $this->db->get_where('beautyhacks', array('id_beauty' => $id));
		return $query->row_array();
	}

	public function gettable($tablename)
	{
		$data = $this->db->query("SELECT * FROM $tablename");
		return $data->result_array();
	}
	public function hapusBeauty($id)
	{
		$this->db->where('id_beauty', $id);
		$this->db->delete('beautyhacks');
	}
}
	
?>	