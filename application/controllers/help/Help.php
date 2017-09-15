<?php
class Help extends My_Controller{

	function __construct(){
		parent::__construct();

                $this->load->helper('form');
                $this->load->helper('url');
                $this->load->model('Bienvenida_model');
                $this->load->model('abms/abmEmpleados_model');
                $this->load->model('seguridad/AbmNiveles_model');
                $this->load->model('seguridad/AbmUsuarios_model');
                $this->load->model('abms/AbmVisitas_model');
                // modelo de 
    
                // modelo de relevamiento
                $this->load->model('relevamiento/Relevamiento_model');
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
                $data['tipoEmpleado']=$session_data['idTipoEmpleado'];

                $this->session->set_flashdata('username', $data);
                $this->session->set_flashdata('nombreE', $data);
                $this->session->set_flashdata('nivel', $data);

                //mantener sidebar dinamica
                $session_data = $this->session->userdata('logged_in');
                $data['nivel'] = $this->Bienvenida_model->obtenerNivel($session_data['nivel']);
                //cargo el header y el sidebar con los datos para el nivel de usuarios
                $this->load->view('backend/header');
                $this->load->view('backend/sidebar',$data);
                $js['javascript']= [""];


                //TEST
                $test['modelo']= $this->Relevamiento_model->getRespondiente(2); // obtengo el id de la direccion





                $this->load->view("backend/help/helps.php" , $test);
                $this->load->view('backend/footer');
                $this->load->view('backend/encuesta/script_js', $js);

        }else{
                $this->load->helper(array('form'));
                $this->load->view('login_view');
        }

        
   

	}

	
}

