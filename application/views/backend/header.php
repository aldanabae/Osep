<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>OSEP</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.jpg" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-fonts.css" />
		<!--estilos propios de osep-->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styleOsep.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url() ?>assets/js/ace-extra.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
		<script src="<?php echo base_url() ?>assets/js/respond.js"></script>
		<![endif]-->
	</head>

<!COMIENZA HEADER!-->
	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">	
							<small>
							<!--<i class="fa fa-stethoscope"></i>-->
							<img src="<?php echo base_url() ?>assets/images/osep.jpg" width="60%" heigth="50%">
							<!--S.S.I.-->
							</small>		
					</a>

				</div>