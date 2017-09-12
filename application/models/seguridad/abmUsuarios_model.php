<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AbmUsuarios_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function crearUsuario($data){
		$this->db->insert('usuario', 
			array('usuario'=>$data['usuario'], 
				'contrasenia'=>MD5($data['contrasenia']), 
				'idEmpleado'=>$data['idEmpleado'], 
				'idNivel'=>$data['idNivel']));
	}

	function obtenerUsuarios($nombresU){
		if ($nombresU == ''){
			$this->db->from('usuario');
			$this->db->join('empleado', 'empleado.idEmpleado = usuario.idEmpleado');
			$this->db->join('nivel', 'nivel.idNivel = usuario.idNivel');
			$query = $this->db->get();

		}else{
			$this->db->where('usuario', $nombresU);
			$this->db->from('usuario');
			$this->db->join('empleado', 'empleado.idEmpleado = usuario.idEmpleado');
			$this->db->join('nivel', 'nivel.idNivel = usuario.idNivel');
			$query = $this->db->get();
		}
		
		if ($query->num_rows() > 0) return $query;
			else return false;	
	}

	function existeUsuario($nombreUsuario){
		$this->db->where('usuario', $nombreUsuario);
		$this->db->from('usuario');
		$query = $this->db->get();

		if ($query->num_rows() > 0) return true;
		else return false;
	}

	function obtenerEmpleados($nroLegajo){
		if ($nroLegajo == ''){
			$this->db->select('empleado.idEmpleado,empleado.apellidoE,
				empleado.nombreE,empleado.direccion,empleado.telefono,
				empleado.dni,empleado.nroLegajo,empleado.email, 
				empleado.convenio,empleado.idTipoEmpleado, tipo_empleado.nombreTipoE'
				);


			$this->db->from('empleado');
			$this->db->join('tipo_empleado', 'empleado.idTipoEmpleado = tipo_empleado.idTipoEmpleado');
			
			$query = $this->db->get();

		}else{
			$this->db->select('empleado.idEmpleado,empleado.apellidoE,
				empleado.nombreE,empleado.direccion,empleado.telefono,
				empleado.dni,empleado.nroLegajo,empleado.email,
				empleado.convenio,empleado.idTipoEmpleado'
				);
			$this->db->where('empleado.nroLegajo', $nroLegajo);
			$this->db->from('empleado');
			$query = $this->db->get();
		}
		
		if ($query->num_rows() > 0) return $query;
			else return false;	
	}

	function obtenerEmpleado($idEmp){
		$this->db->where('idEmpleado', $idEmp);
		$this->db->from('empleado');

		$query = $this->db->get();

		if ($query->num_rows() > 0) return $query;
		else return false;
	}

	function obtenerUsuario($codU){
		$this->db->where('idUsuario', $codU);
		$this->db->from('usuario');
		$this->db->join('empleado', 'empleado.idEmpleado = usuario.idEmpleado');
		$this->db->join('nivel', 'nivel.idNivel = usuario.idNivel');
		$query = $this->db->get();

		if ($query->num_rows() > 0) return $query;
		else return false;
	}
	
	function getResponsables(){
		$query = $this->db->get('tb_responsable');
		if ($query->num_rows() > 0) return $query;
		else return false;
	}

	function getNiveles(){
		$query = $this->db->get('nivel');
		if ($query->num_rows() > 0) return $query;
		else return false;
	}

	function actualizarUsuario($codU, $data){
		$datos = array(
				'usuario'=>$data['usuario'], 
				'contrasenia'=>MD5($data['contrasenia']), 
				'idEmpleado'=>$data['idEmpleado'], 
				'idNivel'=>$data['idNivel']);

		$this->db->where('idUsuario', $codU);
		$query = $this->db->update('usuario', $datos);
	}

	function eliminarUsuario($codU){
		$this->db->delete('usuario',array('idUsuario'=>$codU));
	}

	function tieneUsuario($idEmp){
		$this->db->select('usuario.idEmpleado');
		$this->db->from('usuario');	
		$this->db->where('usuario.idEmpleado', $idEmp);

		$query = $this->db->get();
		$result = $query->result();

		if($result){
			return TRUE;
		}else{
			return FALSE;
		}
	} 
}
?>