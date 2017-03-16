
<?php 
//Limitar los datos segun lo que trae el select de cantidad de lineas a mostrar


//$data['respuestas'] = $this->probando_model->obtenerRespuestas();	

  if ($respuestas){
	foreach($respuestas->result() as $rtas){
		$idResp = $rtas->idRespuesta;

		$data['linea'] = $this->probando_model->getRespuestas($idResp);
	}
}

		if($data['linea']){

		 
		 		echo $data['linea'][0];

			}

?>
