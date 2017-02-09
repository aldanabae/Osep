<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BienvenidaC extends My_Controller{

    function __construct(){
      	parent::__construct(); //Ejecuta el controlador del padre
      	$this->load->model('bienvenida_model');
  	}

  	function index(){
        $data="";
        $nombreVista="backend/bienvenida";
  			$this->cargarVista($nombreVista,$data);
    }
    
}
?>