<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends Ci_Controller {

    
/*  protected $_subject = '';
  
  function __construct(
    $subject  = null
  )
  {
    $this->_subject = $subject;
    parent::__construct();
    
    $this->load->model('alarmas_model');
    $this->load->model('clientes_model');
    $this->load->model('mensajes_model');
    $this->load->model('pedidos_model');
    $this->load->model('presupuestos_model');
    $this->load->model('productos_model');
    $this->load->model('vendedores_model');
    $this->load->model('visitas_model');
  }
  
  public function crud_tabla($output, $vista = NULL){
    if($this->session->userdata('logged_in')){
      if($vista == NULL){
        $subtitle = $this->lang->line($this->_subject.'_crud');
        $cuerpo   = $this->_subject."/tabla.php";
      } else {
        $subtitle = $this->lang->line($this->_subject.'_'.$vista);
        $cuerpo   = $this->_subject."/".$vista.".php";
      }
      
      $db['empresas']         = $this->empresas_model->getRegistro(1);
      $db['title']          = $this->_subject;
      $db['subtitle']         = $subtitle;
      $db['session_data']       = $this->session->userdata('logged_in');
      $db['visitas_mensajes']     = $this->visitas_model->visitasNuevas();
      $db['clientes_mensajes']    = $this->clientes_model->mensajesNuevos();
      $db['vendedores_mensajes']    = $this->vendedores_model->mensajesNuevos();
      $db['productos_mensajes']   = $this->productos_model->mensajesNuevos();
      $db['pedidos_mensajes']     = $this->pedidos_model->pedidosNuevos();
      $db['presupuestos_mensajes']  = $this->presupuestos_model->presupuestosNuevos();
      $db['alarmas_mensajes']     = $this->alarmas_model->alarmasNuevas();
      $db['mensajeria']       = $this->mensajes_model->mensajesNuevos();
      
      $this->load->view("plantilla/head.php", $db);
      $this->load->view("plantilla/modal.php", $db);
      $this->load->view("plantilla/nav_top.php", $output);
      $this->load->view("plantilla/nav_left.php");
      $this->load->view($cuerpo);
      $this->load->view("plantilla/footer.php");  
    } else {
      redirect('/login/logout/','refresh');
    }       
  }
  
  
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
    	
      	$this->load->view('backend/header');
				$this->load->view('backend/sidebar');
				//$this->load->view('bienvenida');
				$this->load->view('backend/footer');
   
  	}

  	function index(){
  		//if($this->session->userdata('logged_in')){

       // $session_data = $this->session->userdata('logged_in'); 
      	//$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

			//}else{
			//	$this->load->helper(array('form'));
			//	$this->load->view('backend/login_view');
 	    //}   
    }




}




?>