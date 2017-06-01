<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelServices extends CI_Model {
public function __construct() {
		parent::__construct();
	
	}
	public function insert($tablename, $where)
	{
		return $this->db->insert($tablename, $where);
	}

	public function get_data_id($id)
	{
		$query = $this->db->get_where('services', array('id_services' => $id));
		return $query->row_array();
	}

	public function gettable($tablename)
	{
		$data = $this->db->query("SELECT * FROM $tablename");
		return $data->result_array();
	}
	public function hapusServices($namaTabel,$where)
	{
		$res = $this->db->delete($namaTabel,$where);
		return $res;
	}
	
}
	
?>	