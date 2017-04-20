
$(function() {

    $('.date-picker').datepicker({   // dispara Datepicker
        autoclose: true,
        todayHighlight: true
    })


    $("#encuesta_ini").submit(function () { 

        var retorno = false;   // variable de retorno para el submit
    // debo comprobar la existencia de la variable local
        if ( localStorage.getItem('general')){

            localStorage.removeItem("general");
        }

        var general = $("#bloque_0").find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();
		
		var tmp = parseData(general);

        localStorage.setItem('general' , JSON.stringify(tmp));

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


		function parseData(arreglo){
			var parse= [];

			arreglo.forEach(function(element) {

				//parse = { 'idRespuesta': element.name  , 'idRespuesta': element.value }

				parse.push({'idPregunta': element.name ,
					 'idRespuesta' : element.value})
				
			});


			return parse;


		}


		function parseDato(arreglo){
			var parse= {};

			arreglo.forEach(function(element) {

				parse[element.name]= element.value
				
			});


			return parse;


		}

		var filtro ={
		
		data:{			// todos los datos que se mueven en el control
			valor: '1', // no se ve
			edades:[],		// guardo un array de edades
			estado: false,
			limit: ""       // fija un limite de integrantes si viven 5  no pueden haber mas de 5 embarazadas

		},
		
		template: '#filter_embarazo', // marco el id del filtro que debo desplegar
		update: function(){

			// aqui va a eliminar  o agregar las edades en una lista  y  los hidden 
			
			if(this.data.estado == true && this.data.valor == '0'){

				this.show_me(); // si esta en verdadero 
				// recorro el arreglo colocando los numeros de edades
				// creo el campo hidden
				var listHtml = ""    // pongo el String de html en blanco
				listHtml= '<ul>';														// abro el Ul
					$.each( this.data.edades , function (index, valor){

						
						listHtml+= '<li>'+ valor +' años <a href="#" data-index = "1"><span class="glyphicon glyphicon-remove"></span></a></li>';
						listHtml+= '<input type="hidden" name="localPath[]"  id="" value="33">'; // el hidden 

				

					
					})
				listHtml+= '</ul>';														// cierro el Ul
				$('#list_edades').html(listHtml);

			}else{

				this.hide_me();
				this.data.edades.length=0;

			}



		},

		bindComponent: function(){

                    $( "#embarazo" ).on(
                        'change, click', function(){

							var datoSelect = $(this).val();
                           
								if(datoSelect == '0'){ // es un si

									filtro.data.estado= true;

								}else{  // es un no

									filtro.data.estado= false;
								}

							filtro.data.valor= datoSelect;
                            filtro.update();
                    });
                    $( "#btn_nueva_edad" ).on(
                        'click', function(){
							
                            filtro.data.edades.push($(this).val()) ;
                            filtro.update();

                    });
        },



        show_me: function(){

            // Mostrar el bloque
            $( filtro.template ).show("slow");
            filtro.data.estado= true;
        },

        hide_me: function(){
            // ocultar el bloque
            $( filtro.template ).hide("slow");
            filtro.data.estado= false;
        }, 



		}