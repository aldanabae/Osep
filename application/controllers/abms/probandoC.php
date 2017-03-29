<?php
class ProbandoC extends My_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('abms/probando_model'); 
		$this->load->model('bienvenida_model'); 
		$this->load->library('form_validation'); 
	}

	function index(){
		// $data['resp_preg'] = $this->probando_model->obtenerRespPreg();
		// $data['preguntas'] = $this->probando_model->obtenerPreguntas();
		// $data['respuestas'] = $this->probando_model->obtenerRespuestas();
		// $data['encuesta'] = $this->probando_model->obtenerEncuesta();
		// $data['bloques'] = $this->probando_model->obtenerBloques();	
		// //Variable que recibira la VISTA con todos los datos de la encuesta
		// $armoEncuesta = array('idBloque' =>"",
		// 						'nombreBloque' =>"",
		// 						'nroBloque' =>"",
		// 						'idTipoBloque' =>"",
		// 						'nombreTipoB' =>"",
		// 						"preguntas" => array('idPregunta' => "", 
		// 												'pregunta' =>"",
		// 												'idSubPregunta' =>"",
		// 												'idTipoPregunta' =>"",
		// 												'idEtiqueta' =>"",
		// 												"respuestas"=> array('idRespuesta' =>"", 
		// 																		'respuesta' =>"")
		// 												)
		// 					);
		// //Contador de respuestas para armar cada $armoEncuesta
		// $cuentaResp = 0;

		// //Primero hago variar cada Bloque
		// foreach ($data['bloques'] as $bloq){
		// 	$idBloq = $bloq->idBloque;
		// 	$nombreBloq = $bloq->nombreBloque;
		// 	$nroBloq = $bloq->nroBloque;
		// 	$idTpoB = $bloq->idTipoBloque;
		// 	$nomTpoB = $bloq->nombreTipoB;
			
		// 	//Luego hago variar cada Pregunta de cada Bloque
		// 	foreach ($data['preguntas'] as $preg){
		// 	 	if($preg->idBloque == $idBloq){
		// 			$idPreg = $preg->idPregunta;
		// 			$pgta = $preg->pregunta;
		// 			$idSubPreg = $preg->idSubPregunta;
		// 			$idTpoPreg = $preg->idTipoPregunta;
		// 			$idEtq = $preg->idEtiqueta;	

		// 			//Inicio contador de cantidad de Respuesta_Pregunta por cada pregunta y cargo cada idRespuesta en $arrayResp
		// 			$contador = 0;
		// 			$arrayResp = array();

		// 			//Solo entran las preguntas de tipo que traen opciones o SI/No
		// 			if($idTpoPreg==1 || $idTpoPreg==2 || $idTpoPreg==4){

		// 				foreach ($data['resp_preg'] as $respPreg){	
		// 					if($respPreg->idPregunta == $idPreg){
		// 						$idResp = $respPreg->idRespuesta;
		// 						/*Armar un array con todas las Resp-Preg que tienen esa pregunta para poder contarlos y hacer  
		// 						variar un loop solo de la cantidad de respuestas que hay y ahi dentro crear cada $armoEncuesta*/
		// 						$arrayResp[$contador] = $idResp;
		// 						$contador++;
		// 					}	
		// 				}

		// 				//Hago variar el array de todas las Respuesta_Pregunta creado
		// 				foreach ($arrayResp as $rta){
		// 					$idRta = $rta;

		// 					//Comparo los id para buscar las respuestas en la tabla Respuesta
		// 					foreach ($data['respuestas'] as $rtas){
		// 						if($rtas->idRespuesta == $idRta){
		// 							$idRpta = $rtas->idRespuesta;
		// 					 		$rpta = $rtas->respuesta;

		// 					 		//Creo un registro con dicha respuesta y todos los datos relacionados
		// 					 		$armoEncuesta[$cuentaResp]['idBloque'] = $idBloq;
		// 							$armoEncuesta[$cuentaResp]['nombreBloque'] = $nombreBloq;
		// 							$armoEncuesta[$cuentaResp]['nroBloque'] = $nroBloq;
		// 							$armoEncuesta[$cuentaResp]['idTipoBloque'] = $idTpoB;
		// 							$armoEncuesta[$cuentaResp]['nombreTipoB'] = $nomTpoB;

		// 							$armoEncuesta[$cuentaResp]['preguntas']['idPregunta']= $idPreg;
		// 							$armoEncuesta[$cuentaResp]['preguntas']['pregunta'] = $pgta;
		// 							$armoEncuesta[$cuentaResp]['preguntas']['idSubPregunta'] = $idSubPreg;
		// 							$armoEncuesta[$cuentaResp]['preguntas']['idTipoPregunta'] = $idTpoPreg;
		// 							$armoEncuesta[$cuentaResp]['preguntas']['idEtiqueta'] = $idEtq;

		// 							$armoEncuesta[$cuentaResp]['preguntas']['respuestas']['idRespuesta'] = $idRpta;
		// 							$armoEncuesta[$cuentaResp]['preguntas']['respuestas']['respuesta'] = $rpta;

		// 							$cuentaResp++;
		// 						}
		// 					}
		// 				}
		// 			//Si es de otro tipo de pregunta entra aca
		// 			}else{
		// 				//Creo un registro para las preguntas sin respuestas precargadas, que se van a cargar directamente en la vista
		// 				$armoEncuesta[$cuentaResp]['idBloque'] = $idBloq;
		// 				$armoEncuesta[$cuentaResp]['nombreBloque'] = $nombreBloq;
		// 				$armoEncuesta[$cuentaResp]['nroBloque'] = $nroBloq;
		// 				$armoEncuesta[$cuentaResp]['idTipoBloque'] = $idTpoB;
		// 				$armoEncuesta[$cuentaResp]['nombreTipoB'] = $nomTpoB;

		// 				$armoEncuesta[$cuentaResp]['preguntas']['idPregunta']= $idPreg;
		// 				$armoEncuesta[$cuentaResp]['preguntas']['pregunta'] = $pgta;
		// 				$armoEncuesta[$cuentaResp]['preguntas']['idSubPregunta'] = $idSubPreg;
		// 				$armoEncuesta[$cuentaResp]['preguntas']['idTipoPregunta'] = $idTpoPreg;
		// 				$armoEncuesta[$cuentaResp]['preguntas']['idEtiqueta'] = $idEtq;

		// 				$armoEncuesta[$cuentaResp]['preguntas']['respuestas']['idRespuesta'] = NULL;
		// 				$armoEncuesta[$cuentaResp]['preguntas']['respuestas']['respuesta'] = NULL;

		// 				$cuentaResp++;
		// 			}	
		// 		}
		// 	} 
		// } 

		// echo $cuentaResp;
		// echo "</br>";
		// echo "idBloque".$armoEncuesta[0]['idBloque'];
		// echo "</br>";
		// echo "</br>";
		// echo "nombre tipo bloque".$armoEncuesta[0]['nombreTipoB'];
		// echo "</br>";
		// echo "</br>";
		// echo "idPregunta".$armoEncuesta[0]['preguntas']['idPregunta'];
		// echo "</br>";
		// echo "</br>";
		// echo "idEtiqueta".$armoEncuesta[0]['preguntas']['idEtiqueta'];
		// echo "</br>";
		// echo "</br>";
		// echo "idSubpregunta".$armoEncuesta[0]['preguntas']['idSubPregunta'];
		// echo "</br>";
		// echo "</br>";
		// echo "idBloque".$armoEncuesta[0]['preguntas']['pregunta'];
		// echo "</br>";
		// echo "</br>";
		// echo "idRespuesta".$armoEncuesta[0]['preguntas']['respuestas']['idRespuesta'];
		// echo "</br>";
		// echo "</br>";
		// echo "respuesta".$armoEncuesta[0]['preguntas']['respuestas']['respuesta'];
		// echo "</br>";
		// echo "</br>";
		// die();
	
		$respElegidas[0] = ["12", "45"];
		$respElegidas[1] = ["14", "90"];
		$respElegidas[2] = ["16", "Titular"];
		$respElegidas[3] = ["18", "Conyugue"];

		// $prob = 5;
		// $resp = "5143342";
		// if (is_numeric($resp)){
		// 	echo "es aca".is_numeric($resp);
		// echo "</br>";
		// }
		//echo "es aqui".is_numeric($prob);
		//$contador = 1;
		$contador = count($respElegidas);
		$indice = 0;


		for ($i=0; $i < $contador; $i++) { 
			if(is_numeric($respElegidas[$indice][1])){
				echo "entro aca";
			echo "</br>";
			$idPreg = $respElegidas[$indice][0];
			echo $idPreg;
			echo "</br>";
			$idResp = $respElegidas[$indice][1];
			echo $idResp;
			echo "</br>";
			echo "</br>";
			echo "</br>";
			}
			
			$indice++;
		}
		

		die();
		
		$nombreVista="backend/abms/probando";
		$this->cargarVista($nombreVista, $data);
	}

	function recibirDatos($encuestados, $relevamiento){
	// 	$encuestados = array('nombreE' =>"",
	// 							'apellidoE' =>"",
	// 							'edad' =>"",
	// 							'sexo' =>"",
	// 							"pregResp" => array('idPregunta' => "", 
	// 													'idRespuesta' =>"")
	// 						);

	// 	$relevamiento = array('nroRelev' =>"",
	// 							'fechaR' =>"",
	// 							'observCriticidad' =>"",
	// 							'idCriticidad' =>"",
	// 							"pregResp" => array('idPregunta' => "", 
	// 													'idRespuesta' =>"")
	// 						);


	// 	$data['resp_preg'] = $this->probando_model->obtenerRespPreg();
	// 	$contadorE = count($encuestados);
	// 	//$contadorR = count($relevamiento);
	// 	for ($i=0; $i < $contadorR; $i++) {
	// 		$idPreg = $respElegidas[$indice][0];

	// 		if(is_numeric($respElegidas[$indice][1])){
	// 			$idResp = $respElegidas[$indice][1]; 
	// 			foreach ($data['resp_preg'] as $respPreg){
	// 				if($respPreg->idRespuesta == $idResp){
	// 					if($respPreg->idPregunta == $idPreg){
	// 						$data['encuestado'] = $encuestado;
	// 						$data['relevamiento'] = $relev;
	// 						$data['idRespPreg'] = $respPreg->idRespPreg;
	// 						$data['respB'] = NULL;
	// 						$data['respP'] = NULL;
	// 						$this->probando_model->crearRespuestaElegida($data);
	// 	$indice = 0;


		$data['resp_preg'] = $this->probando_model->obtenerRespPreg();
		$contador = count($respElegidas);
		$indice = 0;
		for ($i=0; $i < $contador; $i++) {
			$idPreg = $respElegidas[$indice][0];

			if(is_numeric($respElegidas[$indice][1])){
				$idResp = $respElegidas[$indice][1]; 
				foreach ($data['resp_preg'] as $respPreg){
					if($respPreg->idRespuesta == $idResp){
						if($respPreg->idPregunta == $idPreg){

				}

			}else{
				$resp = $respElegidas[$indice][1];
			}

			$indice++;
		}


		$data = array(
			'nombreE' => $this->input->post('nombreE'),
			'apellidoE' => $this->input->post('apellidoE'),
			'telefono' => $this->input->post('telefono'),
			'direccion' => $this->input->post('direccion'),
			'dni' => $this->input->post('dni'),
			'tipoEmpleado' => $this->input->post('tipoEmpleado'),
			'nroLegajo' => $this->input->post('nroLegajo'),
			'email' => $this->input->post('email'),
			'convenio' => $this->input->post('convenio'));
 
        $this->form_validation->set_rules('nombreE','Nombre Empleado','trim|required');
        $this->form_validation->set_rules('apellidoE','Apellido Empleado','trim|required');
        $this->form_validation->set_rules('telefono','Telefono','trim|required');
        $this->form_validation->set_rules('direccion','Direccion','trim|required');
        $this->form_validation->set_rules('dni','Nº Documento','trim|required');
        $this->form_validation->set_rules('tipoEmpleado','Tipo Responsable','trim|required');
        $this->form_validation->set_rules('nroLegajo','Nº Legajo','trim|required');
        $this->form_validation->set_rules('email','E-Mail','trim|required');
        $this->form_validation->set_rules('convenio','Convenio','trim|required');

       	$this->form_validation->set_message('required','Debe completar este campo');  
 
        if ($this->form_validation->run() == FALSE) {
       		 echo '<script >alert("Debe completar todos los campos con *");</script>';
       		 redirect('/abms/abmEmpleadosC/cargarNuevoEmpleado','refresh');

        } else {
            if (isset($_POST['GuardarEnDB'])){
				$this->abmEmpleados_model->crearEmpleado($data);
			}
	
			redirect('/abms/abmEmpleadosC','refresh');
        }	
	}
 }
?>