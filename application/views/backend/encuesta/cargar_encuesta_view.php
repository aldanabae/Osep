<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			

<?php //var_dump($this->input->post());  ?>

<!--<div class="container">   contenedor principal -->
 <form id="add_funds" action="" method="post">

 <div class="row form-horizontal" id="bloque_1">   <!-- bloque 1 -->
		<div class="panel panel-default">
		
			<div class="panel-heading">Bloque 1 Composicion y salud Familiar</div>
				<div class="panel-body">
				
			<div class="form-group">
				 <label for="inputName" class="control-label col-xs-6">Nombre:</label>
				 <div class="col-xs-6">
					 <input type="text" class="form-control" placeholder="Nombre" name ="b1_nombre"  id ="b1_nombre"  >
				 </div>
			 </div>
			 <div class="form-group">
				 <label for="inputEmail" class="control-label col-xs-6">Edad:</label>
				 <div class="col-xs-6">
					 <input type="text" name="b1_edad"  class="form-control" placeholder="Edad" id="b1_edad">
				 </div>
			 </div>


			 <div class="form-group">
				 <label for="inputPassword" class="control-label col-xs-6">Sexo:</label>
					<div class="col-xs-2">
						<label class="radio-inline">
							<input type="radio" name="b1_genero" value="m" checked = "true"> Masculino
						</label>
					</div>
					<div class="col-xs-2">
						<label class="radio-inline">
							<input type="radio" name="b1_genero" value="f"> Femenino
						</label>
					</div>
			 </div>
			 
			 
		
					<div class="form-group">
						<label class="control-label col-xs-6">Parentezco con el titular:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_parent" id= "b1_parent">
							<option value="1">Titular</option>
							<option value="2">Conyuge o Pareja Conviviente</option>
							<option value="3">Hijo /a</option>
							<option value="4">Padre Madre</option>
							<option value="5">Suegro /a</option>
							<option value="6">Yerno / Nuera</option>
							<option value="7">Nieto /a</option>
							<option value="8">Otro Familiar</option>
							<option value="9">Otro no Familiar</option>
							</select>
						</div>

					</div>	


					<div class="form-group">
						<label class="control-label col-xs-6">Estudia?:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_estudio" id= "b1_estudio">
							<option value="0">SI</option>
							<option value="1">NO</option>
							</select>
						</div>

					</div>	


					 <div class="form-group" id ="b1_div_nivel">
						 <label for="inputEmail" class="control-label col-xs-6">Nivel de Estudios:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_nivel" id= "b1_nivel">
							<option value="0">Ninguno</option>
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


					 <div class="form-group">
						 <label for="inputEmail" class="control-label col-xs-6">Ocupacion:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_ocupacion" id= "b1_ocupacion">
							<option value="1">Trabajo Remunerado</option>
							<option value="2">Jubilado o pencionado</option>
							<option value="3">Buscando Trabajo</option>
							<option value="4">Estudiante Exclusivamente</option>
							<option value="5">Ama de casa Exclusivamente</option>
							<option value="6">Estudia y Trabaja</option>
							<option value="7">No trabaja</option>
							</select>
						</div>
					 </div>



					 <div class="form-group">
						 <label for="inputEmail" class="control-label col-xs-6">cobertura de salud:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_cober" id= "b1_cober">
							<option value="0">Salud Publica</option>
							<option value="1">Solo OSEP</option>
							<option value="2">Obra Social</option>
							<option value="3">Pre Paga</option>
							<option value="4">OSEPy otra</option>
							<option value="5">Servicio de emergencia</option>
							<option value="6">Mutual con servicios Medicos</option>
							<option value="7">Otra</option>
							</select>
						</div>
					 </div>

					 <div class="form-group">
						 <label for="inputPassword" class="control-label col-xs-6">Tiene Osep:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_osep" id= "b1_osep">
							<option value="0">SI</option>
							<option value="1">NO</option>
							</select>
						</div>
					 </div>
				

					 <div class="form-group" id= "b1_div_afiliado">
						 <label for="inputPassword" class="control-label col-xs-6">Numero Afiliado:</label>
							<div class="col-xs-6">
								<input type="text" name="b1_afiliado"  class="form-control" placeholder="Edad" id="b1_afiliado">
							</div>
					 </div>


					 <div class="form-group">
						 <label for="inputEmail" class="control-label col-xs-6">Tiene otra cobertura:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_otra" id= "b1_otra">
							<option value="0">SI</option>
							<option value="0">NO</option>

							</select>
						</div>
					 </div>

					 <div class="form-group" id= "b1_div_embarazo">
						 <label for="inputPassword" class="control-label col-xs-6">Esta embarazada:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_embarazo" id= "b1_embarazo">
							<option value="0">SI</option>
							<option value="1" selected>NO</option>
							</select>
						</div>
					 </div>

					 <div class="form-group">
						 <label for="inputPassword" class="control-label col-xs-6">Padece enfermedad Cronica:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_cronica" id= "b1_cronica">
							<option value="0">SI</option>
							<option value="1">NO</option>
							</select>
						</div>
					 </div>

					 <div class="form-group">
						 <label for="inputPassword" class="control-label col-xs-6">Tiene alguna Discapacidad:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_disc" id= "b1_disc">
							<option value="0">SI</option>
							<option value="1">NO</option>
							</select>
						</div>
					 </div>


					 <div class="form-group">
						 <label for="inputPassword" class="control-label col-xs-6">Dependencia:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_dep" id= "b1_dep" >
							<option value="0">SI</option>
							<option value="1">NO</option>
							</select>
						</div>
					 </div>

					 <div class="form-group">
						 <label for="inputPassword" class="control-label col-xs-6">Tiene algun pariente con OSEP a su cargo que no viva en la casa?:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_pariente" id= "b1_pariente" >
							<option value="0">SI</option>
							<option value="1">NO</option>
							</select>
						</div>
					 </div>



					<hr>
					<div class="form-group">
						<div class="col-xs-offset-3 col-xs-9 text-right">
							<input type="button" class="btn btn-primary" value="Generar Bloques" id= "btn_bloques">
						</div>
					</div>

				</div>




		</div>	



</div>			
			
			
	
	
	
	
	
 <div class="row form-horizontal" id="bloque_2">    <!-- bloque 2 servicios de Salud -->
			<div class="panel panel-default">
			
				<div class="panel-heading">Bloque 2 Utilizacion de servicios de Salud</div>
					<div class="panel-body">
				
						<div class="form-group">
							
							<label class="control-label col-xs-6">En los ultimos 6 meses, Utilizaron el servicio de la obra Social?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	

						
						<div class="form-group">
							<label class="control-label col-xs-6" for="postalAddress">Para que lo utilizo?:</label>
							<div class="col-xs-6">
								<textarea rows="3" class="form-control" id="postalAddress" placeholder="Postal Address"></textarea>
							</div>
						</div>



						<div class="form-group">
							
							<label class="control-label col-xs-6">Motivo</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>

						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">Otro otivo:</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="ZipCode" placeholder="Otro motivo">
							</div>
						</div>
			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->






<div class="row form-horizontal" id="bloque_3_a">      <!-- Bloque 3 bebes -->
			<div class="panel panel-default">
			
				<div class="panel-heading">Bloque 3 Salud de los Niños</div>
					<div class="panel-body">
				
						<blockquote>
						<p>Osep esta muy interesada en fortalecer sus servicios en la etapa  de la infancia</p>
						</blockquote>
						<div class="form-group">
							
							<label class="control-label col-xs-6">El embarazo fue normal?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >Normal</option>
								<option >De riesgo</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Nacio en termino</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >A termino</option>
								<option >Prematuro</option>							
								</select>
							</div>

						</div>	


						
						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">Recuerda cuanto peso al nacer?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="ZipCode" placeholder="Zip Code">
							</div>
						</div>



						<div class="form-group">
							
							<label class="control-label col-xs-6">Camino cerca o alrededor de cumplir el Año?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>

						<blockquote>
						<p>Controles de Salud</p>
						</blockquote>


						<div class="form-group">
							
							<label class="control-label col-xs-6">Controles auditivos de recien nacido</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>

						<div class="form-group">
							
							<label class="control-label col-xs-6">Realizo algun control de salud en los ultimos 3 Meses?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>

						<div class="form-group">
							
							<label class="control-label col-xs-6">En el ultimo control de Salud, el profecional anotó que es Normal?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >Normal</option>
								<option >Bajo</option>							
								<option >Sobrepeso</option>							
								</select>
							</div>

						</div>

						<div class="form-group">
							
							<label class="control-label col-xs-6">Tiene vacunas al Dia?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>

						<div class="form-group">
							
							<label class="control-label col-xs-6">Esta recibiendo la Leche de Osep?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>


			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->




<div class="row form-horizontal" id="bloque_3_b">      <!-- Bloque 3 niños -->
			<div class="panel panel-default">
			
				<div class="panel-heading">Bloque 3 Salud de los Niños</div>
					<div class="panel-body">
				
						<blockquote>
						<p>Ahora vamos a hablar sobre los chicos de 2 o mas años, Haciendo referencia a aspectos de salud y Actividades.</p>
						</blockquote>
						<div class="form-group">
							
							<label class="control-label col-xs-6">En el ultimo año , ¿Ha realizado un control con un  oculista?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Con un odontologo?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	


						
						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">Durante el año pasado / Este año. ¿Ha tenido algun tipo de dificultad en la escuela?</label>
							<div class="col-xs-4">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>
								<option >NO asiste Todavia</option>							
								</select>
							</div>

							<div class="col-xs-5">
								<input type="text" class="form-control" id="ZipCode" placeholder="Cual fue el Problema?">
							</div>
						</div>



						<div class="form-group">
							
							<label class="control-label col-xs-6">Camino cerca o alrededor de cumplir el Año?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>


						<div class="form-group">
							
							<label class="control-label col-xs-6"> ¿Realiza en forma regular alguna actividad (extraescolar). Es decir Hace deportes, alguna actividad artistica u otra semanalmente?</label>
							<div class="col-xs-4">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

							<div class="col-xs-5">
								<select class="form-control">
								<option >Deportiva</option>
								<option >Artistica</option>
								<option >Educativa</option>
								<option >Comunitaria</option>
								<option >Religiosa</option>							
								<option >No realiza</option>							
								</select>
							</div>

						</div>

						<div class="form-group">
							
							<label class="control-label col-xs-6">Donde</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >Club</option>
								<option >Instituto</option>							
								<option >CIC</option>							
								<option >Biblioteca</option>							
								<option >Union Vecinal</option>							
								<option >otro</option>							
								</select>
							</div>

						</div>

			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->






<div class="row form-horizontal" id="bloque_4">      <!-- Bloque 4 mujeres -->
			<div class="panel panel-default">
			
				<div class="panel-heading">Bloque 4 Salud  de las mujeres</div>
					<div class="panel-body">
				
						<div class="form-group">
							
							<label class="control-label col-xs-6">Como diria que es su estado general de salud en este momento?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >Muy bueno</option>
								<option >Bueno</option>							
								<option >Regular</option>							
								<option >Malo</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">En los ultimos  2 años concurrio a realizarse el Papanicolaou?</label>
							<div class="col-xs-4">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>
							<div class="col-xs-5">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>




						</div>	


						
						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">En los ultimos 2 años se ha realizado una mamografia ?</label>
							<div class="col-xs-4">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>
							<div class="col-xs-5">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>
						</div>


			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->







<div class="row form-horizontal" id="bloque_5">      <!-- Bloque 5 Adultos mayores -->
			<div class="panel panel-default">
			
				<div class="panel-heading">Bloque 5 Adultos mayores</div>
					<div class="panel-body">


						<div class="form-group">
							
							<label class="control-label col-xs-6">Necesita usar en forma permanente silla de ruedas , baston , andador, o algun otro instrumeto para caminar?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Usa audifonos o tiene dificultad para escuchar conversaciones o la television a un volumen normal?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group">
							
							<label class="control-label col-xs-6">Ha sufrido alguna caida en el ultimo mes?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group">
							
							<label class="control-label col-xs-6">Necesita o ha tenido que realizar modificaciones e su casa para no caerse o realizar sus tareas cotidianas?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Experimenta en forma cotidiana problemas de olvidos o confusiones?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Experimenta en forma cotidiana problemas de olvidos o confusiones?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group">
							
							<label class="control-label col-xs-6">Normalmente, ¿ Necesita ayuda para realizar tramites, como cobrar la juvilacion, pedir turno al medico por ejemplo?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Si tiene una  dificultad de salud  o una urgencia, ¿Cuenta con alguien que lo pueda ayudar a resolverla?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿ Concurre habitualmente a un centro de jubilados, Iglesia, Club u otro ambito de tipo social?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="ZipCode" placeholder="Que actividad realiza?">
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Tiene alguna actividad o Hobbie que haga frecuentemente para ocupar el tiempo libre ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Respecto a la atencion Medica. ¿Tiene un medico de cabecera, es decir un profesional que lo conozca y que lo atienda habitualmente?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group">
							
							<label class="control-label col-xs-6">El medico es de OSEP o recibe OSEP ?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group">
							
							<label class="control-label col-xs-6">Que tan complicado le resulta ver a un profesional cuando tiene que atenderse por algun motivo?</label>
							<div class="col-xs-6">
								<select class="form-control">
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
			
				<div class="panel-heading">Bloque 6 Familias que tienen miembrs con discapacidad afiliados a OSEP</div>
					<div class="panel-body">


						<div class="form-group">
							
							<label class="control-label col-xs-6">Cual es su Discapacidad?</label>
							<div class="col-xs-6">

								<div class="checkbox">
								<label><input type="checkbox" value="">Motora</label>
								</div>
								<div class="checkbox">
								<label><input type="checkbox" value="">Sensorial - Visual</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Sensorial - Auditiva</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Viceral</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Mental o Cognitiva</label>
								</div>

							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Realizo el empadronamiento en OSEP, Es decir hizo el tramite de registro de su situacion en la obra social?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								<option >NO sabia que habia que hacerlo</option>							
								</select>
							</div>

						</div>	
						<hr>
						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Quien o quienes lo orienta sobre los tratamientos que necesita? Es decir, ¿Quien o quienes que ustedes Valores le indica que tratamientos seria bueno realizar por su discapacidad?</label>
							<div class="col-xs-6">

								<div class="checkbox">
								<label><input type="checkbox" value="">Medico general o Pediatra</label>
								</div>
								<div class="checkbox">
								<label><input type="checkbox" value="">Medico Especialista</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Psicologo - Psiquiatra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Medico Fisiátra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Otro profecional de la salud</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Docente</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Integrante de la red de Madres</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Integrante de otra organizacion sivil o de ayuda</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Otra persona que tiene una discapacidad, o un familiar con una dicapacidad que no esta en ninguna organizacion</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Otro</label>
								</div>

							</div>

						</div>	
	
						<hr>

						<div class="form-group">
							
							<label class="control-label col-xs-6">De los profesionales de la salud que mencionó, ¿Alguno es profesional de cabecera?</label>
							<div class="col-xs-6">

								<div class="checkbox ">
								<label><input type="checkbox" value="" >Medico general  Pediatra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Medico especialista</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Psicologo - Psiquiatra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="" >Otro profecional de la salud</label>
								</div>

							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Que le gustaria que OSEP hiciera por X ?</label>
							<div class="col-xs-6">
								<textarea rows="3" class="form-control" id="postalAddress" placeholder=""></textarea>
							</div>

						</div>	

			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->


<div class="row form-horizontal" id="bloque_7">      <!-- Bloque 7 Embarazadas -->
			<div class="panel panel-default">
			
				<div class="panel-heading">Bloque 7 Embarazadas</div>
					<div class="panel-body">
				
						<blockquote>
						<p>Le voy a preguntar por la/s  afiliada/s integrante/s de la familia que estan embarazada/s.</p>
						</blockquote>
						<div class="form-group">
							
							<label class="control-label col-xs-6">De cuantos meses esta embarazada?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >1</option>
								<option >2</option>							
								<option >3</option>							
								<option >4</option>	
								<option >5</option>
								<option >6</option>							
								<option >7</option>							
								<option >8</option>	
								<option >9</option>	
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Concurrio al control el mes pasado?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >SI</option>
								<option >NO</option>							
								</select>
							</div>

						</div>	


						
						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">Que tan complicado le resulto en esa oportunidad todo el proceso que implicó hacerse el control , 
								teniendo en cuenta los pasos desde conseguir tueno hasta que la atiendan?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >Simple</option>
								<option >Complicado</option>							
								</select>
							</div>
						
						</div>


						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">Por que no concurrio?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >Simple</option>
								<option >Complicado</option>							
								</select>
							</div>
						
						</div>




						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">El embarazo lo esta llevando un profesional en especial  o se atiende con distintos profesionales? </label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >Un profesional</option>
								<option >Distintos profesionales en un mismo lugar de atencion</option>							
								<option >Distintos lugares de atencion</option>							
								</select>
							</div>
						
						</div>


						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">El o los profesionales que la atienden, han detectado algun problema en el embarazo?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="ZipCode" placeholder=" Cual?">
							</div>
						</div>



						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">Cuenta con apoyo familiar, de su pareja o de alguna otra persona que la acompañe  y la auyde mientras transcurre el embarazo?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option >Si</option>
								<option >NO</option>							
								</select>
							</div>
						
						</div>


			
					</div>	

		</div>
		
	 
</div>	 <!-- Cierre row -->
















        <br>
        <div class="form-group" id="btn_encuesta">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Finalizar Encuesta">
                <input type="reset" class="btn btn-default" value="Nuevo integrante">
            </div>
        </div>



</form>


  
  
</div>
 
 <!--</div>   Cierre contenedor principal -->













		</div><!-- /.page-content -->
	</div><!-- /.main-content-inner -->
</div><!-- /.main-content -->



<!--Para que se vean los botones de la tabla responsive-->
