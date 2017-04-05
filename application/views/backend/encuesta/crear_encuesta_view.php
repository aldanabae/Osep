<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			
			<div class="page-header">
					<h1>
						 Gestionar Encuestas
					</h1>
			</div>	

			<div class="widget-box"><!--Empieza cuadro Modificar Medicamento -->
					<div class="widget-header">
						<h5 class="widget-title">Nueva Encuesta</h5>

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

	
									<form class="form-horizontal" role="form" action="<?php echo base_url('encuesta/abmencuesta/recibirDatos/') ?>" method="post"><!-- Comienza formulario Modificar -->
									  
		                                <div class="form-group"> <!-- Empieza una linea del formulario -->
											<label class="col-sm-3 control-label no-padding-right" for="nombre">Nombre Encuesta </label>

											<div class="col-sm-9">
												<input class="form-control" id="nombre_encuesta" name="nombre_encuesta" value=""  type="text" required>		                        
											</div>
										</div>	                        
										
										<div class="form-group"> <!-- Empieza una linea del formulario -->
											<label class="col-sm-3 control-label no-padding-right" for="descripcion">Descripción </label>

											<div class="col-sm-9">
												<input class="form-control" id="descripcion" name="descripcion" value=""  type="text"required>				                                
											</div> <!-- Cambiar lo de date picker??? -->
										</div>







										<div class="clearfix form-actions"> <!-- Empiezan botones de modificar y limpiar -->
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
			</div><!--Termina cuadro Modificar Medicamento -->	

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

