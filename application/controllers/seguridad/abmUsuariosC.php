<?php
class AbmUsuariosC extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('seguridad/abmUsuarios_model');
		$this->load->model('seguridad/abmNiveles_model');
		$this->load->model('bienvenida_model'); 
		$this->load->library('form_validation');  
	}

	function index(){
		//if($this->session->userdata('logged_in')){
			if (!isset($_POST['CargarTabla1'])){
				$data['nroLegajo'] = '';
				$data['limiteTabla'] = "1000";
				$data['tablaEmpleados'] = $this->abmUsuarios_model->obtenerEmpleados($data['nroLegajo']);
				$data['nombresNiveles']	="";
				$data['niveles'] = $this->abmNiveles_model->obtenerNiveles($data['nombresNiveles']);
			//}

			if (!isset($_POST['CargarTabla2'])){
				$data['nombresUsuarios'] = '';
				$data['limiteTabla'] = 1000;
				$data['tablaUsuarios'] = $this->abmUsuarios_model->obtenerUsuarios($data['nombresUsuarios']);	
			}

			//mantener sidebar dinamica
			//$session_data = $this->session->userdata('logged_in');
      		//$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

			$this->load->view('backend/header');
			$this->load->view('backend/sidebar', $data);
			$this->load->view('backend/seguridad/abmUsuarios', $data);
			$this->load->view('backend/footer');

		//}else{
		//	$this->load->helper(array('form'));
		//	$this->load->view('backend/login_view');
		//}
	}
	}

	function mostrarTablaUsuarios(){
		//if($this->session->userdata('logged_in')){
			$data['dniE'] = $this->input->post('dniE');	
			$data['tablaEmpleados'] = $this->abmUsuarios_model->obtenerEmpleados($data['dniE']);

			$data['nombresUsuarios'] = $this->input->post('nombresUsuarios');	
			$data['limiteTabla'] = $this->input->post('longitudTabla');
			$data['tablaUsuarios'] = $this->abmUsuarios_model->obtenerUsuarios($data['nombresUsuarios']);
			$data['nombresNiveles']	="";
			$data['niveles'] = $this->abmNiveles_model->obtenerNiveles($data['nombresNiveles']);

			//mantener sidebar dinamica
			//$session_data = $this->session->userdata('logged_in');
      		//$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

			$this->load->view('backend/header');
			$this->load->view('backend/sidebar', $data);
			$this->load->view('backend/seguridad/abmUsuarios', $data);
			$this->load->view('backend/footer');

		//}else{
		//	$this->load->helper(array('form'));
		//	$this->load->view('backend/login_view');
		//}	
	}

	function cargarNuevoUsuario(){	
		//if($this->session->userdata('logged_in')){
			$data['idEmp'] = $this->uri->segment(4);
			$data['empleado'] = $this->abmUsuarios_model->obtenerEmpleado($data['idEmp']);
			$data['nivelU'] = $this->abmUsuarios_model->getNiveles();


			//mantener sidebar dinamica
			//$session_data = $this->session->userdata('logged_in');
      		//$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

			$this->load->view('backend/header');
			$this->load->view('backend/sidebar', $data);
			$this->load->view('backend/seguridad/abmUsuariosAlta', $data);
			$this->load->view('backend/footer');

		//}else{
		//	$this->load->helper(array('form'));
		//	$this->load->view('backend/login_view');
		//}
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

       	if($this->abmUsuarios_model->existeUsuario($this->input->post('usuario'))){
       		echo '<script >alert("El nombre de usuario ingresado ya se utiliza para otro responsable");</script>';
       		redirect('/seguridad/abmUsuariosC/cargarNuevoUsuario/'.$this->input->post('idEmpleado'),'refresh');

       	}

        if ($this->form_validation->run() == FALSE) {
        	echo '<script >alert("Debe completar todos los campos con *");</script>';
       		redirect('/seguridad/abmUsuariosC/cargarNuevoUsuario/'.$this->input->post('idEmpleado'),'refresh');

        } else {

            if (isset($_POST['GuardarEnDB'])){
			$this->abmUsuarios_model->crearUsuario($data);
			}
	
			redirect('/seguridad/abmUsuariosC','refresh');
        }	
	}

	function editarUsuario(){
		//if($this->session->userdata('logged_in')){
			$data['codU'] = $this->uri->segment(4);
			$data['usuario'] = $this->abmUsuarios_model->obtenerUsuario($data['codU']);
			$data['nivelU'] = $this->abmUsuarios_model->getNiveles();

			//mantener sidebar dinamica
		//	$session_data = $this->session->userdata('logged_in');
      	//	$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

			$this->load->view('backend/header');
			$this->load->view('backend/sidebar', $data);
			$this->load->view('backend/seguridad/abmUsuariosModificar', $data);
			$this->load->view('backend/footer');

		//}else{
		//	$this->load->helper(array('form'));
		//	$this->load->view('backend/login_view');
		//}
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
			$this->abmUsuarios_model->actualizarUsuario($this->uri->segment(4),$datos);
			}

			redirect('/seguridad/abmusuariosC','refresh');
        }	
	}

	function borrarUsuario(){
		$codU = $this->uri->segment(4);
		$this->abmUsuarios_model->eliminarUsuario($codU);

		redirect('/seguridad/abmUsuariosC','refresh');		
	}
}

?>