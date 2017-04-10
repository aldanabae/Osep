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
    



    public function ajaxSimple($name,$segment,$div)
    {
    if($name != FALSE)
    {
        @$this->CI->load->view('ajax/ajaxSimple_view',
        array(
        'name' => $name,
        'segment' => $segment,
        'div' => $div
        ));
        }
    else
        {
        @$this->CI->load->view('ajax/ajaxSimple_view',
        array(
        'name' => $name,
        'segment' => $segment,
        'div' => $div
        ));
        }
    }


    /*
        Obtengo el ultimo id de relevamiento para el usuario que lo esta ingresando
        le debo subar uno al numero para enviarlo a la vista
    
    */
    public function get_last_id_quiz()
    {
            $id_usuario = @$_SESSION['logged_in']['id'];

            if($id_usuario != null ){

                $prueba = @$this->CI->abmVisitas_model->get_last_id($id_usuario);
                $prueba['nroRelevamiento']= $prueba['nroRelevamiento'] +1;

                @$this->CI->session->set_userdata('hola', $pregResp);
               

            }else{

                $prueba = 'sin datos ';

            }

            return $prueba;


    }


    public function create_session_quiz()
    {


                $pregResp = array(
    
    ['idPregunta' => "5",
    'idRespuesta' =>"tu vieja"],

    ['idPregunta' => "5",
    'idRespuesta' =>"6"],


    ['idPregunta' => "5",
    'idRespuesta' =>"6"],

    ['idPregunta' => "7",
    'idRespuesta' =>"7"],
    
    ['idPregunta' => "88",
    'idRespuesta' =>"33"],

);



    }


    public function update_session_quiz()
    {





    }




}