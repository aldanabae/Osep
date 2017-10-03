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

    }


    function index(){  

    
        // Aqui colocar una proteccion para la redireccion o de sesion
        // el metodo index no se utiliza... en este caso por que necesito el valor del id segment para usarlo como parametro
        redirect('relevamiento/relevamientoC', 'refresh');
        
        
    }


    function printPdf(){
        ob_start();
        $data['nroRelev'] = $this->uri->segment(3);
		// aqui traigo los datos generales del relevamiento
		$data['relevamiento'] = $this->Relevamiento_model->getRelevamiento($data['nroRelev']);

        if( $data['relevamiento'] != false){


            //trae tods los datos de integrantes pertenecientes al mism relevamiento
            //$data['encuestados'] = $this->Relevamiento_model->getEncuestados($data['nroRelev']);

        //     $data['direccion']= $this->Pdf_model->getDireccion_e($data['relevamiento']->result()[0]->idDireccion);


        //     $data['bloques']= $this->Relevamiento_model->obtenerBloques();




        //   $data['respuestas'] = $this->Pdf_model->getRespuesta_e(2,5,null);

            // var_dump($data['encuestados']->result());
            // var_dump($data['relevamiento']->result()[0]);
            // var_dump($data['direccion'] );
            // var_dump($data['bloques'] );



                
                //$encuestados = $data['encuestados']->result();
            // ;
        
    // create new PDF document
    $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Nicola Asuni');
    $pdf->SetTitle('Relevamiento_N_22212');
    $pdf->SetSubject('TCPDF Tutorial');
   
    
    
    $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Israel Parra');
    $pdf->SetTitle('Ejemplo de provincías con TCPDF');
    $pdf->SetSubject('Tutorial TCPDF');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
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
    

    
    $pdf->Write(2, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);
    
    $pdf->SetFont('helvetica', '', 9);


   


    $relevamiento = $data['relevamiento']->result()[0];
    
    $direccion= $this->Pdf_model->getDireccion_e($relevamiento->idDireccion);
    



    $tbl = 
    '<table cellpadding="4" border="1" bgcolor=dddddd>
    <tr>
        <td colspan="2" bgcolor="#cccccc" align="center"><strong>Bloque Identificación del Territorio/Facilitador/Familia Relevada</strong></td>
    </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center">Facilitador</td>
                <td  align="left">'.$relevamiento->nombreE .$relevamiento->apellidoE .'</td>
            </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center">Relevamiento N°</td>
                <td  align="left">'.$relevamiento->nroRelevamiento.'</td>
            </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center">Fecha Relevamiento</td>
                <td  align="left">'.$relevamiento->fechaRelevamiento.'</td>
            </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center">Calle</td>
                <td  align="left">'.$direccion->calle.'</td>
            </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center">Entre calles</td>
                <td  align="left">'.$direccion->entreCalles1.'</td>
            </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center">Manzana/Casa</td>
                <td  align="left">'.$direccion->manzana.'</td>
            </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center">Barrio</td>
                <td  align="left">'.$direccion->barrio.'</td>
            </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center">Localidad</td>
                <td  align="left">'.$direccion->descloc.'</td>
            </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center">Departamento</td>
                <td  align="left">'.$direccion->descdep.'</td>
            </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center">Telefono titular</td>
                <td  align="left">'.$relevamiento->telTitular.'</td>
            </tr>
            <tr>
                <td bgcolor="#EAEAEA" align="center">Observacion General</td>
                <td  align="left">'.$relevamiento->observacion.'</td>
            </tr>
    </table>
    
    '
   ;



                $pdf->writeHTML($tbl, true, false, false, false, '');

                
                $pdf->Output('example_001.pdf', 'I');



        }else{




            echo("el relevamiento no existe   enlace para volver");




        }
        
    }

}