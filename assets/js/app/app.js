
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

	filtro.bindComponent();
	filtro.update();


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
			// document.getElementById("localidad").options.length=0;
			// document.getElementById("localidad").options[0]=new Option();

			var combo=$("#localidad");
			combo.append('<option value="" disabled selected hidden>Seleccionar</option>');
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
			limit: "",       // fija un limite de integrantes si viven 5  no pueden haber mas de 5 embarazadas
			barrio: false,	// si completa barrio  o no debe condicionar 
			tel_enc: ""

		},
		
		template: '#filter_embarazo', // marco el id del filtro que debo desplegar
		update: function(){

			// aqui va a eliminar  o agregar las edades en una lista  y  los hidden 
			
			if(this.data.estado == true && this.data.valor == '0'){

				this.show_me(); // si esta en verdadero 
				// recorro el arreglo colocando los numeros de edades
				// creo el campo hidden
				$('#list_edades').unbind("click");
					var listHtml = ""    // pongo el String de html en blanco
				
					$.each( this.data.edades , function (index, valor){

						
						listHtml+= '<li>'+ valor +' años <a href="#" data-index = "'+ index +'"><span class="glyphicon glyphicon-remove"></span></a></li>';
						listHtml+= '<input type="hidden" name="edades_emb[]"  value="'+ valor +'">'; // el hidden 

					})                            
                                            
					$('#list_edades').html(listHtml);
					$('#edad_embarazo').val("");
					$('#list_edades a').on('click', function(event){ 

						var datos = $(this).data("index"); // tomo el atributo data de la lista
						//alert('click en el enlace'+ datos);
						event.preventDefault();
						filtro.data.edades.splice(datos,1)
						filtro.update();
					});



			}else{

				this.hide_me();
				$('#edad_embarazo').val("");
				this.data.edades.length=0;

			}

			// actualizo los campos de manzana y casa  
			if(filtro.data.barrio){

				$('#manzana').show()
				$("#barrio , #barrio_c , #barrio_m ").attr('required', true);
				//  deshabilito el require de calle y nomero
				$("#calle , #numero ").attr('required', false);

			}else{

				$('#manzana').hide()
				$("#manzana :input").val("")
				$("#barrio , #barrio_c , #barrio_m ").attr('required', false);
				//  deshabilito el require de calle y nomero
				$("#calle , #numero ").attr('required', true);

			}

			if (filtro.data.tel_enc != ""){

				$('#tel_super').val(filtro.data.tel_enc)
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
							var edad = $('#edad_embarazo').val();

							if (edad != "" && edad >= 11){     // filtra edad a partir de 11 años

								filtro.data.edades.push(edad) ;
								filtro.update();	

							}

                    });


                    $( "#tel_titular").on(
                        'focusout', function(){
							var telefono = $('#tel_titular').val();

							if (telefono != "" ){     // filtra edad a partir de 11 años

								filtro.data.tel_enc = telefono ;
								filtro.update();	

							}

                    });


                    $( "#barrio" ).on(
                        'keyup', function(){

							var barrio = $('#barrio').val();

								if (barrio != ""){     // filtra edad a partir de 11 años

									filtro.data.barrio = true ;
										
								}else{

									filtro.data.barrio = false ;



								}

							filtro.update();

                    });


        },



        show_me: function(){

            // Mostrar el bloque
            $( filtro.template ).show();
            filtro.data.estado= true;
        },

        hide_me: function(){
            // ocultar el bloque
            $( filtro.template ).hide();
            filtro.data.estado= false;
        }, 



		}