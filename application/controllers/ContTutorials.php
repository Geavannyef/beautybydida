<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class ContTutorials extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("ModelTutorials");
	}
	public function index()
	{
		if($this->session->userdata('aksesadmin')){
        
			$table = "tutorials";
			$data['data'] = $this->ModelTutorials->gettable($table);	
	        $this->load->view('tutorials', $data);
	        
  }else
        {
            $this->load->view('indexLogin');
        }
}	
	public function editTutorials($id)
	{
		$this->form_validation->set_rules('path','path', 'required');
		if($this->form_validation->run() === FALSE)
		{
			$data['data'] = $this->ModelTutorials->get_data_id($id);
			$this->load->view('edittutorials', $data);
		} else {
			$data = array(
			'PATH' => $this->input->post('path')
			);
			$query = $this->db->where('id_tutorials', $id);
			$query = $this->db->update('tutorials', $data);
			redirect('ContTutorials/listTutorials');
		}
		
		
		
}

	public function listTutorials()
	{
		if($this->session->userdata('aksesadmin'))
		{
			$table = "tutorials";
			$data['data'] = $this->ModelTutorials->gettable($table);
			$this->load->view('tutorials', $data);
    	}else{
    		$this->load->view('indexLogin');
    	}
    }
    /*public function hapusTutorials($path)
    {
    	$where = array('path' => $path);
    	$res = $this->modelTutorials->hapusTutorials('tutorials',$where);
    	if($res>=1){
    		redirect('contTutorials/index');
    	}else{
    		echo "gagal";
    	}
    }*/
    public function hapusTutorials($id)
    {
    	$this->ModelTutorials->hapusTutorials($id);
    	if($this->session->userdata('aksesadmin'))
		{
    	redirect('ContTutorials/listTutorials');
    }else{
    	$this->load->view('indexLogin');
    }
    }
    public function tambahTutorials()
    {
    	if($this->session->userdata('aksesadmin'))
		{
    	$this->load->view('addtutorials');
    }else{
    	$this->load->view('indexLogin');
    }
	}
	public function do_add()
	{
		if($this->session->userdata('aksesadmin'))
		{
		$path = $_POST['path'];
		$data_insert = array(
			'path' => $path
			);
			$res = $this->db->insert('tutorials',$data_insert);
			if($res>=1){
				redirect('ContTutorials/index');
			}else{
				echo "gagal";
				$this->load->view('indexLogin');
			}
	}
	}
}
	

	
