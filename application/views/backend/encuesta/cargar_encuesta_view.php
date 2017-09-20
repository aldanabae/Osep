
<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">

<input type="hidden" name="localPath"  id="localPath" value="<?php echo base_url(); ?>">
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


<form id="add_encuesta" action="<?php echo(base_url('encuesta/cargarEncuesta/cargabloques_final'));  ?>" method="post"  onsubmit = "return submitEncuesta();">


<!--<div class="container">   contenedor principal -->
<input type="hidden" name="embarazo"  id="embarazo" value="<?php echo @$embarazo; ?>">
<input type="hidden" name="integrantes"  id="integrantes" value="<?php echo @$cantidad; ?>">
<input type="hidden" name="hdnid_relevamiento"  id="hdnid_relevamiento" value="<?php echo @$id_relevamiento; ?>">
<input type="hidden" name="hdnid_numRel"  id="hdnid_numRel" value="<?php echo @$id_numRel; ?>">
<input type="hidden" name="hdnCantidad_encuestados"  id="hdnCantidad_encuestados" value="<?php echo @$cantidad_encuestados; ?>">
<input type="hidden" name="hdnrespondiente"  id="hdnrespondiente" value="<?php echo @$respondiente; ?>">



	<div class="row form-horizontal" id="bloque_1">   <!-- bloque 1 -->
		<div class="panel panel-default">
		
			<div class="panel-heading orange"> 
				
				<div class="col-xs-10">

					<p>Familia Conviviente</p>				
				</div>
				
				<p class="text-right btn-sm"><a href="<?php echo base_url('encuesta/cargarEncuesta/'.$_POST['nom_facilitador']);?>" ><i class="1 ace-icon fa fa-arrow-left"></i> Atras</a></p>

			</div>


			<div class="col-md-4 col-md-offset-8">

					
					<ul class="pagination" id="mapEncuestados" >

						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>

					</ul>

			</div>
				<div class="panel-body">




								
						

				<blockquote>
					<p>Datos Personales</p>
				</blockquote>
				
				<div class="form-group" id="id_responde">
					 <label for="inputName" class="control-label col-xs-6"></label>
					 <div class="col-xs-6">
							
							<label class="block" >
									<input name="responde" class="ace input-lg" type="checkbox" id="responde">
									<span class="lbl bigger-120">  Responde la encuesta</span>
							</label>
											 
					</div>
				</div>

			<div class="form-group ">
				 <label for="inputName" id ="lblTitular" class="control-label col-xs-6">      </label>
				 <div class="col-xs-6  ">
					 <input type="text" class="form-control"  name ="b1_nombre"  id ="b1_nombre"  required>
				 </div>
			</div>

				<div class="form-group  ">
					 <label for="inputEmail" class="control-label col-xs-6">Edad (*) </label>
					 <div class="col-xs-6">
						 <input type="number" name="b1_edad"  class="form-control" id="b1_edad" data-limit= '120' required>
						 
					 </div>
					 
				</div>

				<div class="form-group">
					<label for="inputEmail" class="control-label col-xs-6" id= "b1_txt_dni">Dni (*) </label>
					<div class="col-xs-4">
						<input type="number" name="b1_dni"  class="form-control" data-limit= '99999999' id="b1_dni" required>
					</div>
					<div class="col-xs-2">	</div>
				</div>

				<div class="form-group">
					 <label for="inputPassword" class="control-label col-xs-6">Sexo (*) </label>
						<div class="col-xs-2">
							<label class="radio-inline">
								<input type="radio" name="b1_genero" value="M" checked = "true" required> Masculino
							</label>
						</div>
						<div class="col-xs-2">
							<label class="radio-inline">
								<input type="radio" name="b1_genero" value="F"> Femenino
							</label>
						</div>
				</div>
			 
				<div class="form-group ">
					<label class="control-label col-xs-6">Vínculo con el titular (*)</label>
					<div class="col-xs-6">
						<select class="form-control" name= "22" id= "b1_parent" required>

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
						<select class="form-control" name= "108" id= "b1_osep" required>
							<option value="1" checked>SI</option>
							<option value="2">NO</option>
						</select>
					</div>
				</div>			

				<div class="form-group " id= "b1_div_afiliado">
					<label for="inputPassword" class="control-label col-xs-6">Número de Afiliado</label>
						<div class="col-xs-2">
							<input type="number" name="b1_afiliado"  class="form-control"  data-limit= '99999999'  id="b1_afiliado" required>
						</div>

						<div class="col-xs-1 text-center">
							<input type="number" name="b1_barra"  class="form-control" id="b1_barra" data-limit='9999'  required>
						</div>

						<div class="col-xs-3" id="b1_otro_numero_afiliado">
							<!-- Button para anular la logica de numeroi de afiliado -->
							<label class="block" >
									<input name="check_afiliado" class="ace input-lg" type="checkbox" id="check_afiliado">
									<span class="lbl bigger-120"> Usar otro número de afiliado</span>
							</label>
						</div>

				</div>

				<div class="form-group">
					<label for="inputEmail" class="control-label col-xs-6" id= "b1_label_cober" >¿Tiene otra cobertura de salud?</label>
					<div class="col-xs-6">
						<select class="form-control" name= "24" id= "b1_cober" required>

						<option value="14">No, sólo OSEP</option><option value="15">Otra obra social</option><option value="16">Prepaga</option><option value="17">Otra cobertura</option>

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
							<select class="form-control" name= "25" id= "b1_estudio" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2" >NO</option>
							</select>
						</div>
					</div>	

					<div class="form-group" id ="b1_div_nivel">
						<label for="inputEmail" class="control-label col-xs-6">¿Cuál es su nivel educativo? (*) </label>
						<div class="col-xs-6">
							<select class="form-control" name= "26" id= "b1_nivel" required>
							<option value="" disabled selected hidden>Seleccionar</option>
							<option value="18">Inicial</option>
							<option value="19">Primario incompleto</option>
							<option value="20">Primario completo</option>
							<option value="21">Secundario incompleto</option>
							<option value="22">Secundario completo</option>
							<option value="23">Terciario incompleto</option>
							<option value="24">Terciario completo</option>
							<option value="25">Universitario incompleto</option>
							<option value="26">Universitario completo</option>
							</select>
						</div>
					</div>
				</div>	<hr>		<!--  cierre -->



		<div class="row form-horizontal" id="bloque_9">      <!-- Bloque 9 ocupacional Adaptado -->
				<blockquote>
					<p>Datos Ocupacionales</p>
				</blockquote>
					

					<div class="form-group">
						<label for="inputEmail" class="control-label col-xs-6">¿A qué se dedica actualmente? (*) </label>
						<div class="col-xs-6">
							<select class="form-control" name= "27" id= "b1_ocupacion" required>
								<!--completo dinamicamente en base a si es titular-->
							</select>
						</div>
					</div>

					<div id="bloque_9_int">
						


						<div class="form-group">
							<label class="control-label col-xs-6">¿Contribuye con la economía familiar?  (*) </label>
							<div class="col-xs-6">
								<select class="form-control" id="b9_contribulle" name="28" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="30">Principal sostén</option>
								<option value="31">Aportante</option>							
								<option value="32">No contribuye</option>							
								</select>
							</div>
						</div>


						<div class="form-group">	
							<label class="control-label col-xs-6">¿Cuántas horas trabajó la semana pasada? (*) </label>
							<div class="col-xs-6">
								<input type="number" class="form-control" id="b9_horas"  name="29" data-limit= '168' placeholder=" hs" required>
							</div>
						</div>	

						<div class="form-group">		
							<label class="control-label col-xs-6">¿En qué lugar trabaja?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_lugar"  name="30" placeholder="Repartición" required>
							</div>
						</div>	

						<div class="form-group">	
							<label class="control-label col-xs-6">Detalle la tarea realizada</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_ocupacion"  name="31"  placeholder="Ocupación">
							</div>
						</div>	

						<div class="form-group">	
							<label class="control-label col-xs-6">Observaciones</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_obs"  name="32" >
							</div>
						</div>	
					</div>		<!--cierre bloque interno de bloque 9-->	


					<div id="bloque_9_int_juv">

						<div class="form-group">							
							<label class="control-label col-xs-6">¿Contribuye con la economía familiar?  (*) </label>
							<div class="col-xs-6">
								<select class="form-control" id="b9_contribulle" name="28" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="30">Principal sostén</option>
								<option value="31">Aportante</option>							
								<option value="32">No contribuye</option>							
								</select>
							</div>
						</div>	

						<div class="form-group">
							<label class="control-label col-xs-6">Concretamente, ¿cuál es la actividad que realizaba usted antes de 
								jubilarse o la persona que originó la pensión?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_ocupacion"  name="110" >
							</div>
						</div>	

						<div class="form-group">					
							<label class="control-label col-xs-6">Observaciones</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_obs"  name="32">
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
						<select class="form-control" name= "107" id= "b1_embarazo" required>
						<option value="1">SI</option>
						<option value="2" selected>NO</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword" class="control-label col-xs-6">¿Padece alguna enfermedad crónica? (*) </label>
					<div class="col-xs-6">
						<select class="form-control" name= "33" id= "b1_cronica" required>
						<option value="2" selected ="true">NO</option>
						<option value="1">SI</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword" class="control-label col-xs-6">¿Tiene alguna discapacidad? (*) </label>
					<div class="col-xs-6">
						<select class="form-control" name= "34" id= "b1_disc" required>
						<option value="2">NO</option>
						<option value="1">SI</option>
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
							<select class="form-control" name= "35" id= "b1_extra" required>
								<option value="2" selected ="true">NO</option>
								<option value="1">SI</option>
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

							<!-- campohidden de almacenamiento -->
							<input type="hidden" name="hdnAfiliadoAcargo"  id="hdnAfiliadoAcargo" value="">
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
								Añadir Afiliado a Cargo
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
								<select class="form-control" id="b1_consulta" name="38" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>	
									<option value="33">Sin datos</option>							
								</select>
							</div>

						</div>	
						
						<div class="form-group" id="b1_div_consulta_si">
							
							<label class="control-label col-xs-6">¿Dónde concurrió a atenderse la última vez? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b1_atencion_si" name="39" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="34">Fue a un efector de OSEP</option>
								<option value="35">Fue a un prestador privado</option>
								<option value="36">Fue a un hospital o centro de salud público</option>							
								</select>
							</div>

						</div>	

						
						<div id="b1_div_consulta_no">
						
							<div class="form-group" >
								
								<label class="control-label col-xs-6">¿Por qué? </label>
								<div class="col-xs-6">
									<select class="form-control" id="b1_atencion_no" name="40" required>
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value= "37">No se enfermó ni tuvo un accidente</option>
										<option value= "38">Quiso consultar pero no tuvo dinero</option>
										<option value= "39">Quiso consultar pero le cuesta llegar al lugar de atención</option>
										<option value= "40">Pidió turno pero no lo obtuvo</option>
										<option value= "41">Consultó pero NO por OSEP</option>							
										<option value= "42">Otro motivo</option>						
									</select>
								</div>

							</div>	

							<div class="form-group" id="b1_div_cual">
								<label class="control-label col-xs-6" for="b0_cual"> ¿Cual?</label>

								<div class="col-xs-6" >
									<input type="text" class="form-control" name = "81" id="b1_cual" required>
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
								<select class="form-control" name ="41" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="43">Normal</option>
								<option value="44">De riesgo</option>							
								</select>
							</div>
						</div>	

						<div class="form-group">							
							<label class="control-label col-xs-6">¿Nació a término o fue prematuro?</label>						
							<div class="col-xs-6">
								<select class="form-control" name ="42" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="45">A termino</option>
								<option value="46">Prematuro</option>							
								</select>
							</div>
						</div>	
						
						<div class="form-group">
							<label class="control-label col-xs-6" for="b3a_peso">¿Recuerda cuánto pesó al nacer?</label>
							<div class="col-xs-6">
								<input type="number" class="form-control" name= "43" id="b3a_peso" placeholder="Peso al nacer en gramos" data-limit= '100000' required>
							</div>
						</div>

						<div class="form-group">							
							<label class="control-label col-xs-6">¿Caminó cerca o alrededor de cumplir el año?</label>
							<div class="col-xs-6" name ="">
								<select class="form-control" name ="44" required>
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
								<select class="form-control" name ="45" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>							
								</select>
							</div>
						</div>


						<div class="form-group">							
							<label class="control-label col-xs-6">En el último control de salud, ¿el profesional anotó que su peso es normal?</label>
							<div class="col-xs-6" name ="">
								<select class="form-control" name ="46" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="47">Bajo peso</option>
									<option value="48">Normal</option>							
									<option value="49">Sobrepeso</option>							
								</select>
							</div>
						</div>

						<div class="form-group">							
							<label class="control-label col-xs-6">¿Tiene las vacunas al día?</label>
							<div class="col-xs-6" name ="">
								<select class="form-control" name ="47" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>							
								</select>
							</div>
						</div>

						<div class="form-group">							
							<label class="control-label col-xs-6">¿Está recibiendo la leche de OSEP?</label>
							<div class="col-xs-6" >
								<select class="form-control" name ="48" id ="b3_a_leche" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>							
								</select>
							</div>
						</div>
						
						<div class="form-group" id="b3a_div_porque_no">
							<label class="control-label col-xs-6" for="b3_a_peso">¿Por que no la recibe?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" name= "111" id="b3_a_porque_no" placeholder="" required>
							</div>
						</div>	



						<!--  preguntas de uso de servicio-->



						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Recuerda si realizó al menos una consulta médica por OSEP en los últimos 6 meses? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b3a_consulta" name="38" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>
									<option value="33">Sin datos</option>							
								</select>
							</div>

						</div>	
						
						<div class="form-group" id="b3a_div_consulta_si">
							
							<label class="control-label col-xs-6">¿Dónde concurrió a atenderse la última vez? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b3a_atencion_si" name="39" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="34">Fue a un efector de OSEP</option>
								<option value="35">Fue a un prestador privado</option>
								<option value="36">Fue a un hospital o centro de salud público</option>							
								</select>
							</div>

						</div>	

						
						<div id="b3a_div_consulta_no">
						
							<div class="form-group" >
								
								<label class="control-label col-xs-6">¿Por qué? </label>
								<div class="col-xs-6">
									<select class="form-control" id="b3a_atencion_no" name="40" required>
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value= "37">No se enfermó ni tuvo un accidente</option>
										<option value= "38">Quiso consultar pero no tuvo dinero</option>
										<option value= "39">Quiso consultar pero le cuesta llegar al lugar de atención</option>
										<option value= "40">Pidió turno pero no lo obtuvo</option>
										<option value= "41">Consultó pero NO por OSEP</option>							
										<option value= "42">Otro motivo</option>						
									</select>
								</div>

							</div>	

							<div class="form-group" id="b3a_div_cual">
								<label class="control-label col-xs-6" for="b3a_cual"> ¿Cual?</label>

								<div class="col-xs-6" >
									<input type="text" class="form-control" name = "81" id="b3a_cual" required>
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
									<select class="form-control" name="49">
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value="1">SI</option>
										<option value="2">NO</option>							
									</select>
								</div>

							</div>	


							<div class="form-group" id="b3_oculista">
								
								<label class="control-label col-xs-6">¿Realizó algún control con un oculista para verificar su salud visual?</label>
								<div class="col-xs-6">
									<select class="form-control" name="50" required>
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value="1">SI</option>
										<option value="2">NO</option>							
									</select>
								</div>

							</div>	



						
							<div class="form-group">
								<label class="control-label col-xs-6" for="b3b_escuela">Durante el año pasado/este año, ¿ha tenido algún tipo de dificultad en la escuela?</label>
								<div class="col-xs-4">
									<select class="form-control" id ="b3b_escuela" name ="51" required>
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value="1">SI</option>
										<option value="2">NO</option>
										<option value="50">NO asiste Todavía</option>							
									</select>
								</div>

							</div>
						
						<div class="form-group" id="b3b_div_problem">
							<label class="control-label col-xs-6" for="b3b_problem">¿Cual fue el problema?</label>

							<div class="col-xs-6" >
								<input type="text" class="form-control" name = "112" id="b3b_problem" required>
							</div>
						</div>


							<div class="form-group">
								
								<label class="control-label col-xs-6">¿Realiza en forma regular alguna actividad extraescolar, 
																		es decir, hace deportes, alguna actividad artística u otra actividad todas las semanas?</label>
								<div class="col-xs-6">
									<select class="form-control" id= "b3b_activity" name="52" required>
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value="51">Deportiva</option>
										<option value="52">Artística</option>
										<option value="53">Educativa</option>
										<option value="54">Comunitaria</option>
										<option value="55">Religiosa</option>
										<option value="56">Otra</option>							
										<option value="57">No realiza</option>							
									</select>
								</div>

							</div>



							<div class="form-group" id= "b3b_div_donde">
								
								<label class="control-label col-xs-6">¿Dónde?</label>
								<div class="col-xs-6">
									<select class="form-control" name= "113" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="140">Club</option>
									<option value="141">Instituto</option>							
									<option value="142">CIC</option>							
									<option value="143">Biblioteca</option>							
									<option value="144">Unión Vecinal</option>							
									<option value="67">Otro</option>							
									</select>
								</div>

							</div>



<!--   preguntas de uso de servicio-->



					<div class="form-group">
							
							<label class="control-label col-xs-6">¿Recuerda si realizó al menos una consulta médica por OSEP  en el último año? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b3b_consulta" name="38" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>
									<option value="33">Sin datos</option>							
								</select>
							</div>

						</div>	
						
						<div class="form-group" id="b3b_div_consulta_si">
							
							<label class="control-label col-xs-6">¿Dónde concurrió a atenderse la última vez? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b3b_atencion_si" name="39" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="34">Fue a un efector de OSEP</option>
								<option value="35">Fue a un prestador privado</option>
								<option value="36">Fue a un hospital o centro de salud público</option>							
								</select>
							</div>

						</div>	

						
						<div id="b3b_div_consulta_no">
						
							<div class="form-group" >
								
								<label class="control-label col-xs-6">¿Por qué? </label>
								<div class="col-xs-6">
									<select class="form-control" id="b3b_atencion_no" name="40" required>
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value= "37">No se enfermó ni tuvo un accidente</option>
										<option value= "38">Quiso consultar pero no tuvo dinero</option>
										<option value= "39">Quiso consultar pero le cuesta llegar al lugar de atención</option>
										<option value= "40">Pidió turno pero no lo obtuvo</option>
										<option value= "41">Consultó pero NO por OSEP</option>							
										<option value= "42">Otro motivo</option>						
									</select>
								</div>

							</div>	

							<div class="form-group" id="b3b_div_cual">
								<label class="control-label col-xs-6" for="b3b_cual"> ¿Cual?</label>

								<div class="col-xs-6" >
									<input type="text" class="form-control" name = "81" id="b3b_cual" required>
								</div>
							</div>

						</div>




			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->





<div class="row form-horizontal" id="bloque_4">      <!-- Bloque 4 mujeres -->
			<div class="panel panel-default">
			
				<div class="panel-heading orange">Salud de las mujeres</div>
					<div class="panel-body">
						<!--diferenciar las preguntas por edades-->
					
						<div id="b4_div_consulta">
							<div class="form-group" >
														
									<label class="control-label col-xs-6"> ¿Recuerda si realizó al menos una consulta médica por OSEP en el último año? </label>

									<div class="col-xs-6">
										<select class="form-control" id= "b4_consulta" name="38" required>
											<option value="" disabled selected hidden>Seleccionar</option>
											<option value="1">SI</option>
											<option value="2">NO</option>
											<option value="33">Sin datos</option>						
										</select>
									</div>

							</div>	


							<div id="b4_div_consulta_si" >
									<div class="form-group">					
										<label class="control-label col-xs-6"> ¿Dónde concurrió a atenderse la última vez? </label>

										<div class="col-xs-6">
											<select class="form-control" id="b4_consulta_si" name="39" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option value="34">Fue a un efector de OSEP</option>
												<option value="35">Fue a un prestador privado</option>
												<option value="36">Fue a un hospital o centro de salud público</option>							
											</select>
										</div>
									</div>

								<hr>
							</div>	


							<div  id="b4_div_consulta_no" >
									<div class="form-group">					
										<label class="control-label col-xs-6"> ¿Por qué? </label>

										<div class="col-xs-6">
											<select class="form-control" id="b4_consulta_no" name="40" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option value= "37">No se enfermó ni tuvo un accidente</option>
												<option value= "38">Quiso consultar pero no tuvo dinero</option>
												<option value= "39">Quiso consultar pero le cuesta llegar al lugar de atención</option>
												<option value= "40">Pidió turno pero no lo obtuvo</option>
												<option value= "41">Consultó pero NO por OSEP</option>							
												<option value= "42">Otro motivo</option>					
											</select>
										</div>
									</div>



									<div class="form-group" id="b4_div_otro">					
										<label class="control-label col-xs-6"> ¿Cual? </label>

										<div class="col-xs-6">
											<input type="text" class="form-control" name = "81" id="b4_otro" required>

										</div>
									</div>

								<hr>
							</div>

				


						</div> <!--cierro div consulta-->
					<div id="b4_salud">
							<div class="form-group" id="b4_estado_general">
								
								<label class="control-label col-xs-6">¿Como diría que es su estado general de salud en este momento?</label>
								<div class="col-xs-6">
									<select class="form-control" name = "54" required>
									<option value="" disabled selected hidden>Seleccionar</option>
										<option value="58">Muy bueno</option>
										<option value="59">Bueno</option>							
										<option value="60">Regular</option>							
										<option value="61">Malo</option>
										<option value="33">Sin datos</option>									
									</select>
								</div>

							</div>	


					</div> <!--cierro diferenciar preguntas-->



						<div class="form-group" id="b4_div_pap">
							
							<label class="control-label col-xs-6">¿En los últimos  2 años concurrió a realizarse el papanicolau?</label>
							<div class="col-xs-2">
								<select class="form-control" id="b4_pap" name = "55" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>
									<option value="62">No sabe/no contesta</option>							
								</select>
							</div>
							<div class="col-xs-4" id="b4_div_pap_si" >
				
							
								<label class="control-label col-xs-5">¿Dónde concurrió?</label>
								<div class="col-xs-7">
									<select class="form-control" id="b4_pap_si" name="56" required>
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value= "63">En hospital o centro propio de OSEP</option>
										<option value= "64">En consultorio, clínica o sanatorio dónde reciben OSEP</option>
										<option value= "65">En hospital público, centro de salud , sala</option>
										<option value= "66">En consultorio, clínica o sanatorio dónde no reciben OSEP</option>
										<option value= "67">Otro</option>							
									</select>
								</div>
							

							</div>
							<div class="col-xs-4" id="b4_div_pap_no" >

								<label class="control-label col-xs-5">¿Por qué?</label>
								<div class="col-xs-7">
									<select class="form-control" id ="b4_pap_no" name ="57" required>
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value= "68">No tuvo tiempo</option>							
										<option value= "69">No tuvo dinero</option>							
										<option value= "70">No consiguió turno o lugar dónde la atiendan</option>							
										<option value= "71">No sabe dónde  hacérselo</option>							
										<option value= "72">Le da miedo, disgusto o vergüenza</option>							
										<option value= "73">Se olvidó</option>							
										<option value= "74">Por dejadez</option>							
										<option value= "75">No lo necesita, está sana (percepción personal)</option>							
										<option value= "76">No conoce el examen o no sabía que tenía que hacérselo</option>							
										<option value= "77">El médico no se lo indicó</option>							
										<option value= "78">Por edad avanzada</option>							
										<option value= "79">No le corresponde (histerectomía, o alguna otra contraindicación médica)</option>
										<option value= "62">No sabe/no contesta</option>
							
									</select>
								</div>
							</div>


						</div>	

						
						<div class="form-group" id="b4_div_mamo">
							<label class="control-label col-xs-6" for="b4_mamo">¿En los últimos 2 años se ha realizado una mamografía?</label>
							<div class="col-xs-2">
								<select class="form-control" id="b4_mamo" name="58" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>
									<option value="62">No sabe/no contesta</option>										
						
								</select>
							</div>
							<div class="col-xs-4" id="b4_div_mamo_si">
							
								<label class="control-label col-xs-5">¿Dónde concurrió?</label>
								<div class="col-xs-7">
									<select class="form-control" id="b4_mamo_si" name="59" required>
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value= "80">En el mamografo de OSEP</option>
										<option value= "64">En consultorio, clínica o sanatorio dónde reciben OSEP</option>
										<option value= "65">En hospital público, centro de salud , sala</option>
										<option value= "66">En consultorio, clínica o sanatorio dónde no reciben OSEP</option>
										<option value= "67">Otro</option>
									</select>
								</div>
							
							</div>
							<div class="col-xs-4" id="b4_div_mamo_no" >
							
								<label class="control-label col-xs-5">¿Por qué?</label>
								<div class="col-xs-7">
								<select class="form-control" id="b4_mamo_no" name="57" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value= "68">No tuvo tiempo</option>							
									<option value= "69">No tuvo dinero</option>							
									<option value= "70">No consiguió turno o lugar dónde la atiendan</option>							
									<option value= "71">No sabe dónde hacérselo</option>							
									<option value= "72">Le da miedo, disgusto o vergüenza</option>							
									<option value= "73">Se olvidó</option>							
									<option value= "74">Por dejadez</option>							
									<option value= "75">No lo necesita, está sana (percepción personal)</option>							
									<option value= "76">No conoce el examen o no sabía que tenía que hacérselo</option>										
									<option value= "77">El médico no se lo indicó</option>									
									<option value= "78">Por edad avanzada</option>							
									<option value= "79">No le corresponde (histerectomía, o alguna otra contraindicación médica)</option>							
									<option value= "62">No sabe/no contesta</option>								
								</select>
								</div>				
							

							</div>							
						</div>


					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->


<div class="row form-horizontal" id="bloque_5">      <!-- Bloque 5 Adultos mayores -->
			<div class="panel panel-default">
			
				<div class="panel-heading orange">Salud de adulto mayor</div>
					<div class="panel-body">

						
						<div class="form-group" id = "">
							
							<label class="control-label col-xs-6">¿Necesita usar en forma permanente uno o más de estos elementos ? </label>
							<div class="col-xs-6">

								<div class="checkbox">
								<label><input type="checkbox" name="61[]" value="81">silla de ruedas </label>
								</div>
								<div class="checkbox">
								<label><input type="checkbox"  name="61[]" value="82">bastón</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox"  name="61[]" value="83" >andador</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox"  name="61[]" value="84" >audífono</label>
								</div>								

							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Ha experimentado en el último mes...? </label>
							<div class="col-xs-6">
								<div class="checkbox">
								<label><input type="checkbox" name="62[]" value="85">caídas</label>
								</div>
								<div class="checkbox">
								<label><input type="checkbox"  name="62[]" value="86">olvidos o confusiones recurrentes</label>
								</div>	
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Necesita o ha tenido que realizar modificaciones e su casa para no caerse o realizar sus tareas cotidianas ?</label>
							<div class="col-xs-6">
								<select class="form-control" name="63" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

	

						<div class="form-group">
							
							<label class="control-label col-xs-6">Normalmente, ¿Necesita ayuda para realizar trámites, como cobrar la jubilación, pedir turno al medico por ejemplo ?</label>
							<div class="col-xs-6">
								<select class="form-control" name="64" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Si tiene una  dificultad de salud  o una urgencia, ¿cuenta con alguien que lo pueda ayudar a resolverla ?</label>
							<div class="col-xs-6">
								<select class="form-control" name="65" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Participa habitualmente de algún centro de jubilados, iglesia, taller de arte u otro espacio de tipo social?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_activity" name="66" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2" >NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Tiene alguna actividad por ejemplo leer, salir a caminar, tejer u otro hobbie que le guste hacer en su tiempo libre?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_hobby" name="67" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	





						<div class="form-group">
							
							<label class="control-label col-xs-6">Respecto a la atención médica, ¿tiene un médico de cabecera, es decir un profesional que lo conozca y que lo atienda habitualmente?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_medico" name="68" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group" id="b5_div_esde_osep">
							
							<label class="control-label col-xs-6">¿Ese médico es de OSEP o recibe OSEP ?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_esde_osep" name="69" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	
						
						
						
						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Recuerda si realizó al menos una consulta médica por OSEP en los últimos 6 meses? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_consulta" name="38" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>
									<option value="33">Sin datos</option>							
								</select>
							</div>

						</div>	
						
						<div class="form-group" id="b5_div_consulta_si">
							
							<label class="control-label col-xs-6">¿Dónde concurrió a atenderse la última vez? </label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_atencion_si" name="39" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="34">Fue a un efector de OSEP</option>
									<option value="35">Fue a un prestador privado</option>
									<option value="36">Fue a un hospital o centro de salud público</option>							
								</select>
							</div>

						</div>	

						
						<div id="b5_div_consulta_no">
						
							<div class="form-group" >
								
								<label class="control-label col-xs-6">¿Por qué? </label>
								<div class="col-xs-6">
									<select class="form-control" id="b5_atencion_no" name="40" required>
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value= "37">No se enfermó ni tuvo un accidente</option>
										<option value= "38">Quiso consultar pero no tuvo dinero</option>
										<option value= "39">Quiso consultar pero le cuesta llegar al lugar de atención</option>
										<option value= "40">Pidió turno pero no lo obtuvo</option>
										<option value= "41">Consultó pero NO por OSEP</option>							
										<option value= "42">Otro motivo</option>						
									</select>
								</div>

							</div>	

							<div class="form-group" id="b5_div_cual">
								<label class="control-label col-xs-6" for="b5_cual"> ¿Cual?</label>

								<div class="col-xs-6" >
									<input type="text" class="form-control" name = "81" id="b5_cual" required>
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
								<label><input type="checkbox" name="70[]" value="87">Motora</label>
								</div>
								<div class="checkbox">
								<label><input type="checkbox"  name="70[]" value="88">Visual</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox"  name="70[]" value="89" >Auditiva</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox"  name="70[]" value="90" >Mental o Cognitiva</label>
								</div>								
								<div class="checkbox ">
								<label><input type="checkbox"  name="70[]" value="91" >Visceral</label>
								</div>

							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Realizó el empadronamiento en OSEP, Es decir hizo el tramite de registro de su situación en la obra social?</label>
							<div class="col-xs-6">
								<select class="form-control" name="71" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">SI</option>
									<option value="2">NO</option>							
									<option value="3">No sabía que había que hacerlo</option>							
								</select>
							</div>

						</div>	
						<hr>
						<div class="form-group"  id = "b6_div_medicos">
							
							<label class="control-label col-xs-6">¿Quien o quienes lo orienta sobre los tratamientos que necesita? Es decir, ¿Quien o quienes que ustedes Valores le indica que tratamientos seria bueno realizar por su discapacidad?</label>
							<div class="col-xs-6">

								<div class="checkbox">
								<label><input type="checkbox" name="72[]" value="93">Médico general o pediatra</label>
								</div>
								<div class="checkbox">
								<label><input type="checkbox" name="72[]" value="94">Médico especialista</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="72[]" value="95" >Psicólogo - Psiquiatra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="72[]" value="96" >Médico fisiátra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="72[]" value="97" >Otro profesional de la salud</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="72[]" value="98" >Docente</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="72[]" value="99" >Integrante de la red de Madres</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox"  name="72[]" value="100" >Integrante de otra organización civil o de ayuda</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="72[]" value="101" >Otra persona que tiene una discapacidad, o un familiar con una discapacidad que no esta en ninguna organización</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="72[]" value="67" >Otro</label>
								</div>

							</div>

						</div>	
	
						<hr>

						<div class="form-group" id = "b6_div_profesional">
							
							<label class="control-label col-xs-6">De los profesionales de la salud que mencionó, ¿alguno es profesional de cabecera ?</label>
							<div class="col-xs-6">

								<div class="checkbox ">
								<label><input type="checkbox" name="73[]" value="93" >Médico general pediatra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="73[]" value="94" >Médico especialista</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="73[]" value="95" >Psicólogo - Psiquiatra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="73[]" value="96" >Médico fisiátra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" name="73[]" value="97" >Otro profesional de la salud</label>
								</div>
							</div>

						</div>	



						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Qué le gustaría que OSEP hiciera en el ámbito de la discapacidad 
								que no esté haciendo o esté haciendo mal?</label>
							<div class="col-xs-6">
								<textarea rows="3" class="form-control" id="postalAddress" placeholder="" name= "74"></textarea>
							</div>

						</div>	
						
						
						<div id="b6_uso">	

							<div class="form-group">
								
								<label class="control-label col-xs-6">¿Recuerda si realizó al menos una consulta médica por OSEP en los últimos 6 meses? </label>
								<div class="col-xs-6">
									<select class="form-control" id="b6_consulta" name="38" required>
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value="1">SI</option>
										<option value="2">NO</option>
										<option value="33">Sin datos</option>							
									</select>
								</div>

							</div>	
							
							<div class="form-group" id="b6_div_consulta_si">
								
								<label class="control-label col-xs-6">¿Dónde concurrió a atenderse la última vez? </label>
								<div class="col-xs-6">
									<select class="form-control" id="b6_atencion_si" name="39" required> 
										<option value="" disabled selected hidden>Seleccionar</option>
										<option value="34">Fue a un efector de OSEP</option>
										<option value="35">Fue a un prestador privado</option>
										<option value="36">Fue a un hospital o centro de salud público</option>									
									</select>
								</div>

							</div>	

							
							<div id="b6_div_consulta_no">
							
								<div class="form-group" >
									
									<label class="control-label col-xs-6">¿Por qué? </label>
									<div class="col-xs-6">
										<select class="form-control" id="b6_atencion_no" name="40" required>
											<option value="" disabled selected hidden>Seleccionar</option>
											<option value= "37">No se enfermó ni tuvo un accidente</option>
											<option value= "38">Quiso consultar pero no tuvo dinero</option>
											<option value= "39">Quiso consultar pero le cuesta llegar al lugar de atención</option>
											<option value= "40">Pidió turno pero no lo obtuvo</option>
											<option value= "41">Consultó pero NO por OSEP</option>							
											<option value= "42">Otro motivo</option>						
										</select>
									</div>

								</div>	

								<div class="form-group" id="b6_div_otro">
									<label class="control-label col-xs-6" for="b6_cual"> ¿Cual?</label>

									<div class="col-xs-6" >
										<input type="text" class="form-control" name = "81" id="b6_cual" required>
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
								<select class="form-control" name = "75" id="b7_meses" required>
								<option value="" disabled selected hidden>Seleccionar</option>
								<option value="102">1 Mes</option>
								<option value="103">2 Meses</option>							
								<option value="104">3 Meses</option>							
								<option value="105">4 Meses</option>	
								<option value="106">5 Meses</option>
								<option value="107">6 Meses</option>							
								<option value="108">7 Meses</option>							
								<option value="109">8 Meses</option>	
								<option value="110">9 Meses</option>	
								</select>
							</div>

						</div>	


						<div class="form-group" >
							
							<label class="control-label col-xs-6">¿Concurrió al control el mes pasado ?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b7_uso", name="76" required>
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
								<select class="form-control" id="b7_complejo" name ="78" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="111">Simple</option>
									<option value="112">Complicado</option>							
								</select>
							</div>
						
						</div>


						<div class="form-group" id="b7_div_porque_no">
							<label class="control-label col-xs-6" for="b7_porque_no">¿Por que no concurrió ?</label>
							<div class="col-xs-3">
								<input type="text" class="form-control" id="b7_porque_no" name ="77"  placeholder=" problema" required>
							</div>
						
						</div>




						<div class="form-group">
							<label class="control-label col-xs-6" for="">¿El embarazo lo esta llevando un profesional en especial o se atiende con distintos profesionales ?</label>
							<div class="col-xs-6">
								<select class="form-control" name ="79" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="113">Un profesional</option>
									<option value="114">Distintos profesionales en un mismo lugar de atención</option>							
									<option value="115">Distintos lugares de atención</option>							
								</select>
							</div>
						
						</div>


						<div class="form-group">
							<label class="control-label col-xs-6" for="b7_problem">¿El o los profesionales que la atienden, han detectado algún problema en el embarazo ?</label>
							
							<div class="col-xs-3">
								<select class="form-control" name ="80" id ="b7_problem" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">Si</option>
									<option value="2">NO</option>							
								</select>
							</div>
							<div class="col-xs-3">
								<input type="text" class="form-control" id="b7_cual" name="81" placeholder=" ¿Cual?">
							</div>

						</div>
						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Cuenta con apoyo familiar, de su pareja o de alguna otra persona que la acompañe 
																				y la ayude mientras transcurre el embarazo ?</label>
							<div class="col-xs-6">
								<select class="form-control" name="82" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">Si</option>
									<option value="2">NO</option>							
								</select>
							</div>
						
						</div>

						<div class="form-group">
							<label class="control-label col-xs-6" for="83">¿En los últimos dos años, concurrió a realizarse un papanicolau?</label>
							<div class="col-xs-6">
								<select class="form-control" name="83" required>
									<option value="" disabled selected hidden>Seleccionar</option>
									<option value="1">Si</option>
									<option value="2">NO</option>							
									<option value="62">No sabe/no contesta</option>							
								</select>
							</div>
						
						</div>
			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->


			<br>
			<div class="form-group" id="btn_encuesta">
				<div class="col-xs-6">

					<input type="button" class="btn btn-info" value="Guardar integrante" id="btn_nuevo"> 
					<!-- <input type="submit" class="btn btn-info" value="Nuevo integrante" id="btn_nuevo__"> -->
				</div>

				<div class="col-xs-6 text-right">
					<input type="button" class="btn btn-primary" value="Continuar" name="continuar" id="btn_continuar">

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


