<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class ContLogin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("Mymodel");
		
	}
	public function index(){   
		if($this->session->userdata('aksesadmin')){
           
            $this->load->view('indexAdmin');
     
        }else {       
            $this->load->view('indexLogin');
         }
	}
    
    public function login(){
        if(isset($_POST['submit'])){
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil      =   $this->Mymodel->login($username,$password);
            if($hasil==TRUE){
                $this->session->set_userdata('aksesadmin',TRUE);
                //bawah ini yg ak tambahin index.php
                redirect('ContLogin');
            } else{
                echo '<script language="javascript">';
                echo 'alert("Login Gagal. Perhatikan username password");';
                echo '</script>';
                $this->load->view('indexLogin');
            }
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('Welcome');
    }
}
	