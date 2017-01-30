<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			
				<div class="page-header">
						<h1>
							 Gestionar Empleados
						</h1>
				</div>				
					

		<!-- Empieza el cuadro con Responsables de la bd -->	
	<form class="form-horizontal" role="form" action="<?php echo base_url() ?>abms/abmEmpleadosC/mostrarTablaEmpleados" method="post"><!-- Comienza formulario -->
			
			
		<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
				<div class="row">

					<div class="col-xs-6">
						<div class="dataTables_length" id="tipoTabla">
							<label>Mostrar Tipo Empleado
							<select aria-controls="dynamic-table" class="form-control input-sm" name="tipoTabla" OnChange= "tipoROnChange(this)">
								<option value="1">Todos</option>
								<option value="3">Auditor</option>
								<option value="4">Administrador</option>
								<option value="7">Administrador Base de Datos</option>
								<option value="5">Directivo</option>
								<option value="2">Facilitador</option>							
							</select> 
							</label>
						</div>
					</div>

					<div class="col-xs-6">
							<div id="dynamic-table_filter" class="dataTables_filter">

								<label>Nº Documento:
									<input type="search" class="form-control input-sm" placeholder="" name="dniR" aria-controls="dynamic-table">
								</label>

								<button class="btn btn-warning btn-xs" type="submit" nombre="CargarTabla">
									<i class="ace-icon fa fa-search  bigger-110 icon-only"></i>
								</button>

							</div>
					</div>
				</div>




			<div id="todos" style="display:;">

				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
							<tr>
								<th>Apellido y Nombre</th>
								<th>Nº Documento</th>
								<th>Teléfono</th>
								<th>Tipo Empleado</th>
								<th>
									<div class="hidden-sm hidden-xs action-buttons">
										<a class="orange" href="<?php echo base_url() ?>abms/abmEmpleadosC/cargarNuevoEmpleado">
											<i class="ui-icon ace-icon fa fa-plus-circle orange bigger-130"></i>Agregar Empleado
										</a>
									</div>
								</th>
							</tr>
					</thead>

					<tbody>

						<?php //Limitar los datos segun lo que trae el select de cantidad de lineas a mostrar
							if ($tablaEmpleados){
							$contador = 0;
									
								foreach($tablaEmpleados->result() as $tabla){

									if( $contador == $limiteTabla )    break;
						?>

						<tr>
							<td>
								<label class="pos-rel">
									<?php echo $tabla->apellidoE; ?> <?php echo $tabla->nombreE; ?>
								</label>
							</td>
							<td><?= $tabla->dni;?></td>
							<td><?= $tabla->telefono;?></td>
							<td><?= $tabla->tipoEmpleado;?></td><!-- Nombre via de administracion no codigo -->
							
							<td>
								<div class="hidden-sm hidden-xs action-buttons">
										
										<a class="green" href="<?php echo base_url()?>abms/abmEmpleadosC/editarEmpleado/<?= $tabla->idEmpleado;?>">
											<i class="ace-icon fa fa-pencil bigger-130"></i>	
										</a>

										<a class="red" href="<?php echo base_url()?>abms/abmEmpleadosC/borrarEmpleado/<?= $tabla->idEmpleado;?>">
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
													<a href="<?php echo base_url()?>abms/abmEmpleadosC/editarEmpleado/<?= $tabla->idEmpleado;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
														<span class="green">
															<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
														</span>
													</a>
												</li>

												<li>
													<a href="<?php echo base_url()?>abms/abmEmpleadosC/borrarEmpleado/<?= $tabla->idEmpleado;?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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

						<?php	 $contador++;}

							}	
						?>

					</tbody>
				</table>
			</div> 




			<div id="medico" style="display:none;">

				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
							<tr>
								<th>Apellido y Nombre</th>
								<th>Nº Documento</th>
								<th>Teléfono</th>
								<th>Tipo Responsable</th>
								<th>Matrícula</th>
								<th>Especialidad</th>
								<th>
									<div class="hidden-sm hidden-xs action-buttons">
										<a class="orange" href="<?php echo base_url() ?>abms/abmResponsablesC/cargarNuevoEmpleado">
											<i class="ui-icon ace-icon fa fa-plus-circle orange bigger-130"></i>Agregar Empleado
										</a>
									</div>
								</th>
							</tr>
					</thead>

					<tbody>

						<?php //Limitar los datos segun lo que trae el select de cantidad de lineas a mostrar
							if ($tablaResponsables){
							$contador = 0;
									
								foreach($tablaResponsables->result() as $tabla){

									if( $contador == $limiteTabla )    break;

										if($tabla->tipoResponsable == "Médico"){
						?>

						<tr>
							<td>
								<label class="pos-rel">
									<?php echo $tabla->apellidoR; ?> <?php echo $tabla->nombreR; ?>
								</label>
							</td>
							<td><?= $tabla->dniR;?></td>
							<td><?= $tabla->telefonoR;?></td>
							<td><?= $tabla->tipoResponsable;?></td>
							<td><?= $tabla->matricula;?></td>
							<td><?= $tabla->nombreEspecialidad;?></td>
							
							<td>
								<div class="hidden-sm hidden-xs action-buttons">
										
										<a class="green" href="<?php echo base_url()?>abms/abmResponsablesC/editarResponsable/<?= $tabla->codResponsable;?>">
											<i class="ace-icon fa fa-pencil bigger-130"></i>	
										</a>

										<a class="red" href="<?php echo base_url()?>abms/abmResponsablesC/borrarResponsable/<?= $tabla->codResponsable;?>">
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
													<a href="<?php echo base_url()?>abms/abmResponsablesC/editarResponsable/<?= $tabla->codResponsable;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
														<span class="green">
															<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
														</span>
													</a>
												</li>

												<li>
													<a href="<?php echo base_url()?>abms/abmResponsablesC/borrarResponsable/<?= $tabla->codResponsable;?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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

						<?php	 				}
								$contador++;}

							}	
						?>

					</tbody>
				</table>
			</div>




			<div id="enfermero" style="display:none;">

				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
							<tr>
								<th>Apellido y Nombre</th>
								<th>Nº Documento</th>
								<th>Teléfono</th>
								<th>Tipo Responsable</th>
								<th>Legajo Enfermero</th>
								<th>Servicio</th>
								<th>
									<div class="hidden-sm hidden-xs action-buttons">
										<a class="purple" href="<?php echo base_url() ?>abms/abmResponsablesC/cargarNuevoResponsable">
											<i class="ui-icon ace-icon fa fa-plus-circle purple bigger-130"></i>Agregar
										</a>
									</div>
								</th>
							</tr>
					</thead>

					<tbody>

						<?php //Limitar los datos segun lo que trae el select de cantidad de lineas a mostrar
							if ($tablaResponsables){
							$contador = 0;
									
								foreach($tablaResponsables->result() as $tabla){

									if( $contador == $limiteTabla )    break;

										if($tabla->tipoResponsable == "Enfermero"){
						?>

						<tr>
							<td>
								<label class="pos-rel">
									<?php echo $tabla->apellidoR; ?> <?php echo $tabla->nombreR; ?>
								</label>
							</td>
							<td><?= $tabla->dniR;?></td>
							<td><?= $tabla->telefonoR;?></td>
							<td><?= $tabla->tipoResponsable;?></td>
							<td><?= $tabla->nroLegajo;?></td>
							<td><?= $tabla->nombreServicio;?></td><!-- Nombre via de administracion no codigo -->
							
							<td>
								<div class="hidden-sm hidden-xs action-buttons">
										
										<a class="green" href="<?php echo base_url()?>abms/abmResponsablesC/editarResponsable/<?= $tabla->codResponsable;?>">
											<i class="ace-icon fa fa-pencil bigger-130"></i>	
										</a>

										<a class="red" href="<?php echo base_url()?>abms/abmResponsablesC/borrarResponsable/<?= $tabla->codResponsable;?>">
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
													<a href="<?php echo base_url()?>abms/abmResponsablesC/editarResponsable/<?= $tabla->codResponsable;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
														<span class="green">
															<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
														</span>
													</a>
												</li>

												<li>
													<a href="<?php echo base_url()?>abms/abmResponsablesC/borrarResponsable/<?= $tabla->codResponsable;?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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

						<?php					}
								$contador++;}

							}	
						?>

					</tbody>
				</table>
			</div>


			<div id="recepcionista" style="display:none;">

				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
							<tr>
								<th>Apellido y Nombre</th>
								<th>Nº Documento</th>
								<th>Teléfono</th>
								<th>Tipo Responsable</th>
								<th>
									<div class="hidden-sm hidden-xs action-buttons">
										<a class="purple" href="<?php echo base_url() ?>abms/abmResponsablesC/cargarNuevoResponsable">
											<i class="ui-icon ace-icon fa fa-plus-circle purple bigger-130"></i>Agregar
										</a>
									</div>
								</th>
							</tr>
					</thead>

					<tbody>

						<?php //Limitar los datos segun lo que trae el select de cantidad de lineas a mostrar
							if ($tablaResponsables){
							$contador = 0;
									
								foreach($tablaResponsables->result() as $tabla){

									if( $contador == $limiteTabla )    break;

										if($tabla->tipoResponsable == "Recepcionista"){
						?>

						<tr>
							<td>
								<label class="pos-rel">
									<?php echo $tabla->apellidoR; ?> <?php echo $tabla->nombreR; ?>
								</label>
							</td>
							<td><?= $tabla->dniR;?></td>
							<td><?= $tabla->telefonoR;?></td>
							<td><?= $tabla->tipoResponsable;?></td><!-- Nombre via de administracion no codigo -->
							
							<td>
								<div class="hidden-sm hidden-xs action-buttons">
										
										<a class="green" href="<?php echo base_url()?>abms/abmResponsablesC/editarResponsable/<?= $tabla->codResponsable;?>">
											<i class="ace-icon fa fa-pencil bigger-130"></i>	
										</a>

										<a class="red" href="<?php echo base_url()?>abms/abmResponsablesC/borrarResponsable/<?= $tabla->codResponsable;?>">
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
													<a href="<?php echo base_url()?>abms/abmResponsablesC/editarResponsable/<?= $tabla->codResponsable;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
														<span class="green">
															<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
														</span>
													</a>
												</li>

												<li>
													<a href="<?php echo base_url()?>abms/abmResponsablesC/borrarResponsable/<?= $tabla->codResponsable;?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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

						<?php	 		}
						$contador++;}

							}	
						?>

					</tbody>
				</table>
			</div>


			<div id="directivo" style="display:none;">

				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
							<tr>
								<th>Apellido y Nombre</th>
								<th>Nº Documento</th>
								<th>Teléfono</th>
								<th>Tipo Responsable</th>
								<th>
									<div class="hidden-sm hidden-xs action-buttons">
										<a class="purple" href="<?php echo base_url() ?>abms/abmResponsablesC/cargarNuevoResponsable">
											<i class="ui-icon ace-icon fa fa-plus-circle purple bigger-130"></i>Agregar
										</a>
									</div>
								</th>
							</tr>
					</thead>

					<tbody>

						<?php //Limitar los datos segun lo que trae el select de cantidad de lineas a mostrar
							if ($tablaResponsables){
							$contador = 0;
									
								foreach($tablaResponsables->result() as $tabla){

									if( $contador == $limiteTabla )    break;

										if($tabla->tipoResponsable == "Directivo"){
						?>

						<tr>
							<td>
								<label class="pos-rel">
									<?php echo $tabla->apellidoR; ?> <?php echo $tabla->nombreR; ?>
								</label>
							</td>
							<td><?= $tabla->dniR;?></td>
							<td><?= $tabla->telefonoR;?></td>
							<td><?= $tabla->tipoResponsable;?></td><!-- Nombre via de administracion no codigo -->
							
							<td>
								<div class="hidden-sm hidden-xs action-buttons">
										
										<a class="green" href="<?php echo base_url()?>abms/abmResponsablesC/editarResponsable/<?= $tabla->codResponsable;?>">
											<i class="ace-icon fa fa-pencil bigger-130"></i>	
										</a>

										<a class="red" href="<?php echo base_url()?>abms/abmResponsablesC/borrarResponsable/<?= $tabla->codResponsable;?>">
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
													<a href="<?php echo base_url()?>abms/abmResponsablesC/editarResponsable/<?= $tabla->codResponsable;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
														<span class="green">
															<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
														</span>
													</a>
												</li>

												<li>
													<a href="<?php echo base_url()?>abms/abmResponsablesC/borrarResponsable/<?= $tabla->codResponsable;?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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

						<?php	 		}
						$contador++;}

							}	
						?>

					</tbody>
				</table>
			</div>


			<div id="admin" style="display:none;">

				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
							<tr>
								<th>Apellido y Nombre</th>
								<th>Nº Documento</th>
								<th>Teléfono</th>
								<th>Tipo Responsable</th>
								<th>
									<div class="hidden-sm hidden-xs action-buttons">
										<a class="purple" href="<?php echo base_url() ?>abms/abmResponsablesC/cargarNuevoResponsable">
											<i class="ui-icon ace-icon fa fa-plus-circle purple bigger-130"></i>Agregar
										</a>
									</div>
								</th>
							</tr>
					</thead>

					<tbody>

						<?php //Limitar los datos segun lo que trae el select de cantidad de lineas a mostrar
							if ($tablaResponsables){
							$contador = 0;
									
								foreach($tablaResponsables->result() as $tabla){

									if( $contador == $limiteTabla )    break;

										if($tabla->tipoResponsable == "Administrador"){
						?>

						<tr>
							<td>
								<label class="pos-rel">
									<?php echo $tabla->apellidoR; ?> <?php echo $tabla->nombreR; ?>
								</label>
							</td>
							<td><?= $tabla->dniR;?></td>
							<td><?= $tabla->telefonoR;?></td>
							<td><?= $tabla->tipoResponsable;?></td><!-- Nombre via de administracion no codigo -->
							
							<td>
								<div class="hidden-sm hidden-xs action-buttons">
										
										<a class="green" href="<?php echo base_url()?>abms/abmResponsablesC/editarResponsable/<?= $tabla->codResponsable;?>">
											<i class="ace-icon fa fa-pencil bigger-130"></i>	
										</a>

										<a class="red" href="<?php echo base_url()?>abms/abmResponsablesC/borrarResponsable/<?= $tabla->codResponsable;?>">
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
													<a href="<?php echo base_url()?>abms/abmResponsablesC/editarResponsable/<?= $tabla->codResponsable;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
														<span class="green">
															<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
														</span>
													</a>
												</li>

												<li>
													<a href="<?php echo base_url()?>abms/abmResponsablesC/borrarResponsable/<?= $tabla->codResponsable;?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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

						<?php	 		}
						$contador++;}

							}	
						?>

					</tbody>
				</table>
			</div>


			<div id="adminDB" style="display:none;">

				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
							<tr>
								<th>Apellido y Nombre</th>
								<th>Nº Documento</th>
								<th>Teléfono</th>
								<th>Tipo Responsable</th>
								<th>
									<div class="hidden-sm hidden-xs action-buttons">
										<a class="purple" href="<?php echo base_url() ?>abms/abmResponsablesC/cargarNuevoResponsable">
											<i class="ui-icon ace-icon fa fa-plus-circle purple bigger-130"></i>Agregar
										</a>
									</div>
								</th>
							</tr>
					</thead>

					<tbody>

						<?php //Limitar los datos segun lo que trae el select de cantidad de lineas a mostrar
							if ($tablaResponsables){
							$contador = 0;
									
								foreach($tablaResponsables->result() as $tabla){

									if( $contador == $limiteTabla )    break;

										if($tabla->tipoResponsable == "Administrador de Base de Datos"){
						?>

						<tr>
							<td>
								<label class="pos-rel">
									<?php echo $tabla->apellidoR; ?> <?php echo $tabla->nombreR; ?>
								</label>
							</td>
							<td><?= $tabla->dniR;?></td>
							<td><?= $tabla->telefonoR;?></td>
							<td><?= $tabla->tipoResponsable;?></td><!-- Nombre via de administracion no codigo -->
							
							<td>
								<div class="hidden-sm hidden-xs action-buttons">
										
										<a class="green" href="<?php echo base_url()?>abms/abmResponsablesC/editarResponsable/<?= $tabla->codResponsable;?>">
											<i class="ace-icon fa fa-pencil bigger-130"></i>	
										</a>

										<a class="red" href="<?php echo base_url()?>abms/abmResponsablesC/borrarResponsable/<?= $tabla->codResponsable;?>">
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
													<a href="<?php echo base_url()?>abms/abmResponsablesC/editarResponsable/<?= $tabla->codResponsable;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
														<span class="green">
															<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
														</span>
													</a>
												</li>

												<li>
													<a href="<?php echo base_url()?>abms/abmResponsablesC/borrarResponsable/<?= $tabla->codResponsable;?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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

						<?php	 		}
						$contador++;}

							}	
						?>

					</tbody>
				</table>
			</div>

<script>
function tipoROnChange(sel) {
    if (sel.value=="1"){
        	divT = document.getElementById("todos");
      		divT.style.display = "";

       		divM = document.getElementById("medico");
      		divM.style.display = "none";

      		divE = document.getElementById("enfermero");
      		divE.style.display = "none";

      		divE = document.getElementById("recepcionista");
      		divE.style.display = "none";

      		divE = document.getElementById("directivo");
      		divE.style.display = "none";

      		divE = document.getElementById("admin");
      		divE.style.display = "none";

      		divE = document.getElementById("adminDB");
      		divE.style.display = "none";

    }else if (sel.value=="2"){
     		divT = document.getElementById("todos");
      		divT.style.display = "none";

       		divM = document.getElementById("medico");
      		divM.style.display = "";

      		divE = document.getElementById("enfermero");
      		divE.style.display = "none";

      		divE = document.getElementById("recepcionista");
      		divE.style.display = "none";

      		divE = document.getElementById("directivo");
      		divE.style.display = "none";

      		divE = document.getElementById("admin");
      		divE.style.display = "none";

      		divE = document.getElementById("adminDB");
      		divE.style.display = "none";

	}else if (sel.value=="3"){
       		divT = document.getElementById("todos");
      		divT.style.display = "none";

       		divM = document.getElementById("medico");
      		divM.style.display = "none";

      		divE = document.getElementById("enfermero");
      		divE.style.display = "";

      		divE = document.getElementById("recepcionista");
      		divE.style.display = "none";

      		divE = document.getElementById("directivo");
      		divE.style.display = "none";

      		divE = document.getElementById("admin");
      		divE.style.display = "none";

      		divE = document.getElementById("adminDB");
      		divE.style.display = "none";

    }else if (sel.value=="4"){
       		divT = document.getElementById("todos");
      		divT.style.display = "none";

       		divM = document.getElementById("medico");
      		divM.style.display = "none";

      		divE = document.getElementById("enfermero");
      		divE.style.display = "none";

      		divE = document.getElementById("recepcionista");
      		divE.style.display = "";

      		divE = document.getElementById("directivo");
      		divE.style.display = "none";

      		divE = document.getElementById("admin");
      		divE.style.display = "none";

      		divE = document.getElementById("adminDB");
      		divE.style.display = "none";

    }else if (sel.value=="5"){

       		divT = document.getElementById("todos");
      		divT.style.display = "none";

       		divM = document.getElementById("medico");
      		divM.style.display = "none";

      		divE = document.getElementById("enfermero");
      		divE.style.display = "none";

      		divE = document.getElementById("recepcionista");
      		divE.style.display = "none";

      		divE = document.getElementById("directivo");
      		divE.style.display = "";

      		divE = document.getElementById("admin");
      		divE.style.display = "none";

      		divE = document.getElementById("adminDB");
      		divE.style.display = "none";

    }else if (sel.value=="6"){
       		divT = document.getElementById("todos");
      		divT.style.display = "none";

       		divM = document.getElementById("medico");
      		divM.style.display = "none";

      		divE = document.getElementById("enfermero");
      		divE.style.display = "none";

      		divE = document.getElementById("recepcionista");
      		divE.style.display = "none";

      		divE = document.getElementById("directivo");
      		divE.style.display = "none";

      		divE = document.getElementById("admin");
      		divE.style.display = "";

      		divE = document.getElementById("adminDB");
      		divE.style.display = "none";

    }else if (sel.value=="7"){
       		divT = document.getElementById("todos");
      		divT.style.display = "none";

       		divM = document.getElementById("medico");
      		divM.style.display = "none";

      		divE = document.getElementById("enfermero");
      		divE.style.display = "none";

      		divE = document.getElementById("recepcionista");
      		divE.style.display = "none";

      		divE = document.getElementById("directivo");
      		divE.style.display = "none";

      		divE = document.getElementById("admin");
      		divE.style.display = "none";

      		divE = document.getElementById("adminDB");
      		divE.style.display = "";
    }
}

</script>

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



<!--Para que se vean los botones de la tabla responsive-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='../../assets/js/jquery.js'>"+"<"+"/script>");
		</script>


		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="../../assets/js/bootstrap.js"></script>


