<?php

// Este es el controlador general de encuestas
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller{

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

      			$this->load->view('backend/header');
				$this->load->view('backend/sidebar');
				$this->load->view('backend/encuesta/encuesta_view',$data);
				$this->load->view('backend/footer');
 
    }





	function crear(){     // metodo para crear una nueva encuesta
		/*if($this->session->userdata('logged_in')){
			//mantener sidebar dinamica
			$session_data = $this->session->userdata('logged_in');
      		$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);
		*/
			$this->load->view('backend/header');
			$this->load->view('backend/sidebar');
			$this->load->view('backend/encuesta/crear_encuesta_view');
			$this->load->view('backend/footer');

		/*}else{
			$this->load->helper(array('form'));
			$this->load->view('backend/login_view');
		}*/
	}


	function ver($id_encuesta = null){    // metodo para ver la encuensta y sus preguntas
		/*if($this->session->userdata('logged_in')){
			//mantener sidebar dinamica
			$session_data = $this->session->userdata('logged_in');
      		$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);
		*/

        if($id_encuesta != NULL)
        {


            $data = array ('encuestas' => $this->encuesta_model->get_encuesta($id_encuesta));




            $this->load->view('backend/header');
            $this->load->view('backend/sidebar');
            $this->load->view('backend/encuesta/ver_encuesta_view',$data);
            $this->load->view('backend/footer');

        }else{

            redirect(base_url("encuesta/index/"), "refresh");
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