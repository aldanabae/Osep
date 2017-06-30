<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  Quiz_lib
{

 private $CI;
 
    public function __construct()
    {
        $this->CI = get_instance();
        @$this->CI->load->model('abms/abmVisitas_model');

    } 
    

    /*
        Obtengo el ultimo id de relevamiento para el usuario que lo esta ingresando
        le debo subar uno al numero para enviarlo a la vista
    
    */
    public function get_last_id_quiz()
    {
            $id_usuario = @$_SESSION['logged_in']['id'];

            if($id_usuario != null ){
                // pido el ultimo id del usuario asignado
                $prueba = @$this->CI->abmVisitas_model->get_last_id($id_usuario);
                $prueba['nroRelevamiento']= $prueba['nroRelevamiento'] +1;

            }else{

                $prueba ['nroRelevamiento'] = 1;
            }

            return $prueba;
    }


    public function create_session_quiz($add_arr)
    {

    /*
        Esta funcion va a guardar los datos en sesion como un array, 
        como son datos generales estos se guardan una sola vez
        El resto de los datos se guardan en memoria LocalStorage

    */

            

            $pregResp = $add_arr;

        @$this->CI->session->set_userdata('qz_general', $pregResp);

    }


    public function update_session_quiz($add_arr)
    {

        /*
        supuestamente tengo en la sesion qz_general los datos principales
        Esta funcion  es para actualizar el arreglo en la sesion, 
        hay datos que se añaden en forma general a lo largo de toda la encuesta
        esta funcion debe encargarse de actualizar estos datos 

        */
        if(isset($_SESSION['qz_general'])){

           $arr_tmp= $_SESSION['qz_general'];

            $_SESSION['qz_general']= array_merge($arr_tmp, $add_arr);

        }




    }




}