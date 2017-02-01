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
			//$this->db->join('tb_medico', 'tb_medico.codResponsable = tb_responsable.codResponsable', 'left');
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
			//$this->db->join('tb_medico', 'tb_medico.codResponsable = tb_responsable.codResponsable', 'left');
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
		//$this->db->join('tb_medico', 'tb_medico.codResponsable = tb_responsable.codResponsable', 'left');
		$query = $this->db->get();

		if ($query->num_rows() > 0) return $query;
		else return false;
	}
	
	function getServicio(){
		$query = $this->db->get('tb_servicio');
		if ($query->num_rows() > 0) return $query;
		else return false;
	}

	function getEspecialidad(){
		$query = $this->db->get('tb_especialidad');
		if ($query->num_rows() > 0) return $query;
		else return false;
	}

	function getUltimoEnfermero(){
		$query = $this->db->query("SELECT * FROM tb_enfermero ORDER BY codResponsable DESC LIMIT 1");

		if ($query->num_rows() > 0) return $query;
		else return false;
	}

	function actualizarResponsable($codR, $data){
		$datos = array(
			'nombreR'=>$data['nombreR'], 
			'apellidoR'=>$data['apellidoR'], 
			'telefonoR'=>$data['telefonoR'], 
			'direccionR'=>$data['direccionR'],
			'dniR'=>$data['dniR'],
			'tipoResponsable'=>$data['tipoResponsable']
		);

		$this->db->where('tb_responsable.codResponsable', $codR);
		$queryR = $this->db->update('tb_responsable', $datos);

		if ($datos['tipoResponsable'] == "Médico"){
			$datos = array(
				'matricula'=>$data['matricula'], 
				'codEspecialidad'=>$data['codEspecialidad']);
			$this->db->where('tb_medico.codResponsable', $codR);
			$queryM = $this->db->update('tb_medico', $datos);

		}elseif ($data['tipoResponsable'] == "Enfermero"){
			$datos = array(
				'nroLegajo'=>$data['nroLegajo'], 
				'codServicio'=>$data['codServicio']);
			$this->db->where('tb_enfermero.codResponsable', $codR);
			$queryR = $this->db->update('tb_enfermero', $datos);
		}
	}

	function eliminarResponsable($codR){
		$this->db->where('tb_responsable.codResponsable', $codR);
		$this->db->from('tb_responsable');
		$queryR = $this->db->get();

		$this->db->where('tb_medico.codResponsable', $codR);
		$this->db->from('tb_medico');
		$queryM = $this->db->get();

		$this->db->where('tb_enfermero.codResponsable', $codR);
		$this->db->from('tb_enfermero');
		$queryE = $this->db->get();

		if ($queryR->num_rows() > 0){

			if ($queryM->num_rows() > 0){
				$this->db->delete('tb_medico',array('tb_medico.codResponsable'=>$codR));
				$this->db->delete('tb_responsable',array('tb_responsable.codResponsable'=>$codR));
			}
			elseif ($queryE->num_rows() > 0){
				$this->db->delete('tb_enfermero',array('tb_enfermero.codResponsable'=>$codR));
				$this->db->delete('tb_responsable',array('tb_responsable.codResponsable'=>$codR));
			}
		}
	}
		
}
?>