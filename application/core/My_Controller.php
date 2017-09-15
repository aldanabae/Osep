<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends Ci_Controller {
    

    function __construct(){
    	parent::__construct();

      //Cargar todos los model del sistema
    	$this->load->model('Bienvenida_model');
    	$this->load->model('abms/AbmEmpleados_model');
      $this->load->model('relevamiento/Relevamiento_model');
      $this->load->model('seguridad/AbmNiveles_model');
      $this->load->model('seguridad/AbmUsuarios_model');
      $this->load->model('abms/AbmVisitas_model');
   
  	}

    function cargarVista($nombreV, $dataC){
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
        $data['nivel'] = $this->Bienvenida_model->obtenerNivel($session_data['nivel']);


        $this->load->view('backend/header');
        $this->load->view('backend/sidebar',$data);
        $this->load->view($nombreV, $dataC);
        $this->load->view('backend/footer');

      }else{
        $this->load->helper(array('form'));
        $this->load->view('login_view');
      }
    }
}

?>