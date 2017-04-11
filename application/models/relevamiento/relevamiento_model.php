<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relevamiento_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	public function obtenerRespPreg(){
		$this->db->select('*');
		$this->db->from('respuesta_pregunta');
		$query = $this->db->get();	

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $fila){
				$data[] = $fila;
			}	
			return $data;
		}else{
			return false;
		}	
	}

	public function obtenerPreguntas(){
		$this->db->select('*');
		$this->db->from('pregunta');
		$this->db->join('bloque','bloque.idBloque=pregunta.idBloque','left');
		$this->db->join('encuesta','encuesta.idEncuesta=bloque.idEncuesta','left');
		$this->db->join('tipo_pregunta','tipo_pregunta.idTipoPregunta=pregunta.idTipoPregunta','left');
		$this->db->join('etiqueta','etiqueta.idEtiqueta=pregunta.idEtiqueta','left');
		$query = $this->db->get();	

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $fila){
				$data[] = $fila;
			}	
			return $data;
		}else{
			return false;
		}
	}

	public function obtenerRespuestas(){
		$this->db->select('*');
		$this->db->from('respuesta');
		$query = $this->db->get();	

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $fila){
				$data[] = $fila;
			}	
			return $data;
		}else{
			return false;
		}	
	}

	public function obtenerEncuesta(){
		$this->db->select('*');
		$this->db->from('encuesta');
		$query = $this->db->get();	

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $fila){
				$data[] = $fila;
			}	
			return $data;
		}else{
			return false;
		}	
	}

	public function obtenerBloques(){
		$this->db->select('*');
		$this->db->from('bloque');
		$this->db->join('tipo_bloque','tipo_bloque.idTipoBloque=bloque.idTipoBloque','left');
		$this->db->join('encuesta','encuesta.idEncuesta=bloque.idEncuesta','left');
		//$this->db->where('nroBloque',8);
		$query = $this->db->get();	

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $fila){
				$data[] = $fila;
			}	


			return $data;
		}else{
			return false;
		}	
	}

	public function crearRelevamiento($data){
		$this->db->insert('relevamiento', 
			array('nroRelevamiento'=> $data['nroRelev'], 
					'fechaRelevamiento'=> $data['fechaR'],
					'observCriticidad'=> $data['observC'], 
					'idCriticidad'=> $data['idCriti'],
					'idEncuesta'=> $data['idEnc']));
		$idRelevamiento = $this->db->insert_id();
		return $idRelevamiento;
	}

	public function crearEncuestado($data){

		$this->db->insert('encuestado', 
			array('nombreEncuestado'=> $data['nombreE'], 
					'apellidoEncuestado'=> $data['apellidoE'],
					'dniEncuestado'=> $data['dniE'], 
					'edad'=> $data['edad'],
					'sexo'=> $data['sexo'],
					'idRelevamiento'=> $data['idRelev']));
		$idEncuestado= $this->db->insert_id();
	}

	public function obtenerEncuestado($dni){
		$this->db->select('encuestado.idEncuestado');
		$this->db->where('encuestado.dniEncuestado', $dni);
		$this->db->from('encuestado');
		$query = $this->db->get();

		if ($query->num_rows() > 0) return $query;
		else return false;
	}

	public function crearRespuestaElegida($data){
		$this->db->insert('respuesta_elegida', 
			array('respBreve'=>$data['respB'], 
					'idRelevamiento'=>$data['relevamiento'], 
					'idRespPreg'=>$data['idRespPreg'],
					'idEncuestado'=>$data['idEnc']));
		$idRespuestaElegida = $this->db->insert_id();
		return $idRespuestaElegida;
	}
}

?>
