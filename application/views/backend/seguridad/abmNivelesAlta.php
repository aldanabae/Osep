<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			
				<div class="page-header">
						<h1>
							 Gestionar Niveles de Seguridad
						</h1>
				</div>	

				<div class="widget-box"> <!-- Empieza el recuadro con su titulo -->
							<div class="widget-header">
								<h5 class="widget-title">Registrar Nuevo Nivel</h5>

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

												<?php echo validation_errors('<div class="errors">','</div>');
														?>

													<form class="form-horizontal" role="form" action="<?php echo base_url() ?>seguridad/abmNivelesC/recibirDatos/" method="post" name="formEnfermedad"><!-- Comienza formulario -->
								
														

						                           		<div class="form-group"> <!-- Empieza una linea del formulario -->
															<label class="col-sm-3 control-label no-padding-right" for="descripcionNivel">Nombre Nivel(*) </label>

															<div class="col-sm-4">
																<input class="form-control" id="descripcionNivel" name="descripcionNivel" placeholder=""  type="text">        
															</div> 
														</div>

														<!-- /section:elements.form -->
														<div class="clearfix form-actions"> <!-- Empiezan botones de guardar y limpiar -->
															<div class="col-md-offset-3 col-md-9">
																<button class="btn btn-info" align="center" type="submit" name="GuardarEnDB">
																	<i class="ace-icon fa fa-check bigger-110"></i>
																		Guardar
																</button>

																<button class="btn" align="center" type="reset">
																	<i class="ace-icon fa fa-undo bigger-110"></i>
																		Limpiar
																</button>
															</div>
														</div>

													</form><!-- Termina formulario -->														
											</div>
									</div>
							</div>
				</div><!--Fin Cuadro Registrar Nueva Enfermedad -->

<?php //if($mensaje!=""){ echo"<script>alert('".$mensaje."')</script>"; } ?>


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