<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			
				<div class="page-header">
						<h1>
							 Gestionar Usuarios
						</h1>
				</div>	

						<div class="widget-box"><!--Empieza cuadro Modificar Medicamento -->
								<div class="widget-header">
									<h5 class="widget-title">Modificar Usuario </h5>

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

														<?php if ($usuario){
															foreach ($usuario->result() as $us){
                        								?>

														<form class="form-horizontal" role="form" action="<?php echo base_url() ?>seguridad/abmUsuariosC/actualizarDatos/<?= $us->idUsuario;?>" method="post"><!-- Comienza formulario Modificar -->

														
					                                     <div class="form-group"> <!-- Empieza una linea del formulario -->
															<label class="col-sm-3 control-label no-padding-right" for="usuario">Usuario(*)</label>

															<div class="col-sm-4">
																<input class="form-control" id="usuario" name="usuario" value="<?= $us->usuario;?>"  type="text">
																<input class="hidden" id="idEmpleado" name="idEmpleado" placeholder="" value="<?=$us->idEmpleado?>" type="">	
					                                            
															</div>
														</div>	                        
														

														<div class="form-group"> <!-- Empieza una linea del formulario -->
															<label class="col-sm-3 control-label no-padding-right" for="contrasenia">Contraseña(*) </label>

															<div class="col-sm-4">
																<input class="form-control" id="contrasenia" name="contrasenia" value=""  type="text">
					                                            
															</div> <!-- Cambiar lo de date picker??? -->
														</div>


														<div class="form-group"> <!-- Empieza linea del form con desplegable -->
															<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nivel</label>

															<div class="col-sm-4">
																<div>
																		<select class="form-control" aria-controls="dynamic-table" id="nivel" name="nivel" value="<?= $us->descripNivel;?>">

																			<?php foreach ($nivelU->result() as $niv){
                           														
                        													?>

                        													<option value="<?=$niv->idNivel?>" <?php if($niv->idNivel == $us->idNivel){?> selected <?php }?>><?=$niv->descripNivel;?></option>

																			<?php
																				}
																			?>

																		</select>
																</div>
															</div>
														</div>
														

														<div class="clearfix form-actions"> <!-- Empiezan botones de modificar y limpiar -->
															<div class="col-md-offset-3 col-md-9">
																<button class="btn btn-info" type="submit" name="ActualizarEnDB">
																	<i class="ace-icon fa fa-check bigger-110"></i>
																	Modificar
																</button>

																&nbsp; &nbsp; &nbsp;
																<button class="btn" type="reset">
																	<i class="ace-icon fa fa-undo bigger-110"></i>
																	Limpiar
																</button>
															</div>
														</div>

														</form><!-- Termina formulario -->	

														<?php
																}
															}
														?>

													</div>
											</div>
								</div>
			</div><!--Termina cuadro Modificar Medicamento -->	

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
