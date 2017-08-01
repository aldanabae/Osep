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


	// todo dar vuelta la fecha para que se guarde
	public function crearRelevamiento($data){
		$this->db->insert('relevamiento', 

			array('nroRelevamiento'=> $data['nroRelevamiento'], 
					'fechaRelevamiento'=> $data['fechaRelevamiento'],
					'idEncuesta'=> $data['idEncuesta'], 
					'idDireccion'=> $data['idDireccion'],
					'idEmpleado'=> $data['idEmpleado'],
					'cantEncuestados'=> $data['cantEncuestados'],
					'observacion'=> $data['observacion'],
					'telTitular'=> $data['telTitular'],
					'telSup'=> $data['telSup'],
					'estado'=> $data['estado']));


		$idRelevamiento = $this->db->insert_id();
		return $idRelevamiento;
	}



// metodo para crear una direccion para relevamiento
	public function crearDireccion($data){
		
		$this->db->insert('direccion', 
			array(  'calle'=> $data['calle'], 
					'casa'=> $data['casa'],
					'numero'=> $data['numero'], 
					'dptoNumero'=> $data['dptoNumero'], 
					'entreCalles1'=> $data['entreCalles1'],
					'barrio'=> $data['barrio'],
					'manzana'=> $data['manzana'],
					'id_tlocalidad'=> $data['id_tlocalidad']));

		$idDireccion = $this->db->insert_id();

		return $idDireccion;
	}

	// este metodo me devuelve el relevamiento parte inicial en base a el id de usuario en busca del  ultimo relevameinto abierto
	public function getRelevamientoByUser($id_user){

		$state= '1';     // seteo a estado 1  o abierto
		
		$this->db->select();
		$this->db->from('relevamiento');
		$this->db->join('direccion', 'direccion.idDireccion = relevamiento.idDireccion');
		$this->db->where('idEmpleado', $id_user);
		$this->db->limit(1);
		$this->db->where('estado', $state);
		$query= $this->db->get();
		//returns result objects array
		return $query->result();

	}


	public function editDireccion($idDireccion, $updateData){

	$data = array(
               'calle' => $updateData['calle'],
               'casa' => $updateData['casa'],
               'numero' => $updateData['numero'],
               'dptoNumero' => $updateData['dptoNumero'],
               'entreCalles1' => $updateData['entreCalles1'],
               'entreCalles2' => "",
               'barrio' => $updateData['barrio'],
               'observaciones' => "",
               'manzana' => $updateData['manzana'],
               'id_tlocalidad' => $updateData['id_tlocalidad']
            );

		$this->db->where('idDireccion', $idDireccion);
		$this->db->update('direccion', $data); 

		return $idDireccion;

	}


	public function editRelevamiento($idRelevamiento, $updateData){

		$data = array(
				'nroRelevamiento' => $updateData['nroRelevamiento'],
				'fechaRelevamiento' => $updateData['fechaRelevamiento'],
				'observCriticidad' => "",
				'idCriticidad' =>null,
				'idEncuesta' => $updateData['idEncuesta'],  // todo esto debe cambiar por parametro dinamico
				'idVisita' => "",
				'idDireccion' => $updateData['idDireccion'], // parametro que viene de otro update
				'idEmpleado' => $updateData['idEmpleado'],
				'cantEncuestados' => $updateData['cantEncuestados'],
				'observacion' => $updateData['observacion'],
				'telTitular' => $updateData['telTitular'],
				'telSup' => $updateData['telSup'],
				'estado' => $updateData['estado']
				);

			$this->db->where('idRelevamiento', $idRelevamiento);
			$this->db->update('relevamiento', $data); 
			
			return $idRelevamiento;


	}










// modelo de encuestado

	public function crearEncuestado($data){
		$this->db->insert('encuestado', 
			array('nombreEncuestado'=> $data->nombre, 
					'apellidoEncuestado'=> $data->apellido,
					'dniEncuestado'=> $data->dni, 
					'edad'=> $data->edad,
					'sexo'=> $data->sexo,
					'idRelevamiento'=> $data->id_relev,
					'nroAfiliado'=> $data->n_afiliado,
					'respondeR'=> $data->respondeR
					));
		$idEncuestado= $this->db->insert_id();

		return $data;
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


	
	public function obtenerRelevamientos(){
		$this->db->select('*');
		$this->db->from('relevamiento');
		$this->db->join('encuesta','encuesta.idEncuesta=relevamiento.idEncuesta','left');
		$this->db->join('criticidad','criticidad.idCriticidad=relevamiento.idCriticidad','left');
		$this->db->join('empleado','empleado.idEmpleado=relevamiento.idEmpleado','left');
		$this->db->join('visita','visita.idVisita=relevamiento.idVisita','left');
		$query = $this->db->get();	
		if ($query->num_rows() > 0) return $query;
		else return false;
	}
	public function getRelevamiento($nroRelev){
		$this->db->where('idRelevamiento', $nroRelev);
		$this->db->from('relevamiento');
		$this->db->join('encuesta','encuesta.idEncuesta=relevamiento.idEncuesta','left');
		$this->db->join('criticidad','criticidad.idCriticidad=relevamiento.idCriticidad','left');
		$this->db->join('empleado','empleado.idEmpleado=relevamiento.idEmpleado','left');
		$this->db->join('visita','visita.idVisita=relevamiento.idVisita','left');
		$query = $this->db->get();
		if ($query->num_rows() > 0) return $query;
		else return false;
	}
	public function getDireccion($idD){
		$this->db->where('idDireccion', $idD);
		$this->db->from('direccion');
		$this->db->join('localidad','localidad.id_tlocalidad=direccion.id_tlocalidad','left');
		$query = $this->db->get();
		if ($query->num_rows() > 0) return $query;
		else return false;
	}
	public function getDepartamento($idDpto){
		$this->db->where('id_tdeparta', $idDpto);
		$this->db->from('departamento');
		$query = $this->db->get();
		if ($query->num_rows() > 0) return $query;
		else return false;
	}
	//Buscar todas las respuestas elegidas de un relevamiento y de los encuestados de ese relevamiento
	public function getRespElegidas($nroRelev){
		$this->db->where('idRelevamiento', $nroRelev);
		$this->db->from('respuesta_elegida');
		$this->db->join('pregunta','pregunta.idPregunta=respuesta_elegida.idPregunta','left');
		$this->db->join('respuesta','respuesta.idRespuesta=respuesta_elegida.idRespuesta','left');
		$this->db->order_by('idRespuestaElegida', 'ASC');
		$query = $this->db->get();
		if ($query->num_rows() > 0) return $query;
		else return false;
	}
	public function getEncuestados($nroRelev){
		$this->db->where('idRelevamiento', $nroRelev);
		$this->db->from('encuestado');
		$query = $this->db->get();
		if ($query->num_rows() > 0) return $query;
		else return false;
	}
	public function getRespEncuestado($idEnc){
		$this->db->where('idEncuestado', $idEnc);
		$this->db->from('respuesta_elegida');
		$this->db->join('pregunta','pregunta.idPregunta=respuesta_elegida.idPregunta','left');
		$this->db->join('respuesta','respuesta.idRespuesta=respuesta_elegida.idRespuesta','left');
		$this->db->order_by('idRespuestaElegida', 'ASC');
		$query = $this->db->get();
		if ($query->num_rows() > 0) return $query;
		else return false;
	}
	public function getRelevNro($nroRelev){
		if ($nroRelev == ''){
			$this->db->from('relevamiento');
			$this->db->join('encuesta','encuesta.idEncuesta=relevamiento.idEncuesta','left');
			$this->db->join('criticidad','criticidad.idCriticidad=relevamiento.idCriticidad','left');
			$this->db->join('empleado','empleado.idEmpleado=relevamiento.idEmpleado','left');
			$this->db->join('visita','visita.idVisita=relevamiento.idVisita','left');
			$query = $this->db->get();
		}else{
			$this->db->where('nroRelevamiento', $nroRelev);
			$this->db->from('relevamiento');
			$this->db->join('encuesta','encuesta.idEncuesta=relevamiento.idEncuesta','left');
			$this->db->join('criticidad','criticidad.idCriticidad=relevamiento.idCriticidad','left');
			$this->db->join('empleado','empleado.idEmpleado=relevamiento.idEmpleado','left');
			$this->db->join('visita','visita.idVisita=relevamiento.idVisita','left');
			$query = $this->db->get();
		}
		if ($query->num_rows() > 0) return $query;
		else return false;
	}
}
?>