
// inicializo bloques
var bloque_btn= $("#btn_encuesta");
//var bloque9= $("#bloque_9");

$(function() {
  // Handler for .ready() called.

  bloque1.bindComponent();

  // 1 SI  Y 2 ES NO
    


});


var encuesta ={

            titular: true,      // si es titular o no
            afiliado: '',       // numero de afiliado
            integrantes: 0,     // antidad de encuestados
            responde: false,    // si responde la encuesta o no    
            embarazo: {
                estado: false,  //aray de embarazo que viene de la primera vista
                edad  : [],


            },
            count: 0,          // contador de encuestas
            usar_otronum: false,

            init: function(){

                var emb= $('#embarazo').val();

                if(emb == '0' && emb != ''){

                    encuesta.embarazo.estado= true;
                    var edad_emb = $('#edades').val().split(',');  // genero el arreglo de edad o edades
                    encuesta.embarazo.edad =  cleanArray(edad_emb); //  lo limpio de elementos vacios

                }else{

                    encuesta.embarazo.estado = false;
                    encuesta.embarazo.edad = 0;

                }

                encuesta.integrantes = parseInt( $('#integrantes').val());
                encuesta.count= parseInt($('#hdnCantidad_encuestados').val());

                if (encuesta.count == 0){

                    encuesta.responde = false ;

                }else{

                    encuesta.responde = true ;

                }
                    

            },
            reset_conf:function(){
            encuesta.titular= false         // si es titular o no
            encuesta.afiliado=''            // numero de afiliado
            encuesta.responde= false        // si responde la encuesta o no   
            


            }
        

}

var bloque1= {    // Bloque General


        estado: true,
        conf: {
            
            nombre: null,       // nombre del encuestado
            edad: null,         // edad del encuestado
            genero: "M",        // masculino femenino
            osep: '1',          // si tiene osep es 1   si no es 2 
            embarazo: '2',      // embarazo  1 si  2 no
            discapacidad: '2',  // discapacidad   2   no  1 s1
            ocupacion:  null,   // guarda el id de ocupacion
            pariente: '',       // pariente a cargo
            acargo:[],          // array de afiliados fuera de este hogar
            encuestados: 1,     // numero de cantidad de encuestados
            consulta: "",       // para los varones de 15  a 64
            titular_referencia:"",  // numero de titular de referencia, el prinmero que entrevista
            update: function(){

                bloque1.update_data();
            }

        },

        reset_conf:function(){

            bloque1.conf.nombre= null,
            bloque1.conf.edad=null,
            bloque1.conf.genero= "M",
            bloque1.conf.osep= '1',
            bloque1.conf.embarazo= '2',
            bloque1.conf.discapacidad= '2',
            bloque1.conf.ocupacion=  null,
            bloque1.conf.pariente= '',
            bloque1.conf.acargo=[],
                    encuesta.titular=false,
                    encuesta.afiliado=''
            if(encuesta.responde){

                $('#id_responde').hide()
            }else{

                $('#id_responde').show()
            }

            if(encuesta.count > 0){

                $('#afiliado_externo').hide()

            }else{

                $('#afiliado_externo').show()

            }
            encuesta.reset_conf();

            //dejar opcional el DNI
            $('#b1_dni').attr('required', false);
            // le saco el asterisco
            $('#b1_txt_dni').text("Dni");

            //===============
            bloque9.estado=false,
            bloque7.estado= false,
            bloque6.estado= false,
            bloque5.estado= false,
            bloque4.estado= false,
            bloque3a.estado= false // unificar
            bloque3b.estado= false // unificar
            $('body, html').animate({
            scrollTop: '0px'
        }, 300);
        
        },

        template: {
            // asigno el nombre del selector de bloque
            html: '#bloque_1'
        },

        data:{

                vinculo:[{"id_resp":5,"vinculo":"Titular"},{"id_resp":6,"vinculo":"Cónyuge o pareja conviviente"},{"id_resp":7,"vinculo":"Hijo /a"},{"id_resp":8,"vinculo":"Padre o Madre"},{"id_resp":9,"vinculo":"Suegro /a"},{"id_resp":10,"vinculo":"Yerno o Nuera"},{"id_resp":11,"vinculo":"Nieto /a"},{"id_resp":12,"vinculo":"Otro familiar"},{"id_resp":13,"vinculo":"Otro no familiar"},],

                tOsep:{si:[{"id_resp":14,"respuesta":"No, sólo OSEP"},{"id_resp":15,"respuesta":"Otra obra social"},{"id_resp":16,"respuesta":"Prepaga"},{"id_resp":17,"respuesta":"Otra cobertura"},],no:[{"id_resp":138,"respuesta":"No (Salud Pública)"},{"id_resp":139,"respuesta":"Obra social"},{"id_resp":16,"respuesta":"Prepaga"},{"id_resp":17,"respuesta":"Otra cobertura"},]},

                educativo:[{"id_resp":18,"respuesta":"Inicial"},{"id_resp":19,"respuesta":"Primario incompleto"},{"id_resp":20,"respuesta":"Primario completo"},{"id_resp":21,"respuesta":"Secundario incompleto"},{"id_resp":22,"respuesta":"Secundario completo"},{"id_resp":23,"respuesta":"Terciario incompleto"},{"id_resp":24,"respuesta":"Terciario completo"},{"id_resp":25,"respuesta":"Universitario incompleto"},{"id_resp":26,"respuesta":"Universitario completo"},]
                
        },

        init: function(){

            bloque_btn.hide();     // botonera abajo 
            encuesta.init();        // inicializo la encuesta
            var integrantes = parseInt($('#integrantes').val());
            bloque1.mapeoEncuestados(integrantes)  // analizo y grafico el mapa de encuestados
            bloque3a.init();
            bloque3b.init();
            bloque4.init();
            bloque5.init();
            bloque6.init();
            bloque9.init();
            bloque7.init();
            //cargar el listado de vinculos
                        // por omicion el primero es el titular
            if(encuesta.count == 0){
                // cargo el combo solo con el titular
                
                $("#lblTitular").text('Apellido y nombre del titular ')
                $("#b1_parent").html( '<option value="5">Titular</option>');
                $("#tOsep").hide();


            }else{
                // cargo el combo normal
                $("#tOsep").show(); // muestro opciones de cobertura
                

                $("#lblTitular").text('Apellido y nombre')
                $("#b1_parent").html( '<option value="" disabled selected hidden>Seleccionar</option>');
                    // aqui cargo los vinculos completos

                    $.each(bloque1.data.vinculo, function(key, value){
                    
                        $("#b1_parent").append( '<option value="'+ value.id_resp +'">'+ value.vinculo +'</option>');

                    });
                
            }

            $('#b1_div_cual').hide(); // oculto el campo que pregunta cual

            $('#b1_afiliado_varon').hide(); // oculto el formulario de varon entre 15 y 64

            $('#b1_otro_numero_afiliado').hide(); // oculto el formulario de varon entre 15 y 64


            //============= carga del mapa de encuestados


            

            bloque1.conf.update();

        },

        update_data: function(){


            if(encuesta.titular){

                $("#b1_afiliado").val(encuesta.afiliado);  // muestro el numero del titular
                $("#b1_barra").val("00");  // muestro el numero del titular

            }else{   // entonces es aderente del titular que se cargo al principio

                if(encuesta.usar_otronum){

                    
                    var num= $("#b1_afiliado").val();
                    var num_actual = num.replace('/','');

                    if($('#b1_dni').val() == num_actual){

                        $("#b1_afiliado").val($('#b1_dni').val());
                    }


                }else{

                    $("#b1_afiliado").val(bloque1.conf.titular_referencia );

                }


            }

            // verifico si es un adherente , como segunda encuenta cargada

            if(encuesta.count >=1){

                $('#b1_otro_numero_afiliado').show(); // muestro el check de
            }else{

                 $('#b1_otro_numero_afiliado').hide(); // oculto el formulario de varon entre 15 y 64
            }


            // verifico si tiene osep


            if(bloque1.conf.osep == '1'){

                $( "#b1_div_afiliado" ).show("slow");   // muestra el txt de numero de afiliado
                $("#b1_cober").html( '');               // blanquea el select
                    $.each(bloque1.data.tOsep.si, function(key, value){  // carga el select con el Si

                        $("#b1_cober").append( '<option value="'+ value.id_resp +'">'+ value.respuesta +'</option>');

                    });
                
                //$("#afiliado_externo").show();


            }else{
                
                $("#b1_div_afiliado" ).hide("slow"); // oculta el txt de numero de afiliado
                $("#b1_cober").html('');              // blanquea el select
                $.each(bloque1.data.tOsep.no, function(key, value){   // carga el select

                    $("#b1_cober").append( '<option value="'+ value.id_resp +'">'+ value.respuesta +'</option>');

                });                
                
                //$("#afiliado_externo").hide(); 

            }

            // verifico nivel educativo

                if(bloque1.conf.edad >= 4 ){

                    $("#educativo").show();

                }else{

                    $("#educativo").hide();

                }


            $( "#b1_osep" ).val(bloque1.conf.osep);
            $("#b1_osep[value=1]").attr("selected",true);

            if(bloque1.conf.osep === "1"){   // si tiene o no tiene osep  cambia la pregunta

                $('#b1_label_cober').text('¿Tiene otra cobertura de salud?')

            }else{

                $('#b1_label_cober').text('¿Tiene alguna cobertura de salud?')

            }

            // verifico genero
            if(bloque1.conf.genero == 'M'){  // si es hombre oculto todo

                $( "#b1_div_embarazo" ).hide();
                bloque1.conf.embarazo= '2';

            }else{                  // si es mujer evaluo la situacion


                if(encuesta.embarazo.estado){       // Si marco como que hay embarazon en la casa

                    var edad_match = false;
                    $.each(encuesta.embarazo.edad, function(index, valor){

                        if (valor == bloque1.conf.edad){

                            edad_match= true;
                        }
                    });

                    if (edad_match){  // si una de las edades coincide muestro el combo de embarazo

                        $( "#b1_div_embarazo" ).show();

                    }

                }else{                                   // si no hay embarazon en la casa oculto todo

                    $( "#b1_div_embarazo" ).hide();
                    bloque1.conf.embarazo= '2';
                }


            }

            if(bloque1.conf.discapacidad == '1'){

                $("#b1_disc option[value=1]").attr("selected",true);

            }else{

                $("#b1_disc option[value=2]").attr("selected",true);

            }

            // independiente si es afiliado o no


            // verifico D ocupacionales
            if(bloque1.conf.edad != null){

                if(bloque1.conf.edad > 14){

                        bloque9.show_me();
                    
                        switch (bloque1.conf.ocupacion) {
                        case '27':
                            
                            $( "#bloque_9_int" ).show();
                            $( "#bloque_9_int_juv" ).hide();
                            break;
                        case '28':
                            $( "#bloque_9_int_juv" ).show();
                            $( "#bloque_9_int" ).hide();
                            break;

                        case '29':
                            $( "#bloque_9_int" ).show();
                            $( "#bloque_9_int_juv" ).hide();

                            break;
                        default:
                            //Sentencias_def ejecutadas cuando no ocurre una coincidencia con los anteriores casos
                            $( "#bloque_9_int" ).hide();
                            $( "#bloque_9_int_juv" ).hide();
                            break;
                        }


                }else{

                    
                    bloque9.hide_me();

                }
            }

             // fin filtro datos ocupacionales  

             if(bloque1.conf.pariente == "2" || bloque1.conf.pariente == ""){

                $( "#b1_adicional").hide();

                // borrar el arreglo

             }else{
                // aqui hacer el bucle y cargar los que hay
                // despues mostrarlo
					var listHtml = ""    // pongo el String de html en blanco
				
					$.each( bloque1.conf.acargo , function (index, valor){

						
						listHtml+= '<li class="list-group-item"> Nombre: '+ valor.nombre +'  -  Telefono: '+ valor.telefono +' <a href="#" class="text-right btn-sm" data-index = "'+ index +'"> Quitar </a></li>';
						listHtml+= '<input type="hidden" name="afiliado_extra[]"  value="'+ valor.nombre +'_'+ valor.telefono  +'">'; // el hidden 


					})     

                    $("#b1_acargo").html(listHtml);
                 	$('#b1_adicional_nombre ,#b1_adicional_tel').val("");
					$('#b1_acargo a').on('click', function(event){ 

						var datos = $(this).data("index"); // tomo el atributo data de la lista
						//alert('click en el enlace'+ datos);
						event.preventDefault();
						bloque1.conf.acargo.splice(datos,1)
						bloque1.update_data();
					});
                 $( "#b1_adicional").show();
             }

             // filtro para afiliados de 15 a 65

               if(bloque1.conf.consulta == '1'){

                    $( "#b1_div_consulta_si" ).show("slow");
                    $( "#b1_div_consulta_no" ).hide("slow");
                 
                }else{


                    if(bloque1.conf.consulta =="" || bloque1.conf.consulta =="33" ){

                        $( "#b1_div_consulta_si" ).hide();
                        $( "#b1_div_consulta_no" ).hide();

                    }else{

                        $( "#b1_div_consulta_si" ).hide("slow");
                        $( "#b1_div_consulta_no" ).show("slow");
                    }

                    
                }                
            },

        bindComponent: function(){
                bloque1.init();
                bloque1.update_data();

                    // genero
                    $( "#bloque_1 input[name$='b1_genero']" ).on(
                        'change, click', function(){

                            bloque1.conf.genero= $(this).val();
                            bloque1.conf.embarazo= '2';
                            bloque1.conf.update();

                        });

                        // nombre encuestado
                    $( "#b1_nombre" ).on(
                        'focusout', function(){

                            bloque1.conf.nombre= $(this).val();
                            bloque1.conf.update();

                        });
                        // edad encuestado
                    $( "#b1_edad" ).on(
                        'focusout', function(){

                            bloque1.conf.edad= $(this).val();
                            bloque1.conf.update();

                        });

                        // nivel de estudios
                    $( "#b1_estudio" ).on(
                        'change, click', function(){

                            bloque1.conf.estudio= $(this).val();
                            bloque1.conf.update();

                    });
                        // tiene osep
                    $( "#b1_osep" ).on(
                        'change, click', function(){

                            bloque1.conf.osep= $(this).val();
                            bloque1.conf.update();

                        });

                        // embarazada  si o no
                    $( "#b1_embarazo" ).on(
                        'change, click', function(){

                            bloque1.conf.embarazo= $(this).val();
                            bloque1.conf.update();

                        });

                    $( "#b1_disc" ).on(
                        'change, click', function(){

                            bloque1.conf.discapacidad= $(this).val();
                            bloque1.conf.update();

                    });

                    $( "#b1_ocupacion" ).on(
                        'change', function(){
                            bloque1.conf.ocupacion= $(this).val();
                            bloque1.conf.update();
                            

                    });                     

                    $( "#btn_bloques" ).on(
                        'click', function(){
                            bloque1.init();
                            bloque1.action_block();
                            
                    });   


                        // DNI  encuestado
                    $( "#b1_dni" ).on(
                        'focusout', function(){


                            if(encuesta.count == 0){

                                bloque1.conf.titular_referencia=$(this).val();
                                
                            }
                            encuesta.afiliado= $(this).val()


                            bloque1.conf.update();

                        });

                    // evento para relenar vinculo con el titular  o Titular
                    $( "#b1_parent" ).on(
                        'change, click', function(){

                            var vinculo= $(this).val();

                            if(vinculo == "5"){

                                encuesta.titular= true


                            }else{

                                encuesta.titular= false

                            }

                            bloque1.conf.update();

                    });                        

                    $( "#b1_extra" ).on(
                        'change, click', function(){

                            bloque1.conf.pariente= $(this).val();

                            bloque1.conf.update();
                            

                    });


                    $( "#btn_add_afiliado" ).on(
                        'click', function(){
                           
							var nombre = $('#b1_adicional_nombre').val();
							var tel = $('#b1_adicional_tel').val();

                            if(nombre != "" && tel != ""){

                                    var limit = bloque1.conf.acargo.length;
                                    if ( limit < 5){     // filtra edad a partir de 11 años

                                        bloque1.conf.acargo.push({nombre: nombre, telefono: tel}) ;
                                            
                                    }
                            }

                            bloque1.conf.update();

                            
                    });  


                    $( "#responde" ).on(
                        'click', function(){

 
                        if($("#responde").is(':checked')) {  
                            encuesta.responde = true;
                        } else {  
                            encuesta.responde = false;
                        }  
                    
                        bloque1.conf.update();

                    });  


                    $( "#check_afiliado" ).on(
                        'click', function(){

 
                        if($("#check_afiliado").is(':checked')) {  
                            encuesta.usar_otronum = true;
                            $("#b1_afiliado").val($('#b1_dni').val()); // le pongo el dni en el numero de afiliado solo si lo toco
                        } else {  
                            encuesta.usar_otronum = false;
                        }  
                    
                        bloque1.conf.update();

                    });  


                    // preguntas de utilizacion de servicios

                    $( "#b1_consulta" ).on(
                        'change', function(){

                            bloque1.conf.consulta= $(this).val();
                            bloque1.conf.update();

                    });

                    $( "#b1_div_consulta_no" ).on(
                        'change', function(){
                            var seleccion = $('#b1_atencion_no').val();
                            if(seleccion == "42") {

                                $('#b1_div_cual').show();

                            }else{

                                $('#b1_div_cual').hide();
                                $('#b1_cual').val('');
                            }
                            bloque1.conf.update();

                    }); 
                        

                    $( "#btn_nuevo" ).on(
                        'click', function(){
                            bloque1.parse();
                            // encuesta.count ++;
                            // bloque1.reset_conf();
                            // bloque1.init();
                            
                    });  

                        


            },

        action_block : function(){

            var retorno= bloque1.validate('#add_encuesta');  // devuelve la validacion de campos + id del focus


            if(retorno.validate){

                if(bloque1.conf.osep == "1"){

                    
                    var edad = parseInt(bloque1.conf.edad);

                            if ((edad >= 65 ) && (bloque1.conf.discapacidad === "2") ){  //si es mayor a 65 y no tiene discapacidad  despliego ancianidad

                                    bloque5.show_me();     // adultos
                            }else{


                                if (edad <= 14) {   // si esta entre 2 y 14  niños

                                    if( edad < 2)
                                    {

                                        bloque3a.show_me();   // bebes
                                        bloque3b.hide_me();   // niños 
                                    }else{

                                        bloque3b.show_me();   // niños
                                        bloque3a.hide_me();   // bebes
                                    }

                                }
                            }


                            if (bloque1.conf.discapacidad == '1'){

                                bloque6.show_me();     // discapacidad

                            }else{

                                bloque6.hide_me();     // discapacidad
                            }

                            if ( bloque1.conf.embarazo == '1' ){

                                bloque7.show_me();     // embarazo

                            }else{
                                
                                bloque7.hide_me();     // apago embarazo
                            }                      



                            if((edad >= 15 && edad <= 64) && (bloque1.conf.discapacidad == '2' && bloque1.conf.genero == 'M')){

                                $('#b1_afiliado_varon').show(); // oculto el formulario de 

                            }else{

                                $('#b1_afiliado_varon').hide(); // oculto el formulario de 

                            }

                            if(bloque1.conf.genero == 'F'  )
                            {
                                // me fijo si esta respondiendo la encuesta y si es mujer

                                var responde = $('#responde').prop('checked') ;

                                if((edad == 65 &&  responde) && ( bloque1.conf.embarazo == "2") ){

                                    bloque4.show_me();     // mujeres

                                }


                                if(((edad >= 15 && edad <= 70) )  && ( bloque1.conf.embarazo == "2") ){

                                        bloque4.show_me();     // mujere

                                }else{

                                        bloque4.hide_me();     // mujeres

                                    
                                }

                            }

                            // en el caso de que dejen vacio el campo dni  le pone 00000
                            if($('#b1_dni').val() == ""){
                                $('#b1_dni').val('00000000')
                            }
                }

                bloque_btn.show();     // botonera abajo   


                    // compruebo encuestados y cantidad de personas

                if(encuesta.count === (encuesta.integrantes -1)  ){

                    $('#btn_nuevo').hide();     // muestro continuar   
                    $('#btn_continuar').show();     // oculto  nuevo integrante  
                    
                }else{

                   $('#btn_nuevo').show();     // muestro continuar   
                   $('#btn_continuar').hide();     // oculto  nuevo integrante  

                }          
            
            }else{


                alert('[ERROR] Faltan datos o algunos de ellos son incorrectos');
                $(retorno.id_tag).focus();
            }
        
            },

        validate2: function(){

            var validacion = {validate: false, id_tag: ""};

              // aqui va el nombre de id del componente que fallo.. asi le das el focus

                if($('#b1_nombre').val() != ""){

                    validacion.validate = true;

                }else{

                    validacion.validate = false;
                    validacion.id_tag="#b1_nombre";
                }


                if(($('#b1_edad').val() != "") && (validacion.id_tag == "")){

                    validacion.validate = true;

                }else{

                    validacion.validate = false;
                    validacion.id_tag="#b1_edad";
                }

                if(($('#b1_dni').val() != "" && (validacion.id_tag == "" ))){

                    validacion.validate = true;

                }else{

                    if(encuesta.count >=1){

                        validacion.validate = true;
                    }else{

                        validacion.validate = false;
                        validacion.id_tag="";
                    }
                    
                }



                if($("#b1_afiliado").is(':visible')){

                    if($('#b1_afiliado').val() != ""){

                        validacion.validate = true;

                    }else{

                        validacion.validate = false;
                        validacion.id_tag="#b1_afiliado";
                        
                    }
                }                
 
            return  validacion;

            },

        parse: function(){

            var tmp = $('#add_encuesta').find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();
            //saco los que no van a necesitar:::
            delete tmp[0];delete tmp[1];delete tmp[2];delete tmp[3];delete tmp[4];delete tmp[6];delete tmp[7];

            var datos = JSON.encode(parseData(tmp, true));
            var resp = setAjax(datos, 'encuestaAjax', function(){
                            encuesta.count ++;
                            $('#hdnCantidad_encuestados').val(encuesta.count)
                            bloque1.reset_conf();
                            bloque1.init();

            }) // envio el arreglo de datos mas el endPoint
            

            },

        mapeoEncuestados: function(integrantes){

            var encuestados= encuesta.count;
            var html='<li><span aria-hidden="true">Integrantes</span></li>';

            for ( var i = 1 ; i<= integrantes; i++){

                if(i<= encuestados){

                    html+= '<li><span class="fa fa-user fa-1x " aria-hidden="true"></span></li>'

                }else{

                    html+= '<li><span class="fa fa-user-o fa-1x " aria-hidden="true"></span></li>'

                }
                

            }

            $('#mapEncuestados').html(html)

            },

        validate: function( div){  // metodo de validacion generico


            var validacion = false;
            var componentes= [];    // declaro un arreglo vacio
            var retorno = false;    // variable de retorno para devolver

            $(div).find('input, select, textarea, input:checkbox').filter(function(index){

                // filtro todos los elementos que eisten en el div seleccionado
                if($(this).is(':visible')){ 

                    componentes.push($(this));  // guardo los que estan visibles en un arreglo para analizar despues
                }
            })

           
            $.each(componentes,function (key, el){

                if(el.prop('required')){  // si el campo es requierido  entonces debo validarlo 


                        if(el.val() == "" || el.val() == null  ){ // si es requerido  y esta vacio o null  debomarcarlo como que esta en falta

                            console.log(el.prop('type'))
        
                            el.parent().parent().addClass('has-error')
                            validacion = false; // validacion incorrecta
        
                        }else{    // si no esta vacio ni null devo verificar el tipo de input y su limite

                            if(el.prop('type') == 'number'){   // si es de tipo number  entonces debo ver el limite 

                                var limite = el.data('limit')          // traigo el limite establecido
                                var valor = parseInt(cleanString(el.val().trim()));     // limpio la cadena de . ,  y espacios
                                if(valor >=0  && valor<= limite ){  // ya tengo el limite  si esta fuera del valor lo pongo como en falta.


                                    el.parent().parent().removeClass('has-error')
                                    validacion = true; // validacion correcta

                                }else{ //no cumple con el parametro  lo pongo rojo

                                    el.parent().parent().addClass('has-error')
                                    validacion = false;  // validadcion incorrecta
                                }

                            }else{  // si no esta vacio y no es numerico  entonces esta correcto  el valor


                                el.parent().parent().removeClass('has-error')
                                validacion = true; // la validacion es correcta
                            }
        
                        }
                        
                } // de otro modo es opcional

            } );



        }


}




var bloque3a ={   // bloque 3  bebes
        estado: false,
        
        data:{
            leche:     '1',
            consulta: ""
        },

        template: {
                    // asigno el nombre del selector de bloque
                    html: '#bloque_3_a'
        },
        update: function(){
                // actualizo ante los cambios

                if(bloque3a.data.leche == '1'){
                    // oculto por que no la recibe
                    $( "#b3a_div_porque_no" ).hide("slow");

                }else{
                    // mjuestro por que no la recibe
                    $( "#b3a_div_porque_no" ).show("slow");
                }


                if(bloque3a.data.consulta == '1'){

                    $( "#b3a_div_consulta_si" ).show("slow");
                    $( "#b3a_div_consulta_no" ).hide("slow");
                 
                }else{


                    if(bloque3a.data.consulta =="" || bloque3a.data.consulta =="33"){

                        $( "#b3a_div_consulta_si" ).hide();
                        $( "#b3a_div_consulta_no" ).hide();

                    }else{

                        $( "#b3a_div_consulta_si" ).hide("slow");
                        $( "#b3a_div_consulta_no" ).show("slow");
                    }

                    
                }






        },

        init:  function(){
            // funcion de inicializacion
            bloque3a.hide_me();
            bloque3a.bindComponent();
            $('#b3a_div_cual').hide(); // oculto el campo que pregunta cual
            bloque3a.update();

        },

        bindComponent: function(){

                    $( "#b3_a_leche" ).on(
                        'change', function(){

                            bloque3a.data.leche= $(this).val();
                            bloque3a.update();
                    });


                    $( "#b3a_consulta" ).on(
                        'change', function(){

                            bloque3a.data.consulta= $(this).val();
                            bloque3a.update();

                    });


                    $( "#b3a_atencion_no" ).on(
                        'change', function(){

                            var seleccion = $(this).val();
                            if(seleccion == "42") {

                                $('#b3a_div_cual').show("slow");

                            }else{

                                $('#b3a_div_cual').hide("slow");
                                $('#b3a_cual').val('');
                            }
                            bloque3a.update();

                     });   





        },

        show_me: function(){

            // Mostrar el bloque
            $( bloque3a.template.html ).show("slow");
            bloque3a.estado= true;
        },

        hide_me: function(){
            // ocultar el bloque
            $( bloque3a.template.html ).hide("slow");
            bloque3a.estado= false;
        },  

        validate:function(){

         var validacion = false;


            return  validacion;
            
        } ,
        parse: function(){

            var tmp = $(bloque3a.template.html).find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();



            return parseData(tmp);

        }   
}



var bloque3b ={     //Bloque Niños
        estado: false,
        data:   {
            escuela:     '',
            activity:    '', 
            consulta:    "",
        },

        template: {
                    // asigno el nombre del selector de bloque
                    html: '#bloque_3_b'
        },
        update: function(){
                // actualizo ante los cambios

                if(bloque3b.data.escuela == '1'){  // si tien problema en la escuela nuestra 
                    
                    $( "#b3b_div_problem" ).show(); //muestra cual

                }else{
                    $( "#b3b_div_problem" ).hide(); //oculta cual
                }


                if(bloque3b.data.activity == '53' ||  bloque3b.data.activity == '52' ||  bloque3b.data.activity == '55'){
                    // si tien control hecho muestra complejidad
                    $( "#b3b_div_donde" ).show("slow");

                }else{
                    // si no se lo hizo muestra por que no..
                    $( "#b3b_div_donde" ).hide();
                }


                // consulta de uso de servicios
                if(bloque3b.data.consulta == '1'){

                    $( "#b3b_div_consulta_si" ).show("slow");
                    $( "#b3b_div_consulta_no" ).hide("slow");
                 
                }else{


                    if(bloque3b.data.consulta =="" || bloque3b.data.consulta =="33"){

                        $( "#b3b_div_consulta_si" ).hide();
                        $( "#b3b_div_consulta_no" ).hide();

                    }else{

                        $( "#b3b_div_consulta_si" ).hide("slow");
                        $( "#b3b_div_consulta_no" ).show("slow");
                    }

                    
                }                



        },

        init:  function(){
            // funcion de inicializacion
            bloque3b.hide_me();
            bloque3b.bindComponent();
            $('#b3b_div_cual').hide(); // oculto el campo que pregunta cual
            bloque3b.update();

        },

        bindComponent: function(){

                    $( "#b3b_escuela" ).on(
                        'change', function(){

                            bloque3b.data.escuela= $(this).val();
                            bloque3b.update();
                    });


                    $( "#b3b_activity" ).on(
                        'change', function(){

                            bloque3b.data.activity= $(this).val();
                            bloque3b.update();
                    });





                    $( "#b3b_consulta" ).on(
                        'change', function(){

                            bloque3b.data.consulta= $(this).val();
                            bloque3b.update();

                    });


                    $( "#b3b_atencion_no" ).on(
                        'change', function(){

                            var seleccion = $(this).val();
                            if(seleccion == "6") {

                                $('#b3b_div_cual').show("slow");

                            }else{

                                $('#b3b_div_cual').hide("slow");
                                $('#b3b_cual').val('');
                            }
                            bloque3b.update();

                     });                    

        },

        show_me: function(){

            // Mostrar el bloque
            $( bloque3b.template.html ).show("slow");
            bloque3b.estado= true;
        },

        hide_me: function(){
            // ocultar el bloque
            $( bloque3b.template.html ).hide("slow");
            bloque3b.estado= false;
        }, 

        validate:function(){





        } ,
        parse: function(){

            var tmp = $(bloque3b.template.html).find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();

            return parseData(tmp);

        }  



}


var bloque4 ={       // mUjer
        estado: false,

        data:{

            consulta: "",

            pap: {
                uso:     ''
            },

            mamo: {
                uso:     ''
            },

        },

        template: {
                    // asigno el nombre del selector de bloque
                    html: '#bloque_4'
        },

        update: function(){
                // actualizo ante los cambios

                var edad = parseInt(bloque1.conf.edad);
                var responde = $('#responde').prop('checked') ;


                if(responde){

                    $('#b4_salud').show();


                }else{

                    $('#b4_salud').hide();
                    
                }

                // if(edad >=65 && responde){

                //     $('#b4_salud').hide()

                // }else{

                //     $('#b4_salud').show()

                // }

                // if((edad >=66 && edad <= 70 ) && responde){

                //     $('#b4_div_mamo').show()

                // }else{

                //     $('#b4_div_mamo').hide()

                // }


                if((edad > 18 && edad <=65) && responde ){
                    // si es mayor a 18 debo mostrar pap
                    $('#b4_div_pap').show()

                        if(bloque4.data.pap.uso == '1'){  //si pap  es si  muestro pap si

                                $( "#b4_div_pap_si" ).show();
                                $( "#b4_div_pap_no" ).hide();

                        }else{
                                // si puso no sabe no contesta op 2 entonces no pregunta nada
                                if (bloque4.data.pap.uso === '62' || bloque4.data.pap.uso === '' ){

                                    $( "#b4_div_pap_si" ).hide();
                                    $( "#b4_div_pap_no" ).hide();

                                }else{

                                    $( "#b4_div_pap_si" ).hide();
                                    $( "#b4_div_pap_no" ).show();

                                }
                        }


                }else{

                    $('#b4_div_pap').hide()

                }


                if((edad >= 40 && edad <= 70) &&  responde){
                    // si es mayor a 40 debo mostrar 
                    $('#b4_div_mamo').show()

                        if(bloque4.data.mamo.uso == '1'){

                            $( "#b4_div_mamo_si" ).show();
                            $( "#b4_div_mamo_no" ).hide();

                        }else{

                                if (bloque4.data.mamo.uso == '62' || bloque4.data.mamo.uso == '' ){

                                    $( "#b4_div_mamo_si" ).hide();
                                    $( "#b4_div_mamo_no" ).hide();

                                }else{

                                    $( "#b4_div_mamo_si" ).hide();
                                    $( "#b4_div_mamo_no" ).show();
                                }
                        }

                }else{

                    $('#b4_div_mamo').hide()

                }

                // compruebo si tiene discapacidad
                if(bloque1.conf.discapacidad === "2" && bloque1.conf.genero ==="F"){
                    // muestro esto si no tiene discapacidad y es si es  mujer
                    $('#b4_div_consulta').show();

                    if(bloque4.data.consulta === "1"){
                        // si seleccionno Si
                        $( "#b4_div_consulta_si" ).show();
                        $( "#b4_div_consulta_no" ).hide();

                    }else{
                        // si selecciona no verifica si esta vacio no muestra ninguno
                        if(bloque4.data.consulta ==="" || bloque4.data.consulta =="33"){

                            $( "#b4_div_consulta_no" ).hide();
                            $( "#b4_div_consulta_si" ).hide();

                        }else{
                            // de otro modo muestra los corrrespondientes
                            $( "#b4_div_consulta_no" ).show();
                            $( "#b4_div_consulta_si" ).hide();
                        }
                    }

                }else{

                    // si la mujer es disc ( disc= 0 ) no muestro esta pregunta
                    $('#b4_div_consulta').hide();
                }


        },

        init:  function(){
            // funcion de inicializacion
            bloque4.hide_me();
            bloque4.bindComponent();
            bloque4.update();
            $('#b4_div_otro').hide(); // oculto la opcion otro para cuando coloque no
			$('#b4_div_pap_si').hide(); // oculto la opcion de si pap
			$('#b4_div_pap_no').hide(); // oculto la opcion de si pap		
			$('#b4_div_mamo_si').hide(); // oculto la opcion de si mamo
			$('#b4_div_mamo_no').hide(); // oculto la opcion de si mamo			

        },
        bindComponent: function(){
                    // vinculo eventos de cada select 
                    $( "#b4_pap" ).on(        // pregunta pap
                        'change', function(){

                            bloque4.data.pap.uso= $(this).val();
                            bloque4.update();

                    });

                    $( "#b4_mamo" ).on(     // preguntas mamo
                        'change', function(){

                            bloque4.data.mamo.uso= $(this).val();
                            bloque4.update();

                    });

                    $( "#b4_consulta" ).on(    //  consulta utilizacion de servicio
                        'change', function(){

                            bloque4.data.consulta= $(this).val();
                            bloque4.update();

                    });

                    $( "#b4_consulta_no" ).on(
                        'change', function(){
                            var seleccion = $(this).val();
                            if(seleccion == "42") {

                                $('#b4_div_otro').show();

                            }else{

                                $('#b4_div_otro').hide();
                                $('#b4_div_otro').val('');
                            }
                            bloque4.update();

                    });

        },

        show_me: function(){

            // Mostrar el bloque
            $( bloque4.template.html ).show("slow");
            bloque4.estado= true;
        },

        hide_me: function(){
            // ocultar el bloque
            $( bloque4.template.html ).hide("slow");
            bloque4.estado= false;
        },  

        validate:function(){
            





        }

}



var bloque5 ={       // Adultos mayores
        estado: false,
        data: {

            consulta:"",
            medico: "",
        },



        template: {
                    // asigno el nombre del selector de bloque
                    html: '#bloque_5'
        },

        update: function(){
                // actualizo ante los cambios

                if(bloque5.data.consulta == '1'){

                    $( "#b5_div_consulta_si" ).show("slow");
                    $( "#b5_div_consulta_no" ).hide("slow");
                 
                }else{


                    if(bloque5.data.consulta =="" || bloque5.data.consulta =="33"){

                        $( "#b5_div_consulta_si" ).hide();
                        $( "#b5_div_consulta_no" ).hide();

                    }else{

                        $( "#b5_div_consulta_si" ).hide("slow");
                        $( "#b5_div_consulta_no" ).show("slow");
                    }

                    
                }

                if(bloque5.data.medico == '1'){
                    $( "#b5_div_esde_osep" ).show("slow");

                }else{

                    $( "#b5_div_esde_osep" ).hide("slow");
                }

        },

        init:  function(){
            // funcion de inicializacion
            bloque5.hide_me();
            bloque5.bindComponent();
            $('#b5_div_cual').hide(); // oculto el campo que pregunta cual
            bloque5.update();

        },
        bindComponent: function(){

                    $( "#b5_consulta" ).on(
                        'change', function(){

                            bloque5.data.consulta= $(this).val();
                            bloque5.update();

                    });

                    $( "#b5_medico" ).on(
                        'change', function(){

                            bloque5.data.medico= $(this).val();
                            bloque5.update();

                    });

                    $( "#b5_atencion_no" ).on(
                        'change', function(){

                            var seleccion = $(this).val();
                            if(seleccion == "42") {

                                $('#b5_div_cual').show("slow");

                            }else{

                                $('#b5_div_cual').hide("slow");
                                $('#b5_cual').val('');
                            }
                            bloque5.update();

                     });




                    
        },

        show_me: function(){

            // Mostrar el bloque
            $( bloque5.template.html ).show("slow");
            bloque5.estado= true;
        },

        hide_me: function(){
            // ocultar el bloque
            $( bloque5.template.html ).hide("slow");
            bloque5.estado= false;
        },  


        validate:function(){




            
        } ,
        parse: function(){

            var tmp = $(bloque5.template.html).find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();

            return parseData(tmp);

        }        
}



var bloque6 ={       // Discapacidad

        estado: false,

        data:{
            consulta:"",
            medico: []
        },

        template: {
                    // asigno el nombre del selector de bloque
                    html: '#bloque_6'
        },

        update: function(){
                // actualizo ante los cambios

                var items= ['93','94','95','96','97']
                var vista = false;
                $.each( items, function( index, el){

                        if($.inArray( el , bloque6.data.medico) != -1){

                            // Mostrar el bloque
                            vista = true;
                            return false;

                        }else{
                            vista = false;
                            
                        }
                });

            if( vista){

                $('#b6_div_profesional').show("slow");
            }else{

                $('#b6_div_profesional').hide("slow");
            }

            var edad = parseInt(bloque1.conf.edad);

            // compruebo
            if(edad > 2  && bloque1.conf.embarazo ==="2"){

                $('#b6_uso').show();

            }else{

                $('#b6_uso').hide();

            }

            if(bloque6.data.consulta == '1'){

                $( "#b6_div_consulta_si" ).show("slow");
                $( "#b6_div_consulta_no" ).hide("slow");
                
            }else{


                if(bloque6.data.consulta =="" || bloque1.conf.consulta =="33"){

                    $( "#b6_div_consulta_si" ).hide();
                    $( "#b6_div_consulta_no" ).hide();

                }else{

                    $( "#b6_div_consulta_si" ).hide("slow");
                    $( "#b6_div_consulta_no" ).show("slow");
                }

                
            }





        },

        init:  function(){
            // funcion de inicializacion
            bloque6.hide_me();
            bloque6.bindComponent();
            $('#b6_div_otro').hide(); // oculto el campo que pregunta cual
            bloque6.update();

        },
        bindComponent: function(){

            $( "#b6_div_medicos input[type='checkbox']" ).on(
                'click', function(){
                    bloque6.data.medico= [];
                $("#b6_div_medicos  input[type='checkbox']").each(function(){

                    if ($(this).prop('checked')){
                        
                         bloque6.data.medico.push($(this).val());

                    }
                })

               bloque6.update();
            });
            $('#b6_div_profesional').hide("slow");

             $( "#b6_consulta" ).on(
                    'change', function(){

                        bloque6.data.consulta= $(this).val();
                        bloque6.update();

             });

            $( "#b6_atencion_no" ).on(
                'change', function(){
                    var seleccion = $(this).val();
                    if(seleccion == "42") {

                        $('#b6_div_otro').show();

                    }else{

                        $('#b6_div_otro').hide();
                        $('#b6_cual').val('');
                    }
                    bloque6.update();

            });



        },

        show_me: function(){

            // Mostrar el bloque
            $( bloque6.template.html ).show("slow");
            bloque6.estado= true;
        },

        hide_me: function(){
            // ocultar el bloque
            $( bloque6.template.html ).hide();
            bloque6.estado= false;
        }, 


        validate:function(){

            if(bloque6.estado){

                var validacion = false;
                var cantidad   = 0;
                var contar = function(numero){
                                    if (numero >0){
                                            return true;
                                    }else{
                                            return false;
                                    }
                                };
               

               $("#b6_div_tipo  input[type='checkbox']").each(function(){

                    if ($(this).prop('checked')){
                        
                         cantidad++;
                    }

                })  

                validacion = contar(cantidad)

                cantidad= 0;
               $("#b6_div_medicos  input[type='checkbox']").each(function(){

                    if ($(this).prop('checked')){
                        
                         cantidad++;

                    }

                })  

                validacion = contar(cantidad);

                return  validacion;

            }
            
        } ,
        parse: function(){

            var tmp = $(bloque6.template.html).find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();

            return parseData(tmp);

        }  

}



var bloque7 ={       // embarazo
        estado: false,
        uso:     '1',
        problem: '2',

        template: {
                    // asigno el nombre del selector de bloque
                    html: '#bloque_7'
        },

        update: function(){
                // actualizo ante los cambios

                if(bloque7.uso == '1'){
                    // si tien control hecho muestra complejidad
                    $( "#b7_div_complejo" ).show("slow");
                    $( "#b7_div_porque_no" ).hide("slow");

                }else{
                    // si no se lo hizo muestra por que no..
                    $( "#b7_div_porque_no" ).show("slow");
                    $( "#b7_div_complejo" ).hide("slow");

                }
                if(bloque7.problem == '1'){
                    
                    $( "#b7_cual" ).show("slow");


                }else{

                    $( "#b7_cual" ).hide("slow");
                }
        },

        init:  function(){
            // funcion de inicializacion
            bloque7.hide_me();
            bloque7.bindComponent();
            bloque7.update();

        },

        bindComponent: function(){

                    $( "#b7_uso" ).on(
                        'change', function(){

                            bloque7.uso= $(this).val();
                            bloque7.update();
                    });
                    $( "#b7_problem" ).on(
                        'change', function(){

                            bloque7.problem= $(this).val();
                            bloque7.update();

                    });
        },

        show_me: function(){

            // Mostrar el bloque
            $( bloque7.template.html ).show("slow");
            bloque7.estado= true;
        },

        hide_me: function(){
            // ocultar el bloque
            $( bloque7.template.html ).hide("slow");
            bloque7.estado= false;
        }, 

        validate:function(){    // valido los campos requeridos del bloque de a cuerdo si esta activo o no

            if(bloque7.estado){

                var validacion = false;

               
                if($("#b7_cual").is(':visible')){

                    if($('#b7_cual').val() != ""){

                        validacion = true;

                    }else{
                        validacion = false;
                    }
                }   

                return  validacion;
            }

            
        } 

}




var bloque9 ={       // laboral

        estado: false,
        template: {
                    // asigno el nombre del selector de bloque
                    html: '#bloque_9'
        },

        data:{
                            
            optitular:[{"id_resp":27,"respuesta":"Trabajador remunerado"},{"id_resp":28,"respuesta":"Jubilado o pensionado"},{"id_resp":29,"respuesta":"Trabaja con remuneración y estudia"},{"id_resp":133,"respuesta":"Estudia exclusivamente"},{"id_resp":134,"respuesta":"Trabajo doméstico no remunerado exclusivamente"},{"id_resp":135,"respuesta":"Busca trabajo"},{"id_resp":136,"respuesta":"No trabaja"},{"id_resp":137,"respuesta":"Otra"},]

        },


        init:  function(){
            // funcion de inicializacion
            if (bloque9.estado){

                bloque9.show_me();
            }else{

                bloque9.hide_me();
            }     
            bloque9.update();
        },


        update: function(){

            $("#b1_ocupacion").html( '');              // blanquea el select
            $("#b1_ocupacion").append('<option value="" disabled selected hidden>Seleccionar</option>');

            if(encuesta.titular)
            {
                    for(var i = 0 ; i<=2; i++){
                        
                        $("#b1_ocupacion").append( '<option value="'+ bloque9.data.optitular[i].id_resp +'">'+ bloque9.data.optitular[i].respuesta +'</option>');
                    }

            }else{

                $.each(bloque9.data.optitular, function(key, value){   // carga el select
                    
                    $("#b1_ocupacion").append( '<option value="'+ value.id_resp +'">'+ value.respuesta +'</option>');

                }); 
            }

        },

        show_me: function(){

            // Mostrar el bloque
            $( bloque9.template.html ).show("slow");
            bloque9.estado= true;
        },

        hide_me: function(){
            // ocultar el bloque
            $( bloque9.template.html ).hide("slow");
            bloque9.estado= false;
        }, 


        validate:function(){

            if(bloque9.estado){
                var validacion = false;

                if($('#b9_horas').val() != ""){

                    validacion = true;

                }else{
                    validacion = false;
                }


                if($('#b9_lugar').val() != ""){

                    validacion = true;

                }else{
                    validacion = false;
                }

                if($('#b9_ocupacion').val() != ""){

                    validacion = true;

                }else{
                    validacion = false;
                }                


            }
            
        } ,
        parse: function(){

            var tmp = $(bloque6.template.html).find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();

            return parseData(tmp);

        },

        reset: function(){


        } 


}


function submitEncuesta(){

            /** validar los datos de los bloques desplegados
             * guardar el encusstado como siempre
             * continuar con el submit del formulario
             */
            // validar 
            //e.preventDefault();
            if(true){

                
                // test
                    bloque1.parse()
                    return true

                

            }else{

                alert('error error en los datos')

                return false
            }
            
    }; 