<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AbmNiveles_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function crearNivel($data){
		$this->db->insert('nivel', 
			array('descripNivel'=>$data['descripcionNivel']));
	}

	function obtenerNiveles($nombresNiveles){
		if ($nombresNiveles == ''){
			$this->db->from('nivel');
			$query = $this->db->get();

		}else{
			$this->db->where('descripNivel', $nombresNiveles);
			$this->db->from('nivel');
			$query = $this->db->get();
		}
		
		if ($query->num_rows() > 0) return $query;
			else return false;	
	}

	function obtenerNivel($codN){
		$this->db->where('idNivel', $codN);
		$this->db->from('nivel');
		$query = $this->db->get();

		if ($query->num_rows() > 0) return $query;
		else return false;
	}
	
	function actualizarNivel($codN, $data){
		$datos = array(
			'descripNivel'=>$data['descripcionNivel']
		);

		$this->db->where('idNivel', $codN);
		$query = $this->db->update('nivel', $datos);
	}

	function eliminarNivel($codN){
		$this->db->delete('nivel',array('idNivel'=>$codN));
	}		
}
?>