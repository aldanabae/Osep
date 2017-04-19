<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AbmVisitas_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function crearVisita($data){
		$this->db->insert('direccion', 
			array('calle'=>$data['direccion'], 
					'numero'=>$data['numero'], 
					'dptoNumero'=>$data['nroDpto'],
					'manzana'=>$data['manzana'], 
					'casa'=>$data['casa'],
					'entreCalles1'=>$data['calle1'],
					'entreCalles2'=>$data['calle2'],
					'observaciones'=>$data['observacion'],
					'id_tlocalidad' => $data['localidad'],
					'barrio' => $data['barrio']));
		$idDireccion = $this->db->insert_id();

		$this->db->insert('visita', 
			array('nombreAfiliado'=>$data['nombreA'], 
					'apellidoAfiliado'=>$data['apellidoA'], 
					'cantLlamadas'=>$data['nroLlamada'],
					'telefono'=>$data['telefono'], 
					'nroAfiliado'=>$data['nroAfiliado'],
					'fechaHoy'=>$data['fechaHoy'],
					'fechaVisita'=>$data['fechaVisita'],
					'horaVisita'=>$data['horaVisita'],
					'idDireccion'=>$idDireccion));
		$idVisita = $this->db->insert_id();
	}

	function getDepartamentos(){
		$query = $this->db->get('departamento');
		if ($query->num_rows() > 0) return $query;
		else return false;
	}

	function getLocalidades(){
		$query = $this->db->get('localidad');
		if ($query->num_rows() > 0) return $query;
		else return false;
	}
	
	function obtenerLocalidades($idDpto){
	$this->db->where('id_tdeparta', $idDpto);
	$this->db->from('localidad');
	$this->db->order_by("descloc", "asc");
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







	function get_last_id($id_user){


	$this->db->select_max('nroRelevamiento');	
	$this->db->where('idEmpleado', $id_user);
	$this->db->from('relevamiento');
	$query = $this->db->get();
	
	
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $fila){
				$data['nroRelevamiento'] = (int) $fila->nroRelevamiento;
				
			}	
			
			return $data;
		}else{
			return false;
		}



	}
}
?>