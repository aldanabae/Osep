<?php 
class Bloque_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}



  function get_all_bloques($id_encuesta){  // metodo que devuelve todos los bloques cargados
    
    $this->db->from('bloque');
    $this->db->where('idEncuesta', $id_encuesta);
    $this->db->order_by('nroBloque', 'ASC');
    $query = $this->db->get();
      if($query->num_rows()>0){
        foreach ($query->result() as $fila){
          $data[] = $fila;
        }	
          return $data;
      }else{
          return $data=0;
      }
  }



  function get_bloques_encuesta($id_encuesta){  // metodo que devuelve todos los bloques cargados

    $this->load->model('encuesta/pregunta_model', 'pregunta');
    
    $this->db->from('bloque');
    $this->db->where('idEncuesta', $id_encuesta);
    $this->db->order_by('nroBloque', 'ASC');
    $query = $this->db->get();
      if($query->num_rows()>0){
        foreach ($query->result() as $fila){
          $data[] = $fila;

        }	

          return $data;
      }else{
          return $data=0;
      }
  }





  function create_bloque($numero, $nombre, $id_encuesta)
  {

		$data = array(
				'nroBloque' => $numero,
				'nombreBloque' => $nombre,
				'idEncuesta' => $id_encuesta,
				);
		//aqui se realiza la inserción, si queremos devolver algo deberíamos usar delantre return
		//y en el controlador despues de $nueva_insercion poner lo que queremos hacer, redirigir,
		//envíar un email, en fin, lo que deseemos hacer
		$valor = $this->db->insert('bloque',$data);
        
        
        
        return $valor;


    
  }



function edit_bloque($id_bloque){}





function delete_bloque($id_bloque){}





}
?>