<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			<div class="page-header">
				<h1>
					Gestionar Empleados
				</h1>
			</div>	
			<div class="widget-box"> <!-- Empieza el recuadro con su titulo -->

				<div class="widget-header">
					<h5 class="widget-title">Registrar Nuevo Empleado</h5>
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
							<form class="form-horizontal" role="form" action="<?php echo base_url() ?>abms/abmEmpleadosC/recibirDatos/" method="post" name="formMedicamento"><!-- Comienza formulario -->
								
								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="apellidoE"> Apellidos Empleado(*) </label>
										<div class="col-sm-4">
											<input class="form-control" id="apellidoE" name="apellidoE" placeholder=""  type="text">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="nombreE"> Nombres Empleado(*) </label>
										<div class="col-sm-4">
											<input class="form-control" id="nombreE" name="nombreE" placeholder=""  type="text">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="nroLegajo"> N° Legajo(*) </label>
										<div class="col-sm-4">
											<input class="form-control" id="nroLegajo" name="nroLegajo" placeholder=""  type="number">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="dni">Nº Documento(*) </label>
										<div class="col-sm-4">
											<input class="form-control" id="dni" name="dni" placeholder=""  type="number" min="1000000" max="70000000">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="telefono"> Teléfono </label>
										<div class="col-sm-4">
											<input class="form-control" id="telefono" name="telefono" placeholder=""  type="tel">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="email"> E-Mail</label>
										<div class="col-sm-4">
											<input class="form-control" id="email" name="email" placeholder=""  type="email">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="direccion"> Dirección </label>
										<div class="col-sm-4">
											<input class="form-control" id="direccion" name="direccion" placeholder=""  type="text">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza linea del form con desplegable -->
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tipo Empleado(*) </label>
									<div class="col-sm-4">
											<div>
												<select class="form-control" id="tipoEmpleado" name="tipoEmpleado"><!-- Codigo de Combo con datos de la BD -->
													<option value="">--- Seleccione Tipo Empleado ---</option>
													<option value="Auditor">Auditor</option>
													<option value="Administrador">Administrador</option>
													<option value="Administrador Base de Datos">Administrador Base de Datos</option>
													<option value="Directivo">Directivo</option>
													<option value="Facilitador">Facilitador</option>
												</select>
											</div>
									</div>
								</div>

								<div class="form-group"> <!-- Empieza linea del form con desplegable -->
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tipo Convenio(*) </label>
									<div class="col-sm-4">
											<div>
												<select class="form-control" id="convenio" name="convenio"><!-- Codigo de Combo con datos de la BD -->
													<option value="">--- Seleccione Tipo Convenio ---</option>
													<option value="Planta Permanente">Planta Permanente</option>
													<option value="Contratado">Contratado</option>
													<option value="3"></option>
													<option value="4"></option>
													<option value="5"></option>
												</select>
											</div>
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
