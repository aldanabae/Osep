<?php 
class Encuesta_model extends CI_Model {
	
        public function __construct() {
            parent::__construct();
        }




    function get_all_encuesta(){  // metodo que devuelve todas las encuestas
        
        $this->db->from('encuesta');
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




    function get_encuesta($id_encuesta){  // metodo que devuelve todos las encuestas

        $this->load->model('encuesta/bloque_model', 'bloque');       // relacionando modelo encuesta  con bloque  y respuesta
        $this->load->model('encuesta/pregunta_model', 'pregunta');


        $this->db->from('encuesta');
        $this->db->where('idEncuesta', $id_encuesta);

        $query = $this->db->get();       // hago la consulta  y traigo los datos de la encuesta que pido
        if($query->num_rows()>0){
            foreach ($query->result() as $fila){
                $data['encuesta'] = $fila;
                $data['bloques']= $this->bloque->get_bloques_encuesta($id_encuesta);
                
            }	




//var_dump($this->bloque->get_bloques_encuesta(1));





            return $data;
        }else{
            return $data=0;
        }
    }




	function create_encuesta($data){
		$this->db->insert('encuesta', 
			array( 'nombreEncuesta'=>$data['nombreE']));

		 $codEmp = $this->db->insert_id();
         return  $codEmp;
	}




    function edit_encuesta($id_bloque){}





    function delete_encuesta($id_bloque){}





}
?>