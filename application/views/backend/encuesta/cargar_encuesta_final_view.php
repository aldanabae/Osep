<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			<input type="hidden" id = "localPath" name="localPath" value="<?php echo(base_url());  ?>">
			<input type="hidden" id = "hdnid_numRel" name="hdnid_numRel" value="<?php echo($id_numRel);  ?>">
			<input type="hidden" id = "hdnid_relevamiento" name="hdnid_relevamiento" value="<?php echo($id_relevamiento);  ?>">

		<form id="add_encuesta" action="<?php //echo(site_url('encuesta/cargarEncuesta/cargabloques'));  ?>" method="post">


			<div class="row form-horizontal" id="bloque_8">      <!-- Bloque 8 Vivienda y habitat -->
						<div class="panel panel-default">
						
							<div class="panel-heading orange">
								<div class="col-xs-10">
									
									<p>Bloque vivienda y entorno</p>				
								</div>
								<p class="text-right btn-sm"><a href="<?php echo base_url('encuesta/cargarEncuesta/');?>" ><i class="1 ace-icon fa fa-arrow-left"></i> Atras</a></p>

								
							</div>
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
											<select class="form-control" name="84" required>
												<option value="1" selected="true">SI</option>
												<option value="2">NO</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">
										<label class="control-label col-xs-6">Red de gas natural</label>
										<div class="col-xs-6">
											<select class="form-control" name="85" required>
												<option value="1"  selected="true">SI</option>
												<option value="2" >NO</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Red de agua potable</label>
										<div class="col-xs-6">
											<select class="form-control" name="86" required>
												<option value="1" selected="true">SI</option>
												<option value="2" >NO</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Cloacas</label>
										<div class="col-xs-6">
											<select class="form-control" name="87" required>
												<option value="1" selected="true">SI</option>
												<option value="2" >NO</option>							
											</select>
										</div>
									</div>							

									<div class="form-group">							
										<label class="control-label col-xs-6">Teléfono fijo</label>
										<div class="col-xs-6">
											<select class="form-control" name="88" required>
												<option value="1" selected="true">SI</option>
												<option value="2" >NO</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Internet</label>
										<div class="col-xs-6">
											<select class="form-control" name="89" required>
												<option value="1" selected="true">SI</option>
												<option value="2" >NO</option>							
											</select>
										</div>
									</div>	


									<hr>


									<div class="form-group">							
										<label class="control-label col-xs-6">¿La vivienda es propia?</label>
										<div class="col-xs-6">
											<select class="form-control" name="90" required>
												<option value="1" >SI</option>
												<option value="2" >NO</option>							
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
											<select class="form-control" name="91" required>
												<option value="1" >SI</option>
												<option value="2" selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Fábricas contaminantes</label>
										<div class="col-xs-6">
											<select class="form-control" name="92" required>
												<option value="1" >SI</option>
												<option value="2" selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Animales abandonados</label>
										<div class="col-xs-6">
											<select class="form-control" name="93" required>
											<option value="1" >SI</option>
											<option value="2" selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Lugares de cría de animales </label>
										<div class="col-xs-6">
											<select class="form-control" name="94" required>
											<option value="1" >SI</option>
											<option value="2" selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Desagüe de cloacas, aguas servidas</label>
										<div class="col-xs-6">
											<select class="form-control" name="95" required>
											<option value="1" >SI</option>
											<option value="2" selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Insectos y roedores</label>
										<div class="col-xs-6">
											<select class="form-control" name="96" required>
											<option value="1">SI</option>
											<option value="2" selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Agroquímicos</label>
										<div class="col-xs-6">
											<select class="form-control" name="97" required>
											<option value="1">SI</option>
											<option value="2" selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Canales de riego, piletas u otro lugar donde haya agua que traiga problemas</label>
										<div class="col-xs-6">
											<select class="form-control" name="98" required>
											<option value="1" >SI</option>
											<option value="2" selected="true">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Calles muy transitadas u autopistas</label>
										<div class="col-xs-6">
											<select class="form-control" name="99" required>
											<option value="1" >SI</option>
											<option value="2">NO</option>							
											</select>
										</div>
									</div>

									<div class="form-group">							
										<label class="control-label col-xs-6">Calles de tierra</label>
										<div class="col-xs-6">
											<select class="form-control" name="100" required>
											<option value="1">SI</option>
											<option value="2">NO</option>							
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
											<select class="form-control" name="101" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option value="116">AB</option>
												<option value="117">C1</option>		
												<option value="118">C2</option>
												<option value="119">C3</option>	
												<option value="120">D1</option>
												<option value="121">D2</option>	
												<option value="122">E</option>	
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Materiales predominantes de paredes</label>
										<div class="col-xs-6">
											<select class="form-control" name="102" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option value="123" >Material de construcción</option>
												<option value="124" >Madera</option>		
												<option value="125" >Adobe</option>
												<option value="126" >Chapa de metal, cartón</option>	
											</select>
										</div>
									</div>					

									<div class="form-group">							
										<label class="control-label col-xs-6">Materiales predominantes de techos</label>
										<div class="col-xs-6">
											<select class="form-control" name="103" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option value="127" >Membrana, teja, losa, baldosa</option>
												<option value="128" >Madera, caña , paja</option>		

											</select>
										</div>
									</div>							

									<div class="form-group">							
										<label class="control-label col-xs-6">Ventilación</label>
										<div class="col-xs-6">
											<select class="form-control" name="104" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option value="129">Suficiente</option>
												<option value="130">Escasa</option>		
												<option value="131">Sin ventilación</option>
											</select>
										</div>
									</div>	

									<div class="form-group">							
										<label class="control-label col-xs-6">Accesibilidad</label>
										<div class="col-xs-6">
											<select class="form-control" name="105" required>
												<option value="" disabled selected hidden>Seleccionar</option>
												<option value="111">Simple</option>
												<option value="132">Compleja</option>							
											</select>
										</div>
									</div>	

									<div class="form-group">
										<label class="control-label col-xs-6" for="ZipCode">Observaciones generales</label>
										<div class="col-xs-6">
											
											<textarea name="106" rows="10" cols="60" id="b8_observa"></textarea>
										</div>
									</div>
									
									<div id="b8_div_criticidad">
										<!-- <div class="form-group has-warning">							 -->
										<!-- <div class="form-group has-success">					 -->
										<div class="form-group ">					
											<label class="control-label col-xs-6"><dt>Nivel de criticidad</dt></label>
											<div class="col-xs-6">
												<select class="form-control" name="idCriticidad" id="b8_criticidad" required>
													
													<option value="" disabled selected hidden>Seleccionar</option>

													<?php 

														foreach($criticidad as $item){

															echo('<option value="'.$item->idCriticidad.'" data-desc= "'.$item->descCriticidad.'"> '.$item->nombreCriticidad.'</option>');

														}
													
													?>					
												</select>
											</div>

										</div>								

									</div>	 <!-- fin_div_criticad -->
									
									
									
						
								</div>	
						</div>	 
			</div>	 <!-- Cierre row -->

	<!--<div class="container">   contenedor principal -->
		<div id="btn_encuesta">
			<br>
			<div class="form-group text-center" id="btn_guardar">
				<div class="col-xs-offset-3 col-xs-9">
					<input type="submit" class="btn btn-info" value="Guardar" name= "Guardar" id="guardar">
					<!-- <a href="<?php //echo(site_url());  ?>" class="btn" ><i class="fa fa-home" aria-hidden="true"></i> Cerrar </a> -->
				</div>
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
