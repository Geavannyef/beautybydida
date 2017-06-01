<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class ContServices extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("ModelServices");
	}
	public function index()
	{
		if($this->session->userdata('aksesadmin')){
        
			$table = "services";
			$data['data'] = $this->ModelServices->gettable($table);	
	        $this->load->view('services', $data);
	        
  }else
        {
            $this->load->view('indexLogin');
        }
	}
	public function editServices($id)
	{
		$this->form_validation->set_rules('judul','judul', 'required');
		$this->form_validation->set_rules('caption','caption', 'required');
		if($this->form_validation->run() === FALSE)
		{
			$data['data'] = $this->ModelServices->get_data_id($id);
			$this->load->view('editservices', $data);
		} else {
		// mendapatkan semua data dari view

			//$this->model_artikel->edit_data($id);
				$data = array(
						'JUDUL' => $this->input->post('judul'),
						'CAPTION' => $this->input->post('caption'),
						'HARGA' => $this->input->post('harga'));
				$query = $this->db->where('id_services', $id);
				$query = $this->db->update('services', $data);
				redirect('ContServices/listServices');
				$target_Path = NULL;
				if ($_FILES['path']['name'] != NULL)
				{
					$target_Path = "assets/img/upload/";
					$string = basename( $_FILES['path']['name'] );
		//		$string = str_replace(" ","-", $string);
					$target_Path = $target_Path.$string;
				}
				if($target_Path!=NULL)
			{
				$data = array(
					'path' => $target_Path
				);
				$query = $this->db->where('id_services', $id);
				$query = $this->db->update('services', $data);
				if($query)
				{
					if ($target_Path != NULL) {
						move_uploaded_file( $_FILES['path']['tmp_name'], $target_Path );
					}
					echo '<script language="javascript">';
					echo 'alert("File berhasil ditambahkan");';
					echo 'window.history.go(-1);';
					echo '</script>';
				}
				else
				{
					echo '<script language="javascript">';
					echo 'alert("Gagal menyimpan file");';
					echo 'window.history.go(-1);';
					echo '</script>';
				}
	
				redirect('ContServices/listServices');
}
}
		}
	public function listServices()
	{
		if($this->session->userdata('aksesadmin'))
		{
			$table = "services";
			$data['data'] = $this->ModelServices->gettable($table);
			
			$this->load->view('services', $data);
		}else{
			$this->load->view('indexLogin');
		}
		
    	}
    public function hapusServices($judul) {
    	if($this->session->userdata('aksesadmin'))
    	{
    	$where = array('judul' => $judul);
    	$res = $this->ModelServices->hapusServices('services',$where);
    	
    	if($res>=1){
    		redirect('ContServices/index');
    	}else{
    		echo "gagal";
    		$this->load->view('indexLogin');
    		
		}
    	}
    }

    public function tambahServices() {
    	if($this->session->userdata('aksesadmin'))
    	{
    	$this->load->view('addservices');
    }else{
    	$this->load->view('indexLogin');
    }
   }
    public function do_add()
	{ 	

		$data_insert = array(
			'JUDUL' => $this->input->post('judul'),
			'CAPTION' => $this->input->post('caption'),
			'HARGA' => $this->input->post('harga'),
			'PATH' => $this->input->post('path')
		);
		$target_Path = NULL;
				if ($_FILES['path']['name'] != NULL)
				{
					$target_Path = "assets/img/upload/";
					$string = basename( $_FILES['path']['name'] );
		//		$string = str_replace(" ","-", $string);
					$target_Path = $target_Path.$string;
				}
				if($target_Path!=NULL)
			{
				$data = array(
					'JUDUL' => $this->input->post('judul'),
					'CAPTION' => $this->input->post('caption'),
					'HARGA' => $this->input->post('harga'),
					'path' => $target_Path
				);
				$query = $this->db->where('id_services', $id);
				$query = $this->db->insert('services', $data);
				if($query)
				{
					if ($target_Path != NULL) {
						move_uploaded_file( $_FILES['path']['tmp_name'], $target_Path );
					}
					echo '<script language="javascript">';
					echo 'alert("File berhasil ditambahkan");';
					echo 'window.history.go(-1);';
					echo '</script>';
					redirect('ContServices/index');
				}
				else
				{
					echo '<script language="javascript">';
					echo 'alert("Gagal menyimpan file");';
					echo 'window.history.go(-1);';
					echo '</script>';
				}
				$res = $this->db->insert('services',$data_insert);
				
}
}
 
	}

	
