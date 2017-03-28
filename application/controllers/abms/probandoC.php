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
		$data['resp_preg'] = $this->probando_model->obtenerRespPreg();
		$data['preguntas'] = $this->probando_model->obtenerPreguntas();
		$data['respuestas'] = $this->probando_model->obtenerRespuestas();
		$data['encuesta'] = $this->probando_model->obtenerEncuesta();
		$data['bloques'] = $this->probando_model->obtenerBloques();	
		//Variable que recibira la VISTA con todos los datos de la encuesta
		$armoEncuesta = array('idBloque' =>"",
								'nombreBloque' =>"",
								'nroBloque' =>"",
								'idTipoBloque' =>"",
								'nombreTipoB' =>"",
								"preguntas" => array('idPregunta' => "", 
														'pregunta' =>"",
														'idSubPregunta' =>"",
														'idTipoPregunta' =>"",
														'idEtiqueta' =>"",
														"respuestas"=> array('idRespuesta' =>"", 
																				'respuesta' =>"")
														)
							);
		//Contador de respuestas para armar cada $armoEncuesta
		$cuentaResp = 0;

		//Primero hago variar cada Bloque
		foreach ($data['bloques'] as $bloq){
			$idBloq = $bloq->idBloque;
			$nombreBloq = $bloq->nombreBloque;
			$nroBloq = $bloq->nroBloque;
			$idTpoB = $bloq->idTipoBloque;
			$nomTpoB = $bloq->nombreTipoB;
			
			//Luego hago variar cada Pregunta de cada Bloque
			foreach ($data['preguntas'] as $preg){
			 	if($preg->idBloque == $idBloq){
					$idPreg = $preg->idPregunta;
					$pgta = $preg->pregunta;
					$idSubPreg = $preg->idSubPregunta;
					$idTpoPreg = $preg->idTipoPregunta;
					$idEtq = $preg->idEtiqueta;	

					//Inicio contador de cantidad de Respuesta_Pregunta por cada pregunta y cargo cada idRespuesta en $arrayResp
					$contador = 0;
					$arrayResp = array();

					//Solo entran las preguntas de tipo que traen opciones o SI/No
					if($idTpoPreg==1 || $idTpoPreg==2 || $idTpoPreg==4){

						foreach ($data['resp_preg'] as $respPreg){	
							if($respPreg->idPregunta == $idPreg){
								$idResp = $respPreg->idRespuesta;
								//Armar un array con todas las Resp-Preg que tienen esa pregunta para poder contarlos y hacer  
								//variar un loop solo de la cantidad de respuestas que hay y ahi dentro crear cada $armoEncuesta
								$arrayResp[$contador] = $idResp;
								$contador++;
							}	
						}

						foreach ($arrayResp as $rta){
							$idRta = $rta;

							foreach ($data['respuestas'] as $rtas){
								if($rtas->idRespuesta == $idRta){
									$idRpta = $rtas->idRespuesta;
							 		$rpta = $rtas->respuesta;

							 		$armoEncuesta[$cuentaResp]['idBloque'] = $idBloq;
									$armoEncuesta[$cuentaResp]['nombreBloque'] = $nombreBloq;
									$armoEncuesta[$cuentaResp]['nroBloque'] = $nroBloq;
									$armoEncuesta[$cuentaResp]['idTipoBloque'] = $idTpoB;
									$armoEncuesta[$cuentaResp]['nombreTipoB'] = $nomTpoB;

									$armoEncuesta[$cuentaResp]['preguntas']['idPregunta']= $idPreg;
									$armoEncuesta[$cuentaResp]['preguntas']['pregunta'] = $pgta;
									$armoEncuesta[$cuentaResp]['preguntas']['idSubPregunta'] = $idSubPreg;
									$armoEncuesta[$cuentaResp]['preguntas']['idTipoPregunta'] = $idTpoPreg;
									$armoEncuesta[$cuentaResp]['preguntas']['idEtiqueta'] = $idEtq;

									$armoEncuesta[$cuentaResp]['preguntas']['respuestas']['idRespuesta'] = $idRpta;
									$armoEncuesta[$cuentaResp]['preguntas']['respuestas']['respuesta'] = $rpta;

									$cuentaResp++;
								}
							}
						}
					//Si es de otro tipo de pregunta entra aca
					}else{
						$armoEncuesta[$cuentaResp]['idBloque'] = $idBloq;
						$armoEncuesta[$cuentaResp]['nombreBloque'] = $nombreBloq;
						$armoEncuesta[$cuentaResp]['nroBloque'] = $nroBloq;
						$armoEncuesta[$cuentaResp]['idTipoBloque'] = $idTpoB;
						$armoEncuesta[$cuentaResp]['nombreTipoB'] = $nomTpoB;

						$armoEncuesta[$cuentaResp]['preguntas']['idPregunta']= $idPreg;
						$armoEncuesta[$cuentaResp]['preguntas']['pregunta'] = $pgta;
						$armoEncuesta[$cuentaResp]['preguntas']['idSubPregunta'] = $idSubPreg;
						$armoEncuesta[$cuentaResp]['preguntas']['idTipoPregunta'] = $idTpoPreg;
						$armoEncuesta[$cuentaResp]['preguntas']['idEtiqueta'] = $idEtq;

						$armoEncuesta[$cuentaResp]['preguntas']['respuestas']['idRespuesta'] = NULL;
						$armoEncuesta[$cuentaResp]['preguntas']['respuestas']['respuesta'] = NULL;

						$cuentaResp++;
					}	
				}
			} 
		} 

		echo $cuentaResp;
		echo "</br>";
		echo "idBloque".$armoEncuesta[0]['idBloque'];
		echo "</br>";
		echo "</br>";
		echo "nombre tipo bloque".$armoEncuesta[0]['nombreTipoB'];
		echo "</br>";
		echo "</br>";
		echo "idPregunta".$armoEncuesta[0]['preguntas']['idPregunta'];
		echo "</br>";
		echo "</br>";
		echo "idEtiqueta".$armoEncuesta[0]['preguntas']['idEtiqueta'];
		echo "</br>";
		echo "</br>";
		echo "idSubpregunta".$armoEncuesta[0]['preguntas']['idSubPregunta'];
		echo "</br>";
		echo "</br>";
		echo "idBloque".$armoEncuesta[0]['preguntas']['pregunta'];
		echo "</br>";
		echo "</br>";
		echo "idRespuesta".$armoEncuesta[0]['preguntas']['respuestas']['idRespuesta'];
		echo "</br>";
		echo "</br>";
		echo "respuesta".$armoEncuesta[0]['preguntas']['respuestas']['respuesta'];
		echo "</br>";
		echo "</br>";
		die();
		
		
		$nombreVista="backend/abms/probando";
		$this->cargarVista($nombreVista, $data);
	}
 }
?>