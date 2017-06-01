<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class ContBeauty extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("ModelBeauty");
	}
	public function index()
	{
		if($this->session->userdata('aksesadmin'))
		{
        
			$table = "beautyhacks";
			$data['data'] = $this->ModelBeauty->gettable($table);	
	        $this->load->view('beauty', $data);
	        
  }else
        {
            $this->load->view('indexLogin');
        }
}	
	public function editBeauty($id)
	{
		$this->form_validation->set_rules('judul','judul', 'required');
		if($this->form_validation->run() === FALSE)
		{
			$data['data'] = $this->ModelBeauty->get_data_id($id);
			$this->load->view('editbeauty', $data);
		} else {
		// mendapatkan semua data dari view

			//$this->model_artikel->edit_data($id);
				$data = array(
						'JUDUL' => $this->input->post('judul'),
						'DETAILS' => $this->input->post('details')

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
					'DETAILS' => $this->input->post('details'),
					'path' => $target_Path
				);
				$query = $this->db->where('id_beauty', $id);
				$query = $this->db->update('beautyhacks', $data);
				if($query)
				{
					if ($target_Path != NULL) {
						move_uploaded_file( $_FILES['path']['tmp_name'], $target_Path );
					}
					echo '<script language="javascript">';
					echo 'alert("File berhasil ditambahkan");';
					echo 'window.history.go(-1);';
					echo '</script>';
					redirect('ContBeauty/index');
				}
				else
				{
					echo '<script language="javascript">';
					echo 'alert("Gagal menyimpan file");';
					echo 'window.history.go(-1);';
					echo '</script>';
				}
				$res = $this->db->insert('beautyhacks',$data_insert);
				
}
}
		}
	public function listBeauty()
	{
		/*if($this->session->userdata('akses'))
		{*/
			$table = "beautyhacks";
			$data['data'] = $this->ModelBeauty->gettable($table);
			$this->load->view('beauty', $data);
    	}
    public function tambahBeautyhacks() {
    	$this->load->view('addbeauty');
    }
   
    public function do_add()
	{ 	

		$data_insert = array(
			'JUDUL' => $this->input->post('judul'),
			'DETAILS' => $this->input->post('details'),
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
					'DETAILS' => $this->input->post('details'),
					'path' => $target_Path
				);
				$query = $this->db->where('id_beauty', $id);
				$query = $this->db->insert('beautyhacks', $data);
				if($query)
				{
					if ($target_Path != NULL) {
						move_uploaded_file( $_FILES['path']['tmp_name'], $target_Path );
					}
					echo '<script language="javascript">';
					echo 'alert("File berhasil ditambahkan");';
					echo 'window.history.go(-1);';
					echo '</script>';
					redirect('ContBeauty/index');
				}
				else
				{
					echo '<script language="javascript">';
					echo 'alert("Gagal menyimpan file");';
					echo 'window.history.go(-1);';
					echo '</script>';
				}
				$res = $this->db->insert('beautyhacks',$data_insert);
		
}
}






		/*$res = $this->db->insert('beautyhacks',$data_insert);
			if($res>=1){
				redirect('contBeauty/index');
			}else{
				echo "gagal";
			}
	}*/
	public function hapusBeauty($id) {
    	$this->ModelBeauty->hapusBeauty($id);
    	redirect('ContBeauty/listBeauty');
    }
	}

	