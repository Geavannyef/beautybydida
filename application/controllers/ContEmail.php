<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class ContAbout extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("ModelEmail");
	}
	public function index()
	{
		$this->form_validation->set_rules('nama', 'NAMA', 'required');
		$this->form_validation->set_rules('email', 'EMAIL', 'required|Valid_email');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$data=array(
			'NAMA_CUSTOMER' => $nama,
			'EMAIL_CUSTOMER' => $email,
			);
				
		$res=$this->ModelEmail->insert('customer', $data);
		$sender_email = "beautybydidajember@gmail.com";
		$user_password = "didabeautyjember";
		$username = "Beuaty by Dida";
		$receiver_email = $this->input->post('email');
		$subject = "Thankyou For Your Booking";
		$message = "Hello Beauties! Terimakasih atas orderannya :) Beauty by Dida akan mengontak kamu secepat mungkin untuk konfirmasi lebih lanjut! Nice to meet you :)";
		
		$message .= '<a href="http://instagram.com/didatouch">See Our Instagram❤';
		$this->emailConfig();
		$this->email->from($sender_email, $username);
		$this->email->to($receiver_email);
		$this->email->subject($subject);
		$this->email->message($message);
		//$mail =
		if($this->email->send()){
			//? "Sent" : "Failed" ;
		
		echo '<script language="javascript">';
				echo 'alert("Thankyou for your booking!");';
				echo 'window.history.go(-1);';
				echo '</script>'; 
		}else{
		echo '<script language="javascript">';
				echo 'alert("Failed to booking.");';
				echo 'window.history.go(-1);';
				echo '</script>';
		}
		//echo $this->email->print_debugger();
		//echo $mail;
	}
	
	private function emailConfig(){
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_port'] = 465;
		$config['smtp_user'] = 'beautybydidajember@gmail.com';
		$config['smtp_pass'] = 'didabeautyjember';
		$config['mailtype']= 'html';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;
	
		$this->load->library('email', $config);
	}

	public function view(){
		if($this->session->userdata('aksesadmin')){
           
            $data['data'] = $this->ModelEmail->gettable_sort("bookmakeup", "id_book");
            $this->load->view('indexAdmin', $data);
            
        }else{
            $this->load->view('indexlogin');
        }
	}

	}

	