<?php

// Este es el controlador general de encuestas
defined('BASEPATH') OR exit('No direct script access allowed');

class CargarEncuesta extends CI_Controller{

	function __construct(){
		parent::__construct();

            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->model('bienvenida_model');
            $this->load->model('abms/abmEmpleados_model');
            $this->load->model('seguridad/abmNiveles_model');
            $this->load->model('seguridad/abmUsuarios_model');
            $this->load->model('abms/abmVisitas_model');
            $this->load->library('form_validation'); 
            $this->load->library('Quiz_lib');

    }




        function index(){  

                // bloque 0 carga inicial de datos de relevamiento
                if($this->session->userdata('logged_in')){
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['nombreE'] = $session_data['nombreE'];
                        $data['nivel'] = $session_data['nivel'];
                        $this->session->set_flashdata('username', $data);
                        $this->session->set_flashdata('nombreE', $data);
                        $this->session->set_flashdata('nivel', $data);
                        //mantener sidebar dinamica
                        $session_data = $this->session->userdata('logged_in');
                        $data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);
                        $this->load->view('backend/header');
                        $this->load->view('backend/sidebar',$data);
                        $js['javascript']= "app.js";
                        $valor['lib']= $this->quiz_lib->get_last_id_quiz();// prueba de libreria
                        $this->load->view("backend/encuesta/cargar_encuesta_inicio_view",$valor);
                        $this->load->view('backend/footer');
                        $this->load->view('backend/encuesta/script_js', $js);


                }else{
                        $this->load->helper(array('form'));
                        $this->load->view('login_view');
                }

        }

        function cargabloques()
        {

                if($this->session->userdata('logged_in')){
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['nombreE'] = $session_data['nombreE'];
                        $data['nivel'] = $session_data['nivel'];
                        $this->session->set_flashdata('username', $data);
                        $this->session->set_flashdata('nombreE', $data);
                        $this->session->set_flashdata('nivel', $data);
                        //mantener sidebar dinamica
                        $session_data = $this->session->userdata('logged_in');
                        $data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

                        //var_dump($this->input->post());

                        if($this->input->post('Continuar') && $this->input->post('Continuar') != '' && $this->input->post('nom_facilitador') != '')
                        {

                        $this->load->view('backend/header');
                        $this->load->view('backend/sidebar',$data);
                        $this->load->view("backend/encuesta/cargar_encuesta_view");
                        $this->load->view('backend/footer');
                        $js['javascript']= "bloques.js";
                        $this->load->view('backend/encuesta/script_js', $js);
                        
                        }

                        else
                        {

                        redirect('encuesta/cargarEncuesta');

                        }




                }else{
                        $this->load->helper(array('form'));
                        $this->load->view('login_view');
                }



        }





function cargabloques_final()
    {

            if($this->session->userdata('logged_in')){
                    $session_data = $this->session->userdata('logged_in');
                    $data['username'] = $session_data['username'];
                    $data['nombreE'] = $session_data['nombreE'];
                    $data['nivel'] = $session_data['nivel'];
                    $this->session->set_flashdata('username', $data);
                    $this->session->set_flashdata('nombreE', $data);
                    $this->session->set_flashdata('nivel', $data);
                    //mantener sidebar dinamica
                    $session_data = $this->session->userdata('logged_in');
                    $data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

                    //var_dump($this->input->post());

                    if(true)
                    {

                        $this->load->view('backend/header');
                        $this->load->view('backend/sidebar',$data);
                        $this->load->view("backend/encuesta/cargar_encuesta_final_view");
                        $this->load->view('backend/footer');
                        $js['javascript']= "bloques.js";
                        $this->load->view('backend/encuesta/script_js', $js);
                        
                    }

                    else
                    {

                       redirect('encuesta/cargarEncuesta');

                    }




            }else{
                    $this->load->helper(array('form'));
                    $this->load->view('login_view');
            }



    }






function guardarEncuesta()
{




}


function ajax_encuestas($metod, $data )
{




}


}
