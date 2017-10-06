<?php
// Este es el controlador general de encuestas
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfc extends CI_Controller{

	function __construct(){
		parent::__construct();

            $this->load->helper('form');
            $this->load->helper('url');

            // modelo de relevamiento
            $this->load->library('Pdf');
            $this->load->model('relevamiento/Relevamiento_model');
            $this->load->model('pdf/Pdf_model');
            $this->load->model('abms/abmEmpleados_model');
            $this->load->model('seguridad/AbmNiveles_model');
            $this->load->model('seguridad/AbmUsuarios_model');
            $this->load->model('Bienvenida_model');
    }


    function index(){  

    
        // Aqui colocar una proteccion para la redireccion o de sesion
        // el metodo index no se utiliza... en este caso por que necesito el valor del id segment para usarlo como parametro
        redirect('relevamiento/relevamientoC', 'refresh');
        
        
    }


    function printPdf(){


        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['nombreE'] = $session_data['nombreE'];
        $data['nivel'] = $session_data['nivel'];
        $this->session->set_flashdata('username', $data);
        $this->session->set_flashdata('nombreE', $data);
        $this->session->set_flashdata('nivel', $data);
        //mantener sidebar dinamica
        $session_data = $this->session->userdata('logged_in');
        $data['nivel'] = $this->Bienvenida_model->obtenerNivel($session_data['nivel']);





        ob_start();
        date_default_timezone_set('America/Argentina/Mendoza');
        $data['nroRelev'] = $this->uri->segment(3);
		// aqui traigo los datos generales del relevamiento
		$data['relevamiento'] = $this->Relevamiento_model->getRelevamiento($data['nroRelev']);

        if( $data['relevamiento'] != false){

            //var_dump($_SESSION);
            //trae tods los datos de integrantes pertenecientes al mism relevamiento
            // $data['encuestados'] = $this->Relevamiento_model->getEncuestados($data['nroRelev']);


            // $data['bloques']= $this->Relevamiento_model->obtenerBloques();
            $relevamiento = $data['relevamiento']->result()[0]; // consulta de datos de relevamiento la paso a esta variable

                
            
            
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Osep');
            $pdf->SetTitle('Impresion PDF Relevamiento');
            $pdf->SetSubject('Osep Relevamiento');
            $pdf->SetKeywords('TCPDF, PDF, osep, tms, relevamiento');

        // datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Relevamiento N°'. $relevamiento->nroRelevamiento, PDF_HEADER_STRING);
            $pdf->setFooterData($tc = array(0, 64, 0), $lc = array(0, 64, 128));

        // datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config.php de libraries/config
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // se pueden modificar en el archivo tcpdf_config.php de libraries/config
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // se pueden modificar en el archivo tcpdf_config.php de libraries/config
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // se pueden modificar en el archivo tcpdf_config.php de libraries/config
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        //relación utilizada para ajustar la conversión de los píxeles
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
            
            // ---------------------------------------------------------
            
            // set default font subsetting mode
            $pdf->setFontSubsetting(true);
            
            // Set font
            // dejavusans is a UTF-8 Unicode font, if you only need to
            // print standard ASCII chars, you can use core fonts like
            // helvetica or times to reduce file size.
            $pdf->SetFont('dejavusans', 'B', 15, '', true);

            // Add a page
            // This method has several options, check the source code documentation for more information.
            $pdf->AddPage();
            
            $pdf->SetFont('freemono', '', 9);


            //Aqui van las consultas


            $encuestados= unserialize($relevamiento->cantEncuestados); // deserializo el string y saco la cantidad de integrantes
            
            $direccion= $this->Pdf_model->getDireccion_e($relevamiento->idDireccion); // traigo la direccion a partir del id de direccion 

            $dataB10 = $this->Pdf_model->getRespuesta_e($data['nroRelev'],null,10);

            $usuario_gen= $_SESSION['logged_in']; // guardo el nombre de sesion en esta variable para usarlo en la reneracion del pdf

            
        $date = new DateTime();



            $encabezado = '
            <h2><u>Relevamiento de datos</u></h2><br>
            <ul>
                <li><b>Fecha de Generacion: '.$date->format('d/m/Y').'</b></li><br>
                <li><i>Hora: </i>'.$date->format('H:i:s').'</li><br>
                <li>Usuario: '.$usuario_gen['nombreE'].' '.$usuario_gen['apellidoE'].' </li><br>
            </ul>';
            $pdf->writeHTML($encabezado, true, false, false, false, '');

            
            $tbl_relev = 
                        '<table cellpadding="4" border="1" >
                        <tr>
                            <td colspan="2" bgcolor="#EAEAEA" align="center">Bloque Identificación del Territorio/Facilitador/Familia Relevada</td>
                        </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Relevamiento N°</td>
                                    <td  align="left">'.$relevamiento->nroRelevamiento.'</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Facilitador</td>
                                    <td  align="left">'.$relevamiento->nombreE .' '.$relevamiento->apellidoE .'</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Fecha Relevamiento</td>
                                    <td  align="left">'.$relevamiento->fechaRelevamiento.'</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Criticidad</td>
                                    <td  align="left">'.$relevamiento->idCriticidad.'</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Telefono Titular</td>
                                    <td  align="left">'.$relevamiento->telTitular.'</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Telefono Supervisión</td>
                                    <td  align="left">'.$relevamiento->telSup.'</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Cantidad Encuestados</td>
                                    <td  align="left">'.$encuestados['cantidad'].'</td>
                                </tr>

                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Observaciones Iniciales</td>
                                    <td  align="left">'.$relevamiento->observacion.'</td>
                                </tr>
                                
                        </table>';

                $pdf->writeHTML($tbl_relev, true, false, false, false, '');



                $tbl_direccion = 
                        '<table cellpadding="4" border="1" >
                        <tr>
                            <td colspan="2" bgcolor="#EAEAEA" align="center">Direccion</td>
                        </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Calle</td>
                                    <td  align="left">'.$direccion->calle.'</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Numero</td>
                                    <td  align="left">'.$direccion->numero.'</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Barrio</td>
                                    <td  align="left">'.$direccion->barrio.'</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Manzana / Casa</td>
                                    <td  align="left">'.$direccion->manzana. ' / '.$direccion->casa.'</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Localidad</td>
                                    <td  align="left">'.$direccion->descloc.'</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Departamento</td>
                                    <td  align="left">'.$direccion->descdep.'</td>
                                </tr>
                                <tr>
                                    <td bgcolor="#F7F7F7" align="center">Codigo Postal</td>
                                    <td  align="left">'.$direccion->cploc.'</td>
                                </tr>

                                
                        </table>';
                $pdf->writeHTML($tbl_direccion, true, false, false, false, '');
                

        // dibujar bloque 10 vivienda y entorno


            //encabezado de tabla
            $tbl_bloque10= '<table cellpadding="4" border="1" >
                                <tr>
                                    <td colspan="2" bgcolor="#EAEAEA" align="center">Vivienda y Entorno</td>
                                </tr>';
                        
                        foreach($dataB10 as $item){

                            $tbl_bloque10.='
                            
                                <tr>
                                <td bgcolor="#F7F7F7" align="center">'.$item[0].'</td>
                                <td  align="left">'.$item[1].'</td>
                                </tr>
                            
                            ';
                        }
            
                //cierre de tabla
                $tbl_bloque10.= '</table>';


                $pdf->writeHTML($tbl_bloque10, true, false, false, false, '');  
                    
                    $encuestados= $this->Relevamiento_model->getEncuestados($data['nroRelev']);// traigo los encuestados para este relevamiento

                    $bloques= $this->Pdf_model->getBloques_e([1,10]); // devuelve los bloques del relevamiento  sin los que estan seteados en el arreglo

                    $limit = $encuestados->num_rows(); // limite de cantidad de integrantes(para las paginas)
                    $count= 1;

                    $tbl_integrantes = '<h3 align="center">-------------------------------------------------------</h3>';
                
                    $pdf->AddPage();
                    foreach($encuestados->result() as $item){  // inicio bucle de encuestados de este relevamiento


                        $tbl_integrantes .= '
                        <h1 align="center">Integrante '.$count.'</h1>
                        <table cellpadding="4" border="1" >
                        <tr>
                            <td bgcolor="#F7F7F7" align="center">Nombre </td>
                            <td  align="left">'.$item->nombreEncuestado.'</td>
                        </tr>
                        <tr>
                            <td bgcolor="#F7F7F7" align="center">Apellido </td>
                            <td  align="left">'.$item->apellidoEncuestado.'</td>
                        </tr>            
                        <tr>
                            <td bgcolor="#F7F7F7" align="center">DNI </td>
                            <td  align="left">'.$item->dniEncuestado.'</td>
                        </tr>            
                        <tr>
                            <td bgcolor="#F7F7F7" align="center">Edad </td>
                            <td  align="left">'.$item->edad.'</td>
                        </tr>            
                        <tr>
                            <td bgcolor="#F7F7F7" align="center">Sexo </td>
                            <td  align="left">'.$item->sexo.'</td>
                        </tr>            
                        <tr>
                            <td bgcolor="#F7F7F7" align="center">Afiliado N° </td>
                            <td  align="left">'.$item->nroAfiliado.'</td>
                        </tr>
                        </table>';

                        $pdf->writeHTML($tbl_integrantes, true, false, false, false, '');

                        $tbl_integrantes=""; // dejo la variable vacia para no retro alimentar el re dibujado

                        $tbl_bloques='<table cellpadding="4" border="1" >';

                        
                            foreach($bloques as $bloque){ // inicio bucle de bloques reposndidos por cada encuestado


                                $respuesta_e = $this->Pdf_model->getRespuesta_e($data['nroRelev'],$item->idEncuestado,$bloque->idBloque);

                                //var_dump($respuesta_e);

                                if( !empty($respuesta_e)){

                                    $tbl_bloques.='
                                    <tr>
                                    <td colspan="2" bgcolor="#cccccc" align="center"><strong>Bloque </strong>'. $bloque->nombreBloque.'</td>
                                    </tr>';


                                    foreach($respuesta_e as $resp){
                                        
                                            $tbl_bloques.='
                                            
                                                <tr>
                                                <td bgcolor="#F7F7F7" align="center">'.$resp[0].'</td>
                                                <td  align="left">'.$resp[1].'</td>
                                                </tr>
                                            
                                            ';
                                    }


                                }





                            }   // finalizo bucle de bloques de cada encuestado

                            $tbl_bloques.='</table>';

                            $pdf->writeHTML($tbl_bloques, true, false, false, false, '');

                            

                            if($count < $limit){

                                $pdf->AddPage();
                                $count++;
                            }else{


                            }
                            
                        }  // finalizo bucle de encuestados de este relevamiento


                    $pdf->Output('Relev_001.pdf', 'I');



        }else{




            echo("el relevamiento no existe   enlace para volver");




        }
        
    }

}