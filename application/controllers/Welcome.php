<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class Welcome extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("Mymodel");
		$this->load->model("ModelAbout");
		$this->load->model("ModelServices");
		$this->load->model("ModelTutorials");
		$this->load->model("ModelBeauty");
		$this->load->model("ModelBook");
	}

	public function index()
	{

		$table="about";
		$dataabout['dataabout'] = $this->ModelAbout->gettable($table);
		$table2="services";
		$dataabout['dataservices'] = $this->ModelServices->gettable($table2);
		$table3="tutorials";
		$dataabout['datatutorials'] = $this->ModelTutorials->gettable($table3);
		$table3="beautyhacks";
		$dataabout['databeauty'] = $this->ModelBeauty->gettable($table3);
		$this->load->view('indexFP', $dataabout);

	}
	public function indexLogin()
	{

		$this->load->view('indexLogin');
	}
	
	
	public function beauty_hacks()
	{
		$table3="beautyhacks";
		$dataabout['databeauty'] = $this->ModelBeauty->gettable($table3);
		$this->load->view('indexFP2', $dataabout);
	}
	public function indexAdmin()
	{
		$this->load->view('indexAdmin');
	}
	
	public function tables()
	{
		$this->load->view('tables');
	}
	
	
}
