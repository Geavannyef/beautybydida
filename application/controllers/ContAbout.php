<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class ContAbout extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("ModelAbout");
	}
	public function index()
	{
		if($this->session->userdata('aksesadmin'))
		{
        
			$table = "about";
			$data['data'] = $this->ModelAbout->gettable($table);	
	        $this->load->view('about', $data);
	        
  }else
        {
            $this->load->view('indexLogin');
        }
	}
	public function editAbout($id)
	{
		$this->form_validation->set_rules('section','section', 'required');
		if($this->form_validation->run() === FALSE)
		{
			$data['data'] = $this->ModelAbout->get_data_id($id);
			$this->load->view('editabout', $data);
		} else {
		// mendapatkan semua data dari view

			//$this->model_artikel->edit_data($id);
				$data = array(
						'SECTION' => $this->input->post('section'));
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
				$query = $this->db->where('id_about', $id);
				$query = $this->db->update('about', $data);
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
	
				redirect('ContAbout/listAbout');
}
}
		}
	public function listAbout()
	{
		/*if($this->session->userdata('akses'))
		{*/
			$table = "about";
			$data['data'] = $this->ModelAbout->gettable($table);
			$this->load->view('about', $data);
    	}

    
	}

	