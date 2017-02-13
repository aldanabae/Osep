<?php

// Este es el controlador general de encuestas
defined('BASEPATH') OR exit('No direct script access allowed');

class Abmbloque extends My_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('encuesta/bloque_model');
		//$this->load->model('encuesta/tipo_pregunta_model');
		// $this->load->model('encuesta/pregunta_model');
		// $this->load->model('encuesta/respuesta_model');


		$this->load->library('form_validation'); 
	}


  	function index(){  



				// $nombreVista="backend/encuesta/encuesta_view";
				// $this->cargarVista($nombreVista, $data);

                
 
    }




        function create(){  

            $encuesta= ['encuesta'=>$this->uri->segment(4)];

            // si no hay encuesta asociada enviar a otro link

            if(isset($encuesta))
            {
                

                    $nombreVista="backend/encuesta/crear_bloque_view";
                    $this->cargarVista($nombreVista,$encuesta);


                
            }
            else
            {
                redirect(base_url("encuesta/abmencuesta/"));

            }

        
        }




        function validar()   // Aqui valido los datos de los bloques que vas a crear
        {

            $bloques = 	$this->input->post('bloque');
            $encuesta = 	$this->input->post('encuesta');

            if( isset($bloques) && !empty($bloques))
            {
                $contador= 0;
                foreach($bloques as $bloque)
                {

                    $this->bloque_model->create_bloque($contador,$bloque,$encuesta);

                    $contador++;
                    
                }

                redirect(base_url("encuesta/abmencuesta/"), "refresh");
                

            }













        }




    }