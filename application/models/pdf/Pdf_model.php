
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pdf_model extends CI_Model {


	function __construct(){
		parent:: __construct();
        $this->load->database();
        $this->load->model('relevamiento/Relevamiento_model');

    }
    

    public function getRespuesta_e($idRelevamiento, $idEncuestado= null, $bloque = null ){ // este metodo trae enue¿nciado de las preguntas de un relevamiento y un integrante

        
        /*
                recibo el id de relevamiento $idRelevamiento
                recivo el ID del encuestado opcional
                recibo el numero de bloque al cual corresponde las preguntas es opcional
        */
        $this->db->where('idRelevamiento', $idRelevamiento);

        if($idEncuestado != null){
            $this->db->where('idEncuestado', $idEncuestado);
        }        

        if($bloque != null){
            $this->db->where('idBloque', $bloque); 
        }

        $this->db->from('respuesta_elegida');
        $this->db->join('pregunta ','respuesta_elegida.idPregunta = pregunta.idPregunta');

        $query = $this->db->get();

        $dato = $this->Pdf_model->getMergeQuest($query);

        return $dato;

    }




        private function getMergeQuest($result){ // este metod unifica la consulta anterior con las respuestas elegidas

            /*
                 recibo solo la query competa, y devuelve un array de pregunta y respuesta
                 Metodo de acceso privado

            */
            $mergeQuest=[];
            $query= $result->result();

            foreach($query as $dato){


                if($dato->idRespuesta == 0 ){

                    $mergeQuest[]= [$dato->pregunta, $dato->respBreve ];

                }else{

                    $mergeQuest[]= [$dato->pregunta, $this->Pdf_model->getRespuesta($dato->idRespuesta) ];

                }


            }

            return $mergeQuest;

        }





        public function getDireccion_e($idD){

            /*
                Este metodo trae la direccion + dep y localidad
                el retorno va con 0  por que es un unico registro 
                para limpiar el retorno 
            
            */

            $this->db->where('idDireccion', $idD);
            $this->db->from('direccion');
            $this->db->join('localidad','localidad.id_tlocalidad=direccion.id_tlocalidad','left');
            $this->db->join('departamento','departamento.id_tdeparta=direccion.dptoNumero','left');
            $query = $this->db->get();
            if ($query->num_rows() > 0) return $query->result()[0];
            else return false;
        }
    



        private function getRespuesta($idRespuesta){ // solo devuelve un String de la respuesta que eligio

            /*
                Metodo de acceso privado
            */
            try{

                $this->db->select('respuesta');
                $this->db->from('respuesta');
                $this->db->where('idRespuesta', $idRespuesta);
                $this->db->limit(1);
                $query = $this->db->get();	
                return $query->result()[0]->respuesta;

            }catch(Exception $e)
            {

                return $e;

            }
        
        }



        public function getBloques_e( $arr_dif = null){  // este metodo trae los bloques con la diferencia que quita los que le pasas en el arreglo por parametro
            // en arr_dif estan los ID de cada bloque que debe ser removido en la respuesta el parametro es opcional

            $allBloques = $this->Relevamiento_model->obtenerBloques();// aqui trae todos los bloques
            $output= [];
            //en esta instancia se eliminan los bloques reportados

            if(is_array($arr_dif) && !is_null($arr_dif ) ){ // verifico que reciba un array  y no este null

                foreach($allBloques as $valor){  //bucle entre todos los registros de bloques

                    $tmp= (int) $valor->idBloque; //saco el id de bloque como int
                    
                    if( !in_array( $tmp ,$arr_dif)){  // si el item NO esta en el array de parametros que recibo, comienzo a llenar el array de salida

                        array_push($output,$valor ); //agrego un item 
                    }
                }
            }else{

                $output=$allBloques;

            }

            //var_dump($output);
            return $output;
        }


}