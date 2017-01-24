<?php 
class My_model extends CI_Model {
	
	protected $_tablename	= '';
	protected $_id_table	= '';
	protected $_order		= '';
	protected $_subject		= '';
	protected $_array_cruze	;
	
	
	function __construct(
		$tablename	= null, 
		$id			= null,
		$order		= null,
		$subject		= null,
		$_array_cruze = null
	)
	{
		$this->_tablename	= $tablename;
		$this->_id_table	= $id;
		$this->_order		= $order;
		$this->_subject		= $subject;
		$this->_array_cruze = $_array_cruze;
		
		parent::__construct();
	}
	
/*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para traer registro por ID
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/
	
	function getRegistro($id){
		$sql = "SELECT 
					* 
				FROM 
					$this->_tablename 
				WHERE 
					$this->_id_table = '$id'";
					
		return $this->getQuery($sql);
	}

/*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para traer todo
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/
	
	function getTodo($tabla = NULL){
		if($tabla){
			$sql = "SELECT 
						* 
					FROM 
						$tabla 
					WHERE 
						eliminado = 0";
		} else {	
			$sql = "SELECT 
						* 
					FROM 
						$this->_tablename 
					WHERE 
						eliminado = 0";
		}		

		return $this->getQuery($sql);
	}
	
	
	
/*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Para traer la cantidad de registros
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/
	
	function getCantidad()
	{
		if($this->db->field_exists('fecha', $this->_tablename)){
			$fechafinal =  date('Y-m-d');	
			$nuevafecha = strtotime ( '-1 month' , strtotime ( $fechafinal ) ) ;
			$nuevafecha = date ('Y-m-d' , $nuevafecha );

			$sql = "SELECT 
							* 
					FROM 
						$this->_tablename
					WHERE
						eliminado = 0
					AND
						fecha >= '$nuevafecha'";
		}else{		
			$sql = "SELECT 
							* 
					FROM 
						$this->_tablename
					WHERE
						eliminado = 0";
		}
		
		$query = $this->db->query($sql);
		
		return $query->num_rows();
	}
	


/*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para traer Todo con cruce (tabla,id_tabla,tabla_cruce)
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/
		
	function getCruce($id,$tabla){
		foreach ($this->_array_cruze as $key => $value) {
			if($key == $tabla){
				$value['table'];
				$value['id_table'];
				$value['sin_table'];
					
				/*----- TRAIGO LOS TIPOS ADEMAS DE LA INFORMACION---*/
				if ($this->db->field_exists('id_tipo',$value['table'])){
					/*----- TRAIGO LAS PROVINCIAS Y PAISES ADEMAS DE LA INFORMACION---*/
					if ($this->db->field_exists('id_pais',$value['table'])){
						$sql = "SELECT 
							$value[table].*, 
							tipo, 
							nombre_provincia, 
							nombre_pais,
							nombre_departamento
						FROM 
							$this->_tablename 
						INNER JOIN 
							$value[sin_table] USING($this->_id_table) 
						INNER JOIN 
							$value[table] USING($value[id_table])
						LEFT JOIN 
							paises USING(id_pais)
						LEFT JOIN 
							provincias USING(id_provincia)
						LEFT JOIN 
							departamentos USING(id_departamento)
						INNER JOIN 
							tipos USING(id_tipo)
						WHERE 
							$this->_id_table =  '$id'
						AND
							$value[table].eliminado = 0";		
					} else {
						$sql = "SELECT 
							$value[table].*, tipo
						FROM 
							$this->_tablename 
						INNER JOIN 
							$value[sin_table] USING($this->_id_table) 
						INNER JOIN 
								$value[table] USING($value[id_table])
							INNER JOIN 
								tipos USING(id_tipo)
							WHERE 
								$this->_id_table =  '$id'
							AND
								$value[table].eliminado = 0";	
						}
					
					
					}
					/*----- SIN TIPOS ADEMAS DE LA INFORMACION---*/
					else {
						$sql = "SELECT 
									$value[table].*,
									$value[sin_table].eliminado AS activo
								FROM 
									$this->_tablename 
								INNER JOIN 
									$value[sin_table] USING($this->_id_table) 
								INNER JOIN 
									$value[table] USING($value[id_table])
								WHERE 
									$this->_id_table =  '$id'
								AND
									$value[table].eliminado = 0";
					
					}
					
				return $this->getQuery($sql);
			}
		
		}

	}
	
 /*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para insertar
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/
	
	function insert($arreglo){
		$arreglo = $this->getExtraField($arreglo);		
		
		$this->db->insert($this->_tablename, $arreglo);
		
		$id_insert	= $this->db->insert_id();
		
		$log = array(
			'accion'	=> 'INSERT',
			'tabla'		=> $this->_tablename,
			'id_cambio'	=> $id_insert
		);
		 
		$this->logRegistros($log);
		
		return $id_insert;	
	}
 /*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para insertar con tabla cruce 
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/
		
	function insertCruce($tipo_usuario, $id_perfil, $id_usuario){
		if($tipo_usuario == 1){
			$sin = array(
				"$this->_id_table" 	=> $id_perfil, 
				"id_cliente" 		=> $id_usuario		
			);
			$tabla = 'sin_clientes_'.$this->_tablename;
						
		}else if($tipo_usuario == 2){
			$sin = array(
				"$this->_id_table" 	=> $id_perfil, 
				"id_vendedor" 		=> $id_usuario		
			);
			$tabla = 'sin_vendedores_'.$this->_tablename;
			 
		}
		
		$sql = "SELECT 
					* 
				FROM 
					$tabla 
				WHERE ";
				
		foreach ($sin as $key => $value) {
			$sql .= $key." = '".$value."' AND ";
		}
		$sql = substr($sql, 0, -4);
		
		if(!$this->getQuery($sql)){
			$sin = $this->getExtraField($sin, 'insert', $tabla);		
			$this->db->insert($tabla, $sin);
		}else{
			log_message('ERROR', 'Insert en tabla de sincronización repetida en '.$sql);
		}
	}
 /*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para actualizar
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/
	
	function update($arreglo_campos, $id){
		$arreglo_campos = $this->getExtraField($arreglo_campos, 'update');
		
		$this->db->where($this->_id_table, $id);
		$this->db->update($this->_tablename, $arreglo_campos);
		
		if($arreglo_campos['eliminado'] == 1){
			$log = array(
				'accion'	=> 'DELETE',
				'tabla'		=> $this->_tablename,
				'id_cambio'	=> $id
			);	
		} else {
			$log = array(
				'accion'	=> 'UPDATE',
				'tabla'		=> $this->_tablename,
				'id_cambio'	=> $id
			);
		}
		
		 
		$this->logRegistros($log);
		
		return $id;
	}
	
	
 /*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para tipos de...
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/
	
	function getTipos(){
		$sql = "SELECT 
					* 
				FROM 
					tipos 
				WHERE 
					eliminado = 0";
				
		return $this->getQuery($sql);	
	}
	
 /*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para ver si se puede eliminar el registro
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/	
 
	function permitirEliminarPresupuesto($id){

		$this->db->select('*');
		$this->db->from('presupuestos');
		$this->db->join('estados_presupuestos', 'estados_presupuestos.id_estado_presupuesto = presupuestos.id_estado_presupuesto');
		$this->db->where($this->_id_table, $id);
		$this->db->where('eliminar_'.$this->_subject, 0);
		
		
		if($this->db->count_all_results()>0){
			return FALSE;
		}else{
			return TRUE;
		}	
	}
	
	
	
	function permitirEliminarPedido($id){

		$this->db->select('*');
		$this->db->from('pedidos');
		$this->db->join('estados_pedidos', 'estados_pedidos.id_estado_pedido = pedidos.id_estado_pedido');
		$this->db->where($this->_id_table, $id);
		$this->db->where('eliminar_'.$this->_subject, 0);
		
		
		if($this->db->count_all_results()>0){
			return FALSE;
		}else{
			return TRUE;
		}	
	}
	
/*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para ver traer registros nuevos
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/	
		
	function mensajesNuevos(){
		$sql = "SELECT 
					$this->_tablename.*,
					origen.origen
				FROM 
					$this->_tablename
				INNER JOIN
					origen
				USING
					(id_origen)
				WHERE
					visto = 0
				AND
					$this->_tablename.eliminado = 0";
		
		return $this->getQuery($sql);			
	}
	
/*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para traer Productos
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/	
			
	public function getProductosTodo(){	
		$sql = "SELECT 
					* 
				FROM 
					productos 
				WHERE 
					1
				AND 
					eliminado = 0";
		
		return $this->getQuery($sql);	
	}
	
/*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para traer Alarmas
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/	
 
	function getAlarmas($id){
			
		$sql = "SELECT
					alarmas.*,
					tipos_alarmas.*
				FROM 
					$this->_tablename
				INNER JOIN
					sin_alarmas_$this->_tablename
				USING
					($this->_id_table)
				INNER JOIN
					alarmas
				USING
					(id_alarma)
				INNER JOIN 
					tipos_alarmas
				USING
					(id_tipo_alarma)
				WHERE 
					$this->_id_table = $id
				AND
					alarmas.eliminado = 0";

		return $this->getQuery($sql);	
	}
	
/*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para dejar registro de cambios
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/
 
 	function logRegistros($arreglo){
 		$arreglo = $this->getExtraField($arreglo);
 		
		$this->db->insert('logs', $arreglo);
		 
		return $this->db->insert_id();
 	}


/*--------------------------------------------------------------------------------	
----------------------------------------------------------------------------------
 			Función para traer todo
----------------------------------------------------------------------------------
---------------------------------------------------------------------------------*/
	
	function getActualizacion($id_vendedor, $cruce = NULL){
		if($cruce == NULL){
			$sql = "SELECT 
							* 
						FROM 
							$this->_tablename 
						WHERE 
							eliminado = 0 AND
							$this->_tablename.id_vendedor = '$id_vendedor'";
		} else if ($cruce == 'vendedores') {
			foreach ($this->_array_cruze as $key => $value) {
				if($key == $cruce){
					$sql = "SELECT 
								$this->_tablename.*,
								$value[sin_table].eliminado AS activo
							FROM 
								$this->_tablename 
							INNER JOIN 
								$value[sin_table] USING($this->_id_table) 
							WHERE 
								$value[sin_table].eliminado = 0 AND 
								$value[sin_table].id_vendedor = '$id_vendedor'";
				}
			}
		} else {
			foreach ($this->_array_cruze as $key => $value) {
				if($key == $cruce){
					$sql = 
							"SELECT 
								$value[table].* 
							FROM 
								`$value[sin_table]` 
							INNER JOIN 
								`$value[table]` ON($value[sin_table].$value[id_table] = $value[table].$value[id_table]) 
							INNER JOIN 
								`$this->_tablename` ON($value[sin_table].$this->_id_table = $this->_tablename.$this->_id_table)
							INNER JOIN 
								`sin_vendedores_clientes` ON(sin_vendedores_clientes.$this->_id_table = $this->_tablename.$this->_id_table)
							WHERE 
								sin_vendedores_clientes.id_vendedor = '$id_vendedor' AND
								$value[table].eliminado = 0 AND
								$value[sin_table].eliminado = 0
							GROUP BY 
								$value[table].$value[id_table]";
				}
			}
		}
		
		return $this->getQuery($sql);
	}
	
 /*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para contar registros
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/
	
	function getCantidadRegistros(){
		return $this->db->count_all($this->_tablename);
	}
	
/*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para Insertar Cruce con Modos
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/	
 
	function insertCruceModos($arreglo_cruce){
		$arreglo_cruce = $this->getExtraField($arreglo_cruce);

		$this->db->insert('sin_'.$this->_tablename.'_modos', $arreglo_cruce);
	}	
	
/*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para actualizar Cruce Pedidos/Presupuestos con Modos
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/		
 
	function updateCruceModos($arreglo_campos, $id){
		$arreglo_campos = $this->getExtraField($arreglo_campos, 'update');
		
		$this->db->where('id_sin_'.$this->_subject.'_modo', $id);
		$this->db->update('sin_'.$this->_tablename.'_modos', $arreglo_campos);
		
		if($arreglo_campos['eliminado'] == 1){
			$log = array(
				'accion'	=> 'DELETE',
				'tabla'		=> 'sin_'.$this->_tablename.'_modos',
				'id_cambio'	=> $id
			);	
		}
		else{
			$log = array(
				'accion'	=> 'UPDATE',
				'tabla'		=> 'sin_'.$this->_tablename.'_modos',
				'id_cambio'	=> $id
			);
		}
		 
		$this->logRegistros($log);
		
		return $id;
	}
	
	
/*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para armar query
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/	
 
	function getQuery($sql, $type = NULL){
		$query = $this->db->query($sql);
		
		if($query->num_rows() > 0){
			if($type === NULL || $type == 'objet'){
				foreach ($query->result() as $fila){
					$data[] = $fila;
				}	
			}else if($type == 'array'){
				foreach ($query->result_array() as $row){
					$data[] = $row;
				}
			}
			return $data;
		} else {
			return FALSE;
		}
	}
	
/*--------------------------------------------------------------------------------	
 --------------------------------------------------------------------------------
 			Función para campos especiales
 --------------------------------------------------------------------------------
 --------------------------------------------------------------------------------*/		
	
	function getExtraField($array, $action = NULL, $tabla = NULL){
		$session_data = $this->session->userdata('logged_in');	
		
		if($tabla === NULL){
			$tabla = $this->_tablename;
		}
		
		if($action === NULL || $action == 'insert'){
			$campos = array (
				'date_add'	=> date('Y-m-d H:i:s'),
				'date_upd'	=> date('Y-m-d H:i:s'),
				'user_add'	=> $session_data['id_usuario'],
				'user_upd'	=> $session_data['id_usuario']
			);
		}else{
			$campos = array (
				'date_upd'	=> date('Y-m-d H:i:s'),
				'user_upd'	=> $session_data['id_usuario'],
				'visto'		=> 0, 
			);
		}
		
		foreach ($campos as $key => $value) {
			if($this->db->field_exists($key, $tabla)){
				if(!isset($array[$key])){
					$array[$key] = $value;	
				}
			}
		}
		
		return $array;
	}
} 
?>
