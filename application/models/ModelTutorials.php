<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelTutorials extends CI_Model {
public function __construct() {
		parent::__construct();
	
	}
	public function insert($tablename, $where)
	{
		return $this->db->insert($tablename, $where);
	}

	public function get_data_id($id)
	{
		$query = $this->db->get_where('tutorials', array('id_tutorials' => $id));
		return $query->row_array();
	}

	public function gettable($tablename)
	{
		$data = $this->db->query("SELECT * FROM $tablename");
		return $data->result_array();
	}
	/*public function hapusTutorials($namaTabel,$where)
	{
		$res = $this->db->delete($namaTabel,$where);
		return $res;
	}*/
	public function hapusTutorials($id)
	{
		$this->db->where('id_tutorials', $id);
		$this->db->delete('tutorials');
}
	}
?>	