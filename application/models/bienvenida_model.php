<?php 
class Bienvenida_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}

  function obtenerUsuario($data){
    $username = $data['username'];
    $this->db->where('usuario', $username);
    $this->db->from('usuario');
    $this->db->join('nivel', 'nivel.idNivel = usuario.idNivel');
    $query = $this->db->get();

    if ($query->num_rows() > 0) return $query;
    else return false;
  }

  function obtenerNivel($idNivel){
    $this->db->where('idNivel', $idNivel);
    $this->db->from('nivel');
    $query = $this->db->get();

    if ($query->num_rows() > 0) return $query;
    else return false;
  }
}
?>