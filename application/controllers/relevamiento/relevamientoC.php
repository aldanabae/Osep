<?php
class RelevamientoC extends My_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');  
		$this->load->library('form_validation'); 
		$this->load->model('relevamiento/Relevamiento_model');
	}
	
	function index(){

		$nivelUser = $this->session->userdata('logged_in');
		
		if (!isset($_POST['CargarTabla'])){
			$data['limiteTabla'] = 1000000;  
			$data['tablaRelevamientos'] = $this->Relevamiento_model->obtenerRelevamientos($nivelUser);
		}
			
		$nombreVista="backend/relevamiento/buscarRelevamiento";
		$this->cargarVista($nombreVista, $data);

		$data['resp_preg'] = $this->Relevamiento_model->obtenerRespPreg();
		$data['preguntas'] = $this->Relevamiento_model->obtenerPreguntas();
		$data['respuestas'] = $this->Relevamiento_model->obtenerRespuestas();
		$data['encuesta'] = $this->Relevamiento_model->obtenerEncuesta();
		$data['bloques'] = $this->Relevamiento_model->obtenerBloques();	
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
		 	$idEncuesta = $bloq->idEncuesta;
			
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
								/*Armar un array con todas las Resp-Preg que tienen esa pregunta para poder contarlos y hacer  
								variar un loop solo de la cantidad de respuestas que hay y ahi dentro crear cada $armoEncuesta*/
								$arrayResp[$contador] = $idResp;
								$contador++;
							}	
						}
						//Hago variar el array de todas las Respuesta_Pregunta creado
						foreach ($arrayResp as $rta){
							$idRta = $rta;
							//Comparo los id para buscar las respuestas en la tabla Respuesta
							foreach ($data['respuestas'] as $rtas){
								if($rtas->idRespuesta == $idRta){
									$idRpta = $rtas->idRespuesta;
							 		$rpta = $rtas->respuesta;
							 		//Creo un registro con dicha respuesta y todos los datos relacionados
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
						//Creo un registro para las preguntas sin respuestas precargadas, que se van a cargar directamente en la vista
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
		$data['encuesta'] = $idEncuesta;
		//Enviar a la vista $armoEncuesta y el idEncuesta
		//$this->cargarVista('vistaCorrespondiente', $armoEncuesta, $data);
		// $nombreVista="backend/abms/probando";
		// $this->cargarVista($nombreVista, $data);
		// var_dump($data['encuesta']);
		// var_dump($armoEncuesta);

	}

	function verRelevamiento(){
		$data['nroRelev'] = $this->uri->segment(4);

		//Obtener todo lo necesario para mostrar un relevamiento completo
		$data['relevamiento'] = $this->Relevamiento_model->getRelevamiento($data['nroRelev']);
		$data['respElegidas'] = $this->Relevamiento_model->getRespElegidas($data['nroRelev']);
		$data['encuestados'] = $this->Relevamiento_model->getEncuestados($data['nroRelev']);

      	$nombreVista="backend/relevamiento/verRelevamiento";
		$this->cargarVista($nombreVista,$data);
	}

	function mostrarRelevamiento(){
		$sesion = $this->session->userdata('logged_in');
		$data['nroRelev'] = $this->input->post('nroRelev');	
		$data['filtroCri'] = $this->input->post('filtroCri');
		$data['filtroDpto'] = $this->input->post('filtroDpto');
		$data['filtroFac'] = $this->input->post('filtroFac');
		$data['filtroLoc'] = $this->input->post('filtroLoc');
		$data['limiteTabla'] = $this->input->post('longitudTabla');

		$data['tablaRelevamientos'] = $this->Relevamiento_model->getRelevNro($data['nroRelev'], $sesion, $data);

		if($data['limiteTabla'] == ""){
			$data['limiteTabla'] = 1000000;
		}

      	$nombreVista="backend/relevamiento/buscarRelevamiento";
		$this->cargarVista($nombreVista, $data);
	}

	function cargarFiltros(){
		$sesion = $this->session->userdata('logged_in');
		$data['filtro'] = $this->input->post('filtro');
		$data['datosFiltro'] = $this->Relevamiento_model->getDatosFiltro($data['filtro'], $sesion);

		echo json_encode($data['datosFiltro']);
	}

	// function index(){
	// 	//Falta cargar validaciones para que controle el login solo en este controlador sin heredar del controlador generico
	// 	$data['resp_preg'] = $this->Relevamiento_model->obtenerRespPreg();
	// 	$data['preguntas'] = $this->Relevamiento_model->obtenerPreguntas();
	// 	$data['respuestas'] = $this->Relevamiento_model->obtenerRespuestas();
	// 	$data['encuesta'] = $this->Relevamiento_model->obtenerEncuesta();
	// 	$data['bloques'] = $this->Relevamiento_model->obtenerBloques();	
	// 	//Variable que recibira la VISTA con todos los datos de la encuesta
	// 	$armoEncuesta = array('idBloque' =>"",
	// 								'nombreBloque' =>"",
	// 								'nroBloque' =>"",
	// 								'idTipoBloque' =>"",
	// 								'nombreTipoB' =>"",
	// 								"preguntas" => array('idPregunta' => "", 
	// 														'pregunta' =>"",
	// 														'idSubPregunta' =>"",
	// 														'idTipoPregunta' =>"",
	// 														'idEtiqueta' =>"",
	// 														"respuestas"=> array('idRespuesta' =>"", 
	// 																				'respuesta' =>"")
	// 													)
	// 							);
	// 	//Contador de respuestas para armar cada $armoEncuesta
	// 	$cuentaResp = 0;
	// 	//Primero hago variar cada Bloque
	// 	foreach ($data['bloques'] as $bloq){
	// 		$idBloq = $bloq->idBloque;
	// 		$nombreBloq = $bloq->nombreBloque;
	// 		$nroBloq = $bloq->nroBloque;
	// 		$idTpoB = $bloq->idTipoBloque;
	// 		$nomTpoB = $bloq->nombreTipoB;
	// 	 $idEncuesta = $bloq->idEncuesta;
			
	// 		//Luego hago variar cada Pregunta de cada Bloque
	// 		foreach ($data['preguntas'] as $preg){
	// 		 	if($preg->idBloque == $idBloq){
	// 				$idPreg = $preg->idPregunta;
	// 				$pgta = $preg->pregunta;
	// 				$idSubPreg = $preg->idSubPregunta;
	// 				$idTpoPreg = $preg->idTipoPregunta;
	// 				$idEtq = $preg->idEtiqueta;	
	// 				//Inicio contador de cantidad de Respuesta_Pregunta por cada pregunta y cargo cada idRespuesta en $arrayResp
	// 				$contador = 0;
	// 				$arrayResp = array();
	// 				//Solo entran las preguntas de tipo que traen opciones o SI/No
	// 				if($idTpoPreg==1 || $idTpoPreg==2 || $idTpoPreg==4){
	// 					foreach ($data['resp_preg'] as $respPreg){	
	// 						if($respPreg->idPregunta == $idPreg){
	// 							$idResp = $respPreg->idRespuesta;
	// 							/*Armar un array con todas las Resp-Preg que tienen esa pregunta para poder contarlos y hacer  
	// 							variar un loop solo de la cantidad de respuestas que hay y ahi dentro crear cada $armoEncuesta*/
	// 							$arrayResp[$contador] = $idResp;
	// 							$contador++;
	// 						}	
	// 					}
	// 					//Hago variar el array de todas las Respuesta_Pregunta creado
	// 					foreach ($arrayResp as $rta){
	// 						$idRta = $rta;
	// 						//Comparo los id para buscar las respuestas en la tabla Respuesta
	// 						foreach ($data['respuestas'] as $rtas){
	// 							if($rtas->idRespuesta == $idRta){
	// 								$idRpta = $rtas->idRespuesta;
	// 						 		$rpta = $rtas->respuesta;
	// 						 		//Creo un registro con dicha respuesta y todos los datos relacionados
	// 						 		$armoEncuesta[$cuentaResp]['idBloque'] = $idBloq;
	// 								$armoEncuesta[$cuentaResp]['nombreBloque'] = $nombreBloq;
	// 								$armoEncuesta[$cuentaResp]['nroBloque'] = $nroBloq;
	// 								$armoEncuesta[$cuentaResp]['idTipoBloque'] = $idTpoB;
	// 								$armoEncuesta[$cuentaResp]['nombreTipoB'] = $nomTpoB;
	// 								$armoEncuesta[$cuentaResp]['preguntas']['idPregunta']= $idPreg;
	// 								$armoEncuesta[$cuentaResp]['preguntas']['pregunta'] = $pgta;
	// 								$armoEncuesta[$cuentaResp]['preguntas']['idSubPregunta'] = $idSubPreg;
	// 								$armoEncuesta[$cuentaResp]['preguntas']['idTipoPregunta'] = $idTpoPreg;
	// 								$armoEncuesta[$cuentaResp]['preguntas']['idEtiqueta'] = $idEtq;
	// 								$armoEncuesta[$cuentaResp]['preguntas']['respuestas']['idRespuesta'] = $idRpta;
	// 								$armoEncuesta[$cuentaResp]['preguntas']['respuestas']['respuesta'] = $rpta;
	// 								$cuentaResp++;
	// 							}
	// 						}
	// 					}
	// 				//Si es de otro tipo de pregunta entra aca
	// 				}else{
	// 					//Creo un registro para las preguntas sin respuestas precargadas, que se van a cargar directamente en la vista
	// 					$armoEncuesta[$cuentaResp]['idBloque'] = $idBloq;
	// 					$armoEncuesta[$cuentaResp]['nombreBloque'] = $nombreBloq;
	// 					$armoEncuesta[$cuentaResp]['nroBloque'] = $nroBloq;
	// 					$armoEncuesta[$cuentaResp]['idTipoBloque'] = $idTpoB;
	// 					$armoEncuesta[$cuentaResp]['nombreTipoB'] = $nomTpoB;
	// 					$armoEncuesta[$cuentaResp]['preguntas']['idPregunta']= $idPreg;
	// 					$armoEncuesta[$cuentaResp]['preguntas']['pregunta'] = $pgta;
	// 					$armoEncuesta[$cuentaResp]['preguntas']['idSubPregunta'] = $idSubPreg;
	// 					$armoEncuesta[$cuentaResp]['preguntas']['idTipoPregunta'] = $idTpoPreg;
	// 					$armoEncuesta[$cuentaResp]['preguntas']['idEtiqueta'] = $idEtq;
	// 					$armoEncuesta[$cuentaResp]['preguntas']['respuestas']['idRespuesta'] = NULL;
	// 					$armoEncuesta[$cuentaResp]['preguntas']['respuestas']['respuesta'] = NULL;
	// 					$cuentaResp++;
	// 				}	
	// 			}
	// 		} 
	// 	} 
	// 	$data['encuesta'] = $idEncuesta;
	// 	// //Enviar a la vista $armoEncuesta y el idEncuesta
	// 	// //$this->cargarVista('vistaCorrespondiente', $armoEncuesta, $data);
		
	// 	// $nombreVista="backend/abms/probando";
	// 	// $this->cargarVista($nombreVista, $data);
	// }
//AGREGAR QUE CUANDO GUARDO UNA RESPUESTA BREVE TAMBIEN GUARDE A QUE PREGUNTA PERTENECE ESA RESPUESTA!!!
//AGREGAR QUE CUANDO GUARDO UNA RESPUESTA BREVE TAMBIEN GUARDE A QUE PREGUNTA PERTENECE ESA RESPUESTA!!!
//AGREGAR QUE CUANDO GUARDO UNA RESPUESTA BREVE TAMBIEN GUARDE A QUE PREGUNTA PERTENECE ESA RESPUESTA!!!
//AGREGAR QUE CUANDO GUARDO UNA RESPUESTA BREVE TAMBIEN GUARDE A QUE PREGUNTA PERTENECE ESA RESPUESTA!!!
//AGREGAR QUE CUANDO GUARDO UNA RESPUESTA BREVE TAMBIEN GUARDE A QUE PREGUNTA PERTENECE ESA RESPUESTA!!!
//AGREGAR QUE CUANDO GUARDO UNA RESPUESTA BREVE TAMBIEN GUARDE A QUE PREGUNTA PERTENECE ESA RESPUESTA!!!
//AGREGAR QUE CUANDO GUARDO UNA RESPUESTA BREVE TAMBIEN GUARDE A QUE PREGUNTA PERTENECE ESA RESPUESTA!!!
//AGREGAR QUE CUANDO GUARDO UNA RESPUESTA BREVE TAMBIEN GUARDE A QUE PREGUNTA PERTENECE ESA RESPUESTA!!!
	// function recibirDatos($encuestados, $relevamiento, $encuesta){
	// // Si viene con :number no es un ID de Respuesta sino una respuestaBreve numerica, ejemplo Edad
	// // Variable a recibir de la vista con los datos de cada Respuesta_Elegida del Relevamiento
	// // $relevamiento = array('nroRelev' =>"",
	// // 							'fechaR' =>"",
	// // 							'observCriticidad' =>"",
	// // 							'idCriticidad' =>"",
	// // 					 		"pregResp" => array('idPregunta' => "", 
	// // 													'idRespuesta' =>"")
	// // 							);
	// //Variable utilizada en toda la funcion
	// $data['resp_preg'] = $this->Relevamiento_model->obtenerRespPreg();
	// //Creo relevamiento
	// $data['relevamiento'] = array('nroRelev' => $relevamiento[0]['nroRelev'],
	// 								'fechaR' => $relevamiento[0]['fechaR'],
	// 								'observC' => $relevamiento[0]['observCriticidad'],
	// 								'idCriti'=> $relevamiento[0]['idCriticidad'],
	// 								'idEnc'=> $encuesta);
	// $idRelevamiento = $this->Relevamiento_model->crearRelevamiento($data['relevamiento']);
	// //Guardar todas las Respuestas_Elegidas asociadas solo al relevamiento
	// $contadorR = count($relevamiento);
	// $indiceR = 0;
	// //Loop de todas los Relevamientos recibidos
	// for ($i=0; $i < $contadorR; $i++){
	// 	$idPregR = $relevamiento[$indiceR]['pregResp']['idPregunta'];
	// 		//Si la respuesta en un nro, osea un ID
	// 		if(is_numeric($relevamiento[$indiceR]['pregResp']['idRespuesta'])){
	// 			$idRespR = $relevamiento[$indiceR]['pregResp']['idRespuesta'];
	// 			//Traigo cada valor de Respuesta_Pregunta guardado y comparo si es el mismo idRespuesta e idPregunta
	// 			foreach ($data['resp_preg'] as $respPreg){
	// 				if($respPreg->idRespuesta == $idRespR){
	// 					if($respPreg->idPregunta == $idPregR){
	// 						$data = array('idEnc' => NULL,
	// 										'relevamiento' => $idRelevamiento,
	// 										'idRespPreg' => $respPreg->idRespPreg,
	// 										'respB' => NULL);
	// 						//Creo un objeto Respuesta_Elegida
	// 						$this->Relevamiento_model->crearRespuestaElegida($data);
	// 					}
	// 				}
	// 			}
	// 		//Si la respuesta es un String, osea una respuestaBreve
	// 		}else{
	// 			//Reviso si tiene la palabra ":number" en la cadena String, si la tiene se la quito y lo guardo como un int
	// 			$cadenaResp = $relevamiento[$indiceR]['pregResp']['idRespuesta'];
	// 			if(strpos($cadenaResp, ":number")){
	// 				$largo = strlen($cadenaResp);
	// 				$respFinal = substr($cadenaResp,-($largo), ($largo-7));
	// 				$data = array('idEnc' => NULL,
	// 								'relevamiento' => $idRelevamiento,
	// 								'idRespPreg' => NULL,
	// 								'respB' => $respFinal);
	// 				//Creo un objeto Respuesta_Elegida
	// 				$this->Relevamiento_model->crearRespuestaElegida($data);
	// 			}else{
	// 				//Si la respuesta es un String directamente lo guardo en respBreve en una nueva Respuesta_Elegida
	// 				$resp = $relevamiento[$indiceR]['pregResp']['idRespuesta'];
	// 				$data = array('idEnc' => NULL,
	// 								'relevamiento' => $idRelevamiento,
	// 								'idRespPreg' => NULL,
	// 								'respB' => $resp);
	// 				//Creo un objeto Respuesta_Elegida
	// 				$this->Relevamiento_model->crearRespuestaElegida($data);
	// 			}
	// 		}
			
	// 	$indiceR++;
	// }//Fin carga de Respuestas del Relevamiento
	// // Variable a recibir de la vista con los datos de cada Respuesta_Elegida por cada Encuestado
	// // $encuestados = array('nombreE' =>"",
	// // 						'apellidoE' =>"",
	// //						'dniE' =>"",
	// // 						'edad' =>"",
	// // 						'sexo' =>"",
	// //						'nroAfiliado' =>"",
	// // 						"pregResp" => array('idPregunta' => "", 
	// // 											'idRespuesta' =>"")
	// // 						);
	// //Variables necesarias inicializadas para crear arreglo de DNIs
	// $contadorE = count($encuestados);
	// $indiceE = 0;
	// $contadorDNI = 0;
	// $listaDNI = array();
	// //Loop para crear arreglo de DNIs y los encuestados
	// for ($i=0; $i < $contadorE; $i++){
	// 	$dniE = $encuestados[$indiceE]['dniE'];
	// 	//Si la lista esta vacia, le cargo el primer dni encontrado
	// 	if(count($listaDNI)==0){
	// 		$listaDNI[0] = $dniE;
	// 		$contadorDNI++;
	// 		//Creo encuestado
	// 		$data['encuestado'] = array('nombreE' => $encuestados[$indiceE]['nombreE'],
	// 									'apellidoE' => $encuestados[$indiceE]['apellidoE'],
	// 									'dniE' => $dniE,
	// 									'edad'=> $encuestados[$indiceE]['edad'],
	// 									'sexo'=> $encuestados[$indiceE]['sexo'],
	// 									'nroAfiliado' => $encuestados[$indiceE]['nroAfiliado'],
	// 									'idRelev'=> $idRelevamiento);
	// 		$this->Relevamiento_model->crearEncuestado($data['encuestado']);
	// 	}else{
	// 		//Si el dni no esta cargado en el array previamente lo ingreso
	// 		if(!in_array($dniE, $listaDNI)){
	// 			$listaDNI[$contadorDNI] = $dniE;
	// 			$contadorDNI++;
	// 			//Creo encuestado
	// 			$data['encuestado'] = array('nombreE' => $encuestados[$indiceE]['nombreE'],
	// 											'apellidoE' => $encuestados[$indiceE]['apellidoE'],
	// 											'dniE' => $dniE,
	// 											'edad'=> $encuestados[$indiceE]['edad'],
	// 											'sexo'=> $encuestados[$indiceE]['sexo'],
	// 											'nroAfiliado' => $encuestados[$indiceE]['nroAfiliado'],
	// 											'idRelev'=> $idRelevamiento);
	// 			$this->Relevamiento_model->crearEncuestado($data['encuestado']);
	// 		}		
	// 	}
	// 	$indiceE++;	
	// }
	// //Guardar todas las Respuestas_Elegidas asociadas solo a cada encuestado
	// $indiceRE = 0;
	// for ($i=0; $i < $contadorE; $i++){
	// 	$idPregE = $encuestados[$indiceRE]['pregResp']['idPregunta'];
	// 	//Si la respuesta en un nro, osea un ID
	// 	if(is_numeric($encuestados[$indiceRE]['pregResp']['idRespuesta'])){
	// 		$idRespE = $encuestados[$indiceRE]['pregResp']['idRespuesta']; 
	// 		//Traigo cada valor de Respuesta_Pregunta guardado y comparo si es el mismo idRespuesta e idPregunta
	// 		$data['resp_preg'] = $this->Relevamiento_model->obtenerRespPreg();
	// 		foreach($data['resp_preg'] as $respPreg){
	// 			if($respPreg->idRespuesta == $idRespE){
	// 				if($respPreg->idPregunta == $idPregE){
	// 					$dniEnc = $encuestados[$indiceRE]['dniE'];
	// 					//Busco el idEncuestado para poder cargarlo en la clase Respuesta_Elegida
	// 					$encuestado = $this->Relevamiento_model->obtenerEncuestado($dniEnc);
	// 					foreach ($encuestado->result() as $enc){
	// 						$idEncuestado = $enc->idEncuestado;
	// 					}
	// 					$data = array(
	// 						'idEnc' => $idEncuestado,
	// 						'relevamiento' => $idRelevamiento,
	// 						'idRespPreg' => $respPreg->idRespPreg,
	// 						'respB' => NULL);
	// 					//Creo un objeto Respuesta_Elegida
	// 					$this->Relevamiento_model->crearRespuestaElegida($data);
	// 				}
	// 			}
	// 		}
	// 	}else{
	// 		/*Si respuesta es un String controlo si tiene la cadena ":number" en su interior, 
	// 		si lo tiene se la quito y guardo la respuesta como un int*/
	// 		$cadenaResp = $encuestados[$indiceRE]['pregResp']['idRespuesta'];
	// 		if(strpos($cadenaResp, ":number")){
 // 				$largo = strlen($cadenaResp);
 // 				$respFinal = substr($cadenaResp,-($largo), ($largo-7));
	//  			$dniEnc = $encuestados[$indiceRE]['dniE'];
	// 			//Busco el idEncuestado para poder cargarlo en la clase Respuesta_Elegida
	// 			$encuestado = $this->Relevamiento_model->obtenerEncuestado($dniEnc);
	// 			foreach ($encuestado->result() as $enc){
	// 				$idEncuestado = $enc->idEncuestado;
	// 			}							
	// 			$data = array(
	// 				'idEnc' => $idEncuestado,
	// 				'relevamiento' => $idRelevamiento,
	// 				'idRespPreg' => NULL,
	// 				'respB' => $respFinal);
	// 			//Creo un objeto Respuesta_Elegida
	// 			$this->Relevamiento_model->crearRespuestaElegida($data);
	// 		}else{
	// 			//Si la respuesta es un String directamente lo guardo en respBreve en una nueva Respuesta_Elegida
 // 				$resp = $encuestados[$indiceRE]['pregResp']['idRespuesta'];
	//  			$dniEnc = $encuestados[$indiceRE]['dniE'];
	// 			//Busco el idEncuestado para poder cargarlo en la clase Respuesta_Elegida
	// 			$encuestado = $this->Relevamiento_model->obtenerEncuestado($dniEnc);
	// 			foreach ($encuestado->result() as $enc){
	// 				$idEncuestado = $enc->idEncuestado;
	// 			}							
	// 			$data = array(
	// 				'idEnc' => $idEncuestado,
	// 				'relevamiento' => $idRelevamiento,
	// 				'idRespPreg' => NULL,
	// 				'respB' => $resp);
	// 			//Creo un objeto Respuesta_Elegida
	// 			$this->Relevamiento_model->crearRespuestaElegida($data);
	// 		}	
	// 	}
	// 	$indiceRE++;
	// }//Fin carga de Respuestas del Encuestado
	// //Revisar el redireccionamiento al final la recepcion y garda de datos
	// redirect('/abms/abmEmpleadosC','refresh');
	// }
 }
?>