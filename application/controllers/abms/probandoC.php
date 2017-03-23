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

		$armoEncuesta = array('idBloque' =>"",
								'nombreBloque' =>"",
								'nroBloque' =>"",
								"preguntas" => array('idPregunta' => "", 
														'pregunta' =>"",
														'idSubPregunta' =>"",
														'idTipoPregunta' =>"",
														'idEtiqueta' =>"",
														"respuestas"=> array('idRespuesta' =>"", 
																				'respuesta' =>"")
														)
							);

		foreach ($data['bloques'] as $bloq){
			$idBloq = $bloq->idBloque;
			$nombreBloq = $bloq->nombreBloque;
			$nroBloq = $bloq->nroBloque;

			foreach ($data['preguntas'] as $preg){
				if($preg->idBloque == $idBloq){
					$idPreg = $preg->idPregunta;
					$pgta = $preg->pregunta;
					$idSubPreg = $preg->idSubPregunta;
					$idTpoPreg = $preg->idTipoPregunta;
					$idEtq = $preg->idEtiqueta;		
					
					foreach ($data['resp_preg'] as $respPreg){
						if($respPreg->idPregunta == $idPreg){
							$idResp = $respPreg->idRespuesta;
							//Armar un array con todas las Resp-Preg que tienen esa pregunta para poder contarlos y hacer variar un loop 
							//solo de la cantidad de respuestas que hay y ahi dentro crear cada $armoEncuesta

							foreach ($data['respuestas'] as $rta){
								if($rta->idRespuesta == $idResp){
									$idRpta = $rta->idRespuesta;
									$rpta = $rta->respuesta;

									$armoEncuesta['idBloque'] = $idBloq;
									$armoEncuesta['nombreBloque'] = $nombreBloq;
									$armoEncuesta['nroBloque'] = $nroBloq;

									$armoEncuesta['preguntas']['idPregunta']= $idPreg;
									$armoEncuesta['preguntas']['pregunta'] = $pgta;
									$armoEncuesta['preguntas']['idSubPregunta'] = $idSubPreg;
									$armoEncuesta['preguntas']['idTipoPregunta'] = $idTpoPreg;
									$armoEncuesta['preguntas']['idEtiqueta'] = $idEtq;

									$armoEncuesta['preguntas']['respuestas']['idRespuesta'] = $idRpta;
									$armoEncuesta['preguntas']['respuestas']['respuesta'] = $rpta;
								}
							}
						}
					}
				}
			}
		}
		
		if (isset($armoEncuesta)){
			var_dump($armoEncuesta);
			echo "</br>";
			echo "</br>";
			echo count($armoEncuesta);
			echo "</br>";
			echo "</br>";
			echo count($armoEncuesta, COUNT_RECURSIVE);
		}

		echo "</br>";
		echo "</br>";
		$armoEncuesta[0]['idBloque'] = 1;
		$armoEncuesta[1]['idBloque'] = 2;
		$armoEncuesta[2]['idBloque'] = 3;

		echo $armoEncuesta[1]['idBloque'];
		echo "</br>";
		echo "</br>";
		echo $armoEncuesta['preguntas']['respuestas']['idRespuesta'];
		echo "</br>";
		echo "</br>";
		echo $armoEncuesta['preguntas']['respuestas']['respuesta'];
		
		
		die();

		$nombreVista="backend/abms/probando";
		$this->cargarVista($nombreVista, $data);
	}
}
?>