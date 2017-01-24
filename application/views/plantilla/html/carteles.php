<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		
		<meta name="description" content="Restyling jQuery UI Widgets and Elements" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.css" />
		<link rel="stylesheet" href="../assets/css/font-awesome.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="../assets/css/jquery-ui.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

		<script src="../assets/js/ace-extra.js"></script>
	</head>

	<body class="no-skin">
												
		<a href="#" id="id-btn-dialog2" class="btn btn-info btn-sm">Confirmar</a>
		<a href="#" id="id-btn-dialog1" class="btn btn-purple btn-sm">Mensaje</a>

		<div id="dialog-message" class="hide">
			<p class="bigger-110 bolder center grey">
				<i class="blue bigger-120"></i> Texto mensaje.
			</p>
		</div>

		<div id="dialog-confirm" class="hide">
			<p class="bigger-110 bolder center grey">
				<i class="bigger-120"></i> Texto confirmar.
			</p>
		</div>
		
		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery.js'>"+"<"+"/script>");
		</script>
		
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		
		<script src="../assets/js/bootstrap.js"></script>

		<script src="../assets/js/jquery-ui.js"></script>
		
		<script src="../assets/js/jquery.ui.touch-punch.js"></script>

		<script type="text/javascript">
			jQuery(function($) {
											
				//override dialog's title function to allow for HTML titles
				$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
					_title: function(title) {
						var $title = this.options.title || '&nbsp;'
						if( ("title_html" in this.options) && this.options.title_html == true )
							title.html($title);
						else title.text($title);
					}
				}));
			
				$( "#id-btn-dialog1" ).on('click', function(e) {
					e.preventDefault();
			
					var dialog = $( "#dialog-message" ).removeClass('hide').dialog({
						modal: true,
						title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon fa fa-check'></i> Titulo mensaje</h4></div>",
						title_html: true,
						buttons: [ 
							{
								text: "Aceptar",
								"class" : "btn btn-primary btn-minier",
								click: function() {
									$( this ).dialog( "close" ); 
								} 
							}
						]
					});
				});
			
			
				$( "#id-btn-dialog2" ).on('click', function(e) {
					e.preventDefault();
				
					$( "#dialog-confirm" ).removeClass('hide').dialog({
						resizable: false,
						width: '320',
						modal: true,
						title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Titulo confirmar</h4></div>",
						title_html: true,
						buttons: [
							{
								html: "<i class='ace-icon fa fa-check bigger-110'></i>&nbsp; Aceptar",
								"class" : "btn btn-primary btn-minier",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
							,
							{
								html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancelar",
								"class" : "btn btn-danger btn-minier",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
						]
					});
				});
			});
		</script>
	</body>
</html>