<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends Ci_Controller {
    
/* 

  
  public function cargar_vista($db, $vista, $js = NULL){
    if($this->session->userdata('logged_in')){
      $db['empresas']         = $this->empresas_model->getRegistro(1);
      $db['title']          = $this->_subject;
      $db['subtitle']         = $this->lang->line($this->_subject.'_'.$vista);
      $db['visitas_mensajes']     = $this->visitas_model->visitasNuevas();
      $db['clientes_mensajes']    = $this->clientes_model->mensajesNuevos();
      $db['vendedores_mensajes']    = $this->vendedores_model->mensajesNuevos();
      $db['productos_mensajes']   = $this->productos_model->mensajesNuevos();
      $db['pedidos_mensajes']     = $this->pedidos_model->pedidosNuevos();
      $db['presupuestos_mensajes']  = $this->presupuestos_model->presupuestosNuevos();
      $db['alarmas_mensajes']     = $this->alarmas_model->alarmasNuevas();
      $db['mensajeria']       = $this->mensajes_model->mensajesNuevos();
      
      $db['session_data']       = $this->session->userdata('logged_in'); 
      
      $this->load->view("plantilla/head.php", $db);
      $this->load->view("plantilla/modal.php");
      $this->load->view("plantilla/nav_top.php");
      $this->load->view("plantilla/nav_left.php");
      $this->load->view($this->_subject."/".$vista.".php");   
      if($js !== NULL){
        if(is_array($js)){
          foreach ($js as $value) {
            $this->load->view($this->_subject."/".$value.".php");
          }
        }else{
          $this->load->view($this->_subject."/".$js.".php");
        } 
      }
      $this->load->view("plantilla/footer.php");  
    } else  {
      redirect('/login/logout/','refresh');
    }
  } 
} 

*/




    function __construct(){
    	parent::__construct();

      //Cargar todos los model del sistema
    	$this->load->model('bienvenida_model');
    	$this->load->model('abms/abmEmpleados_model');
      $this->load->model('seguridad/abmNiveles_model');
      $this->load->model('seguridad/abmUsuarios_model');

   


   
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
    //  $session_data = $this->session->userdata('logged_in');
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