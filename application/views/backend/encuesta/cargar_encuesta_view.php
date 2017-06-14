




<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">


<?php 

// array('nombreE' =>"",
// 'apellidoE' =>"",
// 'dniE' =>"",
// 'edad' =>"",
// 'sexo' =>"",
// 'nroAfiliado' =>"",
// "pregResp" => array('idPregunta' => "",
// 'idRespuesta' =>"")
// );



//var_dump($edades);  ?>

<!--<div class="container">   contenedor principal -->
<input type="hidden" name="embarazo"  id="embarazo" value="<?php echo @$embarazo; ?>">
<input type="hidden" name="integrantes"  id="integrantes" value="<?php echo @$cantidad; ?>">

<!-- Aqui va un bucle que pone als edades en String  separados por un caracter-->

<?php 

	$string_edad= "";

	if($edades != 0){

			foreach($edades as $edad){

				$string_edad.= $edad ."," ;
			}
	}else{

			$string_edad= "0";

	}
		
?>

<input type="hidden" name="edades"  id="edades" value="<?php echo @$string_edad; ?>">

<form id="add_encuesta" action="<?php echo(site_url('encuesta/cargarEncuesta/cargabloques_final'));  ?>" method="post">


	<div class="row form-horizontal" id="bloque_1">   <!-- bloque 1 -->
		<div class="panel panel-default">
		
			<div class="panel-heading orange"> 
				
				<div class="col-xs-10">

					<p>Familia Conviviente</p>				
				</div>
				
				
				<p class="text-right btn-sm"><a href="javascript:window.history.back();" ><i class="1 ace-icon fa fa-arrow-left"></i> Atras</a></p>

			</div>


				<div class="panel-body">

				<blockquote>
					<p>Datos Personales</p>
				</blockquote>
				
				<div class="form-group" id="id_responde">
					 <label for="inputName" class="control-label col-xs-6"></label>
					 <div class="col-xs-6">
							
									<label class="block" >
											<input name="form-field-checkbox" class="ace input-lg" type="checkbox" id="responde">
											<span class="lbl bigger-120">  Responde la encuesta</span>
									</label>
											 
					</div>
				</div>

			<div class="form-group">
				 <label for="inputName" id ="lblTitular" class="control-label col-xs-6">      </label>
				 <div class="col-xs-6">
					 <input type="text" class="form-control"  name ="b1_nombre"  id ="b1_nombre"  >
				 </div>
			</div>

				<div class="form-group">
					 <label for="inputEmail" class="control-label col-xs-6">Edad (*) </label>
					 <div class="col-xs-6">
						 <input type="number" name="b1_edad"  class="form-control" id="b1_edad" required>
					 </div>
				</div>

				<div class="form-group">
					<label for="inputEmail" class="control-label col-xs-6">Dni (*) </label>
					<div class="col-xs-6">
						<input type="number" name="b1_dni"  class="form-control" id="b1_dni" required>
					</div>
				</div>

				<div class="form-group">
					 <label for="inputPassword" class="control-label col-xs-6">Sexo (*) </label>
						<div class="col-xs-2">
							<label class="radio-inline">
								<input type="radio" name="b1_genero" value="m" checked = "true" required> Masculino
							</label>
						</div>
						<div class="col-xs-2">
							<label class="radio-inline">
								<input type="radio" name="b1_genero" value="f"> Femenino
							</label>
						</div>
				</div>
			 
				<div class="form-group">
					<label class="control-label col-xs-6">Vínculo con el titular (*) </label>
					<div class="col-xs-6">
						<select class="form-control" name= "b1_parent" id= "b1_parent" required>

						</select>
					</div>

				</div>	

<hr>

				<blockquote>
					<p>Cobertura de Salud</p>    <!-- Subtitulo Cobertura de Salud -->
				</blockquote>


				<div class="form-group" id="tOsep">
					<label for="inputPassword" class="control-label col-xs-6">¿Tiene OSEP?  (*) </label>
					<div class="col-xs-6">
						<select class="form-control" name= "b1_osep" id= "b1_osep">
						<option value="0" checked>SI</option>
						<option value="1">NO</option>
						</select>
					</div>
				</div>			

				<div class="form-group" id= "b1_div_afiliado">
					<label for="inputPassword" class="control-label col-xs-6">Número de Afiliado</label>
						<div class="col-xs-6">
							<input type="text" name="b1_afiliado"  class="form-control" placeholder="- -  - - -  - - -/- -" id="b1_afiliado">
						</div>
				</div>

				<div class="form-group">
					<label for="inputEmail" class="control-label col-xs-6" id= "b1_label_cober" >¿Tiene otra cobertura de salud?</label>
					<div class="col-xs-6">
						<select class="form-control" name= "b1_cober" id= "b1_cober">

						</select>
					</div>
				</div>


				<div id= "educativo"><!-- Datos ocupacionales inicio -->

				<hr>

					<blockquote>
						<p>Nivel Educativo</p>    <!-- Nivel educativo-->
					</blockquote>

					<div class="form-group">
						<label class="control-label col-xs-6">¿Estudia? (*) </label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_estudio" id= "b1_estudio">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="0">SI</option>
								<option value="1" >NO</option>
							</select>
						</div>
					</div>	

					<div class="form-group" id ="b1_div_nivel">
						<label for="inputEmail" class="control-label col-xs-6">¿Cuál es su nivel educativo? (*) </label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_nivel" id= "b1_nivel">
							<option value="" disabled selected hidden>Seleccionar</option>
							<option value="0">Inicial</option>
							<option value="1">Primario Incompleto</option>
							<option value="2">Primario Completo</option>
							<option value="3">Secundario Incompleto</option>
							<option value="4">Secundario Completo</option>
							<option value="5">Terciario Incompleto</option>
							<option value="6">Terciario Completo</option>
							<option value="7">Universitario Incompleto</option>
							<option value="8">Universitario Completo</option>
							</select>
						</div>
					</div>
				</div>	<hr>		<!-- Datos ocupacionales cierre -->



		<div class="row form-horizontal" id="bloque_9">      <!-- Bloque 9 ocupacional Adaptado -->
				<blockquote>
					<p>Datos Ocupacionales</p>
				</blockquote>
					

					<div class="form-group">
						<label for="inputEmail" class="control-label col-xs-6">¿A qué se dedica actualmente? (*) </label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_ocupacion" id= "b1_ocupacion">
								<!--completo dinamicamente en base a si es titular-->
							</select>
						</div>
					</div>

					<div id="bloque_9_int">
						


						<div class="form-group">
							<label class="control-label col-xs-6">¿Contribuye con la economía familiar?  (*) </label>
							<div class="col-xs-6">
								<select class="form-control" id="b9_contribulle" name="b9_contribulle" >
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">Principal sostén</option>
								<option value="2">Aportante</option>							
								<option value="3">No contribuye</option>							
								</select>
							</div>
						</div>


						<div class="form-group">	
							<label class="control-label col-xs-6">¿Cuántas horas trabajó la semana pasada? (*) </label>
							<div class="col-xs-6">
								<input type="number" class="form-control" id="b9_horas"  name="b9_horas" placeholder=" hs">
							</div>
						</div>	

						<div class="form-group">		
							<label class="control-label col-xs-6">¿En qué lugar trabaja?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_lugar"  name="b9_lugar" placeholder="Repartición" >
							</div>
						</div>	

						<div class="form-group">	
							<label class="control-label col-xs-6">Detalle la tarea realizada</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_ocupacion"  name="b9_ocupacion"  placeholder="Ocupación">
							</div>
						</div>	

						<div class="form-group">	
							<label class="control-label col-xs-6">Observaciones</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_obs"  name="b9_obs" >
							</div>
						</div>	
					</div>		<!--cierre bloque interno de bloque 9-->	


					<div id="bloque_9_int_juv">

						<div class="form-group">							
							<label class="control-label col-xs-6">¿Contribuye con la economía familiar?  (*) </label>
							<div class="col-xs-6">
								<select class="form-control" id="b9_contribulle" name="b9_contribulle" >
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">Principal sostén</option>
								<option value="2">Aportante</option>							
								<option value="3">No contribuye</option>							
								</select>
							</div>
						</div>	

						<div class="form-group">
							<label class="control-label col-xs-6">Concretamente, ¿cuál es la actividad que realizaba usted antes de 
								jubilarse o la persona que originó la pensión?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_ocupacion"  name="b9_ocupacion">
							</div>
						</div>	

						<div class="form-group">					
							<label class="control-label col-xs-6">Observaciones</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_obs"  name="b9_obs">
							</div>
						</div>	
					</div> <hr>


		</div>
				<blockquote>
					<p>Condiciones especiales de salud</p>    <!-- apartado Condiciones especiales de salud-->
				</blockquote>


				<div class="form-group" id= "b1_div_embarazo">
					<label for="inputPassword" class="control-label col-xs-6">¿Esta embarazada? (*) </label>
					<div class="col-xs-6">
						<select class="form-control" name= "b1_embarazo" id= "b1_embarazo">
						<option value="0">SI</option>
						<option value="1" selected>NO</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword" class="control-label col-xs-6">¿Padece alguna enfermedad crónica? (*) </label>
					<div class="col-xs-6">
						<select class="form-control" name= "b1_cronica" id= "b1_cronica">
						<option value="0">SI</option>
						<option value="1" selected =" true">NO</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword" class="control-label col-xs-6">¿Tiene alguna discapacidad? (*) </label>
					<div class="col-xs-6">
						<select class="form-control" name= "b1_disc" id= "b1_disc">
						<option value="0">SI</option>
						<option value="1">NO</option>
						</select>
					</div>
				</div>


				<div id="afiliado_externo">   <!-- si es titular no debe aparecer-->

					<blockquote>
						<p>Afiliados a cargo en otro domicilio</p>    <!-- apartado afiliado en otro domicilio-->
					</blockquote>



					<div class="form-group">
						<label for="inputPassword" class="control-label col-xs-6">¿Tiene algún afiliado a cargo que no viva en este domicilio?</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_extra" id= "b1_extra" >
							<option value="0">SI</option>
							<option value="1" selected =" true">NO</option>
							</select>
						</div>
					</div>

				</div>
				

					 <div class="form-group" id= "b1_adicional">


							<div class="col-xs-6 col-xs-offset-6">	

								<ul class="list-group" id= "b1_acargo">

								</ul>

							</div>

						<div class="col-xs-6 col-xs-offset-6 ">
						<br>

						<div class="form-group">					
							<label class="control-label col-xs-3">Nombre</label>
							<div class="col-xs-9">
								<input type="text" class="form-control " id="b1_adicional_nombre"  name="b1_adicional_nombre">
							</div>
						</div>

						<div class="form-group">					
							<label class="control-label col-xs-3">Telefono</label>
							<div class="col-xs-9">
								<input type="text" class="form-control" id="b1_adicional_tel"  name="b1_adicional_tel">
							</div>
						</div>
						<hr>


							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary text-left"  id="btn_add_afiliado">
							Añadir afiliado a cargo
							</button>
							
						</div>

					 </div>



					<div id="b1_afiliado_varon">

						<blockquote>
								<p>Utilización de consultas</p>    <!-- apartado Condiciones especiales de salud-->
						</blockquote>


						<!--  preguntas de uso de servicio-->



						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Recuerda si realizó al menos una consulta médica por OSEP en el último año ? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b1_consulta" name="b1_consulta">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>	
									<option value="3">Sin datos</option>							
								</select>
							</div>

						</div>	
						
						<div class="form-group" id="b1_div_consulta_si">
							
							<label class="control-label col-xs-6">¿Dónde concurrió a atenderse la última vez? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b1_atencion_si" name="b1_atencion_si">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="0">Fue a un efector de OSEP</option>
								<option value="1">Fue a un prestador privado</option>
								<option value="2">Fue a un hospital o centro de salud público</option>							
								</select>
							</div>

						</div>	

						
						<div id="b1_div_consulta_no">
						
							<div class="form-group" >
								
								<label class="control-label col-xs-6">¿Por qué? </label>
								<div class="col-xs-6">
									<select class="form-control" id="b1_atencion_no" name="b1_atencion_no">
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value= "1">No se enfermó ni tuvo un accidente</option>
										<option value= "2">Quiso consultar pero no tuvo dinero</option>
										<option value= "3">Quiso consultar pero le cuesta llegar al lugar de atención</option>
										<option value= "4">Pidió turno pero no lo obtuvo</option>
										<option value= "5">Consultó pero NO por OSEP</option>							
										<option value= "6">Otro motivo</option>						
									</select>
								</div>

							</div>	

							<div class="form-group" id="b1_div_cual">
								<label class="control-label col-xs-6" for="b0_cual"> Cual?</label>

								<div class="col-xs-6" >
									<input type="text" class="form-control" name = "b1_cual" id="b1_cual" >
								</div>
							</div>

						</div>


					</div>


				
			</div>
	</div>	
</div>			
			
	
	


<!--BLOQUE ESPECIAL BOTON GENERADOR-->


	<div class="row form-horizontal" id="div_btn_bloques">     
		<div class="panel panel-default">
			<br>
			<div class="form-group">
				<div class="col-xs-12 text-center">
					<input type="button" class="btn btn-info" value="Generar Bloques" id= "btn_bloques">
				</div>
			</div>
		</div>		 
	</div>	 <!-- Cierre row -->












	<div class="row form-horizontal" id="bloque_3_a">      <!-- Bloque 3 bebes -->
			<div class="panel panel-default">
			
				<div class="panel-heading orange">Bloque Salud de los niños</div>
					<div class="panel-body">
				
						<blockquote>
							<p>Embarazo y parto</p>
						</blockquote>

						<div class="form-group">							
							<label class="control-label col-xs-6">¿El embarazo fue normal o el profesional lo consideró de riesgo?</label>
							<div class="col-xs-6">
								<select class="form-control" name ="">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">Normal</option>
								<option value="2">De riesgo</option>							
								</select>
							</div>
						</div>	

						<div class="form-group">							
							<label class="control-label col-xs-6">¿Nació a término o fue prematuro?</label>						
							<div class="col-xs-6">
								<select class="form-control" name ="">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">A termino</option>
								<option value="2">Prematuro</option>							
								</select>
							</div>
						</div>	
						
						<div class="form-group">
							<label class="control-label col-xs-6" for="b3a_peso">¿Recuerda cuánto pesó al nacer?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" name= "b3a_peso" id="b3a_peso" placeholder="Peso al nacer en gramos">
							</div>
						</div>

						<div class="form-group">							
							<label class="control-label col-xs-6">¿Caminó cerca o alrededor de cumplir el año?</label>
							<div class="col-xs-6" name ="">
								<select class="form-control">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>							
								</select>
							</div>
						</div>

						<blockquote>
							<p>Controles de Salud</p>
						</blockquote>

						<div class="form-group">							
							<label class="control-label col-xs-6">¿Lo llevaron al control auditivo que se realiza para detectar problemas de oído en los recién nacidos?</label>
							<div class="col-xs-6" name ="">
								<select class="form-control">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>							
								</select>
							</div>
						</div>


						<div class="form-group">							
							<label class="control-label col-xs-6">En el último control de salud, ¿el profesional anotó que su peso es normal?</label>
							<div class="col-xs-6" name ="">
								<select class="form-control">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">Bajo peso</option>
									<option value="2">Normal</option>							
									<option value="3">Sobrepeso</option>							
								</select>
							</div>
						</div>

						<div class="form-group">							
							<label class="control-label col-xs-6">¿Tiene las vacunas al día?</label>
							<div class="col-xs-6" name ="">
								<select class="form-control">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>							
								</select>
							</div>
						</div>

						<div class="form-group">							
							<label class="control-label col-xs-6">¿Está recibiendo la leche de OSEP?</label>
							<div class="col-xs-6" >
								<select class="form-control" name ="b3_a_leche" id ="b3_a_leche">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>							
								</select>
							</div>
						</div>
						
						<div class="form-group" id="b3a_div_porque_no">
							<label class="control-label col-xs-6" for="b3_a_peso">¿Por que no la recibe?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" name= "b3_a_porque_no" id="b3_a_porque_no" placeholder="">
							</div>
						</div>	



						<!--  preguntas de uso de servicio-->



						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Recuerda si realizó al menos una consulta médica por OSEP en los últimos 6 meses? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b3a_consulta" name="b3a_consulta">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>
									<option value="3">Sin datos</option>							
								</select>
							</div>

						</div>	
						
						<div class="form-group" id="b3a_div_consulta_si">
							
							<label class="control-label col-xs-6">¿Dónde concurrió a atenderse la última vez? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b3a_atencion_si" name="b3a_atencion_si">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="0">Fue a un efector de OSEP</option>
								<option value="1">Fue a un prestador privado</option>
								<option value="2">Fue a un hospital o centro de salud público</option>							
								</select>
							</div>

						</div>	

						
						<div id="b3a_div_consulta_no">
						
							<div class="form-group" >
								
								<label class="control-label col-xs-6">¿Por qué? </label>
								<div class="col-xs-6">
									<select class="form-control" id="b3a_atencion_no" name="b3a_atencion_no">
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value= "1">No se enfermó ni tuvo un accidente</option>
										<option value= "2">Quiso consultar pero no tuvo dinero</option>
										<option value= "3">Quiso consultar pero le cuesta llegar al lugar de atención</option>
										<option value= "4">Pidió turno pero no lo obtuvo</option>
										<option value= "5">Consultó pero NO por OSEP</option>							
										<option value= "6">Otro motivo</option>						
									</select>
								</div>

							</div>	

							<div class="form-group" id="b3a_div_cual">
								<label class="control-label col-xs-6" for="b3a_cual"> Cual?</label>

								<div class="col-xs-6" >
									<input type="text" class="form-control" name = "b3a_cual" id="b3a_cual" >
								</div>
							</div>

						</div>


			
					</div>	
		</div>
</div>	 <!-- Cierre row -->


<div class="row form-horizontal" id="bloque_3_b">      <!-- Bloque 3 niños -->
			<div class="panel panel-default">
			
				<div class="panel-heading orange">Salud de los Niños</div>
					<div class="panel-body">
				
							<blockquote>
								<p>Controles de salud y actividades</p>
							</blockquote>


							<div class="form-group">
								
								<label class="control-label col-xs-6">En el último año, ¿realizó al menos un control con un odontólogo? </label>
								<div class="col-xs-6">
									<select class="form-control">
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value="1">SI</option>
										<option value="2">NO</option>							
									</select>
								</div>

							</div>	


							<div class="form-group" id="b3_oculista">
								
								<label class="control-label col-xs-6">¿Realizó algún control con un oculista para verificar su salud visual?</label>
								<div class="col-xs-6">
									<select class="form-control">
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value="1">SI</option>
										<option value="2">NO</option>							
									</select>
								</div>

							</div>	



						
							<div class="form-group">
								<label class="control-label col-xs-6" for="b3b_escuela">Durante el año pasado/este año, ¿ha tenido algún tipo de dificultad en la escuela?</label>
								<div class="col-xs-4">
									<select class="form-control" id ="b3b_escuela" name ="b3b_escuela">
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value="1">SI</option>
										<option value="2">NO</option>
										<option value="3">NO asiste Todavía</option>							
									</select>
								</div>

							</div>
						
						<div class="form-group" id="b3b_div_problem">
							<label class="control-label col-xs-6" for="b3b_problem">¿Cual fue el problema?</label>

							<div class="col-xs-6" >
								<input type="text" class="form-control" name = "b3b_problem" id="b3b_problem" >
							</div>
						</div>


							<div class="form-group">
								
								<label class="control-label col-xs-6">¿Realiza en forma regular alguna actividad extraescolar, 
																		es decir, hace deportes, alguna actividad artística u otra actividad todas las semanas?</label>
								<div class="col-xs-6">
									<select class="form-control" id= "b3b_extra">
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value="1">Deportiva</option>
										<option value="2">Artística</option>
										<option value="3">Educativa</option>
										<option value="4">Comunitaria</option>
										<option value="5">Religiosa</option>
										<option value="6">Otra</option>							
										<option value="7">No realiza</option>							
									</select>
								</div>

							</div>



							<div class="form-group" id= "b3b_div_dónde">
								
								<label class="control-label col-xs-6">dónde ?</label>
								<div class="col-xs-6">
									<select class="form-control">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">Club</option>
									<option value="2">Instituto</option>							
									<option value="3">CIC</option>							
									<option value="4">Biblioteca</option>							
									<option value="5">Unión Vecinal</option>							
									<option value="6">otro</option>							
									</select>
								</div>

							</div>



<!--   preguntas de uso de servicio-->



					<div class="form-group">
							
							<label class="control-label col-xs-6">¿Recuerda si realizó al menos una consulta médica por OSEP en los últimos 6 meses? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b3b_consulta" name="b3b_consulta">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>
									<option value="3">Sin datos</option>							
								</select>
							</div>

						</div>	
						
						<div class="form-group" id="b3b_div_consulta_si">
							
							<label class="control-label col-xs-6">¿Dónde concurrió a atenderse la última vez? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b3b_atencion_si" name="b3b_atencion_si">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="0">Fue a un efector de OSEP</option>
								<option value="1">Fue a un prestador privado</option>
								<option value="2">Fue a un hospital o centro de salud público</option>							
								</select>
							</div>

						</div>	

						
						<div id="b3b_div_consulta_no">
						
							<div class="form-group" >
								
								<label class="control-label col-xs-6">¿Por qué? </label>
								<div class="col-xs-6">
									<select class="form-control" id="b3b_atencion_no" name="b3b_atencion_no">
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value= "1">No se enfermó ni tuvo un accidente</option>
										<option value= "2">Quiso consultar pero no tuvo dinero</option>
										<option value= "3">Quiso consultar pero le cuesta llegar al lugar de atención</option>
										<option value= "4">Pidió turno pero no lo obtuvo</option>
										<option value= "5">Consultó pero NO por OSEP</option>							
										<option value= "6">Otro motivo</option>						
									</select>
								</div>

							</div>	

							<div class="form-group" id="b3b_div_cual">
								<label class="control-label col-xs-6" for="b3b_cual"> Cual?</label>

								<div class="col-xs-6" >
									<input type="text" class="form-control" name = "b3b_cual" id="b3b_cual" >
								</div>
							</div>

						</div>




			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->





<div class="row form-horizontal" id="bloque_4">      <!-- Bloque 4 mujeres -->
			<div class="panel panel-default">
			
				<div class="panel-heading orange">Salud  de las mujeres</div>
					<div class="panel-body">
						<!--diferenciar las preguntas por edades-->
					<div id="b4_salud">
						<div id="b4_div_consulta">
							<div class="form-group" >
														
									<label class="control-label col-xs-6"> ¿Recuerda si realizó al menos una consulta médica por OSEP en el último año? </label>

									<div class="col-xs-6">
										<select class="form-control" id= "b4_consulta" >
											<option value="" disabled selected hidden>Seleccionar</option>
											<option value="0" >SI</option>
											<option value="1">NO</option>
											<option value="3">Sin datos</option>						
										</select>
									</div>

							</div>	


							<div id="b4_div_consulta_si" >
									<div class="form-group">					
										<label class="control-label col-xs-6"> ¿Dónde concurrió a atenderse la última vez? </label>

										<div class="col-xs-6">
											<select class="form-control" id="b4_consulta_si" name="b4_consulta_si">
												<option value="" disabled selected hidden>Seleccionar</option>
												<option value= "1">Fue a un efector de OSEP</option>
												<option value= "2">Fue a un prestador privado</option>
												<option value= "3">Fue a un hospital o centro de salud público</option>						
											</select>
										</div>
									</div>

								<hr>
							</div>	


							<div  id="b4_div_consulta_no" >
									<div class="form-group">					
										<label class="control-label col-xs-6"> ¿Por qué? </label>

										<div class="col-xs-6">
											<select class="form-control" id="b4_consulta_no" name="b4_consulta_no">
												<option value="" disabled selected hidden>Seleccionar</option>
												<option value= "1">No se enfermó ni tuvo un accidente</option>
												<option value= "2">Quiso consultar pero no tuvo dinero</option>
												<option value= "3">Quiso consultar pero le cuesta llegar al lugar de atención</option>
												<option value= "4">Pidió turno pero no lo obtuvo</option>
												<option value= "5">Consultó pero NO por OSEP</option>							
												<option value= "6">Otro motivo</option>							
											</select>
										</div>
									</div>



									<div class="form-group" id="b4_div_otro">					
										<label class="control-label col-xs-6"> ¿Cual? </label>

										<div class="col-xs-6">
											<input type="text" class="form-control" name = "b4_otro" id="b4_otro" >

										</div>
									</div>

								<hr>
							</div>

				


						</div> <!--cierro div consulta-->
					
							<div class="form-group" id="b4_estado_general">
								
								<label class="control-label col-xs-6">¿Como diría que es su estado general de salud en este momento?</label>
								<div class="col-xs-6">
									<select class="form-control">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option >Muy bueno</option>
									<option >Bueno</option>							
									<option >Regular</option>							
									<option >Malo</option>							
									</select>
								</div>

							</div>	


					</div> <!--cierro diferenciar preguntas-->



						<div class="form-group" id="b4_div_pap">
							
							<label class="control-label col-xs-6">¿En los últimos  2 años concurrió a realizarse el Papanicolau?</label>
							<div class="col-xs-3">
								<select class="form-control" id="b4_pap">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="0" >SI</option>
									<option value="1">NO</option>
									<option value="2">No sabe/no contesta</option>							
								</select>
							</div>
							<div class="col-xs-3" id="b4_div_pap_si" >
								<select class="form-control" id="b4_pap_si" name="b4_pap_si">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value= "1">En hospital o centro propio de OSEP</option>
									<option value= "2">En Consultorio, Clínica o Sanatorio dónde reciben OSEP</option>
									<option value= "3">En hospital público, centro de salud , sala</option>
									<option value= "4">En Consultorio, Clínica o Sanatorio dónde no reciben OSEP</option>
									<option value= "5">Otro</option>							
								</select>
							</div>
							<div class="col-xs-3" id="b4_div_pap_no" >
								<select class="form-control" id ="b4_pap_no" name ="b4_pap_no">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value= "1">No tuvo tiempo</option>							
									<option value= "2">No tuvo dinero</option>							
									<option value= "3">No consiguió turno o lugar dónde la atiendan</option>							
									<option value= "4">No sabe dónde  hacérselo</option>							
									<option value= "5">Le da miedo, disgusto o vergüenza</option>							
									<option value= "6">Se olvido</option>							
									<option value= "7">Por dejadez</option>							
									<option value= "8">No lo necesita, esta sana (percepción personal)</option>							
									<option value= "9">No Conoce ese examen o no sabia que tenia que hacérselo</option>							
									<option value= "10">El médico no se lo indico</option>							
									<option value= "11">Por edad Avanzada</option>							
									<option value= "12">No le corresponde (Histerectomía, o alguna otra contraindicación médica)</option>							
						
								</select>
							</div>



						</div>	


						
						<div class="form-group" id="b4_div_mamo">
							<label class="control-label col-xs-6" for="b4_mamo">¿En los últimos 2 años se ha realizado una mamografía ?</label>
							<div class="col-xs-3">
								<select class="form-control" id="b4_mamo" name="b4_mamo" >
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="0">SI</option>
									<option value="1">NO</option>							
									<option value="2">Sin datos</option>							
								</select>
							</div>
							<div class="col-xs-3" id="b4_div_mamo_si">
								<select class="form-control" id="b4_mamo_si" name="b4_mamo_si">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value= "1">En el mamografo de OSEP</option>
									<option value= "2">En Consultorio, Clínica o Sanatorio dónde reciben OSEP</option>
									<option value= "3">En hospital público, dentro de salud , sala</option>
									<option value= "4">En Consultorio, Clínica o Sanatorio dónde no reciben OSEP</option>
									<option value= "5">Otro</option>

								</select>
							</div>
							<div class="col-xs-3" id="b4_div_mamo_no" >
								<select class="form-control" id="b4_mamo_no" name="b4_mamo_no">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value= "1">No tuvo tiempo</option>							
									<option value= "2">No tuvo dinero</option>							
									<option value= "3">No consiguió turno o lugar dónde la atiendan</option>							
									<option value= "4">No sabe dónde  hacérselo</option>							
									<option value= "5">Le da miedo, disgusto o vergüenza</option>							
									<option value= "6">Se olvido</option>							
									<option value= "7">Por dejadez</option>							
									<option value= "8">No lo necesita, esta sana (percepción personal)</option>							
									<option value= "9">No Conoce ese examen o no sabia que tenia que hacérselo</option>										
									<option value= "10">El profesional tratante no se lo indico</option>									
									<option value= "11">Por edad Avanzada</option>							
									<option value= "12">No le corresponde (Histerectomía, o alguna otra contraindicación médica)</option>							
														
								</select>
							</div>							
						</div>


					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->


<div class="row form-horizontal" id="bloque_5">      <!-- Bloque 5 Adultos mayores -->
			<div class="panel panel-default">
			
				<div class="panel-heading orange">Salud de los adultos</div>
					<div class="panel-body">

						
						<div class="form-group" id = "">
							
							<label class="control-label col-xs-6">¿Necesita usar en forma permanente uno o más de estos elementos ? </label>
							<div class="col-xs-6">

								<div class="checkbox">
								<label><input type="checkbox" name="b5_disc[]" value="1">silla de ruedas </label>
								</div>
								<div class="checkbox">
								<label><input type="checkbox"  name="b5_disc[]" value="2">bastón</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox"  name="b5_disc[]" value="3" >andador</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox"  name="b5_disc[]" value="4" >audífono</label>
								</div>								

							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Ha experimentado en el último mes...? </label>
							<div class="col-xs-6">
								<div class="checkbox">
								<label><input type="checkbox" name="b5_exp[]" value="1">caídas</label>
								</div>
								<div class="checkbox">
								<label><input type="checkbox"  name="b5_exp[]" value="2">olvidos o confusiones recurrentes</label>
								</div>	
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Necesita o ha tenido que realizar modificaciones e su casa para no caerse o realizar sus tareas cotidianas ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

	

						<div class="form-group">
							
							<label class="control-label col-xs-6">Normalmente, ¿Necesita ayuda para realizar trámites, como cobrar la jubilación, pedir turno al medico por ejemplo ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Si tiene una  dificultad de salud  o una urgencia, ¿cuenta con alguien que lo pueda ayudar a resolverla ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Realiza habitualmente algún hobbie o actividad social, 
							por ejemplo leer, hacer cursos o gimnasia, ir a un centro de jubilados o a la iglesia? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_activity" name="b5_activity">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2" >NO</option>							
								</select>
							</div>

						</div>	

						<!--<div class="form-group" id="b5_div_cual">
							<label class="control-label col-xs-6" for="b5_cual"> Cual?</label>

							<div class="col-xs-6" >
								<input type="text" class="form-control" name = "b5_cual" id="b5_cual" placeholder="Cual fue el Problema?">
							</div>
						</div>

						 aqui va el cual-->



						<div class="form-group">
							
							<label class="control-label col-xs-6">Tiene alguna actividad o hobbie que haga frecuentemente para ocupar el tiempo libre ?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_hobby" name="b5_hobby">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	





						<div class="form-group">
							
							<label class="control-label col-xs-6">Respecto a la atención médica, ¿tiene un médico de cabecera, es decir un profesional que lo conozca y que lo atienda habitualmente?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_medico" name="b5_medico">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1" >SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group" id="b5_div_esde_osep">
							
							<label class="control-label col-xs-6">¿Ese médico es de OSEP o recibe OSEP ?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_esde_osep" name="b5_esde_osep">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	
						
						
						
						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Recuerda si realizó al menos una consulta médica por OSEP en los últimos 6 meses? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_consulta" name="b5_consulta">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>
									<option value="3">Sin datos</option>							
								</select>
							</div>

						</div>	
						
						<div class="form-group" id="b5_div_consulta_si">
							
							<label class="control-label col-xs-6">¿Dónde concurrió a atenderse la última vez? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_atencion_si" name="b5_atencion_si">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="0">Fue a un efector de OSEP</option>
								<option value="1">Fue a un prestador privado</option>
								<option value="2">Fue a un hospital o centro de salud público</option>							
								</select>
							</div>

						</div>	

						
						<div id="b5_div_consulta_no">
						
							<div class="form-group" >
								
								<label class="control-label col-xs-6">¿Por qué? </label>
								<div class="col-xs-6">
									<select class="form-control" id="b5_atencion_no" name="b5_atencion_no">
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value= "1">No se enfermó ni tuvo un accidente</option>
										<option value= "2">Quiso consultar pero no tuvo dinero</option>
										<option value= "3">Quiso consultar pero le cuesta llegar al lugar de atención</option>
										<option value= "4">Pidió turno pero no lo obtuvo</option>
										<option value= "5">Consultó pero NO por OSEP</option>							
										<option value= "6">Otro motivo</option>						
									</select>
								</div>

							</div>	

							<div class="form-group" id="b5_div_cual">
								<label class="control-label col-xs-6" for="b5_cual"> Cual?</label>

								<div class="col-xs-6" >
									<input type="text" class="form-control" name = "b5_cual" id="b5_cual" >
								</div>
							</div>



							
						
						</div>

			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->


<div class="row form-horizontal" id="bloque_6">      <!-- Bloque 6 discapacidad -->
			<div class="panel panel-default">
			
				<div class="panel-heading orange">Afiliados con discapacidad</div>
					<div class="panel-body">


						<div class="form-group" id = "b6_div_tipo">
							
							<label class="control-label col-xs-6">¿Cual es su Discapacidad?</label>
							<div class="col-xs-6">

								<div class="checkbox">
								<label><input type="checkbox" name="b6_tpo[]" value="1">Motora</label>
								</div>
								<div class="checkbox">
								<label><input type="checkbox"  name="b6_tpo[]" value="2">Visual</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox"  name="b6_tpo[]" value="3" >Auditiva</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox"  name="b6_tpo[]" value="4" >Mental o Cognitiva</label>
								</div>								
								<div class="checkbox ">
								<label><input type="checkbox"  name="b6_tpo[]" value="5" >Visceral</label>
								</div>

							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Realizó el empadronamiento en OSEP, Es decir hizo el tramite de registro de su situación en la obra social?</label>
							<div class="col-xs-6">
								<select class="form-control">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>							
									<option value="3">NO sabia que habia que hacerlo</option>							
								</select>
							</div>

						</div>	
						<hr>
						<div class="form-group"  id = "b6_div_medicos">
							
							<label class="control-label col-xs-6">¿Quien o quienes lo orienta sobre los tratamientos que necesita? Es decir, ¿Quien o quienes que ustedes Valores le indica que tratamientos seria bueno realizar por su discapacidad?</label>
							<div class="col-xs-6">

								<div class="checkbox">
								<label><input type="checkbox" name="104" value="1">Médico general o Pediatra</label>
								</div>
								<div class="checkbox">
								<label><input type="checkbox" name="105" value="2">Médico Especialista</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="106" value="3" >Psicólogo - Psiquiatra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="107" value="4" >Médico Fisiátra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="108" value="5" >Otro profesional de la salud</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="109" value="6" >Docente</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="110" value="7" >Integrante de la red de Madres</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox"  name="111" value="8" >Integrante de otra organización civil o de ayuda</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="112" value="9" >Otra persona que tiene una discapacidad, o un familiar con una discapacidad que no esta en ninguna organización</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="9999" value="10" >Otro</label>
								</div>

							</div>

						</div>	
	
						<hr>

						<div class="form-group" id = "b6_div_profesional">
							
							<label class="control-label col-xs-6">De los profesionales de la salud que mencionó, ¿alguno es profesional de cabecera ?</label>
							<div class="col-xs-6">

								<div class="checkbox ">
								<label><input type="checkbox" value="1" >Médico general Pediatra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="2" >Médico especialista</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="3" >Psicólogo - Psiquiatra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="4" >Médico Fisiátra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="5" >Otro profesional de la salud</label>
								</div>
							</div>

						</div>	



						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Qué le gustaría que OSEP hiciera en el ámbito de la discapacidad 
								que no esté haciendo o esté haciendo mal?</label>
							<div class="col-xs-6">
								<textarea rows="3" class="form-control" id="postalAddress" placeholder=""></textarea>
							</div>

						</div>	
						
					
						
						<div id="b6_uso">	

							<div class="form-group">
								
								<label class="control-label col-xs-6">¿Recuerda si realizó al menos una consulta médica por OSEP en los últimos 6 meses? </label>
								<div class="col-xs-6">
									<select class="form-control" id="b6_consulta" name="b6_consulta">
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value="1">SI</option>
										<option value="2">NO</option>
										<option value="3">Sin datos</option>							
									</select>
								</div>

							</div>	
							
							<div class="form-group" id="b6_div_consulta_si">
								
								<label class="control-label col-xs-6">¿Dónde concurrió a atenderse la última vez? </label>
								<div class="col-xs-6">
									<select class="form-control" id="b6_atencion_si" name="b6_atencion_si">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="0">Fue a un efector de OSEP</option>
									<option value="1">Fue a un prestador privado</option>
									<option value="2">Fue a un hospital o centro de salud público</option>							
									</select>
								</div>

							</div>	

							
							<div id="b6_div_consulta_no">
							
								<div class="form-group" >
									
									<label class="control-label col-xs-6">¿Por qué? </label>
									<div class="col-xs-6">
										<select class="form-control" id="b6_atencion_no" name="b6_atencion_no">
											<option value="" disabled selected hidden>Seleccionar</option>
											<option value= "1">No se enfermó ni tuvo un accidente</option>
											<option value= "2">Quiso consultar pero no tuvo dinero</option>
											<option value= "3">Quiso consultar pero le cuesta llegar al lugar de atención</option>
											<option value= "4">Pidió turno pero no lo obtuvo</option>
											<option value= "5">Consultó pero NO por OSEP</option>							
											<option value= "6">Otro motivo</option>						
										</select>
									</div>

								</div>	

								<div class="form-group" id="b6_div_otro">
									<label class="control-label col-xs-6" for="b6_cual"> Cual?</label>

									<div class="col-xs-6" >
										<input type="text" class="form-control" name = "b6_cual" id="b6_cual" >
									</div>
								</div>

							
							</div>
							
							
							
						</div>	
						
						

			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->


<div class="row form-horizontal" id="bloque_7">      <!-- Bloque 7 Embarazadas -->
			<div class="panel panel-default">
			
				<div class="panel-heading orange">Salud de la Embarazada</div>
					<div class="panel-body">
				
						<div class="form-group">
							
							<label class="control-label col-xs-6">¿De cuantos meses esta embarazada ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">1</option>
								<option value="2">2</option>							
								<option value="3">3</option>							
								<option value="4">4</option>	
								<option value="5">5</option>
								<option value="6">6</option>							
								<option value="7">7</option>							
								<option value="8">8</option>	
								<option value="9">9</option>	
								</select>
							</div>

						</div>	


						<div class="form-group" >
							
							<label class="control-label col-xs-6">¿Concurrió al control el mes pasado ?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b7_uso", name="b7_uso">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						
						<div class="form-group" id="b7_div_complejo">
							<label class="control-label col-xs-6" for="b7_complejo">¿Qué tan complicado le resultó en esa oportunidad todo el proceso que implicó 
																						hacerse el control, desde que consiguió el turno hasta que la atendieron ?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b7_complejo" name ="b7_complejo">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">Simple</option>
									<option value="2">Complicado</option>							
								</select>
							</div>
						
						</div>


						<div class="form-group" id="b7_div_porque_no">
							<label class="control-label col-xs-6" for="b7_porque_no">¿Por que no concurrió ?</label>
							<div class="col-xs-3">
								<input type="text" class="form-control" id="b7_porque_no" name ="b7_porque_no"  placeholder=" problema">
							</div>
						
						</div>




						<div class="form-group">
							<label class="control-label col-xs-6" for="">¿El embarazo lo esta llevando un profesional en especial o se atiende con distintos profesionales ?</label>
							<div class="col-xs-6">
								<select class="form-control" name ="b7_profesional">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option >Un profesional</option>
									<option >Distintos profesionales en un mismo lugar de atencion</option>							
									<option >Distintos lugares de atencion</option>							
								</select>
							</div>
						
						</div>


						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">¿El o los profesionales que la atienden, han detectado algún problema en el embarazo ?</label>
							
							<div class="col-xs-3">
								<select class="form-control" name ="b7_problem" id ="b7_problem">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">Si</option>
									<option value="2" selected>NO</option>							
								</select>
							</div>
							<div class="col-xs-3">
								<input type="text" class="form-control" id="b7_cual" placeholder=" Cual?">
							</div>

						</div>
						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Cuenta con apoyo familiar, de su pareja o de alguna otra persona que la acompañe 
																				y la ayude mientras transcurre el embarazo ?</label>
							<div class="col-xs-6">
								<select class="form-control">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">Si</option>
									<option value="2">NO</option>							
								</select>
							</div>
						
						</div>

						<div class="form-group">
							<label class="control-label col-xs-6" for="">¿En los últimos dos años, concurrió a realizarse un papanicolau?</label>
							<div class="col-xs-6">
								<select class="form-control">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">Si</option>
									<option value="2">NO</option>							
									<option value="3">No sabe/no contesta</option>							
								</select>
							</div>
						
						</div>
			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->


        <br>
        <div class="form-group" id="btn_encuesta">
            <div class="col-xs-6">

                <input type="reset" class="btn btn-info" value="Nuevo integrante" id="btn_nuevo">
            </div>

            <div class="col-xs-6 text-right">
                <input type="submit" class="btn btn-primary" value="Continuar" id="btn_continuar">

            </div>		
        </div>



</form>
  
                            <div class="form-group">
                                <label for="warning" class="control-label col-xs-6 text-warning">Rellene los campos obligatorios marcados con un asterisco  (*)  </label>
                                <div class="col-xs-6">
                                    
                                </div>
                            </div>	
 
 <!--</div>   Cierre contenedor principal -->




		</div><!-- /.page-content -->
	</div><!-- /.main-content-inner -->
</div><!-- /.main-content -->



<!--Para que se vean los botones de la tabla responsive-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery.js'>"+"<"+"/script>");
		</script>


		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.js"></script>

