<?php 
class Bloque_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}



  function get_all_bloques(){  // metodo que devuelve todos los bloques cargados
    
    $this->db->from('bloque');
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






  function obtenerNivel($idNivel){
    $this->db->where('idNivel', $idNivel);
    $this->db->from('nivel');
    $query = $this->db->get();

    if ($query->num_rows() > 0) return $query;
    else return false;
  }





function edit_bloque($id_bloque){}





function delete_bloque($id_bloque){}





}
?>