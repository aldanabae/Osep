<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			
				<div class="page-header">
						<h1>
							 Gestion de Encuestas
						</h1>
				</div>				
					
		<!-- Empieza el cuadro con Medicamentos de la bd -->	
		<form class="form-horizontal" role="form" action="<?php echo base_url() ?>seguridad/abmNivelesC/mostrarTablaNiveles" method="post"><!-- Comienza formulario -->
						
			<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
				<div class="row">

					<div class="col-xs-6">
						<div class="dataTables_length" id="longitudTabla">
							<label>Mostrar 
							<select aria-controls="dynamic-table" class="form-control input-sm" name="longitudTabla">
								<option value="1000">Todos</option>
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="40">40</option>
								<option value="60">60</option>
								<option value="80">80</option>
								<option value="100">100</option>
							</select> lineas
							</label>
						</div>
					</div>

					<div class="col-xs-6">
							<div id="dynamic-table_filter" class="dataTables_filter">

								<label>Nombre encuesta:
									<input type="search" class="form-control input-sm" placeholder="" name="nombresNiveles" aria-controls="dynamic-table">
								</label>

								<button class="btn btn-warning btn-xs" type="submit" nombre="CargarTabla">
									<i class="ace-icon fa fa-search  bigger-110 icon-only"></i>
								</button>

							</div>
					</div>
				</div>

				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
							<tr>
								<th>Nombre Encuesta</th>
                                <th>Descripcion</th>
								<th>
									<div class="hidden-sm hidden-xs action-buttons text-center">
										<a class="orange" href="<?php echo base_url()?>encuesta/index/crear">
											<i class="ui-icon ace-icon fa fa-plus-circle orange bigger-130"></i>Agregar Encuesta
										</a>
									</div>
								</th>
							</tr>
					</thead>

					<tbody>

						<?php //Limitar los datos segun lo que trae el select de cantidad de lineas a mostrar
							// if ($tablaNiveles){
							// $contador = 0;
									
							// 	foreach($tablaNiveles->result() as $tabla){

							// 		if( $contador == $limiteTabla )    break;
						?>

						<tr>
							<td>
								<label class="pos-rel">
									<?php  //= // $tabla->descripNivel;?>
								</label>
							</td>
							<td>
								<label class="pos-rel">
									<?php  //= // $tabla->descripNivel;?>
								</label>
							</td>							
							
							<td>
								<div class="hidden-sm hidden-xs action-buttons">
										
										<a class="green" href="<?php echo base_url()?>seguridad/abmNivelesC/editarNivel/<?//= $tabla->idNivel;?>">
											<i class="ace-icon fa fa-pencil bigger-130"></i>	
										</a>

										<a class="red" href="<?php echo base_url()?>seguridad/abmNivelesC/borrarNivel/<?//= $tabla->idNivel;?>">
											<i class="ace-icon fa fa-trash-o bigger-130"></i>
										</a>
								</div>

								<div class="hidden-md hidden-lg">
										<div class="inline pos-rel">

											<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
												<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
											</button>

											<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
													
													<li>
														<a href="<?php echo base_url()?>seguridad/abmNivelesC/editarNivel/<?//= $tabla->idNivel;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
															<span class="green">
																<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
															</span>
														</a>
													</li>

													<li>
														<a href="<?php echo base_url()?>seguridad/abmNivelesC/borrarNivel/<?//= $tabla->idNivel;?>" class="tooltip-error" data-rel="tooltip" title="Delete">
															<span class="red">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</span>
														</a>
													</li>
											</ul>
										</div>
								</div>
							</td>
						</tr>

						<?php	 //$contador++;}

							//}	
						?>

					</tbody>
				</table>

			</div><!-- Termina el cuadro con Medicamentos de la bd -->

		</form>

		</div><!-- /.page-content -->
	</div><!-- /.main-content-inner -->
</div><!-- /.main-content -->



<!--Para que se vean los botones de la tabla responsive-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery.js'>"+"<"+"/script>");
		</script>


		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.js"></script>