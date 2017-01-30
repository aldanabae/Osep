<?php
class AbmEmpleadosC extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('abms/abmEmpleados_model'); 
		$this->load->model('bienvenida_model'); 
		$this->load->library('form_validation'); 
	}

	function index(){
		//if($this->session->userdata('logged_in')){
			if (!isset($_POST['CargarTabla'])){
				$data['dniR'] = '';
				$data['limiteTabla'] = "1000";
				$data['tablaEmpleados'] = $this->abmEmpleados_model->obtenerEmpleados($data['dniR']);	
			}
			//mantener sidebar dinamica
			//$session_data = $this->session->userdata('logged_in');
      		//$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

			$this->load->view('backend/header');
			$this->load->view('backend/sidebar', $data);
			$this->load->view('backend/abms/abmEmpleados', $data);
			$this->load->view('backend/footer');

		//}else{
		//	$this->load->helper(array('form'));
		//	$this->load->view('backend/login_view');
		//}
	}

	function mostrarTablaEmpleados(){
		//if($this->session->userdata('logged_in')){
			$data['nroLegajo'] = $this->input->post('nroLegajo');	
			$data['limiteTabla'] = "1000";
			$data['tablaEmpleados'] = $this->abmEmpleados_model->obtenerEmpleados($data['nroLegajo']);

			//mantener sidebar dinamica
			//$session_data = $this->session->userdata('logged_in');
      		//$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);
				
			$this->load->view('backend/header');
			$this->load->view('backend/sidebar', $data);
			$this->load->view('backend/abms/abmResponsables', $data);
			$this->load->view('backend/footer');

		//}else{
		//	$this->load->helper(array('form'));
		//	$this->load->view('backend/login_view');
		//}	
	}

	function cargarNuevoResponsable(){	
		if($this->session->userdata('logged_in')){
			$data['servicio'] = $this->abmResponsables_model->getServicio();
			$data['especialidad'] = $this->abmResponsables_model->getEspecialidad();
			$data['ultimoEnfermero'] = $this->abmResponsables_model->getUltimoEnfermero();

			//mantener sidebar dinamica
			$session_data = $this->session->userdata('logged_in');
      		$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

			$this->load->view('backend/header');
			$this->load->view('backend/sidebar', $data);
			$this->load->view('backend/abms/abmResponsablesAlta', $data);
			$this->load->view('backend/footer');

		}else{
			$this->load->helper(array('form'));
			$this->load->view('backend/login_view');
		}
	}

	function recibirDatos(){
		$data = array(
			'nombreR' => $this->input->post('nombreR'),
			'apellidoR' => $this->input->post('apellidoR'),
			'telefonoR' => $this->input->post('telefonoR'),
			'direccionR' => $this->input->post('direccionR'),
			'dniR' => $this->input->post('dniR'),
			'tipoResponsable' => $this->input->post('tipoResponsable'),
			'matricula' => $this->input->post('matricula'),
			'nroLegajo' => $this->input->post('nroLegajo'),
			'codEspecialidad' => $this->input->post('especialidad'),
			'codServicio' => $this->input->post('servicio'));
 
        $this->form_validation->set_rules('nombreR','Nombre Responsable','trim|required');
        $this->form_validation->set_rules('apellidoR','Apellido Responsable','trim|required');
        $this->form_validation->set_rules('telefonoR','Telefono','trim|required');
        $this->form_validation->set_rules('direccionR','Direccion','trim|required');
        $this->form_validation->set_rules('dniR','Nº Documento','trim|required');
        $this->form_validation->set_rules('tipoResponsable','Tipo Responsable','trim|required');

       	$this->form_validation->set_message('required','Debe completar este campo');  
 
        if ($this->form_validation->run() == FALSE) {
       		 echo '<script >alert("Debe completar todos los campos con *");</script>';
       		 redirect('/abms/abmResponsablesC/cargarNuevoResponsable','refresh');

        } else {
            if (isset($_POST['GuardarEnDB'])){
				$this->abmResponsables_model->crearResponsable($data);
			}
	
			redirect('/abms/abmResponsablesC','refresh');
        }	
	}

	function editarResponsable(){
		if($this->session->userdata('logged_in')){
			$data['servicio'] = $this->abmResponsables_model->getServicio();
			$data['especialidad'] = $this->abmResponsables_model->getEspecialidad();
			$data['ultimoEnfermero'] = $this->abmResponsables_model->getUltimoEnfermero();

			$data['codR'] = $this->uri->segment(4);
			$data['responsable'] = $this->abmResponsables_model->obtenerResponsable($data['codR']);

			//mantener sidebar dinamica
			$session_data = $this->session->userdata('logged_in');
      		$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);
			
			foreach ($data['responsable']->result() as $res){
				if ($res->tipoResponsable == "Médico"){
					$this->load->view('backend/header');
					$this->load->view('backend/sidebar', $data);
					$this->load->view('backend/abms/abmResponsablesModificarM', $data);
					$this->load->view('backend/footer');
				
				}elseif ($res->tipoResponsable == "Enfermero"){	
					$this->load->view('backend/header');
					$this->load->view('backend/sidebar', $data);
					$this->load->view('backend/abms/abmResponsablesModificarE', $data);
					$this->load->view('backend/footer');

				}elseif ($res->tipoResponsable != "Enfermero" && $res->tipoResponsable != "Médico"){	
					$this->load->view('backend/header');
					$this->load->view('backend/sidebar', $data);
					$this->load->view('backend/abms/abmResponsablesModificarT', $data);
					$this->load->view('backend/footer');
				}
			}

		}else{
			$this->load->helper(array('form'));
			$this->load->view('backend/login_view');
		}	
	}

	function actualizarDatos(){
		$data['codR'] = $this->uri->segment(4);
		$datos = array(
			'nombreR' => $this->input->post('nombreR'),
			'apellidoR' => $this->input->post('apellidoR'),
			'telefonoR' => $this->input->post('telefonoR'),
			'direccionR' => $this->input->post('direccionR'),
			'dniR' => $this->input->post('dniR'),
			'tipoResponsable' => $this->input->post('tipoResponsable'),
			'matricula' => $this->input->post('matricula'),
			'nroLegajo' => $this->input->post('nroLegajo'),
			'codEspecialidad' => $this->input->post('especialidad'),
			'codServicio' => $this->input->post('servicio'));

		$this->form_validation->set_rules('nombreR','Nombre Responsable','trim|required');
        $this->form_validation->set_rules('apellidoR','Apellido Responsable','trim|required');
        $this->form_validation->set_rules('telefonoR','Telefono','trim|required');
        $this->form_validation->set_rules('direccionR','Direccion','trim|required');
        $this->form_validation->set_rules('dniR','Nº Documento','trim|required');
        $this->form_validation->set_rules('tipoResponsable','Tipo Responsable','trim|required');

       	$this->form_validation->set_message('required','Debe completar este campo');  
 
        if ($this->form_validation->run() == FALSE) {
       		echo '<script >alert("Debe completar todos los campos con *");</script>';
       		redirect('/abms/abmResponsablesC/editarResponsable/'.$data['codR'],'refresh');

        } else {
           	if (isset($_POST['ActualizarEnDB'])){
				$this->abmResponsables_model->actualizarResponsable($this->uri->segment(4),$datos);
			}

			redirect('/abms/abmResponsablesC','refresh');
        }	
	}

	function borrarResponsable(){
		$codR = $this->uri->segment(4);
		$this->abmResponsables_model->eliminarResponsable($codR);

		redirect('/abms/abmResponsablesC','refresh');		
	}
}