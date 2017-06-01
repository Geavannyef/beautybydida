<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelBook extends CI_Model {
public function __construct() {
		parent::__construct();
	
	}
	public function insert($tablename, $where)
	{
		return $this->db->insert($tablename, $where);
	}
	public function get_data_id($id)
	{
		$query = $this->db->get_where('bookmakeup', array('id_book' => $id));
		return $query->row_array();
	}

	public function gettable($tablename)
	{
		$data = $this->db->query("SELECT * FROM $tablename");
		return $data->result_array();
	}
	public function addData($data) {
		$this->db->insert('bookmakeup', $data); 
		
		
	}
	public function hapusBook($id)
	{
		$this->db->where('id_book', $id);
		$this->db->delete('bookmakeup');
}
	
	/*public function GetBook($where=""){
		$data= $this->db->query('select * from bookmakeup'.$where);
		return $data->result_array();
	}
	/*public function get_data_id($id)
	{
		$query = $this->db->get_where('bookmakeup', array('id_book' => $id));
		return $query->row_array();
	}*/

	/*public function gettable($tablename)
	{
		$data = $this->db->query("SELECT * FROM $tablename");
		return $data->result_array();
	}*/
	
}
	
?>	