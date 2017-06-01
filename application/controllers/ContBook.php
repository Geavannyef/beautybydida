<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class ContBook extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("ModelBook");
		$this->load->model("Mymodel");
		$this->load->model("ModelAbout");
		$this->load->model("ModelServices");
		$this->load->model("ModelTutorials");
		$this->load->model("ModelBeauty");
		$this->load->model("ModelBook");

	}
	public function index()
	{
		if($this->session->userdata('aksesadmin')){
 
		$table = "bookmakeup";
			$data['data'] = $this->ModelBook->gettable($table);	
	        $this->load->view('bookmakeup', $data);
	        	
	   //     $this->load->view('indexFP');
	        
	        
  }else{
            $this->load->view('indexLogin');
        }
    }
	public function bookmakeup(){
		//$this->do_upload();
		/*
		$nama = $_POST['nama'];
		$tgl = $_POST['tgl'];
		$waktu = $_POST['waktu'];
		$telpon = $_POST['telpon'];
		$kec = $_POST['kec'];
		$kel = $_POST['kel'];
		$alamat = $_POST['alamat'];
		$jenispaket = $_POST['jenispaket'];
		$tambahan = $_POST['tambahan'];
		
//		$image = $_POST['pic'];*/
		$data = array(
			'nama' => $this->input->post('nama'),
			'tgl' => $this->input->post('tgl'),
			'waktu' => $this->input->post('waktu'),
			'telpon' => $this->input->post('telpon'),
			'kec' => $this->input->post('kec'),
			'kel' => $this->input->post('kel'),
			'alamat' => $this->input->post('alamat'),
			'jenispaket' => $this->input->post('jenispaket'),
			'tambahan' => $this->input->post('tambahan'),
			
			);
			$query = $this->db->where('id_book', $id);
			$query = $this->db->insert('bookmakeup', $data);
			//$res = $this->db->insert('bookmakeup',$data_insert);
			redirect('ContBook/listBook');  

     //      $this->index(); 
			
	}

	public function listBook()
	{
		/*if($this->session->userdata('akses'))
		{*/
			$table = "bookmakeup";
			$data['data'] = $this->ModelBook->gettable($table);
			$this->load->view('bookmakeup', $data);
    	}
   public function hapusBook($id)
    {
    	$this->ModelBook->hapusBook($id);
    	redirect('ContBook/listBook');
    }
    
	}

	