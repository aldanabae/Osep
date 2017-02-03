<?php 
class Respuesta_model extends CI_Model {
	
    // modelo de  Respuesta
        public function __construct() {
            parent::__construct();
        }



    function get_all_respuesta(){  // metodo que devuelve todas las respuestas de una encuesta y bloque
        
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




    function create_respuesta($respuesta= null, $desc=null, $idPregunta =null )  // metodo para insertar una pregunta
    {


		$data = array(
				'respuesta' => $respuesta,
				'descripRespuesta' => $desc,
				'idPregunta' => $idPregunta,
				);
		//aqui se realiza la inserción, si queremos devolver algo deberíamos usar delantre return
		//y en el controlador despues de $nueva_insercion poner lo que queremos hacer, redirigir,
		//envíar un email, en fin, lo que deseemos hacer
		$valor = $this->db->insert('respuesta',$data);
        
        
        
        return $valor;



    }

    function edit_bloque($id_bloque){}





    function delete_bloque($id_bloque){}





}
