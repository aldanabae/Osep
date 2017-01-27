<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			<div class="page-header">
				<h1>
					Gestionar Responsables
				</h1>
			</div>	
			
			<div class="widget-box"> <!-- Empieza el recuadro con su titulo -->

				<div class="widget-header">
					<h5 class="widget-title">Registrar Nuevo Usuario</h5>
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
							<form class="form-horizontal" role="form" action="<?php echo base_url() ?>seguridad/abmUsuariosC/recibirDatos/" method="post" name="formMedicamento"><!-- Comienza formulario -->

								<?php if ($empleado){
										foreach ($empleado->result() as $emp){ 														
                        		?>
									
								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="apellidoE"> Apellido Empleado </label>
										<div class="col-sm-4">
											<input class="form-control" id="apellidoE" value="<?=$emp->apellidoE?>" name="apellidoE" placeholder="" readonly type="text">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="nombreE"> Nombres Empleado </label>
										<div class="col-sm-4">
											<input class="form-control" id="nombreE" name="nombreE" value="<?=$emp->nombreE?>" placeholder="" readonly type="text">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="dni">Nº Documento </label>
										<div class="col-sm-4">
											<input class="form-control" id="dni" name="dniR" placeholder="" value="<?=$emp->dni?>" readonly type="number" min="1000000" max="70000000">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="tipoResponsable"> N° Legajo </label>
										<div class="col-sm-4">
											<!-- Agregar Tipo de Empleado si es que va-->
											<input class="form-control" id="nroLegajo" name="nroLegajo" placeholder="" value="<?=$emp->nroLegajo?>" readonly type="text">

											<input class="hidden" id="idEmpleado" name="idEmpleado" placeholder="" value="<?=$emp->idEmpleado?>" type="">
						               	</div> 
								</div>

								<?php
										}
									}
								?>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="usuario"> Usuario(*) </label>
										<div class="col-sm-4">
											<input class="form-control" id="usuario" name="usuario" placeholder=""  type="text">
						                </div> 
								</div>

								<div class="form-group"> <!-- Empieza una linea del formulario -->
									<label class="col-sm-3 control-label no-padding-right" for="contrasenia"> Contraseña(*) </label>
										<div class="col-sm-4">
											<input class="form-control" id="contrasenia" name="contrasenia" placeholder=""  type="text">
						                </div> 
								</div>


								<div class="form-group"> <!-- Empieza linea del form con desplegable -->
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tipo Nivel </label>

										<div class="col-sm-4">
											<div>
												<select class="form-control" id="nivel" name="nivel"><!-- Codigo de Combo con datos de la BD -->

													<?php foreach ($nivelU->result() as $niv){							
                        							?>

													<option value="<?=$niv->idNivel?>"><?=$niv->descripNivel;?></option>
																					
													<?php
														}
													?>

												</select>
											</div>									
										</div>
								</div>
														
								<div class="clearfix form-actions"> <!-- Empiezan botones de guardar y limpiar -->
									<div class="col-md-offset-3 col-md-9">
										<button class="btn btn-info" type="submit" name="GuardarEnDB">
											<i class="ace-icon fa fa-check bigger-110"></i>
												Guardar
										</button>

										&nbsp; &nbsp; &nbsp;
										<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>
												Limpiar
										</button>
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
			window.jQuery || document.write("<script src='../../../assets/js/jquery.js'>"+"<"+"/script>");
		</script>


		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../../../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="../../../assets/js/bootstrap.js"></script>