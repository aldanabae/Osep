<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BienvenidaC extends My_Controller {

    function __construct(){
    	parent::__construct(); //Ejecuta el controlador del padre
    	//$this->load->model('bienvenida_model');
  	}

  	function index(){
  		if($this->session->userdata('logged_in')){

       $session_data = $this->session->userdata('logged_in'); 
      	$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

      	//$this->load->view('backend/header');
				//$this->load->view('backend/sidebar', $data);
				$this->load->view('backend/bienvenida');
				//$this->load->view('backend/footer');
   
			}else{
				$this->load->helper(array('form'));
			   $this->load->view('login');
 	    }   
    }
}
?>