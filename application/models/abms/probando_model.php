<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Probando_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

public function obtenerRespuestas(){
	$this->db->select('*');
	$this->db->from('respuesta_pregunta');
	$this->db->join('pregunta','pregunta.idPregunta=respuesta_pregunta.idPregunta','left');
	$this->db->join('bloque','bloque.idBloque=pregunta.idBloque','left');
	$this->db->join('encuesta','encuesta.idEncuesta=bloque.idEncuesta','left');
	$this->db->join('tipo_pregunta','tipo_pregunta.idTipoPregunta=pregunta.idTipoPregunta','left');
	$this->db->join('etiqueta','etiqueta.idEtiqueta=pregunta.idEtiqueta','left');

	$this->db->join('respuesta','respuesta.idRespuesta=respuesta_pregunta.idRespuesta','left');
	$query = $this->db->get();	

	if ($query->num_rows() > 0) return $query;
		else return false;	
    }
}

?>