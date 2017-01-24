<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorPadre extends CI_My_Controller {
	
	function __construct(){
    	parent::__construct();
  	} 

	public function index(){
		//if($this->session->userdata('logged_in')){

      		redirect('bienvenidaC', 'refresh');

          $this->load->view('backend/header');
        //$this->load->view('backend/sidebar',$data);
          $this->load->view('bienvenida');
          $this->load->view('backend/footer');
    	//}
    	//else{

       //   $this->load->helper(array('form'));
			 //   $this->load->view('backend/login_view');
	//	}
	}	

}
