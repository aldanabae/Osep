
$(function() {

    $('.date-picker').datepicker({   // dispara Datepicker
        autoclose: true,
        todayHighlight: true
    })


    $('[data-toggle="popover"]').popover(); 

	
	
	    if ( localStorage.getItem('general')){
            //localStorage.removeItem("general");
			
			//alert('hay datos debo cargarlos en el form');
			var local = localStorage.getItem('general')
			//console.log(local);
        }else{
			
			//alert('debo cargar una nueva instancia de general')
			
		}

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

	filtro.init();



});


		function cargarLocalidades(idDpto, selected= null){
			//var idDpto = $('#departamento').val();
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
						cargarCombo(resp, selected);
					}
					else{
						//document.getElementById("localidad").disabled=true;
					}},
				 error: function(xhr,status) { 
					console.log(xhr+"    "+status);
				},
			});
		}



		function cargarCombo(listaLoc, itemSelected= null){
			// document.getElementById("localidad").options.length=0;
			// document.getElementById("localidad").options[0]=new Option();

			var combo=$("#localidad");
				combo.html("")

			if(itemSelected == null){

				combo.append('<option value="" disabled selected hidden>Seleccionar</option>');
				for (var i in listaLoc){
					combo.append('<option value="'+listaLoc[i].id_tlocalidad +'">'+ listaLoc[i].descloc +'</option>');
				}

			}else{

				for (var i in listaLoc){

					if(listaLoc[i].id_tlocalidad == itemSelected){

						combo.append('<option value="'+listaLoc[i].id_tlocalidad +'"selected>'+ listaLoc[i].descloc +'</option>');

					}else{

						combo.append('<option value="'+listaLoc[i].id_tlocalidad +'">'+ listaLoc[i].descloc +'</option>');

					}

				}

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
				calle: false,   //si completa calle 
				numero: false,  // y si completa numero  barrio  y MC  no es necesario
				tel_enc: ""
			},
			
			init: function(){
				// inicio del modulo  condicional a si esta abierto el relev
				var valor= $('#hdnloc').val();

				filtro.bindComponent();  // bindeo eventos de los componentes

				if(valor != ""){ // si es distinto de vacio recreo los datos

					filtro.refresh();
				}

				filtro.update(); //Actualizo los datos

			},
		
			refresh: function(){     // actualiza los datos en el modelito segun lo que trae de la bd  si tiene abierto el relevameinto

					//cargo edades en el array
					var edades = $('#hdnedades').val();
					var embarazo = $('#hdnembarazo').val();
					var departamento = $('#hdndep').val();
					var localidad = $('#hdnloc').val();
					var cantidad = $('#cantidad').val();
					//=====================================
					filtro.data.edades= edades.split(",");

					//modifico variable de barrio
					var barrio = $('#barrio').val();
					if(barrio != ""){
						filtro.data.barrio= true;
					}else{
						filtro.data.barrio= false;
					}

					//modifico variable de calle
					var calle = $('#calle').val();

					if(calle != ""){
						filtro.data.calle= true;
					}else{
						filtro.data.calle= false;
					}	

					//modifico variable de numero
					var numero = $('#numero').val();

					if(numero != "" ){

						if( numero == "-1"){

							filtro.data.numero= false;
							$('#numero').val("");
							$('#numero').attr('disabled', 'true');
							$('#b0_sin_numero').prop('checked', 'true')

						}else{

							filtro.data.numero= true;

						}

					}else{
						filtro.data.numero= false;
					}	


					// modifico el estado y valor 0 es si   1 es no embarazadas

					filtro.data.valor= embarazo;

					if(embarazo == "0"){

						filtro.data.estado= true;

					}else{

						filtro.data.estado= false;
					}

					// modifico cantidad de integrantes
						filtro.data.limit= cantidad;
					
					// peticion ajax a localidades
					$("#departamento option[value=" + departamento +"]").attr("selected", true); // seteo el select departamento
					cargarLocalidades(departamento , localidad);

					$("#embarazo option[value=" + embarazo +"]").attr("selected", true); // seteo el select de embarazadas
					
				
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


				if (filtro.data.calle && filtro.data.numero){

					$("#barrio , #barrio_c , #barrio_m ").attr('required', false);

				}else{


					$("#barrio , #barrio_c , #barrio_m ").attr('required', true);
					$("#calle , #numero ").attr('required', false);

				}


				// actualizo los campos de manzana y casa  
				if(filtro.data.barrio ){

					$('#manzana').show()
					// $("#barrio , #barrio_c , #barrio_m ").attr('required', true);
					// //  deshabilito el require de calle y nomero
					// $("#calle , #numero ").attr('required', false);

				}else{

					$('#manzana').hide()
					//$("#manzana :input").val("")
					// $("#barrio , #barrio_c , #barrio_m ").attr('required', false);
					// //  deshabilito el require de calle y nomero
					// $("#calle , #numero ").attr('required', true);

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
								var limite = filtro.data.limit;

								if ((edad != "" && edad >= 11 ) && (filtro.data.edades.length < limite )){     // filtra edad a partir de 11 años

									filtro.data.edades.push(edad) ;
									filtro.update();	

								}

						});
							
						$( "#departamento" ).on( 'change', function(){  // evento para cargar localidades 

							var idDpto = $('#departamento').val();
							cargarLocalidades(idDpto);

						});

						$( "#tel_titular").on(
							'focusout', function(){
								var telefono = $('#tel_titular').val();

								if (telefono != "" ){     // filtra edad a partir de 11 años

									filtro.data.tel_enc = telefono ;
									filtro.update();	

								}

						});

						$( "#cantidad").on(
							'focusout', function(){

								cantidad = parseInt($('#cantidad').val());
								filtro.data.limit = cantidad ;
								filtro.update();	

						});

						$( "#cantidad").on(
							'keyup', function(){
								var valor = parseInt($('#cantidad').val());
								if(valor >20 || valor <= 0 ){

									alert('el numero de integrantes esta fuera del limite estipulado')
									$('#cantidad').val("");
									$('#cantidad').focus();
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

						$( "#calle" ).on(
							'keyup', function(){  // evento para actualizar si coloco barrio 

								var calle = $('#calle').val();

									if (calle != ""){  

										filtro.data.calle = true ;
											
									}else{

										filtro.data.calle = false ;

									}

								filtro.update();

						});

						$( "#numero" ).on(
							'keyup', function(){  // evento para actualizar si coloco barrio 

								var numero = $('#numero').val();

								if (numero != ""){  

									filtro.data.numero = true ;
										
								}else{

									filtro.data.numero = false ;

								}

								filtro.update();
						});
						$( "#b0_sin_numero" ).on(
							'change', function(){  // evento para colocar calle sin numero
								
								$('#numero').val('');
								if ($('#b0_sin_numero').prop('checked')){  

									filtro.data.numero = true ;
									$('#numero').attr('disabled', 'true');
										
								}else{

									$('#numero').removeAttr("disabled");
									filtro.data.numero = false ;

								}

								filtro.update();
						});
						$( "#nom_facilitador" ).on(
							'change', function(){  // evento para redireccionar la url con el nombre
								var valor = $(this).val();
								var segment= 'encuesta/cargarEncuesta/'+ valor;
								var url = $("#localPath").val();
								location.href = url + segment;

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

