<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			<input type="hidden" id = "url" name="url" value="<?php echo(site_url());  ?>">
			
		<form id="add_funds" action="<?php echo(site_url('encuesta/cargarEncuesta/cargabloques'));  ?>" method="post">


			<div class="row form-horizontal" id="bloque_8">      <!-- Bloque 8 Vivienda y habitat -->
						<div class="panel panel-default">
						
							<div class="panel-heading orange">Bloque Vivienda y Entorno</div>
								<div class="panel-body" id="b8_spinner">

									<blockquote>
									<p>Datos Generales de la Vivienda</p>
									</blockquote>

									<div class="form-group text-center">										
										<label class="control-label col-xs-6 ">Respecto de los servicios básicos, ¿ésta casa tiene conexión a?</label>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Red de Energía Eléctrica</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">
										<label class="control-label col-xs-6">Red de Gas Natural</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Red de Agua Potable</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Cloacas</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>							

									<div class="form-group">							
										<label class="control-label col-xs-6">Teléfono Fijo</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Internet</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>	


									<hr>


									<div class="form-group">							
										<label class="control-label col-xs-6">¿La vivienda es propia?</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>	


									<hr>


									<div class="form-group">							
										<label class="control-label col-xs-6">¿En el barrio/zona donde vive, hay presencia de ?</label>
									</div>	


									<div class="form-group">							
										<label class="control-label col-xs-6">Basurales a Cielo Abierto</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Fábricas Contaminantes</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Animales Abandonados</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Lugares de Cría de Animales </label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Desagüe de Cloacas, Aguas Servidas</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Insectos y Roedores</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Agroquímicos</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Canales de Riego, Piletas u otro lugar donde haya agua que traiga problemas</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Calles muy transitadas u Autopistas</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Calles de Tierra</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>	


									<hr>

									<blockquote>
										<p>Datos Observacionales de la Vivienda</p>
									</blockquote>

									<div class="form-group">							
										<label class="control-label col-xs-6">Nivel de Vivienda</label>
										<div class="col-xs-6">
											<select class="form-control" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option >AB</option>
												<option >C1</option>		
												<option >C2</option>
												<option >C3</option>	
												<option >D1</option>
												<option >D2</option>	
												<option >E</option>	
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Materiales Predominantes de Paredes</label>
										<div class="col-xs-6">
											<select class="form-control" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option >Material de Construcción</option>
												<option >Madera</option>		
												<option >Adobe</option>
												<option >Chapa de Metal, Cartón</option>	
											</select>
										</div>
									</div>					

									<div class="form-group">							
										<label class="control-label col-xs-6">Materiales Predominantes de Techos</label>
										<div class="col-xs-6">
											<select class="form-control" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option >Membrana, Teja, Losa, Baldosa</option>
												<option >Madera, Caña , Paja</option>		
												<option >Chapa  de Metal, Cartón</option>
											</select>
										</div>
									</div>							

									<div class="form-group">							
										<label class="control-label col-xs-6">Ventilación</label>
										<div class="col-xs-6">
											<select class="form-control" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option >Suficiente</option>
												<option >Escaso</option>		
												<option >Sin ventilación</option>
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Accesibilidad</label>
										<div class="col-xs-6">
											<select class="form-control" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option >Simple</option>
												<option >Compleja</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">
										<label class="control-label col-xs-6" for="ZipCode">Observaciones Generales</label>
										<div class="col-xs-6">
											<input type="text" class="form-control" id="ZipCode">
										</div>
									</div>
						
								</div>	
						</div>	 
			</div>	 <!-- Cierre row -->

	<!--<div class="container">   contenedor principal -->
	 
	        <br>
	        <div class="form-group">
	            <div class="col-xs-offset-3 col-xs-9">
	                <input type="submit" class="btn btn-primary" value="Guardar" name= "Guardar" id="guardar">
	                <a href="<?php echo(site_url());  ?>" class="btn" ><i class="fa fa-home" aria-hidden="true"></i> Cerrar </a>
	            </div>
	        </div>

	    </form>

		</div><!-- /.page-content -->
	</div><!-- /.main-content-inner -->
</div><!-- /.main-content -->


<!--Para que se vean los botones de la tabla responsive-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='../../assets/js/jquery.js'>"+"<"+"/script>");
		</script>


		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="../../assets/js/bootstrap.js"></script>
