<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			

<?php //var_dump($this->input->post());  ?>

<!--<div class="container">   contenedor principal -->
 <form id="add_encuesta" action="<?php echo(site_url('encuesta/cargarEncuesta/cargabloques_final'));  ?>" method="post">

 <div class="row form-horizontal" id="bloque_1">   <!-- bloque 1 -->
		<div class="panel panel-default">
		
			<div class="panel-heading">Bloque 1 Composicion y salud Familiar</div>
				<div class="panel-body">
				
			<div class="form-group">
				 <label for="inputName" class="control-label col-xs-6">Apellido y Nombre:</label>
				 <div class="col-xs-6">
					 <input type="text" class="form-control" placeholder="Nombre" name ="b1_nombre"  id ="b1_nombre"  >
				 </div>
			 </div>
			 <div class="form-group">
				 <label for="inputEmail" class="control-label col-xs-6">Edad:</label>
				 <div class="col-xs-6">
					 <input type="number" name="b1_edad"  class="form-control" placeholder="Edad" id="b1_edad">
				 </div>
			 </div>

			 <div class="form-group">
				 <label for="inputEmail" class="control-label col-xs-6">Dni:</label>
				 <div class="col-xs-6">
					 <input type="number" name="b1_dni"  class="form-control" placeholder="Dni" id="b1_dni">
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
							<option value="1" >NO</option>
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
							<option value="1">Estable</option>
							<option value="2">Informal</option>
							<option value="3">Jubilado o pensionado</option>
							<option value="4">Buscando Trabajo</option>
							<option value="5">Estudiante Exclusivamente</option>
							<option value="6">Ama de casa Exclusivamente</option>
							<option value="7">Estudia y Trabaja</option>
							<option value="8">No trabaja</option>
							</select>
						</div>
					 </div>






<div class="row form-horizontal" id="bloque_9">      <!-- Bloque 9 ocupacional Adaptado -->


						<blockquote>
						<p>Datos Ocupacionales.</p>
						</blockquote>


						<div class="form-group">
							
							<label class="control-label col-xs-6">Contribuyes con la economia de la familia</label>
							<div class="col-xs-6">
								<select class="form-control" id="b9_contribulle" name="b9_contribulle" >
								<option value="1" >SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	
						<div class="form-group">
							
							<label class="control-label col-xs-6">Cuantas horas trabaja por semana</label>
							<div class="col-xs-6">
								<input type="number" class="form-control" id="b9_horas"  name="b9_horas" placeholder=" hs">
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">En que lugar trabaja</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_lugar"  name="b9_lugar"  placeholder="Lugar">
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">A que se dedica concretamente</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_ocupacion"  name="b9_ocupacion"  placeholder=" Ocupacion">
							</div>

						</div>	

						<div class="form-group">
							
							<label class="control-label col-xs-6">Observaciones</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="b9_obs"  name="b9_obs"  placeholder=" Observaciones">
							</div>

						</div>							

<hr>
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
							<option value="0" checked>SI</option>
							<option value="1">NO</option>
							</select>
						</div>
					 </div>
				

					 <div class="form-group" id= "b1_div_afiliado">
						 <label for="inputPassword" class="control-label col-xs-6">Numero Afiliado:</label>
							<div class="col-xs-6">
								<input type="number" name="b1_afiliado"  class="form-control" placeholder="Edad" id="b1_afiliado">
							</div>
					 </div>


					 <div class="form-group">
						 <label for="inputEmail" class="control-label col-xs-6">Tiene otra cobertura:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_otra" id= "b1_otra">
							<option value="0" >SI</option>
							<option value="1" selected =" true" >NO</option>

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
							<option value="1" selected =" true">NO</option>
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
							<option value="1" selected =" true">NO</option>
							</select>
						</div>
					 </div>

					 <div class="form-group">
						 <label for="inputPassword" class="control-label col-xs-6">Tiene algun pariente con OSEP a su cargo que no viva en la casa?:</label>
						<div class="col-xs-6">
							<select class="form-control" name= "b1_pariente" id= "b1_pariente" >
							<option value="0">SI</option>
							<option value="1" selected =" true">NO</option>
							</select>
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
								<select class="form-control" id= "b2_uso">
								<option value="0" checked>SI</option>
								<option value="1">NO</option>							
								</select>
							</div>

						</div>	




						
						<div class="form-group" id="b2_area">
							<label class="control-label col-xs-6" for="postalAddress">Para que lo utilizo?:</label>
							<div class="col-xs-6">
								<textarea rows="3" class="form-control" id="postalAddress" placeholder="Postal Address" ></textarea>
							</div>
						</div>


						<div class="form-group" id="b2_si">
							
							<label class="control-label col-xs-6"></label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">Fue a un efector de OSEP</option>
								<option value="2">Fue a un prestador Privado</option>							
								<option value="3">Fue a un Hospital o centro de Salud Publico</option>							
								</select>
							</div>

						</div>


						<div class="form-group" id="b2_no">
							
							<label class="control-label col-xs-6"></label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">Ningun miembro de la familia se enfermo o tuvo accidente</option>
								<option value="2">No lo consideró necesario asi que no hizo nada</option>							
								<option value="3">No lo considero necesario y tomo remedio caseros</option>							
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
							<label class="control-label col-xs-6" for="ZipCode">Otro otivo:</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" id="ZipCode" placeholder="Otro motivo">
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
			
				<div class="panel-heading">Bloque 3 Salud de los Niños</div>
					<div class="panel-body">
				
						<blockquote>
						<p>Osep esta muy interesada en fortalecer sus servicios en la etapa  de la infancia</p>
						</blockquote>
						<div class="form-group">
							
							<label class="control-label col-xs-6">El embarazo fue normal?</label>
							<div class="col-xs-6">
								<select class="form-control" name ="">
								<option value="1">Normal</option>
								<option value="2">De riesgo</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Nacio en termino</label>
							<div class="col-xs-6">
								<select class="form-control" name ="">
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
							<label class="control-label col-xs-6" for="b3a_peso">Por que no la recibe?</label>
							<div class="col-xs-6">
								<input type="text" class="form-control" name= "b3a_porque_no" id="b3a_porque_no" placeholder="">
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
							
							<label class="control-label col-xs-6">En los ultimos Dos años , ¿Ha realizado un control con un  oculista?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Con un odontologo?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						
						<div class="form-group">
							<label class="control-label col-xs-6" for="b3b_escuela">Durante el año pasado / Este año. ¿Ha tenido algun tipo de dificultad en la escuela?</label>
							<div class="col-xs-4">
								<select class="form-control" id ="b3b_escuela" name ="b3b_escuela">
								<option value="1">SI</option>
								<option value="2" selected>NO</option>
								<option value="3">NO asiste Todavia</option>							
								</select>
							</div>

						</div>
						
						<div class="form-group" id="b3b_div_problem">
							<label class="control-label col-xs-6" for="b3b_problem"> Cual fue el problema?</label>

							<div class="col-xs-6" >
								<input type="text" class="form-control" name = "b3b_problem" id="b3b_problem" placeholder="Cual fue el Problema?">
							</div>
						</div>


						<div class="form-group">
							
							<label class="control-label col-xs-6"> ¿Realiza en forma regular alguna actividad (extraescolar). Es decir Hace deportes, alguna actividad artistica u otra semanalmente?</label>
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
								<option value="1">Club</option>
								<option value="2">Instituto</option>							
								<option value="3">CIC</option>							
								<option value="4">Biblioteca</option>							
								<option value="5">Union Vecinal</option>							
								<option value="6">otro</option>							
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
							<div class="col-xs-3">
								<select class="form-control" id="b4_pap">
								<option value="0" >SI</option>
								<option value="1">NO</option>							
								</select>
							</div>
							<div class="col-xs-3" id="b4_div_pap_si" >
								<select class="form-control" id="b4_pap_si" name="b4_pap_si">
									<option value= "1">En hospital o centro propio de OSEP</option>
									<option value= "2">En Consultorio, Clinica o Sanatorio donde reciben OSEP</option>
									<option value= "3">En hospital publico, dentro de salud , sala</option>
									<option value= "4">En Consultorio, Clinica o Sanatorio donde no reciben OSEP</option>
									<option value= "5">Otro</option>							
								</select>
							</div>
							<div class="col-xs-3" id="b4_div_pap_no" >
								<select class="form-control" id ="b4_pap_no" name ="b4_pap_no">
									<option value= "1">No tuvo tiempo</option>							
									<option value= "2">No tuvo dinero</option>							
									<option value= "3">No consiguio turno o lugar donde la atiendan</option>							
									<option value= "4">No sabe donde hacerselo</option>							
									<option value= "5">Le da miedo, disgusto o verguenza</option>							
									<option value= "6">Se olvido</option>							
									<option value= "7">Por dejadez</option>							
									<option value= "8">No lo necesita, esta sana (persepcion personal)</option>							
									<option value= "9">No Conoce ese examen o no sabia que tenia que hacerselo</option>							
									<option value= "10">El medico no se lo indico</option>							
									<option value= "11">Por edad Avanzada</option>							
									<option value= "12">No le corresponde (Histerectomia, o alguna otra contraidicacion Medica)</option>							
						
								</select>
							</div>



						</div>	


						
						<div class="form-group">
							<label class="control-label col-xs-6" for="b4_mamo">En los ultimos 2 años se ha realizado una mamografia ?</label>
							<div class="col-xs-3">
								<select class="form-control" id="b4_mamo" name="b4_mamo" >
								<option value="0">SI</option>
								<option value="1">NO</option>							
								</select>
							</div>
							<div class="col-xs-3" id="b4_div_mamo_si">
								<select class="form-control" id="b4_mamo_si" name="b4_mamo_si">
									<option value= "1">En el mamografo de Osep</option>
									<option value= "2">En Consultorio, Clinica o Sanatorio donde reciben OSEP</option>
									<option value= "3">En hospital publico, dentro de salud , sala</option>
									<option value= "4">En Consultorio, Clinica o Sanatorio donde no reciben OSEP</option>
									<option value= "5">Otro</option>

								</select>
							</div>
							<div class="col-xs-3" id="b4_div_mamo_no" >
								<select class="form-control" id="b4_mamo_no" name="b4_mamo_no">
									<option value= "1">No tuvo tiempo</option>							
									<option value= "2">No tuvo dinero</option>							
									<option value= "3">No consiguio turno o lugar donde la atiendan</option>							
									<option value= "4">No sabe donde hacerselo</option>							
									<option value= "5">Le da miedo, disgusto o verguenza</option>							
									<option value= "6">Se olvido</option>							
									<option value= "7">Por dejadez</option>							
									<option value= "8">No lo necesita, esta sana (persepcion personal)</option>							
									<option value= "9">No Conoce ese examen o no sabia que tenia que hacerselo</option>									
									<option value= "10">El profesional tratante no se lo indico</option>									
									<option value= "11">Por edad Avanzada</option>							
									<option value= "12">No le corresponde (Histerectomia, o alguna otra contraidicacion Medica)</option>							
														
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
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Usa audifonos o tiene dificultad para escuchar conversaciones o la television a un volumen normal?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1" >SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group">
							
							<label class="control-label col-xs-6">Ha sufrido alguna caida en el ultimo mes?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group">
							
							<label class="control-label col-xs-6">Necesita o ha tenido que realizar modificaciones e su casa para no caerse o realizar sus tareas cotidianas?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Experimenta en forma cotidiana problemas de olvidos o confusiones?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">Experimenta en forma cotidiana problemas de olvidos o confusiones?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group">
							
							<label class="control-label col-xs-6">Normalmente, ¿ Necesita ayuda para realizar tramites, como cobrar la juvilacion, pedir turno al medico por ejemplo?</label>
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
							
							<label class="control-label col-xs-6">¿ Concurre habitualmente a un centro de jubilados, Iglesia, Club u otro ambito de tipo social?</label>
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
							
							<label class="control-label col-xs-6">Respecto a la atencion Medica. ¿Tiene un medico de cabecera, es decir un profesional que lo conozca y que lo atienda habitualmente?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_medico" name="b5_medico">
								<option value="1" selected>SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group" id="b5_div_esde_osep">
							
							<label class="control-label col-xs-6">Ese medico es de OSEP o recibe OSEP ?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_esde_osep" name="b5_esde_osep">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	

						<div class="form-group" id="b5_div_complejo">
							
							<label class="control-label col-xs-6">Que tan complicado le resulta ver a un profesional cuando tiene que atenderse por algun motivo?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b5_complejo" name="b5_complejo">
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
								<label><input type="checkbox" value="1">Motora</label>
								</div>
								<div class="checkbox">
								<label><input type="checkbox" value="2">Sensorial - Visual</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="3" >Sensorial - Auditiva</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="4" >Viceral</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="5" >Mental o Cognitiva</label>
								</div>

							</div>

						</div>	


						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Realizo el empadronamiento en OSEP, Es decir hizo el tramite de registro de su situacion en la obra social?</label>
							<div class="col-xs-6">
								<select class="form-control">
								<option value="1">SI</option>
								<option value="2" >NO</option>							
								<option value="3">NO sabia que habia que hacerlo</option>							
								</select>
							</div>

						</div>	
						<hr>
						<div class="form-group">
							
							<label class="control-label col-xs-6">¿Quien o quienes lo orienta sobre los tratamientos que necesita? Es decir, ¿Quien o quienes que ustedes Valores le indica que tratamientos seria bueno realizar por su discapacidad?</label>
							<div class="col-xs-6">

								<div class="checkbox">
								<label><input type="checkbox" value="1">Medico general o Pediatra</label>
								</div>
								<div class="checkbox">
								<label><input type="checkbox" value="2">Medico Especialista</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="3" >Psicologo - Psiquiatra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="4" >Medico Fisiátra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="5" >Otro profecional de la salud</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="6" >Docente</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="7" >Integrante de la red de Madres</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="8" >Integrante de otra organizacion sivil o de ayuda</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="9" >Otra persona que tiene una discapacidad, o un familiar con una dicapacidad que no esta en ninguna organizacion</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="10" >Otro</label>
								</div>

							</div>

						</div>	
	
						<hr>

						<div class="form-group" id = "b6_div_profesional">
							
							<label class="control-label col-xs-6">De los profesionales de la salud que mencionó, ¿Alguno es profesional de cabecera?</label>
							<div class="col-xs-6">

								<div class="checkbox ">
								<label><input type="checkbox" value="1" >Medico general  Pediatra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="2" >Medico especialista</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="3" >Psicologo - Psiquiatra</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="4" >Otro profecional de la salud</label>
								</div>
								<div class="checkbox ">
								<label><input type="checkbox" value="5" >Ninguno</label>
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
							
							<label class="control-label col-xs-6">Concurrio al control el mes pasado?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b7_uso", name="b7_uso">
								<option value="1">SI</option>
								<option value="2">NO</option>							
								</select>
							</div>

						</div>	


						
						<div class="form-group" id="b7_div_complejo">
							<label class="control-label col-xs-6" for="b7_complejo">Que tan complicado le resulto en esa oportunidad todo el proceso que implicó hacerse el control , 
								teniendo en cuenta los pasos desde conseguir tueno hasta que la atiendan?</label>
							<div class="col-xs-6">
								<select class="form-control" id="b7_complejo" name ="b7_complejo">
								<option value="1">Simple</option>
								<option value="2">Complicado</option>							
								</select>
							</div>
						
						</div>


						<div class="form-group" id="b7_div_porque_no">
							<label class="control-label col-xs-6" for="b7_porque_no">Por que no concurrio?</label>
							<div class="col-xs-3">
								<input type="text" class="form-control" id="b7_porque_no" name ="b7_porque_no"  placeholder=" problema">
							</div>
						
						</div>




						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">El embarazo lo esta llevando un profesional en especial  o se atiende con distintos profesionales? </label>
							<div class="col-xs-6">
								<select class="form-control" name ="b7_profesional">
								<option >Un profesional</option>
								<option >Distintos profesionales en un mismo lugar de atencion</option>							
								<option >Distintos lugares de atencion</option>							
								</select>
							</div>
						
						</div>


						<div class="form-group">
							<label class="control-label col-xs-6" for="ZipCode">El o los profesionales que la atienden, han detectado algun problema en el embarazo?</label>
							
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
							<label class="control-label col-xs-6" for="ZipCode">Cuenta con apoyo familiar, de su pareja o de alguna otra persona que la acompañe  y la auyde mientras transcurre el embarazo?</label>
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

                <input type="reset" class="btn btn-default" value="Nuevo integrante" id="">
            </div>

            <div class="col-xs-6 text-right">
                <input type="submit" class="btn btn-primary" value="Continuar" id="">

            </div>		
        </div>



</form>


  
  
</div>
 
 <!--</div>   Cierre contenedor principal -->













		</div><!-- /.page-content -->
	</div><!-- /.main-content-inner -->
</div><!-- /.main-content -->



<!--Para que se vean los botones de la tabla responsive-->
