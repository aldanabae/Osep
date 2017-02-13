<div class="main-content">
				<div class="main-content-inner">


					<div class="page-content">

						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>crear Bloques<small><?php echo $encuesta ?>
								</small>
							</h1>
						</div><!-- /.page-header -->



						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" id ="formPregunta" role="form" method ="POST" action="<?php echo base_url().'encuesta/abmbloque/validar/'?>">
									<!-- #section: de bloque -->

                                        <input type="hidden" name="encuesta" value="<?php echo $encuesta ?>">

									<div class="form-group ">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags"> </label>

										<div class="col-sm-9">
														<div class="panel panel-default" id="panel-general">
															<div class="panel-heading">Añadir bloques</div>
															<div class="panel-body" id ="panel-respuestas">
															
																<div class="input-group add-more formSpace" id ="con-preg-1">
			
																	<input class="form-control " id="preg-1" class="col-xs-12" type="text" name=bloque[] required>
																	<span class="input-group-addon btn-del" id= "btn-del">
																		<i class="ace-icon fa fa-minus"></i>
																	</span>
																</div>

															</div>
															
														<div class="text-right">
                                                                    <button type="button" class="btn btn-sm btn-success" id="btn-nueva">Nuevo Bloque
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
<script>

$(document).ready(function(){

    var next = 1;
    $("#btn-nueva").on('click', function(e) {
    //alert('El valor es: ');	
        e.preventDefault();
        next++;

    $('#panel-respuestas').append( '<div class="input-group add-more formSpace" id ="con-preg-'+next+'"><input class="form-control " id="preg-'+next+'" class="col-xs-12" type="text" name=bloque[] required><span class="input-group-addon btn-del" id= ""><i class="ace-icon fa fa-minus"></i></span></div>');

    })
	

    $("body").on("click",".btn-del",function(e){
            e.preventDefault();
            if(next > 1){
            
                $(this).parent('div').remove(); //eliminar el campo
                next--;
            }
            return false;


    });
 
});


</script>