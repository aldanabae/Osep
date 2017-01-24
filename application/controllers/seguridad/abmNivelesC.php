<?php
class AbmNivelesC extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('seguridad/abmNiveles_model');
		$this->load->model('bienvenida_model');
		$this->load->library('form_validation');   
	}

	function index(){
		//if($this->session->userdata('logged_in')){
			if (!isset($_POST['CargarTabla'])){
				$data['nombresNiveles'] = '';
				$data['limiteTabla'] = 1000;
				$data['tablaNiveles'] = $this->abmNiveles_model->obtenerNiveles($data['nombresNiveles']);	
			}
			//mantener sidebar dinamica
			$session_data = $this->session->userdata('logged_in');
      		$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

			$this->load->view('backend/header');
			$this->load->view('backend/sidebar', $data);
			$this->load->view('backend/seguridad/abmNiveles', $data);
			$this->load->view('backend/footer');

		//}else{
		//	$this->load->helper(array('form'));
		//	$this->load->view('backend/login_view');
		//}
	}

	function mostrarTablaNiveles(){
		/*if($this->session->userdata('logged_in')){
			$data['nombresNiveles'] = $this->input->post('nombresNiveles');	
			$data['limiteTabla'] = $this->input->post('longitudTabla');
		*/	
			$data['tablaNiveles'] = $this->abmNiveles_model->obtenerNiveles($data['nombresNiveles']);

			//mantener sidebar dinamica
		//	$session_data = $this->session->userdata('logged_in');
      	//	$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

			$this->load->view('backend/header');
			$this->load->view('backend/sidebar', $data);
			$this->load->view('backend/seguridad/abmNiveles', $data);
			$this->load->view('backend/footer');

		/*}else{
			$this->load->helper(array('form'));
			$this->load->view('backend/login_view');
		}	*/
	}

	function cargarNuevoNivel(){
		/*if($this->session->userdata('logged_in')){
			//mantener sidebar dinamica
			$session_data = $this->session->userdata('logged_in');
      		$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);
		*/
			$this->load->view('backend/header');
			$this->load->view('backend/sidebar');
			//$this->load->view('backend/sidebar', $data);
			$this->load->view('backend/seguridad/abmNivelesAlta');
			$this->load->view('backend/footer');

		/*}else{
			$this->load->helper(array('form'));
			$this->load->view('backend/login_view');
		}*/
	}

	function recibirDatos(){
		$data = array(
			'descripcionNivel' => $this->input->post('descripcionNivel'));
 
        $this->form_validation->set_rules('descripcionNivel','Nombre Nivel','trim|required');
       	$this->form_validation->set_message('required','Debe completar el campo %s');  
 
        if ($this->form_validation->run() == FALSE) {
        	echo '<script >alert("Debe completar el campo");</script>';
       		 redirect('/seguridad/abmNivelesC/cargarNuevoNivel','refresh');

        } else {
            if (isset($_POST['GuardarEnDB'])){
			$this->abmNiveles_model->crearNivel($data);
			}

			redirect('/seguridad/abmNivelesC','refresh');
        }	
	}

	function editarNivel(){
		if($this->session->userdata('logged_in')){
			$data['codN'] = $this->uri->segment(4);
			$data['nivel1'] = $this->abmNiveles_model->obtenerNivel($data['codN']);

			//mantener sidebar dinamica
			$session_data = $this->session->userdata('logged_in');
      		$data['nivel'] = $this->bienvenida_model->obtenerNivel($session_data['nivel']);

			$this->load->view('backend/header');
			$this->load->view('backend/sidebar', $data);
			$this->load->view('backend/seguridad/abmNivelesModificar', $data);
			$this->load->view('backend/footer');

		}else{
			$this->load->helper(array('form'));
			$this->load->view('backend/login_view');
		}
	}	

	function actualizarDatos(){
		$data['codN'] = $this->uri->segment(4);
		$datos = array(
			'descripcionNivel' => $this->input->post('descripcionNivel'));

		$this->form_validation->set_rules('descripcionNivel','Nombre Nivel','trim|required');
       	$this->form_validation->set_message('required','Debe completar el campo %s'); 
 
        if ($this->form_validation->run() == FALSE) {
       		 echo '<script >alert("Debe completar el campo");</script>';
       		 redirect('/seguridad/abmNivelesC/editarNivel/'.$data['codN'],'refresh');

        } else {
           	if (isset($_POST['ActualizarEnDB'])){
				$this->abmNiveles_model->actualizarNivel($this->uri->segment(4),$datos);
			}

			redirect('/seguridad/abmNivelesC','refresh');
        }
	}

	function borrarNivel(){
		$codN = $this->uri->segment(4);
		$this->abmNiveles_model->eliminarNivel($codN);
	
		redirect('/seguridad/abmNivelesC','refresh');		
	}
}