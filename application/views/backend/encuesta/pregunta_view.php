			<div class="main-content">
				<div class="main-content-inner">


					<div class="page-content">

						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>Encuesta abordaje Poblacional <small>
								</small>
							</h1>
						</div><!-- /.page-header -->



						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" id ="formPregunta" role="form" method ="POST" action="<?php echo base_url().'encuesta/abmpreguntaC/validar'?>">
									<!-- #section: de bloque -->

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bloque </label>

										<div class="col-sm-9">
											<select class="form-control" id="form-field-select-1" name="op_bloque">  

                                                <?php  
                                                    // carga de Bloques
                                                    foreach ($bloques as $bloque){

                                                        echo('<option value="'.$bloque->idBloque.'"> '.$bloque->nroBloque. ' - '.$bloque->nombreBloque.'</option>');
                                                    }	

                                                ?>

											</select>
										</div>
									</div>	
									
									<!-- enunciado -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Enunciado</label>

										<div class="col-sm-9">
											<input id="form-field-1" placeholder="Enunciado de la pregunta" class="col-xs-12" type="text" name="enunciado" required>
										</div>

									</div>
									<!-- Descripcion -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Descripcion</label>

										<div class="col-sm-9">
											<input id="form-field-1" placeholder="Descripcion" class="col-xs-12" type="text" name="descripcion" required>
										</div>

									</div>




									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tipo de Pregunta </label>

										<div class="col-sm-9">
											<select class="form-control" id="form-field-select-1" name="op_tipo">  


                                                <?php  
                                                    // carga de Bloques
                                                    foreach ($tipos as $tipo){

                                                        echo('<option value="'.$tipo->idTipoPregunta.'"> '.$tipo->nombreTipoP.'</option>');
                                                    }	

                                                ?> 

											</select>
										</div>
									</div>	

							

									<div class="form-group ">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags"> </label>

										<div class="col-sm-9">
														<div class="panel panel-default" id="panel-general">
															<div class="panel-heading">Respuestas</div>
															<div class="panel-body" id ="panel-respuestas">
															
																<div class="input-group add-more formSpace" id ="con-preg-1">
			
																	<input class="form-control " id="preg-1" class="col-xs-12" type="text" name=respuesta[] required>
																	<span class="input-group-addon btn-del" id= "btn-del">
																		<i class="ace-icon fa fa-minus"></i>
																	</span>
																</div>

															</div>
															
														<div class="text-right">
                                                                    <button type="button" class="btn btn-sm btn-success" id="btn-nueva">Nueva Respuesta
                                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                                    </button>
																</div>	<br>												
													
														</div>
										</div>									

									 </div>



									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Guardar
											</button>


											
											&nbsp; &nbsp; &nbsp;
											<button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Crear Sub Pregunta
											</button>

                                            &nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Cancelar
											</button>
											
										</div>
									</div>


									</form>
									</div>
								

								


							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>


<!--Para que se vean los botones de la tabla responsive-->


<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
</script>

<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/app/encuesta.js'); ?>"></script>
