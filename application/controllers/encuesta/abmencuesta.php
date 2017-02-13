<?php

// Este es el controlador general de encuestas
defined('BASEPATH') OR exit('No direct script access allowed');

class Abmencuesta extends My_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('encuesta/encuesta_model');
		//$this->load->model('encuesta/tipo_pregunta_model');
		// $this->load->model('encuesta/pregunta_model');
		// $this->load->model('encuesta/respuesta_model');


		$this->load->library('form_validation'); 
	}


  	function index(){  

		  		$data = array ('encuestas' => $this->encuesta_model->get_all_encuesta(),
                               'limiteTabla' => 20
                              );

				$nombreVista="backend/encuesta/encuesta_view";
				$this->cargarVista($nombreVista, $data);
 
    }





	function crear(){     // metodo para crear una nueva encuesta
		/*if($this->session->userdata('logged_in')){
			//mantener sidebar dinamica
			$session_data = $this->session->userdata('logged_in');
      		$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);
		*/

				$nombreVista="backend/encuesta/crear_encuesta_view";
				$this->cargarVista("backend/encuesta/crear_encuesta_view", null);
 

		/*}else{
			$this->load->helper(array('form'));
			$this->load->view('backend/login_view');
		}*/
	}




	function recibirDatos(){
		$data = array(
			'nombreE' => $this->input->post('nombre_encuesta'),
			'descripcion' => $this->input->post('descripcion'));


// form validarion AQUIIIII

            if (isset($_POST['GuardarEnDB'])){
				$index = $this->encuesta_model->create_encuesta($data);
				redirect(base_url('/encuesta/abmbloque/create/'.$index),'refresh');
			}else
			{

			redirect('/encuesta/abmencuesta/','refresh');
			}
	

       	
	}





	function ver($id_encuesta = null){    // metodo para ver la encuensta y sus preguntas
		/*if($this->session->userdata('logged_in')){
			//mantener sidebar dinamica
			$session_data = $this->session->userdata('logged_in');
      		$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);
		*/

        if($id_encuesta != NULL)
        {


            $data = array ('encuestas' => $this->encuesta_model->get_encuesta($id_encuesta),
			
							'id_encuesta' => $id_encuesta
			);

			$this->cargarVista('backend/encuesta/ver_encuesta_view',$data);


        }else{

            redirect(base_url("encuesta/abmencuesta/"), "refresh");
        }

    

		/*}else{
			$this->load->helper(array('form'));
			$this->load->view('backend/login_view');
		}*/
	}

	function validar(){



			$prueba = 		$this->input->post('respuesta');
			$pregunta = 	$this->input->post('enunciado');
			$descripcion =  $this->input->post('descripcion');
			$bloque = 		$this->input->post('op_bloque');
			$tipo = 		$this->input->post('op_tipo');

			echo($descripcion);

	}


	// function cargarNuevoEmpleado(){	
	// 	//if($this->session->userdata('logged_in')){
	// 		//$data['servicio'] = $this->abmResponsables_model->getServicio();

	// 		//mantener sidebar dinamica
	// 		//$session_data = $this->session->userdata('logged_in');
    //   		//$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

	// 		$this->load->view('backend/header');
	// 		$this->load->view('backend/sidebar');
	// 		//$this->load->view('backend/sidebar', $data);
	// 		$this->load->view('backend/abms/abmEmpleadosAlta');
	// 		$this->load->view('backend/footer');

	// 	//}else{
	// 		//$this->load->helper(array('form'));
	// 		//$this->load->view('backend/login_view');
	// 	//}
	// }


}