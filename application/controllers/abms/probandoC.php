<?php
class ProbandoC extends My_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('abms/probando_model'); 
		$this->load->model('bienvenida_model'); 
		$this->load->library('form_validation'); 
	}

	function index(){

		
		$data['respuestas'] = $this->probando_model->obtenerRespuestas();	
		
		

		$nombreVista="backend/abms/probando";
		$this->cargarVista($nombreVista, $data);
	}
}
?>