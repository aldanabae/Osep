<?php
class AbmEmpleadosC extends My_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('abms/AbmEmpleados_model'); 
		$this->load->model('Bienvenida_model'); 
		$this->load->library('form_validation'); 
	}

	function index(){
		if (!isset($_POST['CargarTabla'])){
			$data['nroLegajo'] = '';
			$data['limiteTabla'] = "1000";
			$data['tablaEmpleados'] = $this->AbmEmpleados_model->obtenerEmpleados($data['nroLegajo']);	
		}

		$nombreVista="backend/abms/abmEmpleados";
		$this->cargarVista($nombreVista, $data);
	}

	function mostrarTablaEmpleados(){
		$data['nroLegajo'] = $this->input->post('nroLegajo');	
		$data['limiteTabla'] = "10000";
		$data['tablaEmpleados'] = $this->AbmEmpleados_model->obtenerEmpleados($data['nroLegajo']);	

      	$nombreVista="backend/abms/abmEmpleados";
		$this->cargarVista($nombreVista, $data);
	}

	function cargarNuevoEmpleado(){	
		$data['tipoEmpleado'] = $this->AbmEmpleados_model->getTipoEmpleado();
		$nombreVista="backend/abms/abmEmpleadosAlta";
		$this->cargarVista($nombreVista, $data);
	}

	function recibirDatos(){
		$data = array(
			'nombreE' => $this->input->post('nombreE'),
			'apellidoE' => $this->input->post('apellidoE'),
			'telefono' => $this->input->post('telefono'),
			'direccion' => $this->input->post('direccion'),
			'dni' => $this->input->post('dni'),
			'tipoEmpleado' => $this->input->post('tipoEmpleado'),
			'nroLegajo' => $this->input->post('nroLegajo'),
			'email' => $this->input->post('email'),
			'convenio' => $this->input->post('convenio'));
 
        $this->form_validation->set_rules('nombreE','Nombre Empleado','trim|required');
        $this->form_validation->set_rules('apellidoE','Apellido Empleado','trim|required');
        $this->form_validation->set_rules('dni','Nº Documento','trim|required');
        $this->form_validation->set_rules('tipoEmpleado','Tipo Responsable','trim|required');
        $this->form_validation->set_rules('nroLegajo','Nº Legajo','trim|required');

       	$this->form_validation->set_message('required','Debe completar este campo');  
 
        if ($this->form_validation->run() == FALSE) {
       		 echo '<script >alert("Debe completar todos los campos con *");</script>';
       		 redirect('/abms/abmEmpleadosC/cargarNuevoEmpleado','refresh');

        } else {
            if (isset($_POST['GuardarEnDB'])){
				$this->AbmEmpleados_model->crearEmpleado($data);
			}
	
			redirect('/abms/abmEmpleadosC','refresh');
        }	
	}

	function editarEmpleado(){
		$data['codE'] = $this->uri->segment(4);
		$data['empleado'] = $this->AbmEmpleados_model->obtenerEmpleado($data['codE']);
		$data['tipoEmpleado'] = $this->AbmEmpleados_model->getTipoEmpleado();
		
		$nombreVista="backend/abms/abmEmpleadosModificar";
		$this->cargarVista($nombreVista, $data);
	}

	function actualizarDatos(){
		$data['codE'] = $this->uri->segment(4);
		$datos = array(
					'nombreE' => $this->input->post('nombreE'),
					'apellidoE' => $this->input->post('apellidoE'),
					'telefono' => $this->input->post('telefono'),
					'direccion' => $this->input->post('direccion'),
					'dni' => $this->input->post('dni'),
					'idTipoEmpleado' => $this->input->post('idTipoEmpleado'),
					'nroLegajo' => $this->input->post('nroLegajo'),
					'email' => $this->input->post('email'),
					'convenio' => $this->input->post('convenio'));
 
        $this->form_validation->set_rules('nombreE','Nombre Empleado','trim|required');
        $this->form_validation->set_rules('apellidoE','Apellido Empleado','trim|required');
        $this->form_validation->set_rules('telefono','Telefono','trim|required');
        $this->form_validation->set_rules('direccion','Direccion','trim|required');
        $this->form_validation->set_rules('dni','Nº Documento','trim|required');
        $this->form_validation->set_rules('idTipoEmpleado','Tipo Responsable','trim|required');
        $this->form_validation->set_rules('nroLegajo','Nº Legajo','trim|required');
        $this->form_validation->set_rules('email','E-Mail','trim|required');
        $this->form_validation->set_rules('convenio','Convenio','trim|required');

       	$this->form_validation->set_message('required','Debe completar este campo');  
 
        if ($this->form_validation->run() == FALSE) {
       		echo '<script >alert("Debe completar todos los campos con *");</script>';
       		redirect('/abms/abmEmpleadosC/editarEmpleado/'.$data['codE'],'refresh');

        } else {
           	if (isset($_POST['ActualizarEnDB'])){
				$this->AbmEmpleados_model->actualizarEmpleado($this->uri->segment(4),$datos);
			}

			redirect('/abms/abmEmpleadosC','refresh');
        }	
	}

	function borrarEmpleado(){
		$codE = $this->uri->segment(4);
		$this->AbmEmpleados_model->eliminarEmpleado($codE);

		redirect('/abms/abmEmpleadosC','refresh');		
	}
}