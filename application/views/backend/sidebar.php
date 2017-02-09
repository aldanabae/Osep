				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<!--Comienza Menú de usuario-->	
					<ul class="nav ace-nav">
						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">

							<a data-toggle="dropdown" href="#" class="dropdown-toggle" aria-expanded="true">
								<span class="menu-text">
									<small><?php $session_data = $this->session->userdata('logged_in'); 
													echo 'Bienvenido, &nbsp'.$session_data['nombreE'];?> 
									</small>									
								</span>
								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?php echo base_url() ?>/login/logout">
										<i class="ace-icon fa fa-power-off"></i>
										Salir
									</a>
								</li>
							</ul>

						</li>
						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

		</div><!-- /.navbar-container -->
	</div>
</body>

<!FINALIZA HEADER!-->


<!COMIENZA SIDEBAR!-->

		<!-- /section:basics/navbar.layout -->
	<div class="main-container" id="main-container">

		<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		</script>

			<!-- #section:basics/sidebar -->
		<div id="sidebar" class="sidebar responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>


			<!-- ICONOS DE ACCESOS RAPIDOS!!!


			<div class="sidebar-shortcuts" id="sidebar-shortcuts">
				<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					<button class="btn btn-success">
						<i class="ace-icon fa fa-bar-chart"></i>
					</button>

					<button class="btn btn-info">
						<i class="ace-icon fa fa-ambulance"></i>
					</button>

						<!-- #section:basics/sidebar.layout.shortcuts 
					<button class="btn btn-warning"
						<i class="ace-icon fa fa-user-md"></i>
					</button>

					<button class="btn btn-danger">
						<i class="ace-icon fa fa-cogs"></i>
					</button>
					<!-- /section:basics/sidebar.layout.shortcuts 
				</div>

				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
					<span class="btn btn-success"></span>

					<span class="btn btn-info"></span>

					<span class="btn btn-warning"></span>

					<span class="btn btn-danger"></span>
				</div>
			</div><!-- /.sidebar-shortcuts

			--> 


			<ul class="nav nav-list">

				<?php 
					/*if ($nivel){							
						foreach($nivel->result() as $niv){
      						if ($niv->descripcionNivel == "Directivo"){
				*/?>

				<li class="">
					<a href="<?php echo base_url()?>estadisticas/estadisticasC">
						<i class="menu-icon fa fa-search-plus"></i>
						<span class="menu-text">Auditoria</span>
					</a>

					<b class="arrow"></b>
				</li>

				<?php 
					//if ($nivel){							
					//	foreach($nivel->result() as $niv){
      				//		if ($niv->descripNivel == "Adminitrador Base de Datos" || $niv->descripNivel == "Facilitador" || $niv->descripNivel == "Administrador" || $niv->descripNivel == "Auditor"){
				?>
				<!-- 	
				<li class="">
					<a href="<?php echo base_url()?>pacientes/pacientes">
						<i class="menu-icon fa fa-users"></i>
						<span class="menu-text">
								Pacientes
						</span>			
					</a>
				</li>

				<?php /*		}
						}	
					}
				*/?>

				<?php 
					/*if ($nivel){							
						foreach($nivel->result() as $niv){
      						if ($niv->descripcionNivel == "Recepcionista"){
				*/?>
					
				<li class="">
					<a href="<?php echo base_url()?>admision/admision" >
							<i class="menu-icon fa fa-bed"><img  width="20px" height="20px" src="<?php echo base_url() ?>assets/img/Bed-128.png" /></i>
							<span class="menu-text"> Admisión </span>	
					</a>
					<b class="arrow"></b>
				</li>
				-->
				<?php 	/*	}
						}	
					}
				*/?>

				<?php 
					/*if ($nivel){							
						foreach($nivel->result() as $niv){
      						if ($niv->descripNivel == "Administrador Base de Datos"){
      				*/
				?>

				<li class="">
					<a href="#" class="dropdown-toggle">

						<i class="menu-icon fa fa-pencil-square-o"></i> 

						<span class="menu-text">Encuestas</span>

						<b class="arrow fa fa-angle-down"></b>
					</a>

						<b class="arrow"></b>

							<ul class="submenu">

								<li class="">
									<a href="<?php echo base_url()?>encuesta/index/crear">
										<i class="menu-icon fa fa-caret-right"></i>
										Crear Encuesta
									</a>

									<b class="arrow"></b>
								</li>



								<li class="">
									<a href="<?php echo base_url()?>encuesta/index">
										<i class="menu-icon fa fa-caret-right"></i>
										Ver Encuestas
									</a>

									<b class="arrow"></b>
								</li>




								<li class="">
									<a href="<?php echo base_url()?>encuesta/index">
										<i class="menu-icon fa fa-caret-right"></i>
										Bloques
									</a>

									<b class="arrow"></b>
								</li>								



								<li class="">
									<a href="<?php echo base_url()?>abms/abmHabitacionesC/">
										<i class="menu-icon fa fa-caret-right"></i>
										Registrar Cita
									</a>

									<b class="arrow"></b>
								</li>

								<li class="">
									<a href="<?php echo base_url()?>abms/abmMedicamentosC/">
										<i class="menu-icon fa fa-caret-right"></i>
										Cargar Relevamiento Realizado
									</a>

									<b class="arrow"></b>
								</li>
							</ul>
				</li>

				<?php /*		}
						}	
					}
					*/
				?>


				
				<!--
				

				<?php /*		}
						}	
					}
				*/?>
				-->

				<?php 
				/*	if ($nivel){							
						foreach($nivel->result() as $niv){
      						if ($niv->descripcionNivel == "Directivo" || $niv->descripcionNivel == "Administrador de Base de Datos"){
				*/?>

				<li class="">
					<a href="#" class="dropdown-toggle">

						<i class="menu-icon fa fa-cogs"></i> 

						<span class="menu-text">Gestiones Internas</span>

						<b class="arrow fa fa-angle-down"></b>
					</a>

						<b class="arrow"></b>

							<ul class="submenu">

								<li class="">
									<a href="<?php echo base_url()?>abms/abmEmpleadosC">
										<i class="menu-icon fa fa-caret-right"></i>
										Empleados
									</a>

									<b class="arrow"></b>
								</li>
								
							</ul>
				</li>


				<li class="">
					<a href="<?php echo base_url()?>reportes/reportesC">
						<i class="menu-icon fa fa-list-alt"></i>
						<span class="menu-text"> Reportes</span>
					</a>

					<b class="arrow"></b>
				</li>

					
				<li class="">
					<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text"> Usuarios </span>
							<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

						<ul class="submenu">

							<li class="">
								<a href="<?php echo base_url()?>seguridad/abmUsuariosC">
									<i class="menu-icon fa fa-caret-right"></i>
									Gestionar Usuarios
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="<?php echo base_url()?>seguridad/abmNivelesC">
									<i class="menu-icon fa fa-caret-right"></i>
									Gestionar Niveles de Seguridad
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
				</li>

				<?php /*		}
						}	
					}
				*/?>		

			</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>
				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
		</div>
	
