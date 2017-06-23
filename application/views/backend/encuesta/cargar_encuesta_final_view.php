<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			<input type="hidden" id = "url" name="url" value="<?php echo(site_url());  ?>">
			
		<form id="add_funds" action="<?php echo(site_url('encuesta/cargarEncuesta/cargabloques'));  ?>" method="post">


			<div class="row form-horizontal" id="bloque_8">      <!-- Bloque 8 Vivienda y habitat -->
						<div class="panel panel-default">
						
							<div class="panel-heading orange">Bloque vivienda y entorno</div>
								<div class="panel-body" id="b8_spinner">

									<blockquote>
									<p>Datos generales de la vivienda</p>
									</blockquote>

									<div class="form-group text-center">										
										<label class="control-label col-xs-6 ">Respecto de los servicios básicos, ¿ésta casa tiene conexión a?</label>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Red de energía eléctrica</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option selected="true">SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">
										<label class="control-label col-xs-6">Red de gas natural</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option selected="true">SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Red de agua potable</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option selected="true">SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Cloacas</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option selected="true">SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>							

									<div class="form-group">							
										<label class="control-label col-xs-6">Teléfono fijo</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option selected="true">SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Internet</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option selected="true">SI</option>
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
										<label class="control-label col-xs-6">Basurales a cielo abierto</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Fábricas contaminantes</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Animales abandonados</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Lugares de cría de animales </label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Desagüe de cloacas, aguas servidas</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Insectos y roedores</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Agroquímicos</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Canales de riego, piletas u otro lugar donde haya agua que traiga problemas</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Calles muy transitadas u autopistas</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Calles de tierra</label>
										<div class="col-xs-6">
											<select class="form-control" required>
											<option >SI</option>
											<option >NO</option>							
											</select>
										</div>
									</div>	


									<hr>

									<blockquote>
										<p>Datos observacionales de la vivienda</p>
									</blockquote>

									<div class="form-group">							
										<label class="control-label col-xs-6">Nivel de vivienda</label>
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
										<label class="control-label col-xs-6">Materiales predominantes de paredes</label>
										<div class="col-xs-6">
											<select class="form-control" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option >Material de construcción</option>
												<option >Madera</option>		
												<option >Adobe</option>
												<option >Chapa de metal, cartón</option>	
											</select>
										</div>
									</div>					

									<div class="form-group">							
										<label class="control-label col-xs-6">Materiales predominantes de techos</label>
										<div class="col-xs-6">
											<select class="form-control" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option >Membrana, teja, losa, baldosa</option>
												<option >Madera, caña , paja</option>		
												<option >Chapa  de metal, cartón</option>
											</select>
										</div>
									</div>							

									<div class="form-group">							
										<label class="control-label col-xs-6">Ventilación</label>
										<div class="col-xs-6">
											<select class="form-control" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option >Suficiente</option>
												<option >Escasa</option>		
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
										<label class="control-label col-xs-6" for="ZipCode">Observaciones generales</label>
										<div class="col-xs-6">
											
											<textarea name="b8_observa" rows="10" cols="60" id="b8_observa"></textarea>
										</div>
									</div>
									
									
									
									
									
									
									
						
								</div>	
						</div>	 
			</div>	 <!-- Cierre row -->

	<!--<div class="container">   contenedor principal -->
	 
	        <br>
	        <div class="form-group" id="btn_guardar">
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
