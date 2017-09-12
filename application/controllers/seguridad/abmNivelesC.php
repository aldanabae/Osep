<?php
class AbmNivelesC extends My_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('seguridad/AbmNiveles_model');
		$this->load->model('Bienvenida_model');
		$this->load->library('form_validation');   
	}
	function index(){
		if (!isset($_POST['CargarTabla'])){
			$data['nombresNiveles'] = '';
			$data['limiteTabla'] = 1000;
			$data['tablaNiveles'] = $this->AbmNiveles_model->obtenerNiveles($data['nombresNiveles']);	
		}
		
    	$nombreVista="backend/seguridad/abmNiveles";
		$this->cargarVista($nombreVista,$data);
	}
	function mostrarTablaNiveles(){
		$data['nombresNiveles'] = $this->input->post('nombresNiveles');
		$data['limiteTabla'] = $this->input->post('longitudTabla');
		$data['tablaNiveles'] = $this->AbmNiveles_model->obtenerNiveles($data['nombresNiveles']);
		$nombreVista="backend/seguridad/abmNiveles";
		$this->cargarVista($nombreVista,$data);
	}
	function cargarNuevoNivel(){
      	$data="";
      	$nombreVista="backend/seguridad/abmNivelesAlta";
		$this->cargarVista($nombreVista,$data);
	}
	function recibirDatos(){
		$data = array(
			'descripcionNivel' => $this->input->post('descripcionNivel'));
 
        $this->form_validation->set_rules('descripcionNivel','Nombre Nivel','trim|required');
       	$this->form_validation->set_message('required','Debe completar el campo %s');  
 
        if ($this->form_validation->run() == FALSE) {
        	echo '<script >alert("Debe completar el campo");</script>';
       		 redirect('/seguridad/abmNivelesC/cargarNuevoNivel','refresh');
        } else {
            if (isset($_POST['GuardarEnDB'])){
			$this->AbmNiveles_model->crearNivel($data);
			}
			redirect('/seguridad/abmNivelesC','refresh');
        }	
	}
	function editarNivel(){
		$data['codN'] = $this->uri->segment(4);
		$data['nivel1'] = $this->AbmNiveles_model->obtenerNivel($data['codN']);
      	$nombreVista="backend/seguridad/abmNivelesModificar";
		$this->cargarVista($nombreVista,$data);
	}	
	function actualizarDatos(){
		$data['codN'] = $this->uri->segment(4);
		$datos = array(
			'descripcionNivel' => $this->input->post('descripcionNivel'));
		$this->form_validation->set_rules('descripcionNivel','Nombre Nivel','trim|required');
       	$this->form_validation->set_message('required','Debe completar el campo %s'); 
 
        if ($this->form_validation->run() == FALSE) {
       		 echo '<script >alert("Debe completar el campo");</script>';
       		 redirect('/seguridad/abmNivelesC/editarNivel/'.$data['codN'],'refresh');
        } else {
           	if (isset($_POST['ActualizarEnDB'])){
				$this->AbmNiveles_model->actualizarNivel($this->uri->segment(4),$datos);
			}
			redirect('/seguridad/abmNivelesC','refresh');
        }
	}
	function borrarNivel(){
		$codN = $this->uri->segment(4);
		$this->AbmNiveles_model->eliminarNivel($codN);
	
		redirect('/seguridad/abmNivelesC','refresh');		
	}
}