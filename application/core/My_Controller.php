<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends Ci_Controller {
    

    function __construct(){
    	parent::__construct();

      //Cargar todos los model del sistema
    	$this->load->model('bienvenida_model');
    	$this->load->model('abms/abmEmpleados_model');
      $this->load->model('seguridad/abmNiveles_model');
      $this->load->model('seguridad/abmUsuarios_model');
      $this->load->model('abms/abmVisitas_model');
   
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
        $data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);


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