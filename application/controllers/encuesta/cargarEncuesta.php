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
            // modelo de 

            // modelo de relevamiento
            $this->load->model('relevamiento/relevamiento_model');
            $this->load->library('form_validation'); 
            $this->load->library('Quiz_lib');

        }


        function index(){  

                $session_data = $this->session->userdata('logged_in');
                redirect('encuesta/cargarEncuesta/'.$session_data['idEmpleado'],'refresh');
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
                                2_ verificar el nivel de usuario, si es 2 solo debe usar su $session_data['idEmpleado']

                                3_  si es un nivel superior puede usar el $session_data['idEmpleado'] que se envie por la url

                                =====================================

                                4_debo consultar la libreria quiz_lib  y en base al $session_data['idEmpleado'] o id usuario enviado, traer el ultimo relevamiento abierto

                                5_reconstruir con los datos el primer formulario y editarlo si es necesario

                                6_ agregar el campo estado la la tabla relevanimento

                        */

                        $usuario_id = $this->uri->segment(3);// id  que envia desde el form
                        
                        if($session_data['nivel'] == "2"){    // verifico el tipo de usuario
                                                              //Si el usuario es facilitador loso paso su nombre
                                $usuario_merge= $data['nombreE']. " " .$data['apellidoE']; // junto el nombre y apellido
                                $valor['listado'][]= [$session_data['idEmpleado'], $usuario_merge]; // paso el array con los datos
                                // ene ste caso por als que envie cualquier dato por la url el valor que paso es el mismo del usuario facilitador
                                $id_usuario= $session_data['idEmpleado'];
                                // consulto si hay algun relevameinto abierto para este usuario
                                // si es asi traigo toda la info primaria
                                $valor['relevamiento']= $this->quiz_lib->get_last_data_user($id_usuario);

                                        
                        }else{
                                // si es otro tipo de usuario trae la lista de todos los fac
                                $listado = $this->abmEmpleados_model->obtenerEmpleadoByTipo("Facilitador");

                                foreach($listado->result() as $lista){

                                        $valor['listado'][]= [$lista->idEmpleado, $lista->nombreE. " ". $lista->apellidoE];

                                }  
                                // devuelvo la info del id que me pasan por la url, si no tiene relevamiento abierto solo devuelve el ultimo id+1
                                $valor['relevamiento']= $this->quiz_lib->get_last_data_user($usuario_id);
                                $valor['selectedItem']=$usuario_id;

                        }

                        $valor['departamento']= (array) $this->abmVisitas_model->getDepartamentos()->result(); // cargo los departamentos ....todos




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
                        $accion= $this->input->post('accion');


                                if($this->input->post('Continuar') && $this->input->post('Continuar') != '' && $this->input->post('nom_facilitador') != '')
                                {
                                        $_POST['Continuar']="";
                                        unset($_POST['Continuar']);      

                                        $this->load->view('backend/header');
                                        $this->load->view('backend/sidebar',$data);

                                        //paso los datos a variable

                                        $facilitador = $this->input->post('nom_facilitador');
                                        $nroRelevamiento = $this->input->post('nroRelev');
                                        $fechaRelevamiento = implode('-',array_reverse(explode('-',$this->input->post('fechaRelev'))));
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
                                        $idRelev = $this->input->post('hdnIdrelev');  // recibo el id de relevamiento si existe en caso de edicion
                                        $idDireccion = $this->input->post('hdnIdDirec'); // recibo el id de la direccion si existe

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

                                        if($accion == 'guardar'){

                                                $id_direccion= $this->relevamiento_model->crearDireccion($direccion); // obtengo el id de la direccion

                                        }else{

                                                // edito los datos que estan
                                                $id_direccion= $this->relevamiento_model->editDireccion($idDireccion, $direccion ); // obtengo el id de la direccion 

                                        }

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

                                        if($accion == 'guardar'){
                                                
                                                //guarda los datos de relev
                                                $id_relevamiento= $this->relevamiento_model->crearRelevamiento($relevamiento);

                                        }else{
                                                // edita datos de relev  $nroRelevamiento  seria el que ya esta
                                                $id_relevamiento= $this->relevamiento_model->editRelevamiento($idRelev,$relevamiento);

                                        }

                                        $options['id_relevamiento']=$id_relevamiento;  // id unico de relevamiento e la tabla
                                        $options['id_numRel']=$nroRelevamiento; // numero asignado al fac..  se repite
                                        //borrar las variables post
                                        //var_dump($_POST=array());

                                        

                                        $this->load->view("backend/encuesta/cargar_encuesta_view", $options);
                                        $this->load->view('backend/footer');
                                        $js['javascript']= ["bloques.js", "helpers.js"];
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


        function encuestaAjax()
        {

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

                        // $datosForm = $this->input->post('datos'); // traigo los datos por post

                        //array test==================
                                $datosForm = '[{"nombre":"marcelo ","apellido":"contreras","dni":"29343322","edad":"35","sexo":"M","id_relev":"9","n_afiliado":"29343322/00","respondeR":"1"},["b1_parent","1"],["b1_cober","0"],["b1_estudio","0"],["b1_nivel","1"],["b1_cronica","1"],["b1_disc","1"],["b1_extra","1"]]';
                        //=====================

                        $datosEncuesta= json_decode($datosForm); // convierto el String nuevamente en array

                        // tomo el contenido del indice 0 que estan los datos del envcuestado
                        $id_encuestado= $this->relevamiento_model->crearEncuestado($datosEncuesta[0]); // guardo al encuestado y traigo el id correspondiente
                        $limit = count($datosEncuesta); // limite del arreglo

                        // for que recorre el areglo guardando cada dato  comienza desde el 1, por que el 0 tiene los datos del encuestado
                        for($i =1 ;$i < $limit ; $i++ ){

                                $datos=[


                                ];


                                //var_dump($datosEncuesta[$i]);


                        }


                        echo json_encode($datosEncuesta);





















                }else{
                        $retorno= ['mensaje'=> 'la sesion esta expirada, ingrese nuevamente'];
                        echo json_encode($retorno);
                }



//crearEncuestado



















                // var_dump($_POST);
                //json_encode($_POST);


                // $test= $_POST['datos'];

                // //                 $test = '
                // // [[{"nombre":"aldana ","Apellido":"baeza","dni":"333333333333333","edad":"31","sexo":"M","id_relev":"9","n_afiliado":"44454545/","respondeR":"0"}],["b1_nombre","baeza aldana"],["b1_edad","31"],["b1_dni","333333333333333"],["b1_genero","M"],["b1_parent","3"],["b1_osep","0"],["b1_afiliado","44454545"],["b1_barra",""],["b1_cober","0"],["b1_cronica","1"],["b1_disc","1"]]                

                // //                 ';

                // $result= json_decode($test);
                // $prueba= $result;

                // // var_dump($prueba);
                // echo json_encode($prueba);

        }


}
