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
					'tipoEmpleado'=>$data['tipoEmpleado']));
		$codEmp = $this->db->insert_id();
	}

	function obtenerEmpleados($nroL){
		if ($nroL == ''){
			$this->db->select('empleado.idEmpleado,empleado.apellidoE,
								empleado.nombreE,empleado.direccion,
								empleado.telefono,empleado.nroLegajo,
								empleado.convenio,empleado.email,
								empleado.dni,empleado.tipoEmpleado'
								);
			$this->db->from('empleado');
			$query = $this->db->get();

		}else{
			$this->db->select('empleado.idEmpleado,empleado.apellidoE,
				empleado.nombreE,empleado.direccion,
				empleado.telefono,empleado.nroLegajo,
				empleado.convenio,empleado.email,
				empleado.dni,empleado.tipoEmpleado'
				);
			$this->db->where('empleado.nroLegajo', $nroL);
			$this->db->from('empleado');
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
							empleado.dni,empleado.tipoEmpleado'
							);
		$this->db->where('empleado.idEmpleado', $codE);
		$this->db->from('empleado');
		$query = $this->db->get();

		if ($query->num_rows() > 0) return $query;
		else return false;
	}


	function obtenerEmpleadoByTipo($tipo = null){
		$this->db->select('empleado.idEmpleado,empleado.apellidoE,
							empleado.nombreE,empleado.direccion,
							empleado.telefono,empleado.nroLegajo,
							empleado.convenio,empleado.email,
							empleado.dni,empleado.tipoEmpleado'
							);
		if($tipo != null){

			$this->db->where('empleado.tipoEmpleado', $tipo);

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
			'tipoEmpleado'=>$data['tipoEmpleado']
		);

		$this->db->where('empleado.idEmpleado', $codE);
		$query = $this->db->update('empleado', $datos);
	}

	function eliminarEmpleado($codE){
		$this->db->delete('empleado',array('idEmpleado'=>$codE));
	}
		
}
?>