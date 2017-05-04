




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
		
			<div class="panel-heading orange">Familia Conviviente</div>
				<div class="panel-body">

				<blockquote>
					<p>Datos Personales</p>
				</blockquote>
				
				<div class="form-group">
					 <label for="inputName" class="control-label col-xs-6"></label>
					 <div class="col-xs-6">
							
									<label class="block">
											<input name="form-field-checkbox" class="ace input-lg" type="checkbox">
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
					 <label for="inputEmail" class="control-label col-xs-6">Edad(*)</label>
					 <div class="col-xs-6">
						 <input type="number" name="b1_edad"  class="form-control" id="b1_edad" required>
					 </div>
				</div>

				<div class="form-group">
					<label for="inputEmail" class="control-label col-xs-6">Dni(*)</label>
					<div class="col-xs-6">
						<input type="number" name="b1_dni"  class="form-control" id="b1_dni" required>
					</div>
				</div>

				<div class="form-group">
					 <label for="inputPassword" class="control-label col-xs-6">Sexo(*)</label>
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
					<label class="control-label col-xs-6">Vínculo con el titular(*)</label>
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
					<label for="inputPassword" class="control-label col-xs-6">¿Tiene Osep?(*)</label>
					<div class="col-xs-6">
						<select class="form-control" name= "b1_osep" id= "b1_osep">
						<option value="0" checked>SI</option>
						<option value="1">NO</option>
						</select>
					</div>
				</div>			

				<div class="form-group" id= "b1_div_afiliado">
					<label for="inputPassword" class="control-label col-xs-6">Número Afiliado</label>
						<div class="col-xs-6">
							<input type="text" name="b1_afiliado"  class="form-control" placeholder="- -  - - -  - - -/- -" id="b1_afiliado">
						</div>
				</div>

				<div class="form-group">
					<label for="inputEmail" class="control-label col-xs-6">¿Tiene alguna otra cobertura de salud?</label>
					<div class="col-xs-6">
						<select class="form-control" name= "b1_cober" id= "b1_cober">

						</select>
					</div>
				</div>

				<!--<div class="form-group">
					<label for="inputEmail" class="control-label col-xs-6">Tiene otra cobertura:</label>
					<div class="col-xs-6">
						<select class="form-control" name= "b1_otra" id= "b1_otra">
						<option value="0" >SI</option>
						<option value="1" selected =" true" >NO</option>

						</select>
					</div>
				</div>-->





				<div id= "educativo"><!-- Datos ocupacionales inicio -->

				<hr>

					<blockquote>
						<p>Nivel Educativo</p>    <!-- Nivel educativo-->
					</blockquote>

					<div class="form-group">
						<label class="control-label col-xs-6">¿Estudia?(*)</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_estudio" id= "b1_estudio">
							<option value="0">SI</option>
							<option value="1" >NO</option>
							</select>
						</div>
					</div>	

					<div class="form-group" id ="b1_div_nivel">
						<label for="inputEmail" class="control-label col-xs-6">¿Cuál es su nivel educativo?(*)</label>
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
						<label for="inputEmail" class="control-label col-xs-6">¿A qué se dedica actualmente?(*)</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_ocupacion" id= "b1_ocupacion">
								<!--completo dinamicamente en base a si es titular-->
							</select>
						</div>
					</div>

					<div id="bloque_9_int">
						


						<div class="form-group">
							<label class="control-label col-xs-6">¿Contribuye ud con la economía familiar?(*)</label>
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
							<label class="control-label col-xs-6">¿Cuántas horas trabajó la semana pasada?(*)</label>
							<div class="col-xs-6">
								<input type="number" class="form-control" id="b9_horas"  name="b9_horas" placeholder=" hs">
							</div>
						</div>	

						<div class="form-group">		
							<label class="control-label col-xs-6">¿En qué lugar trabaja?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_lugar"  name="b9_lugar"  >
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
							<label class="control-label col-xs-6">¿Contribuyes ud con la economia familiar?(*)</label>
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



				<blockquote>
					<p>Condiciones especiales de salud</p>    <!-- apartado Condiciones especiales de salud-->
				</blockquote>


				<div class="form-group" id= "b1_div_embarazo">
					<label for="inputPassword" class="control-label col-xs-6">¿Esta embarazada?(*)</label>
					<div class="col-xs-6">
						<select class="form-control" name= "b1_embarazo" id= "b1_embarazo">
						<option value="0"selected>SI</option>
						<option value="1" >NO</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword" class="control-label col-xs-6">¿Padece Enfermedad Crónica?(*)</label>
					<div class="col-xs-6">
						<select class="form-control" name= "b1_cronica" id= "b1_cronica">
						<option value="0">SI</option>
						<option value="1" selected =" true">NO</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword" class="control-label col-xs-6">¿Tiene alguna Discapacidad(*)?</label>
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


						<div class="col-xs-6 col-xs-offset-6">
						<br>

						<div class="form-group">					
							<label class="control-label col-xs-3">Nombre</label>
							<div class="col-xs-9">
								<input type="text" class="form-control" id="b1_adicional_nombre"  name="b1_adicional_nombre">
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



				</div>
			</div>
	</div>	
</div>			
			
	
	
 	<div class="row form-horizontal " id="bloque_2">    <!-- bloque 2 servicios de Salud -->
		<div class="panel  panel-default">
			
				<div class="panel-heading orange">Utilización de servicios de Salud</div>
					<div class="panel-body">
				
						<div class="form-group">							
							<label class="control-label col-xs-6">En los últimos 6 meses, utilizaron el servicio de la Obra Social?</label>
							<div class="col-xs-6">
								<select class="form-control" id= "b2_uso" name= "b2_uso">
									<option value="0" checked>SI</option>
									<option value="1">NO</option>							
								</select>
							</div>
						</div>	

					

					<div class="form-group" id="b2_area">
						<label class="control-label col-xs-6" for="postalAddress">¿Para que lo utilizó?(*)</label>
						<div class="col-xs-6">
							<textarea rows="3" class="form-control" id="b2_motivo" name = "b2_area" ></textarea>
						</div>
					</div>


					<div class="form-group" id="b2_si">							
						<label class="control-label col-xs-6"></label>
						<div class="col-xs-6">
							<select class="form-control" name="b2_si">
							<option value="" disabled selected hidden>Seleccionar</option>
							<option value="1">Fue a un efector de OSEP</option>
							<option value="2">Fue a un prestador Privado</option>							
							<option value="3">Fue a un Hospital o centro de Salud Publico</option>							
							</select>
						</div>

					</div>


					<div class="form-group" id="b2_no">							
						<label class="control-label col-xs-6"></label>
						<div class="col-xs-6">
							<select class="form-control" name="b2_no">
							<option value="" disabled selected hidden>Seleccionar Motivo</option>
							<option value="1">Ningun miembro de la familia se enfermo o tuvo accidente</option>
							<option value="2">No lo consideró necesario asi que no hizo nada</option>							
							<option value="3">No lo consideró necesario y tomo remedio caseros</option>							
							<option value="4">Decidio tomar sus medicamentos habituales</option>							
							<option value="5">Prefirio consultar en la farmacia y comprar los medicamentos</option>							
							<option value="6">Quiso consultar pero no tuvo tiempo</option>							
							<option value="7">Quiso consultar pero no tuvo dinero</option>							
							<option value="8">Quiso consultar pero le cuesta mucho llegar al lugar de atencion</option>							
							<option value="9">Quiso consultar pero el horario de atencion no coincidia</option>							
							<option value="10">Pidio turno pero no lo obtuvo</option>							
							<option value="11">Consiguio turno pero todavia no le toca</option>													
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-xs-6" for="b2_otro">Otro motivo:</label>
						<div class="col-xs-6">
							<input type="text" class="form-control" id="b2_otro" name="b2_otro">
						</div>
					</div>
				</div>	
		</div>	
	</div>	 <!-- Cierre row -->





<!--BLOQUE ESPECIAL BOTON GENERADOR-->


	<div class="row form-horizontal" id="div_btn_bloques">     
		<div class="panel panel-default">
			<br>
			<div class="form-group">
				<div class="col-xs-12 text-center">
					<input type="button" class="btn btn-primary" value="Generar Bloques" id= "btn_bloques">
				</div>
			</div>
		</div>		 
	</div>	 <!-- Cierre row -->


	<div class="row form-horizontal" id="bloque_3_a">      <!-- Bloque 3 bebes -->
			<div class="panel panel-default">
			
				<div class="panel-heading orange">Bloque Salud de los Niños</div>
					<div class="panel-body">
				
						<blockquote>
							<p>Osep esta muy interesada en fortalecer sus servicios en la etapa  de la infancia</p>
						</blockquote>

						<div class="form-group">							
							<label class="control-label col-xs-6">El embarazo fue normal?</label>
							<div class="col-xs-6">
								<select class="form-control" name ="">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">Normal</option>
								<option value="2">De riesgo</option>							
								</select>
							</div>
						</div>	

						<div class="form-group">							
							<label class="control-label col-xs-6">Nació en termino</label>						
							<div class="col-xs-6">
								<select class="form-control" name ="">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">A termino</option>
								<option value="2">Prematuro</option>							
								</select>
							</div>
						</div>	
						
						<div class="form-group">
							<label class="control-label col-xs-6" for="b3a_peso">Recuerda cuanto peso al nacer?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" name= "b3a_peso" id="b3a_peso" placeholder="peso en gramos">
							</div>
						</div>

						<div class="form-group">							
							<label class="control-label col-xs-6">Camino cerca o alrededor de cumplir el Año?</label>
							<div class="col-xs-6" name ="">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>
						</div>

						<blockquote>
							<p>Controles de Salud</p>
						</blockquote>

						<div class="form-group">							
							<label class="control-label col-xs-6">Controles auditivos de recien nacido</label>
							<div class="col-xs-6" name ="">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>
						</div>

						<div class="form-group">							
							<label class="control-label col-xs-6">Realizo algun control de salud en los ultimos 3 Meses?</label>
							<div class="col-xs-6" name ="">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>
						</div>

						<div class="form-group">							
							<label class="control-label col-xs-6">En el ultimo control de Salud, el profecional anotó que es Normal?</label>
							<div class="col-xs-6" name ="">
								<select class="form-control">
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">Normal</option>
								<option value="2">Bajo</option>							
								<option value="3">Sobrepeso</option>							
								</select>
							</div>
						</div>

						<div class="form-group">							
							<label class="control-label col-xs-6">Tiene vacunas al Dia?</label>
							<div class="col-xs-6" name ="">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>
						</div>

						<div class="form-group">							
							<label class="control-label col-xs-6">Esta recibiendo la Leche de Osep?</label>
							<div class="col-xs-6" >
								<select class="form-control" name ="b3_a_leche" id ="b3_a_leche">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>
						</div>
						
						<div class="form-group" id="b3a_div_porque_no">
							<label class="control-label col-xs-6" for="b3a_peso">¡Por que no la recibe?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" name= "b3a_porque_no" id="b3a_porque_no" placeholder="">
							</div>
						</div>	
			
					</div>	
		</div>
</div>	 <!-- Cierre row -->


<div class="row form-horizontal" id="bloque_3_b">      <!-- Bloque 3 niños -->
			<div class="panel panel-default">
			
				<div class="panel-heading orange">Bloque Salud de los Niños</div>
					<div class="panel-body">
				
						<blockquote>
							<p>Ahora vamos a hablar sobre los chicos de 2 o mas años, Haciendo referencia a aspectos de salud y Actividades.</p>
						</blockquote>
						<div class="form-group">
							
							<label class="control-label col-xs-6">En los ultimos Dos años , ¿Ha realizado un control con un  oculista?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿ Con un odontólogo ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						
						<div class="form-group">
							<label class="control-label col-xs-6" for="b3b_escuela">¿Durante el año pasado / Este año. ¿Ha tenido algún tipo de dificultad en la escuela?</label>
							<div class="col-xs-4">
								<select class="form-control" id ="b3b_escuela" name ="b3b_escuela">
								<option value="1">SI</option>
								<option value="2" selected>NO</option>
								<option value="3">NO asiste Todavía</option>							
								</select>
							</div>

						</div>
						
						<div class="form-group" id="b3b_div_problem">
							<label class="control-label col-xs-6" for="b3b_problem">¿ Cual fue el problema ?</label>

							<div class="col-xs-6" >
								<input type="text" class="form-control" name = "b3b_problem" id="b3b_problem" >
							</div>
						</div>


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Realiza en forma regular alguna actividad (extraescolar). 
																	Es decir Hace deportes, alguna actividad artística u otra semanalmente?</label>
							<div class="col-xs-6">
								<select class="form-control" id= "b3b_extra">
									<option value="1">SI</option>
									<option value="2">NO</option>							
								</select>
							</div>

						</div>


						<div class="form-group" id= "b3b_div_activity">
							
							<label class="control-label col-xs-6"> Actividad</label>

							<div class="col-xs-6">
								<select class="form-control" id= "b3b_activity" >
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">Deportiva</option>
								<option value="2">Artistica</option>
								<option value="3">Educativa</option>
								<option value="4">Comunitaria</option>
								<option value="5">Religiosa</option>
								<option value="6">Otra</option>							
								<option value="7">No realiza</option>							
								</select>
							</div>

						</div>









						<div class="form-group" id= "b3b_div_donde">
							
							<label class="control-label col-xs-6">Donde ?</label>
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

			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->


<div class="row form-horizontal" id="bloque_4">      <!-- Bloque 4 mujeres -->
			<div class="panel panel-default">
			
				<div class="panel-heading orange">Bloque Salud  de las mujeres</div>
					<div class="panel-body">
				
						<div class="form-group">
							
							<label class="control-label col-xs-6">¿ Como diría que es su estado general de salud en este momento?</label>
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


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿ En los últimos  2 años concurrió a realizarse el Papanicolaou?</label>
							<div class="col-xs-3">
								<select class="form-control" id="b4_pap">
								<option value="0" >SI</option>
								<option value="1">NO</option>							
								</select>
							</div>
							<div class="col-xs-3" id="b4_div_pap_si" >
								<select class="form-control" id="b4_pap_si" name="b4_pap_si">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value= "1">En hospital o centro propio de OSEP</option>
									<option value= "2">En Consultorio, Clínica o Sanatorio donde reciben OSEP</option>
									<option value= "3">En hospital publico, dentro de salud , sala</option>
									<option value= "4">En Consultorio, Clínica o Sanatorio donde no reciben OSEP</option>
									<option value= "5">Otro</option>							
								</select>
							</div>
							<div class="col-xs-3" id="b4_div_pap_no" >
								<select class="form-control" id ="b4_pap_no" name ="b4_pap_no">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value= "1">No tuvo tiempo</option>							
									<option value= "2">No tuvo dinero</option>							
									<option value= "3">No consiguió turno o lugar donde la atiendan</option>							
									<option value= "4">No sabe donde hacerselo</option>							
									<option value= "5">Le da miedo, disgusto o vergüenza</option>							
									<option value= "6">Se olvido</option>							
									<option value= "7">Por dejadez</option>							
									<option value= "8">No lo necesita, esta sana (percepción personal)</option>							
									<option value= "9">No Conoce ese examen o no sabia que tenia que hacérselo</option>							
									<option value= "10">El médico no se lo indico</option>							
									<option value= "11">Por edad Avanzada</option>							
									<option value= "12">No le corresponde (Histerectomía, o alguna otra contraindicación Médica)</option>							
						
								</select>
							</div>



						</div>	


						
						<div class="form-group">
							<label class="control-label col-xs-6" for="b4_mamo">¿ En los últimos 2 años se ha realizado una mamografía ?</label>
							<div class="col-xs-3">
								<select class="form-control" id="b4_mamo" name="b4_mamo" >
								<option value="0">SI</option>
								<option value="1">NO</option>							
								</select>
							</div>
							<div class="col-xs-3" id="b4_div_mamo_si">
								<select class="form-control" id="b4_mamo_si" name="b4_mamo_si">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value= "1">En el mamografo de Osep</option>
									<option value= "2">En Consultorio, Clínica o Sanatorio donde reciben OSEP</option>
									<option value= "3">En hospital publico, dentro de salud , sala</option>
									<option value= "4">En Consultorio, Clínica o Sanatorio donde no reciben OSEP</option>
									<option value= "5">Otro</option>

								</select>
							</div>
							<div class="col-xs-3" id="b4_div_mamo_no" >
								<select class="form-control" id="b4_mamo_no" name="b4_mamo_no">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value= "1">No tuvo tiempo</option>							
									<option value= "2">No tuvo dinero</option>							
									<option value= "3">No consiguió turno o lugar donde la atiendan</option>							
									<option value= "4">No sabe donde hacerselo</option>							
									<option value= "5">Le da miedo, disgusto o vergüenza</option>							
									<option value= "6">Se olvido</option>							
									<option value= "7">Por dejadez</option>							
									<option value= "8">No lo necesita, esta sana (percepción personal)</option>							
									<option value= "9">No Conoce ese examen o no sabia que tenia que hacérselo</option>										
									<option value= "10">El profesional tratante no se lo indico</option>									
									<option value= "11">Por edad Avanzada</option>							
									<option value= "12">No le corresponde (Histerectomía, o alguna otra contraindicación Médica)</option>							
														
								</select>
							</div>							
						</div>


					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->


<div class="row form-horizontal" id="bloque_5">      <!-- Bloque 5 Adultos mayores -->
			<div class="panel panel-default">
			
				<div class="panel-heading orange">Bloque Adultos mayores</div>
					<div class="panel-body">


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿ Necesita usar en forma permanente silla de ruedas , bastón , andador, o algún otro instrumento para caminar ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿ Usa audífonos o tiene dificultad para escuchar conversaciones o la televisión a un volumen normal ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1" >SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group">
							
							<label class="control-label col-xs-6">¿ Ha sufrido alguna caída en el ultimo mes ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group">
							
							<label class="control-label col-xs-6">¿ Necesita o ha tenido que realizar modificaciones e su casa para no caerse o realizar sus tareas cotidianas ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿ Experimenta en forma cotidiana problemas de olvidos o confusiones ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	
	

						<div class="form-group">
							
							<label class="control-label col-xs-6">Normalmente, ¿ Necesita ayuda para realizar tramites, como cobrar la jubilación, pedir turno al medico por ejemplo?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Si tiene una  dificultad de salud  o una urgencia, ¿Cuenta con alguien que lo pueda ayudar a resolverla?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿ Concurre habitualmente a un centro de jubilados, Iglesia, Club u otro ámbito de tipo social?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_activity" name="b5_activity">
								<option value="1">SI</option>
								<option value="2" selected>NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group" id="b5_div_cual">
							<label class="control-label col-xs-6" for="b5_cual"> Cual?</label>

							<div class="col-xs-6" >
								<input type="text" class="form-control" name = "b5_cual" id="b5_cual" placeholder="Cual fue el Problema?">
							</div>
						</div>

						<!--  aqui va el cual-->



						<div class="form-group">
							
							<label class="control-label col-xs-6">Tiene alguna actividad o Hobbie que haga frecuentemente para ocupar el tiempo libre ?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_hobby" name="b5_hobby">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	





						<div class="form-group">
							
							<label class="control-label col-xs-6">Respecto a la atención Médica. ¿Tiene un médico de cabecera, es decir un profesional que lo conozca y que lo atienda habitualmente?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_medico" name="b5_medico">
								<option value="1" selected>SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group" id="b5_div_esde_osep">
							
							<label class="control-label col-xs-6">¿Ese médico es de OSEP o recibe OSEP ?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_esde_osep" name="b5_esde_osep">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group" id="b5_div_complejo">
							
							<label class="control-label col-xs-6">¿Qué tan complicado le resulta ver a un profesional cuando tiene que atenderse por algún motivo?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_complejo" name="b5_complejo">
									<option value="" disabled selected hidden>Seleccionar</option>
									<option >Simple</option>
									<option >Complicado</option>
									<option >Muy Complicado</option>
									<option >Viene a domicilio</option>

								</select>
							</div>

						</div>	
			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->


<div class="row form-horizontal" id="bloque_6">      <!-- Bloque 6 discapacidad -->
			<div class="panel panel-default">
			
				<div class="panel-heading">Bloque Afiliados con discapacidad</div>
					<div class="panel-body">


						<div class="form-group" id = "b6_div_tipo">
							
							<label class="control-label col-xs-6">¿ Cual es su Discapacidad?</label>
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
							
							<label class="control-label col-xs-6">De los profesionales de la salud que mencionó, ¿ Alguno es profesional de cabecera ?</label>
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
								<label><input type="checkbox" value="4" >Otro profesional de la salud</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="5" >Ninguno</label>
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

			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->


<div class="row form-horizontal" id="bloque_7">      <!-- Bloque 7 Embarazadas -->
			<div class="panel panel-default">
			
				<div class="panel-heading">Bloque Salud de la embarazada.</div>
					<div class="panel-body">
				
						<blockquote>
							<p>Salud de la embarazada.</p>
						</blockquote>
						<div class="form-group">
							
							<label class="control-label col-xs-6">¿ De cuantos meses esta embarazada ?</label>
							<div class="col-xs-6">
								<select class="form-control">
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
							
							<label class="control-label col-xs-6">¿ Concurrió al control el mes pasado ?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b7_uso", name="b7_uso">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						
						<div class="form-group" id="b7_div_complejo">
							<label class="control-label col-xs-6" for="b7_complejo">¿ Que tan complicado le resulto en esa oportunidad todo el proceso que implicó hacerse el control , 
																					teniendo en cuenta los pasos desde conseguir turno hasta que la atiendan ?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b7_complejo" name ="b7_complejo">
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
							<label class="control-label col-xs-6" for="">¿ El embarazo lo esta llevando un profesional en especial o se atiende con distintos profesionales ?</label>
							<div class="col-xs-6">
								<select class="form-control" name ="b7_profesional">
								<option >Un profesional</option>
								<option >Distintos profesionales en un mismo lugar de atencion</option>							
								<option >Distintos lugares de atencion</option>							
								</select>
							</div>
						
						</div>


						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">¿ El o los profesionales que la atienden, han detectado algún problema en el embarazo ?</label>
							
							<div class="col-xs-3">
								<select class="form-control" name ="b7_problem" id ="b7_problem">
								<option value="1">Si</option>
								<option value="2" selected>NO</option>							
								</select>
							</div>
							<div class="col-xs-3">
								<input type="text" class="form-control" id="b7_cual" placeholder=" Cual?">
							</div>

						</div>



						<div class="form-group">
							<label class="control-label col-xs-6" for="">¿ Cuenta con apoyo familiar, de su pareja o de alguna otra persona que la acompañe 
																				y la ayude mientras transcurre el embarazo ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">Si</option>
								<option value="2">NO</option>							
								</select>
							</div>
						
						</div>


			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->





        <br>
        <div class="form-group" id="btn_encuesta">
            <div class="col-xs-6">

                <input type="reset" class="btn btn-default" value="Nuevo integrante" id="btn_nuevo">
            </div>

            <div class="col-xs-6 text-right">
                <input type="submit" class="btn btn-primary" value="Continuar" id="btn_continuar">

            </div>		
        </div>



</form>
  

 
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

