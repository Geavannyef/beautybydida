<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	function login($username,$password){
        $cek = $this->db->get_where('user',array('username'=>$username,'password'=>
        //md5
        ($password)));
        if($cek->num_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
	}

	
?>	