
<?php 
//Limitar los datos segun lo que trae el select de cantidad de lineas a mostrar
 if ($resp_preg){
	foreach ($resp_preg->result() as $rtaPreg){
		$idPreg=$rtaPreg->idPregunta;
		$idResp=$rtaPreg->idRespuesta;

		//var_dump($idResp);
		//echo "</br>";
//var_dump($idPreg);


//die();
		var_dump($resp_preg);
?>



<div class="form-group"> <!-- Empieza linea del form con desplegable -->
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Preguntas </label>

		<div class="col-sm-4">
			<div>
				<select class="form-control" id="nivel" name="nivel"><!-- Codigo de Combo con datos de la BD -->

					<?php foreach ($preguntas->result() as $preg){
						if($preg->idPregunta==$idPreg){						
					?>

					<option value="<?=$preg->idPregunta?>"><?=$preg->pregunta;?></option>
						
					<?php 

						}
					}
					?>							
					
				</select>
			</div>									
		</div>
</div>


<div class="form-group"> <!-- Empieza linea del form con desplegable -->
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Respuestas </label>

		<div class="col-sm-4">
			<div>
				<select class="form-control" id="nivel" name="nivel"><!-- Codigo de Combo con datos de la BD -->

					<?php foreach ($respuestas->result() as $resp){
						if($resp->idRespuesta==$idResp){						
					?>

					<option value="<?=$resp->idRespuesta?>"><?=$resp->respuesta;?></option>
						
					<?php 

						}
					}
					?>							
					
				</select>
			</div>									
		</div>
</div>

var_dump


<?php
	}
	

}

			

?>
