<?php
class AuditoriaC extends My_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('bienvenida_model'); 
		$this->load->library('form_validation'); 
	}

	function index(){
		$data = "";
		$nombreVista="backend/auditoria/auditoria_view";
		$this->cargarVista($nombreVista, $data);
	}
}
?>