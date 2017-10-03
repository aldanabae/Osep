<?php
class AbmUsuariosC extends My_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('seguridad/AbmUsuarios_model');
		$this->load->model('seguridad/AbmNiveles_model');
		$this->load->model('Bienvenida_model'); 
		$this->load->library('form_validation');  
	}

	function index(){
		if (!isset($_POST['CargarTabla1'])){
			$data['nroLegajo'] = '';
			$data['limiteTabla'] = "1000";
			$data['tablaEmpleados'] = $this->AbmUsuarios_model->obtenerEmpleados($data['nroLegajo']);
			$data['nombresNiveles']	="";
			$data['niveles'] = $this->AbmNiveles_model->obtenerNiveles($data['nombresNiveles']);
			 
		}

		if (!isset($_POST['CargarTabla2'])){
			$data['nombresUsuarios'] = '';
			$data['limiteTabla'] = 1000;
			$data['tablaUsuarios'] = $this->AbmUsuarios_model->obtenerUsuarios($data['nombresUsuarios']);	
		}

        $nombreVista="backend/seguridad/abmUsuarios";
  		$this->cargarVista($nombreVista,$data);
	}

	function mostrarTablaUsuarios(){	
		$data['dniE'] = $this->input->post('dniE');	
		$data['tablaEmpleados'] = $this->AbmUsuarios_model->obtenerEmpleados($data['dniE']);

		$data['nombresUsuarios'] = $this->input->post('nombresUsuarios');	
		$data['limiteTabla'] = $this->input->post('longitudTabla');
		$data['tablaUsuarios'] = $this->AbmUsuarios_model->obtenerUsuarios($data['nombresUsuarios']);
		$data['nombresNiveles']	="";
		$data['niveles'] = $this->AbmNiveles_model->obtenerNiveles($data['nombresNiveles']);

		$nombreVista="backend/seguridad/abmUsuarios";
		$this->cargarVista($nombreVista,$data);
	}

	function cargarNuevoUsuario(){	
		$data['idEmp'] = $this->uri->segment(4);
		$data['empleado'] = $this->AbmUsuarios_model->obtenerEmpleado($data['idEmp']);
		$data['nivelU'] = $this->AbmUsuarios_model->getNiveles();

		$nombreVista="backend/seguridad/abmUsuariosAlta";
		$this->cargarVista($nombreVista,$data);
	}

	function recibirDatos(){
		$data = array(
			'usuario' => $this->input->post('usuario'),
			'contrasenia' => $this->input->post('contrasenia'),
			'idEmpleado' => $this->input->post('idEmpleado'),
			'idNivel' => $this->input->post('nivel'));
 
        $this->form_validation->set_rules('usuario','Usuario','trim|required');
        $this->form_validation->set_rules('contrasenia','Contraseña','trim|required');
        $this->form_validation->set_rules('idEmpleado','Empleado','trim|required');
        $this->form_validation->set_rules('nivel','Nivel','trim|required');

       	$this->form_validation->set_message('required','Debe completar este campo');  
 		
       	//Verificar que no exista usuario con el nombreUsuario ingresado

       	if($this->AbmUsuarios_model->existeUsuario($this->input->post('usuario'))){
       		echo '<script >alert("El nombre de usuario ingresado ya se utiliza para otro responsable");</script>';
       		redirect('/seguridad/abmUsuariosC/cargarNuevoUsuario/'.$this->input->post('idEmpleado'),'refresh');

       	}

        if ($this->form_validation->run() == FALSE) {
        	echo '<script >alert("Debe completar todos los campos con *");</script>';
       		redirect('/seguridad/abmUsuariosC/cargarNuevoUsuario/'.$this->input->post('idEmpleado'),'refresh');

        } else {
            if (isset($_POST['GuardarEnDB'])){
			$this->AbmUsuarios_model->crearUsuario($data);
			}
	
			redirect('/seguridad/abmUsuariosC','refresh');
        }	
	}

	function editarUsuario(){
		$data['codU'] = $this->uri->segment(4);
		$data['usuario'] = $this->AbmUsuarios_model->obtenerUsuario($data['codU']);
		$data['nivelU'] = $this->AbmUsuarios_model->getNiveles();

		$nombreVista="backend/seguridad/abmUsuariosModificar";
		$this->cargarVista($nombreVista,$data);
	}	

	function actualizarDatos(){
		$this->load->library('form_validation');

		$data['codU'] = $this->uri->segment(4);
		$datos = array(
			'usuario' => $this->input->post('usuario'),
			'contrasenia' => $this->input->post('contrasenia'),
			'idEmpleado' => $this->input->post('idEmpleado'),
			'idNivel' => $this->input->post('nivel'));

		$this->form_validation->set_rules('usuario','Usuario','trim|required');
        $this->form_validation->set_rules('contrasenia','Contraseña','trim|required');
        $this->form_validation->set_rules('idEmpleado','Empleado','trim|required');
        $this->form_validation->set_rules('nivel','Nivel','trim|required');

       	$this->form_validation->set_message('required','Debe completar este campo'); 
 
        if ($this->form_validation->run() == FALSE) {
        	echo '<script >alert("Debe completar todos los campos con *");</script>';
       		 redirect('/seguridad/abmUsuariosC/editarUsuario/'.$data['codU'],'refresh');

        } else {
           	if (isset($_POST['ActualizarEnDB'])){
			$this->AbmUsuarios_model->actualizarUsuario($this->uri->segment(4),$datos);
			}

			redirect('/seguridad/abmusuariosC','refresh');
        }	
	}

	function borrarUsuario(){
		$codU = $this->uri->segment(4);
		$this->AbmUsuarios_model->eliminarUsuario($codU);

		redirect('/seguridad/abmUsuariosC','refresh');		
	}
}

?>