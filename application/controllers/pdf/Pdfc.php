<?php

// Este es el controlador general de encuestas
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfc extends CI_Controller{

	function __construct(){
		parent::__construct();

            $this->load->helper('form');
            $this->load->helper('url');
            // $this->load->model('Bienvenida_model');
            // $this->load->model('abms/abmEmpleados_model');
            // $this->load->model('seguridad/AbmNiveles_model');
            // $this->load->model('seguridad/AbmUsuarios_model');
            // $this->load->model('abms/AbmVisitas_model');
            // modelo de 

            // modelo de relevamiento
            $this->load->model('relevamiento/Relevamiento_model');
            $this->load->library('Pdf');

    }


    function index(){  

    
        // Aqui colocar una proteccion para la redireccion o de sesion
        // el metodo index no se utiliza... en este caso por que necesito el valor del id segment para usarlo como parametro
        redirect('relevamiento/relevamientoC', 'refresh');
        
        
    }





    function printPdf(){


        $data['nroRelev'] = $this->uri->segment(3);
		//Obtener todo lo necesario para mostrar un relevamiento completo
		$data['relevamiento'] = $this->Relevamiento_model->getRelevamiento($data['nroRelev']);

        if( $data['relevamiento'] != false){

            $data['respElegidas'] = $this->Relevamiento_model->getRespElegidas($data['nroRelev']);
            $data['encuestados'] = $this->Relevamiento_model->getEncuestados($data['nroRelev']);
            
            // create new PDF document
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            
            // set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Nicola Asuni');
            $pdf->SetTitle('Relevamiento_N_22212');
            $pdf->SetSubject('TCPDF Tutorial');
            $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
            
            // set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
            $pdf->setFooterData(array(0,64,0), array(0,64,128));
            
            // set header and footer fonts
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
            
            // set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
            
            // set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
            
            // set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
            
            // set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
            
            // set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
                require_once(dirname(__FILE__).'/lang/eng.php');
                $pdf->setLanguageArray($l);
            }
            
            // ---------------------------------------------------------
            
            // set default font subsetting mode
            $pdf->setFontSubsetting(true);
            
            // Set font
            // dejavusans is a UTF-8 Unicode font, if you only need to
            // print standard ASCII chars, you can use core fonts like
            // helvetica or times to reduce file size.
            $pdf->SetFont('helvetica', 'B', 20, '', true);
            
            // Add a page
            // This method has several options, check the source code documentation for more information.
            $pdf->AddPage();
            
    
            
            $pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);
            
            $pdf->SetFont('helvetica', '', 8);
    
            
            $html = "<H1>  HOLA </H1>";
            
            // Print text using writeHTMLCell()
            $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
            
    
    
    
    
            $tbl = 
            '<table border="1">
            <tr>
            <th rowspan="3">Left column</th>
            <th colspan="5">Heading Column Span 5</th>
            <th colspan="9">Heading Column Span 9</th>
            </tr>
            <tr>
            <th rowspan="2">Rowspan 2<br />This is some text that fills the table cell.</th>
            <th colspan="2">span 2</th>
            <th colspan="2">span 2</th>
            <th rowspan="2">2 rows</th>
            <th colspan="8">Colspan 8</th>
            </tr>
            <tr>
            <th>1a</th>
            <th>2a</th>
            <th>1b</th>
            <th>2b</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            </tr>
            </table>'
           ;
            
            $pdf->writeHTML($tbl, true, false, false, false, '');
    
    
    
            $pdf->Output('example_001.pdf', 'I');
    
    
    








        }else{




            echo("el relevamiento no existe   enlace para volver");




        }

    }

}