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
		
		var_dump($data['bloques']);
		echo "</br>";
		echo "</br>";
		echo "</br>";

		$armoEncuesta = array('idBloque' =>"",
								'nombreBloque' =>"" ,
								'nroBloque' =>"" ,
								"preguntas" => array('idPregunta' =>"" , 
														'pregunta' =>"" ,
														'idSubPregunta' =>"" ,
														'idTipoPregunta' =>"" ,
														'idEtiqueta' =>"" ,
														"respuestas"=> array('idRespuesta' =>"" , 
																				'respuesta' =>"")
														)
								);

		$armoBloq = array();

		foreach ($data['bloques'] as $bloq) {
			$idBloq = $bloq->idBloque;
			$nombreBloq = $bloq->nombreBloque;
			$nroBloq = $bloq->nroBloque;

			$datos = array('idBloque' => $idBloq,
			 				'nombreBloque' =>$nombreBloq,
			 				'nroBloque' =>$nroBloq);

			array_push($armoBloq, $datos);
		}

		var_dump($datos);
		echo "</br>";
		echo "</br>";
		echo "</br>";
		var_dump($armoBloq);
		echo "</br>";
		echo "</br>";
		echo "</br>";
		var_dump($armoEncuesta);
		
		die();

		$nombreVista="backend/abms/probando";
		$this->cargarVista($nombreVista, $data);
	}
}
?>