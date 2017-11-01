<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AbmEmpleados_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function crearEmpleado($data){
		$this->db->insert('empleado', 
			array('nombreE'=>$data['nombreE'], 
					'apellidoE'=>$data['apellidoE'], 
					'telefono'=>$data['telefono'], 
					'direccion'=>$data['direccion'],
					'dni'=>$data['dni'],
					'nroLegajo'=>$data['nroLegajo'],
					'email'=>$data['email'],
					'convenio'=>$data['convenio'],
					'idReferente'=>$data['idReferente'],
					'activo'=> 1,
					'idTipoEmpleado'=>$data['tipoEmpleado']));
		$codEmp = $this->db->insert_id();
	
		$cantDptos = count($data['idDptos']);

		if($cantDptos >= 0){

			for ($i = 0; $i < $cantDptos; $i++){
				$this->db->insert('zona_referente', 
				array('idEmpleado'=>$codEmp, 
						'id_tdeparta'=>$data['idDptos'][$i]));
				$codZonaRef = $this->db->insert_id();
			}
		}

		if($data['tipoEmpleado'] == 6){
			$this->db->where('empleado.idEmpleado', $codEmp);
			$query = $this->db->update('empleado',array('idReferente'=>$codEmp));
		}
	}

	function obtenerEmpleados($nroL){
		if ($nroL == ''){
			$this->db->where('empleado.activo', 1);
			$this->db->from('empleado');
			$this->db->order_by('apellidoE','asc');
			$this->db->join('tipo_empleado', 'tipo_empleado.idTipoEmpleado = empleado.idTipoEmpleado', 'left');
			$query = $this->db->get();

		}else{
			$this->db->where('empleado.nroLegajo', $nroL);
			$this->db->where('empleado.activo', 1);
			$this->db->from('empleado');
			$this->db->join('tipo_empleado', 'tipo_empleado.idTipoEmpleado = empleado.idTipoEmpleado', 'left');
			$query = $this->db->get();
		}
		
		if ($query->num_rows() > 0) return $query;
			else return false;	
	}

	function obtenerEmpleado($codE){
		$this->db->select('empleado.idEmpleado,empleado.apellidoE,
							empleado.nombreE,empleado.direccion,
							empleado.telefono,empleado.nroLegajo,
							empleado.convenio,empleado.email,
							empleado.dni,empleado.idTipoEmpleado'
							);
		$this->db->where('empleado.idEmpleado', $codE);
		$this->db->from('empleado');
		$this->db->join('tipo_empleado', 'tipo_empleado.idTipoEmpleado = empleado.idTipoEmpleado', 'left');
		$query = $this->db->get();

		if ($query->num_rows() > 0) return $query;
		else return false;
	}


	function obtenerEmpleadoByTipo($tipo = null){
		$this->db->select('empleado.idEmpleado,empleado.apellidoE,
							empleado.nombreE,empleado.direccion,
							empleado.telefono,empleado.nroLegajo,
							empleado.convenio,empleado.email,
							empleado.dni,empleado.idTipoEmpleado'
							);
		if($tipo != null){

			$this->db->where('empleado.idTipoEmpleado', $tipo);
			//$this->db->where('empleado.activo', 1);
		}
		
		$this->db->from('empleado');
		$this->db->order_by("empleado.nombreE", "asc"); 
		$query = $this->db->get();

		if ($query->num_rows() > 0) return $query;
		else return false;
	}

	function actualizarEmpleado($codE, $data){
		$datos = array(
			'nombreE'=>$data['nombreE'], 
			'apellidoE'=>$data['apellidoE'], 
			'telefono'=>$data['telefono'], 
			'direccion'=>$data['direccion'],
			'dni'=>$data['dni'],
			'nroLegajo'=>$data['nroLegajo'],
			'email'=>$data['email'],
			'convenio'=>$data['convenio'],
			'idReferente'=>$data['idReferente'],
			'idTipoEmpleado'=>$data['idTipoEmpleado']
		);

		$this->db->where('empleado.idEmpleado', $codE);
		$query = $this->db->update('empleado', $datos);

		$this->db->delete('zona_referente',array('idEmpleado'=>$codE));

		$cantDptos = count($data['idDptos']);

		if($cantDptos >= 0){

			for ($i = 0; $i < $cantDptos; $i++){
				$this->db->insert('zona_referente', 
				array('idEmpleado'=>$codE, 
						'id_tdeparta'=>$data['idDptos'][$i]));
				$codZonaRef = $this->db->insert_id();
			}
		}

		if($data['idTipoEmpleado'] == 6){
			$this->db->where('empleado.idEmpleado', $codE);
			$query = $this->db->update('empleado',array('idReferente'=>$codE));
		}
	}

	function getTipoEmpleado(){
		$this->db->select('*');
		$this->db->from('tipo_empleado');
		$this->db->order_by("nombreTipoE", "asc"); 
		$query = $this->db->get();

		if ($query->num_rows() > 0) return $query;
		else return false;
	}

	function eliminarEmpleado($codE){
		$datos = array('activo'=> 0);

		$this->db->where('empleado.idEmpleado', $codE);
		$query = $this->db->update('empleado', $datos);
	}

	//Cargar combos segun si es Referente y Facilitador 
	public function getDatosCombo($tipoE){
		if($tipoE == 3 || $tipoE == 4 || $tipoE == 6){
			$this->db->select('*');
			$this->db->from('departamento');
			$this->db->order_by("descdep", "asc"); 
			$query = $this->db->get();

		}elseif($tipoE == 5){
			$this->db->select('*');
			$this->db->where('empleado.idTipoEmpleado', 3); 
			$this->db->or_where('empleado.idTipoEmpleado', 4);
			$this->db->or_where('empleado.idTipoEmpleado', 6);	
			$this->db->from('empleado');
			$this->db->order_by('apellidoE', 'asc'); 
			$query = $this->db->get();
		}

		if ($query->num_rows() > 0){
			foreach ($query->result() as $fila){
				$data[] = $fila;
			}	
			return $data;
		}else{
			return false;
		}
	}	
}
?>