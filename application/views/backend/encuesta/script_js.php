	<!--<script type="text/javascript">
		window.jQuery || document.write("<script src='../../../assets/js/jquery.js'>"+"<"+"/script>");
	</script>-->


	<!--<script type="text/javascript">
		if('ontouchstart' in document.documentElement) document.write("<script src='../../../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
	</script>-->
	<!--<script src="../../../assets/js/bootstrap.js"></script>-->

<?php  //var_dump($javascript)  ;

	foreach($javascript as $js){

		echo('<script src="'. base_url('/assets/js/app/'. $js).'"></script><br>');

	}


 ?>
	



 