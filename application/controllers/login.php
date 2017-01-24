<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
    	parent::__construct();
      $this->load->helper('url');
    	$this->load->model('login_model','',TRUE);
  	} 

	public function index(){
		if($this->session->userdata('logged_in')){

      		redirect('bienvenidaC', 'refresh');
    	}
    	else{

         $this->load->helper(array('form'));
			   $this->load->view('backend/login_view');
		}
	}	

	function verificarLogin(){
    	//This method will have the credentials validation
    	$this->load->library('form_validation');

    	$this->form_validation->set_rules('username', 'Username', 'trim|required');
    	$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

    	if($this->form_validation->run() == FALSE)
    	{
     		 //Field validation failed.  User redirected to login page
          $this->load->view('login_view');
    	}
    	else
    	{    		
          //Go to private area
        redirect('bienvenidaC', 'refresh');
    	}

    }
  
 	function check_database($password){
    	//Field validation succeeded.  Validate against database
    	$username = $this->input->post('username');
    
    	//query the database
    	$result = $this->login_model->login($username, $password);
  
    	if($result)
    	{
     		$sess_array = array();
      		foreach($result as $row){
        		$sess_array = array(
          		'id' => $row->idUsuario,
          		'username' => $row->usuario,
              'nombreR' => $row->nombreR,
              'nivel' => $row->idNivel
        		);
            
        	 $this->session->set_userdata('logged_in', $sess_array);
      		}
      		return TRUE;
    	}
    	else
    	{
         $this->form_validation->set_message('check_database', 'Usuario o Contraseña inválidos.'); 
     
      		return FALSE;
    	}
  	}

	function login(){

    	if($this->session->userdata('logged_in'))
    	{
     	
          $session_data = $this->session->userdata('logged_in');
      		$data['username'] = $session_data['username'];
          $data['nombreR'] = $session_data['nombreR'];
          $data['nivel'] = $session_data['nivel'];
          $this->session->set_flashdata('username', $data);
          $this->session->set_flashdata('nombreR', $data);
          $this->session->set_flashdata('nivel', $data);
           // redirect('some_controller');
      		
          redirect('bienvenidaC', 'refresh');
    	}
    	else
    	{

        	//If no session, redirect to login page
      		redirect('login', 'refresh');
		  }
  	}
  
  	function logout(){
    	$this->session->unset_userdata('logged_in');
    	session_destroy();
    	redirect('login/login', 'refresh');
  	}
}
