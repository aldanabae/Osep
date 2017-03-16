<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			<div class="page-header">
				<h1>
					Pactar Visita con Afiliado
				</h1>
			</div>	
			<div class="widget-box"> <!-- Empieza el recuadro con su titulo -->

				<div class="widget-header">
					<h5 class="widget-title">Registrar Futura Visita</h5>
					<!-- #section:custom/widget-box.toolbar -->
					<div class="widget-toolbar">
						<a href="#" data-action="collapse">
							<i class="ace-icon fa fa-chevron-up"></i>
						</a>		
					</div>
					<!-- /section:custom/widget-box.toolbar -->
				</div>

				<div class="widget-body">
					<div class="widget-main">
						<div class="widget-main">
							<form class="form-horizontal" role="form" name="edit_dptos" action="<?php echo base_url() ?>abms/abmVisitasC/recibirDatos/" method="post"><!-- Comienza formulario -->
								
								<div class="form-group">
									<div class="control-group">
										<label class="col-sm-3 control-label">Llamadas Realizadas(*)</label>

										<div class="radio">
											<label>
												<input class="ace" type="radio" name="nroLlamada" value="1">
												<span class="lbl"> Una Llamada</span>
											</label>
												
											<label>
												<input class="ace" type="radio" name="nroLlamada" value="2">
												<span class="lbl">Dos Llamadas</span>
											</label>
									
											<label>
												<input class="ace" type="radio" name="nroLlamada" value="3">
												<span class="lbl">Tres Llamadas</span>
											</label>
										</div>
									</div>
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="nroAfiliado"> N° Afiliado(*) </label>
										<div class="col-sm-4">
											<input class="form-control" id="nroAfiliado" name="nroAfiliado" placeholder="- - / - - - - - - - - - / - -"  type="number" 
												 title="Se deben introducir 2 digitos para el Tipo de Documento, 8 para el N° de Documento y 2 para el Tipo de Afiliado. Todo junto sin espacios ni guiones o barras">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="nombreA"> Nombres Afiliado(*)</label>
										<div class="col-sm-4">
											<input class="form-control" id="nombreA" name="nombreA" placeholder=""  type="text">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="apellidoA"> Apellidos Afiliado(*)</label>
										<div class="col-sm-4">
											<input class="form-control" id="apellidoA" name="apellidoA" placeholder=""  type="text">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="telefono"> Teléfono(*) </label>
										<div class="col-sm-4">
											<input class="form-control" id="telefono" name="telefono" placeholder=""  type="tel">
						                </div> 
								</div>
								
								<?php if ($diaHoy && $mesHoy && $anioHoy){
									
								?>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="fechaHoy"> Fecha </label>
										<div class="col-sm-4">
											<input class="form-control" id="fechaHoy" name="fechaHoy" placeholder="" readOnly value="<?=$diaHoy."-".$mesHoy."-".$anioHoy;?>">
						                </div> 
								</div>

								<?php }
								?>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="fechaVisita"> Fecha Visita(*) </label>
										<div class="col-sm-4">
											<input class="form-control" id="fechaVisita" name="fechaVisita" placeholder=""  type="date">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="horaVisita"> Hora Visita(*)</label>
										<div class="col-sm-4">
											<input class="form-control" id="horaVisita" name="horaVisita" placeholder=""  type="time" >
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza linea del form con desplegable -->
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Departamento(*) </label>
										<div class="col-sm-4">
											<div class="select-dpto">
												<select class="form-control" id="departamento" name="departamento" onchange="cargarLocalidades()">
													<?php if ($departamentos){
															foreach($departamentos->result() as $dptos){
													?>
													<option value="<?=$dptos->id_tdeparta?>"><?=$dptos->descdep;?></option>												
													<?php
															}
														}
													?>
												</select>
											</div>									
										</div>
								</div>

								<div class="form-group"> <!-- Empieza linea del form con desplegable -->
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Localidad/Distrito(*) </label>
										<div class="col-sm-4">
											<div id="id_localidad">
												<select class="form-control" id="localidad" name="localidad"><!-- Codigo de Combo con datos de la BD -->

														<!-- Combo se carga con JS -->

												</select>
											</div>									
										</div>
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="barrio"> Barrio </label>
										<div class="col-sm-4">
											<input class="form-control" id="barrio" name="barrio" placeholder=""  type="text" >
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="direccion"> Calle(*) </label>
										<div class="col-sm-4">
											<input class="form-control" id="direccion" name="direccion" placeholder=""  type="text" >
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right"> Número</label>
										<div class="col-sm-1">
											<input class="form-control" id="numero" name="numero" placeholder=""  type="nro">
						                </div> 
						            <label class="col-sm-2 control-label no-padding-right" > Número Departamento</label>
										<div class="col-sm-1">
											<input class="form-control" id="nroDpto" name="nroDpto" placeholder=""  type="nro">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right"> Manzana </label>
										<div class="col-sm-1">
											<input class="form-control" id="manzana" name="manzana" placeholder=""  type="text">
						                </div> 
						            <label class="col-sm-2 control-label no-padding-right" > Casa </label>
										<div class="col-sm-1">
											<input class="form-control" id="casa" name="casa" placeholder=""  type="nro">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="horaVisita">Entre Calles(*) 1-</label>
										<div class="col-sm-4">
											<input class="form-control" id="calle1" name="calle1" placeholder=""  type="text" >
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="calle2">2-</label>
										<div class="col-sm-4">
											<input class="form-control" id="calle2" name="calle2" placeholder=""  type="text" >
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="observacion">Observaciones</label>
										<div class="col-sm-4">
											<input class="form-control" id="observacion" name="observacion" placeholder=""  type="text" >
						                </div> 
								</div>
														
								<div class="clearfix form-actions"> <!-- Empiezan botones de guardar y limpiar -->
									<div class="col-md-offset-3 col-md-9">
									<label>
										<button class="btn btn-info" type="submit" name="GuardarEnDB">
											<i class="ace-icon fa fa-check bigger-110"></i>
												Guardar
										</button>
									</label>
										&nbsp; &nbsp; &nbsp;
									<label>
										<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>
												Limpiar
										</button>
									</label>
									</div>
								</div>

							</form><!-- Termina formulario -->														
						</div>
					</div>
				</div>

			</div><!--Fin Cuadro Registrar Nuevo Medicamento -->

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



	<script type="text/javascript">
		function cargarLocalidades(){
			var idDpto = $('#departamento').val();

			var parametros = {
			"id_dpto" : idDpto,
			};
			$.ajax({
				type: 'POST',
				url: '<?php echo base_url(); ?>index.php/abms/abmVisitasC/getLocalidades', 
				data: parametros, 
			       	dataType: 'json',
				success: function(resp) { 
					if(resp){
						cargarCombo(resp);
					}
					else{
						document.getElementById("localidad").disabled=true;
					}},
				 error: function(xhr,status) { 
					console.log(xhr+"    "+status);
				},
			});
		}

		function cargarCombo(listaLoc){
			document.getElementById("localidad").options.length=0;
			document.getElementById("localidad").options[0]=new Option("Selecciona una opcion", "0");

			var combo=$("#localidad");
	        for (var i in listaLoc){
	            combo.append('<option value="'+listaLoc[i].id_tlocalidad +'">'+ listaLoc[i].descloc +'</option>');
	        }
		}
	</script>

