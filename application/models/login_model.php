<?php 
class Login_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function login($username,$password){
		$this->db->select('idUsuario, usuario, contrasenia, nombreE, apellidoE, idNivel, empleado.idEmpleado, empleado.idTipoEmpleado, empleado.idEmpleado');
		$this->db->where('usuario', $username);
		$this->db->where('contrasenia', MD5($password));
		$this->db->from('usuario');
		$this->db->join('empleado', 'empleado.idEmpleado = usuario.idEmpleado');

   		$this->db-> limit(1);
 
      $query = $this->db-> get();
 
      if($query -> num_rows() == 1){
          return $query->result();
      }else{  	
   	      return $query->result();
		}
	}
}

?>