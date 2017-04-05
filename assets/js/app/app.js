
$(function() {

    $('.date-picker').datepicker({
        autoclose: true,
        todayHighlight: true
    })


    $("#encuesta_ini").submit(function () { 

        var retorno = false;   // variable de retorno para el submit
    // debo comprobar la existencia de la variable local
        if ( localStorage.getItem('general')){

            localStorage.removeItem("general");

        }



        var general = $("#bloque_0").find("select, textarea, input").serializeArray();

        localStorage.setItem('general' , JSON.stringify(general));

        retorno= true;

        return retorno;

    })



});


		function cargarLocalidades(){
			var idDpto = $('#departamento').val();
			var path   = $("#localPath").val();
			var parametros = {
			"id_dpto" : idDpto
			};
			$.ajax({
				type: 'POST',
				url: path+'index.php/abms/abmVisitasC/getLocalidades', 
				data: parametros, 
			       	dataType: 'json',
				success: function(resp) { 
					if(resp){
						cargarCombo(resp);
					}
					else{
						//document.getElementById("localidad").disabled=true;
					}},
				 error: function(xhr,status) { 
					console.log(xhr+"    "+status);
				},
			});
		}



		function cargarCombo(listaLoc){
			document.getElementById("localidad").options.length=0;
			document.getElementById("localidad").options[0]=new Option("Selecciona una opcion", "0");

			var combo=$("#localidad");
	        for (var i in listaLoc){
	            combo.append('<option value="'+listaLoc[i].id_tlocalidad +'">'+ listaLoc[i].descloc +'</option>');
	        }
		}