<?php 
class Pregunta_model extends CI_Model {
	
    // modelo de  pregunta 
        public function __construct() {
            parent::__construct();
        }



    function get_all_pregunta($id_encuesta){  // metodo que devuelve todos las preguntas de una encuesta
        
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




    function create_pregunta($pregunta= null, $desc=null, $idSub =null, $idBloque= null, $idTipo=null )  // metodo para insertar una pregunta
    {


		$data = array(
				'pregunta' => $pregunta,
				'descripPregunta' => $desc,
				'idSubPregunta' => $idSub,
				'idBloque' => $idBloque,
				'idTipoPregunta' => $idTipo,
				);
		//aqui se realiza la inserción, si queremos devolver algo deberíamos usar delantre return
		//y en el controlador despues de $nueva_insercion poner lo que queremos hacer, redirigir,
		//envíar un email, en fin, lo que deseemos hacer
		$this->db->insert('pregunta',$data);
        $id_pregunta = $this->db->insert_id();

        
        return $id_pregunta;



    }

    function edit_bloque($id_bloque){}





    function delete_bloque($id_bloque){}





}
?>