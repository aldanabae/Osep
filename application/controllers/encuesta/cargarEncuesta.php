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

                $session_data = $this->session->userdata('logged_in');
                redirect('encuesta/cargarEncuesta/'.$session_data['id'],'refresh');
        }


        function init(){  

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
                        //cargo el header y el sidebar con los datos para el nivel de usuarios
                        $this->load->view('backend/header');
                        $this->load->view('backend/sidebar',$data);
                        $js['javascript']= ["app.js"];



/*
1_comprobar que este recibiendo un numero
2_ verificar el nivel de usuario, si es 2 solo debe usar su $session_data['id']

3_  si es un nivel superior puede usar el $session_data['id'] que se envie por la url

=====================================

4_debo consultar la libreria quiz_lib  y en base al $session_data['id'] o id usuario enviado, traer el ultimo relevamiento abierto

5_reconstruir con los datos el primer formulario y editarlo si es necesario

6_ agregar el campo estado la la tabla relevanimento











*/




                        $usuario_id = $this->uri->segment(3);// id  que envia desde el form
                        var_dump($session_data['id']);
                        var_dump($session_data );

                        //$valor['lib']= $this->quiz_lib->get_last_data_user($session_data['id']);// busca el ultimo relevamiento correspondiente al usuario 


                        
                                if($data['nivel'] == "2"){    // verifico el tipo de usuario
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

                                $facilitador = $this->input->post('nom_facilitador');
                                $nroRelevamiento = $this->input->post('nroRelev');
                                $fechaRelevamiento = $this->input->post('fechaRelev');
                                $dptoNumero = $this->input->post('idDep');
                                $id_tlocalidad = $this->input->post('idLocalidad');
                                $calle = $this->input->post('b0_calle');
                                $numero = $this->input->post('numero');
                                $barrio = $this->input->post('barrio');
                                $manzana = $this->input->post('barrio_m');
                                $casa = $this->input->post('barrio_c');
                                $entre_calle = $this->input->post('entre_calle');
                                $tel_titular = $this->input->post('tel_titular');
                                $tel_supe = $this->input->post('tel_super');
                                $observaciones = $this->input->post('observaciones');
                                
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
                                $direccion['calle']= $calle;
                                $direccion['casa']= $casa;
                                $direccion['numero']= $numero;
                                $direccion['dptoNumero']= $dptoNumero;
                                $direccion['entreCalles1']= $entre_calle;
                                $direccion['barrio']= $barrio;
                                $direccion['manzana']= $manzana;
                                $direccion['id_tlocalidad']= $id_tlocalidad;
                                $id_direccion= $this->relevamiento_model->crearDireccion($direccion); // obtengo el id de la direccion

                                
                                $relevamiento['nroRelevamiento']= $nroRelevamiento;
                                $relevamiento['fechaRelevamiento']=$fechaRelevamiento;
                                $relevamiento['idDireccion']= $id_direccion;
                                $relevamiento['idEmpleado']=$facilitador;
                                $relevamiento['cantEncuestados']= serialize($options);
                                $relevamiento['telTitular']= $tel_titular;
                                $relevamiento['telSup']=$tel_supe;
                                $relevamiento['observacion']=$observaciones;
                                $relevamiento['idEncuesta']=1; // esto hay que modificarlo, por ahora es la 1
                                $relevamiento['estado']=1;  // estado inicial como que es
                                $id_relevamiento= $this->relevamiento_model->crearRelevamiento($relevamiento);

                                $options['id_relevamiento']=$id_relevamiento;
                                $options['id_numRel']=$nroRelevamiento;
                                //borrar las variables post
                                //var_dump($_POST=array());

                                unset($_POST['Continuar']); // elimino la variable post que te deja pasar... continuar

                                $this->load->view("backend/encuesta/cargar_encuesta_view", $options);
                                $this->load->view('backend/footer');
                                $js['javascript']= ["bloques.js"];
                                $this->load->view('backend/encuesta/script_js', $js);

                               
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
