<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelEmail extends CI_Model {
public function __construct() {
		parent::__construct();
	
	}
	public function insert($tablename, $where)
	{
		return $this->db->insert($tablename, $where);
	}
	public function gettable_sort($tablename, $order_by){
		return $this->db->query("SELECT * FROM $tablename ORDER BY $order_by ASC")->result_array();
	}
	public function delete_data($id)
	{
		return $this->db->delete('bookmakeup', array('id_book'=>$id));
	}
	public function getemail($email){
		$query = $this->db->get_where('bookmakeup', array('email' => $email));
		return $query->row_array();
	}
	public function gettablecustomer($tablename){
		//return $this->db->query("SELECT * FROM $tablename");->result_array();
		$datasubscriber = $this->db->query("SELECT * FROM $tablename");
		return $datacustomer->result_array();
	}
	
	}
?>	