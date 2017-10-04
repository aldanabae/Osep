<?php
class AbmVisitasC extends My_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('abms/abmVisitas_model');
		$this->load->model('bienvenida_model'); 
		$this->load->library('form_validation'); 
	}

	function index(){
		$data['diaHoy'] = date("d");
		$data['mesHoy'] = date("m");
		$data['anioHoy'] = date("Y");
		$data['departamentos'] = $this->abmVisitas_model->getDepartamentos();
		$nombreVista ="backend/abms/abmVisitas";
		$this->cargarVista($nombreVista, $data);
	}

	function cargarNuevaVisita(){	
		$data['diaHoy'] = date("d");
		$data['mesHoy'] = date("m");
		$data['anioHoy'] = date("Y");
		$data['departamentos'] = $this->abmVisitas_model->getDepartamentos();
		$data['localidades'] = $this->abmVisitas_model->getLocalidades();
		$nombreVista = "backend/abms/abmVisitas";
		$this->cargarVista($nombreVista, $data);
	}

	function recibirDatos(){
		$fecha = date("Y/m/d");
		$data = array(
			'nroLlamada' => $this->input->post('nroLlamada'),
			'nroAfiliado' => $this->input->post('nroAfiliado'),
			'nombreA' => $this->input->post('nombreA'),
			'apellidoA' => $this->input->post('apellidoA'),
			'telefono' => $this->input->post('telefono'),
			'fechaHoy' => $fecha,
			'fechaVisita' => $this->input->post('fechaVisita'),
			'horaVisita' => $this->input->post('horaVisita'),
			'departamento' => $this->input->post('departamento'),
			'localidad' => $this->input->post('localidad'),
			'barrio' => $this->input->post('barrio'),
			'direccion' => $this->input->post('direccion'),
			'numero' => $this->input->post('numero'),
			'nroDpto' => $this->input->post('nroDpto'),
			'manzana' => $this->input->post('manzana'),
			'casa' => $this->input->post('casa'),
			'calle1' => $this->input->post('calle1'),
			'calle2' => $this->input->post('calle2'),
			'observacion' => $this->input->post('observacion'),
			);
 
       $this->form_validation->set_rules('nroLlamada','Nro Llamada','trim|required');
       $this->form_validation->set_rules('nroAfiliado','Nº Afiliado','trim|required');
       $this->form_validation->set_rules('nombreA','Nombre Afiliado','trim|required');
       $this->form_validation->set_rules('apellidoA','Apellido Afiliado','trim|required');
       $this->form_validation->set_rules('telefono','Telefono','trim|required');
       $this->form_validation->set_rules('fechaVisita','Fecha Visita','trim|required');
       $this->form_validation->set_rules('horaVisita','Hora Visita','trim|required');
       $this->form_validation->set_rules('departamente','Departamento','trim|required');
       $this->form_validation->set_rules('localidad','Localidad','trim|required');
       $this->form_validation->set_rules('direccion','Direccion','trim|required');
       $this->form_validation->set_rules('calle1','Calle 1','trim|required');
       $this->form_validation->set_rules('calle2','Calle 2','trim|required');

       $this->form_validation->set_message('required','Debe completar este campo');  
 
        if ($this->form_validation->run() == FALSE) {
       		 echo '<script >alert("Debe completar todos los campos con *");</script>';
       		 redirect('/abms/abmVisitasC/cargarNuevaVisita','refresh');

        } else {
            if (isset($_POST['GuardarEnDB'])){	
				$this->abmVisitas_model->crearVisita($data);
			}
			redirect('/abms/abmVisitasC','refresh');
       }
	}

	function getLocalidades(){
		$id_Dpto = $_POST['id_dpto'];
		$data['localidades'] = $this->abmVisitas_model->obtenerLocalidades($id_Dpto);
	
		echo json_encode($data['localidades']);		
	}

}