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
            // modelo de relevamiento
            $this->load->model('relevamiento/relevamiento_model');
            $this->load->library('form_validation'); 
            $this->load->library('Quiz_lib');

    }




        function index(){  

                // bloque 0 carga inicial de datos de relevamiento
                if($this->session->userdata('logged_in')){
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['nombreE'] = $session_data['nombreE'];
                        $data['apellidoE'] = $session_data['apellidoE'];
                        $data['nivel'] = $session_data['nivel'];
                        $data['tipoEmpleado']=$session_data['tipoEmpleado'];

                        $this->session->set_flashdata('username', $data);
                        $this->session->set_flashdata('nombreE', $data);
                        $this->session->set_flashdata('nivel', $data);
                        //mantener sidebar dinamica
                        $session_data = $this->session->userdata('logged_in');
                        $data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);
                        $this->load->view('backend/header');
                        $this->load->view('backend/sidebar',$data);
                        $js['javascript']= ["app.js"];
                        $valor['lib']= $this->quiz_lib->get_last_id_quiz();// prueba de libreria

                        if($data['tipoEmpleado'] == "Facilitador"){    // verifico el tipo de usuario
                                        //Si el usuario es facilitador loso paso su nombre
                                        $usuario_merge= $data['nombreE']. " " .$data['apellidoE']; // junto el nombre y apellido
                                        $valor['listado'][]= [$session_data['id'], $usuario_merge]; // paso el array con los datos
                                        
                        }else{
                                // si es otro tipo de usuario trae la lista de todos los fac

                                $listado = $this->abmEmpleados_model->obtenerEmpleadoByTipo("Facilitador");

                                foreach($listado->result() as $lista){

                                        $valor['listado'][]= [$lista->idEmpleado, $lista->nombreE. " ". $lista->apellidoE];

                                }                         
                        }

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

                        if($this->input->post('Continuar') && $this->input->post('Continuar') != '' && $this->input->post('nom_facilitador') != '')
                        {

                                $this->load->view('backend/header');
                                $this->load->view('backend/sidebar',$data);

                                //paso los datos a variable

                                $this->facilitador = $this->input->post('nom_facilitador');
                                $this->nroRelevamiento = $this->input->post('nroRelev');
                                $this->fechaRelevamiento = $this->input->post('fechaRelev');
                                $this->dptoNumero = $this->input->post('idDep');
                                $this->id_tlocalidad = $this->input->post('idLocalidad');
                                $this->calle = $this->input->post('b0_calle');
                                $this->numero = $this->input->post('numero');
                                $this->barrio = $this->input->post('barrio');
                                $this->manzana = $this->input->post('barrio_m');
                                $this->casa = $this->input->post('barrio_c');
                                $this->entre_calle = $this->input->post('entre_calle');
                                $this->tel_titular = $this->input->post('tel_titular');
                                $this->tel_supe = $this->input->post('tel_super');
                                
                                $op_embarazo = $_POST['embarazo'];
                                $options['cantidad']= $_POST['cantidad'];
                                $options['embarazo']= $op_embarazo;

                                        if ($op_embarazo == 0){

                                        $options['edades'] = $_POST['edades_emb'];
                                        }else{

                                        $options['edades'] = 0;
                                        }


                                // $datox= $_SESSION['qz_general'];

                                //guardo la direccion 
                                $direccion['calle']= $this->calle;
                                $direccion['casa']= $this->casa;
                                $direccion['numero']= $this->numero;
                                $direccion['dptoNumero']= $this->dptoNumero;
                                $direccion['entreCalles1']= $this->entre_calle;
                                $direccion['barrio']= $this->barrio;
                                $direccion['manzana']= $this->manzana;
                                $direccion['id_tlocalidad']= $this->id_tlocalidad;
                                $id_direccion= $this->relevamiento_model->crearDireccion($direccion); // obtengo el id de la direccion

                                
                                $relevamiento['nroRelevamiento']= $this->nroRelevamiento;
                                $relevamiento['fechaRelevamiento']=$this->fechaRelevamiento;
                                $relevamiento['idDireccion']= $id_direccion;
                                $relevamiento['idEmpleado']=$this->facilitador;
                                $relevamiento['cantEncuestados']= serialize($options);
                                $relevamiento['telTitular']= $this->tel_titular;
                                $relevamiento['telSup']=$this->tel_supe;


                                $this->load->view("backend/encuesta/cargar_encuesta_view", $options);
                                $this->load->view('backend/footer');
                                $js['javascript']= ["bloques.js"];
                                $this->load->view('backend/encuesta/script_js', $js);

                               // var_dump($_POST);
                                $this->quiz_lib->create_session_quiz($_POST);
                                
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
                        //$js['javascript']= ["bloque_8.js","bloque3.js","bloqueaa.js"];
                        $js['javascript']= ["vendor/spin.js","vendor/jquery.gritter.js","bloque_8.js"];


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
