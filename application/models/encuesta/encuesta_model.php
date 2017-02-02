<?php 
class Encuesta_model extends CI_Model {
	
        public function __construct() {
            parent::__construct();
        }



    function get_encuesta($id_encuesta){  // metodo que devuelve todos los bloques cargados
        
        $this->db->from('tipo_pregunta');
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






    function edit_encuesta($id_bloque){}





    function delete_encuesta($id_bloque){}





}
?>