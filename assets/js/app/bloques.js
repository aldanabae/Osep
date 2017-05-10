
// inicializo bloques
var bloque_btn= $("#btn_encuesta");
//var bloque9= $("#bloque_9");



$(function() {
  // Handler for .ready() called.


  bloque1.bindComponent();


});




var encuesta ={

            titular: true,
            afiliado: '',
            integrantes: 0,
            embarazo: {
                estado: false,
                edad  : [],


            },
            count: 0,

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

                    encuesta.integrantes = $('#integrantes').val();

                    


                  }
            


}

var bloque1= {    // Bloque General

    // 0 es si  1  es el no
        estado: true,
        conf: {
            
            nombre: null,
            edad: null,
            genero: "m",
            osep: '0',
            embarazo: '0',
            discapacidad: '1',
            ocupacion:  null,
            pariente: '',
            acargo:[],
            update: function(){

                bloque1.update_data();
            }

        },

        reset_conf:function(){

            bloque1.conf.nombre= null,
            bloque1.conf.edad=null,
            bloque1.conf.genero= "m",
            bloque1.conf.osep= '0',
            bloque1.conf.embarazo= '0',
            bloque1.conf.discapacidad= '1',
            bloque1.conf.ocupacion=  null,
            bloque1.conf.pariente= '',
            bloque1.conf.acargo=[],
                    encuesta.titular=false,
                    encuesta.afiliado=''
            //===============
            bloque9.estado=false,
            bloque7.estado= false,
            bloque6.estado= false,
            bloque5.estado= false,
            bloque4.estado= false,
            bloque3.estado= false, // unificar
            bloque2.estado= false // unificar
    
        },

        template: {
            // asigno el nombre del selector de bloque
            html: '#bloque_1'
        },


        data:{

                vinculo:['Titular','Conyuge o Pareja Conviviente','Hijo /a','Padre Madre',
                        'Suegro /a', 'Yerno / Nuera','Nieto /a',
                        'Otro Familiar','Otro no Familiar'],
                
                tOsep:{
                        si:['No, sólo OSEP',
                            'Otra obra social',
                            'Prepaga','Otra cobertura'],

                        no:['No (Salud Pública)',
                            'Obra social',
                            'Prepaga','Otra cobertura']
                },
                educativo:[
                        'inicial','Primario Incompleto',
                        'Primario Completo','Secundario Incompleto',
                        'Secundario Completo','Terciario Incompleto','Terciario Completo',
                        'Universitario Incompleto','Universitario Completo',
                        ],

                

        },

        init: function(){

            bloque_btn.hide();     // botonera abajo 
            encuesta.init();
            bloque2.init();
            bloque3.init();
            bloque4.init();
            bloque5.init();
            bloque6.init();
            bloque9.init();
            bloque7.init();
            //cargar el listado de vinculos
                        // por omicion el primero es el titular
            if(encuesta.count == 0){
                // cargo el combo solo con el titular
                
                $("#lblTitular").text('Apellido y nombre del Titular:')
                $("#b1_parent").html( '<option value="1">Titular</option>');
                $("#tOsep").hide();


            }else{
                // cargo el combo normal
                $("#tOsep").show(); // muestro opciones de cobertura
                

                $("#lblTitular").text('Apellido y Nombre:')
                $("#b1_parent").html( '');
                var indice= 0;
                $.each(bloque1.data.vinculo, function(key, value){
                    indice = key;

                    $("#b1_parent").append( '<option value="'+ (indice +1) +'">'+ value +'</option>');
                });
                
            }
            bloque1.conf.update();

        },

        update_data: function(){

            $("#b1_afiliado").val(encuesta.afiliado);  // muestro el numero del titular

            // verifico si tiene osep


            if(bloque1.conf.osep == '0'){

                $( "#b1_div_afiliado" ).show("slow"); // muestra el txt de numero de afiliado
                $("#b1_cober").html( '');               // blanquea el select
                    $.each(bloque1.data.tOsep.si, function(key, value){  // carga el select con el Si

                        $("#b1_cober").append( '<option value="'+ key +'">'+ value +'</option>');

                    });
                bloque2.show_me();
                $("#afiliado_externo").show();


            }else{
                
                $( "#b1_div_afiliado" ).hide("slow"); // oculta el txt de numero de afiliado
                $("#b1_cober").html( '');              // blanquea el select
                $.each(bloque1.data.tOsep.no, function(key, value){   // carga el select

                    $("#b1_cober").append( '<option value="'+ key +'">'+ value +'</option>');

                });                
                bloque2.hide_me();
                $("#afiliado_externo").hide(); 

            }

            // verifico nivel educativo

                if(bloque1.conf.edad >= 4 ){

                    $("#educativo").show();

                }else{

                    $("#educativo").hide();

                }


            $( "#b1_osep" ).val(bloque1.conf.osep);
            $("#b1_osep[value=0]").attr("selected",true);

            // verifico genero
            if(bloque1.conf.genero == 'm'){  // si es hombre oculto todo

                $( "#b1_div_embarazo" ).hide();
                bloque1.conf.embarazo= '1';

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
                    bloque1.conf.embarazo= '1';
                }


            }

            if(bloque1.conf.discapacidad == '0'){

                $("#b1_disc option[value=0]").attr("selected",true);

            }else{
                $("#b1_disc option[value=1]").attr("selected",true);

            }

            // independiente si es afiliado o no


            // verifico D ocupacionales
                if(bloque1.conf.edad != null){

                    if(bloque1.conf.edad > 14){

                             bloque9.show_me();
                        


                            switch (bloque1.conf.ocupacion) {
                            case '1':
                                
                                $( "#bloque_9_int" ).show();
                                $( "#bloque_9_int_juv" ).hide();
                                break;
                            case '2':
                                $( "#bloque_9_int_juv" ).show();
                                $( "#bloque_9_int" ).hide();
                                break;

                            case '3':
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


             if(bloque1.conf.pariente == "1" || bloque1.conf.pariente == ""){

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

                    $( "#b1_acargo").html(listHtml);
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

        },

        bindComponent: function(){
                bloque1.init();
                bloque1.update_data();

                    // genero
                    $( "#bloque_1 input[name$='b1_genero']" ).on(
                        'change, click', function(){

                            bloque1.conf.genero= $(this).val();
                            bloque1.conf.embarazo= '1';
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

                    $( "#btn_nuevo" ).on(
                        'click', function(){
                            bloque1.init();
                            encuesta.count ++;
                            bloque1.reset_conf();
                            bloque1.init();
                            
                    });  

                        // DNI  encuestado
                    $( "#b1_dni" ).on(
                        'focusout', function(){

                            if(encuesta.titular)   
                            {

                                encuesta.afiliado= $(this).val() + "/00";

                            }else{

                                encuesta.afiliado= $(this).val() + "/"+ encuesta.count;

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
                        


        },

        action_block : function(){

            if(bloque1.validate()){

                if(bloque1.conf.osep == "0"){

                    bloque2.show_me();

                    var edad = parseInt(bloque1.conf.edad);

                            if (edad >= 65){  //si es mayor a 56  despliego ancianidad

                                    bloque5.show_me();     // adultos
                            }else{

                                if (edad < 14) {   // si esta entre 2 y 14  niños

                                    bloque3.show_me();


                                }else{

                                   bloque3.hide_me();   // bebes
                                }

                            }

                            if (bloque1.conf.discapacidad == '0'){

                                bloque6.show_me();     // discapacidad

                            }else{

                                bloque6.hide_me();     // discapacidad
                            }

                            if ( bloque1.conf.embarazo == '0' ){

                                bloque7.show_me();     // embarazo

                            }else{
                                
                                bloque7.hide_me();     // apago embarazo
                            }                      


                            if(bloque1.conf.genero == 'f'  )
                            {
                                // si es mujer y esta embarazada  despliego  
                                
                                if(edad > 15 && edad <= 64  &&  bloque1.conf.embarazo == "1" ){

                                    bloque4.show_me();     // mujeres

                                }else{

                                     bloque4.hide_me();     // mujeres
                                }

                            }

                }

                bloque_btn.show();     // botonera abajo             
            
            }else{


            alert('Los datos son incorrectos o faltan');
            }
     
        },

        validate: function(){

            var validacion = false;

                if($('#b1_nombre').val() != ""){

                    validacion = true;

                }else{

                    validacion = false;
                }


                if($('#b1_edad').val() != ""){

                    validacion = true;

                }else{
                    validacion = false;
                }

                if($('#b1_dni').val() != ""){

                    validacion = true;

                }else{
                    validacion = false;
                }



                if($("#b1_afiliado").is(':visible')){

                    if($('#b1_afiliado').val() != ""){

                        validacion = true;

                    }else{
                        validacion = false;
                    }
                }                

            return  validacion;

        },

        parse: function(){

            var tmp = $(bloque1.template.html).find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();

            return parseData(tmp);

        }

}


var bloque2 ={   // bloque uso de Obra social
    estado: true,
    uso:     '0',
    template: {
                // asigno el nombre del selector de bloque
                html: '#bloque_2'
    },


    update: function(){
            // actualizo ante los cambios

            if(bloque2.uso == '0'){
                $( "#b2_si" ).show("slow");
                $( "#b2_area" ).show("slow");
                $( "#b2_no" ).hide("slow");


            }else{

                $( "#b2_si" ).hide("slow");
                $( "#b2_area" ).hide("slow");
                $( "#b2_no" ).show("slow");
            }


    },

    init:  function(){
        // funcion de inicializacion
        //bloque2.hide_me();
        bloque2.bindComponent();
        bloque2.update();

    },


    bindComponent: function(){

                $( "#b2_uso" ).on(
                    'change, click', function(){

                        bloque2.uso= $(this).val();
                        bloque2.update();

                 });

    },

    show_me: function(){

        // Mostrar el bloque
        $( bloque2.template.html ).show("slow");
        bloque2.estado= true;
    },

    hide_me: function(){
        // ocultar el bloque
        $( bloque2.template.html ).hide("slow");
        bloque2.estado= false;

    },  

    validate:function(){

        var validacion = false;

            if($("#b2_uso").is(':visible')){

                if($('#b2_uso').val() != ""){

                    validacion = true;

                }else{
                    validacion = false;
                }
            }   

        return  validacion;

    },

    parse: function(){

        var tmp = $(bloque2.template.html).find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();

        return parseData(tmp);

    }
}


// TODO  se deben unificar los dos bloques 3  3a  y 3b  segun especificaciones
var bloque3 ={   // bloque 3  bebes
        estado: false,
        data:{

            leche:   "",
            escuela: "",
            extra:   "",
            activity:"", 
            edad :  ""

        },
        
        template: {
                    // asigno el nombre del selector de bloque
                    html: '#bloque_3'
        },

        init:  function(){
            // funcion de inicializacion
            bloque3.hide_me();
            bloque3.bindComponent();
            bloque3.update();

        },
        update: function(){
                // actualizo ante los cambios

                if(bloque3.data.leche == '1'){
                    // si tien control hecho muestra complejidad
                    $( "#b3_div_porque_no" ).hide();

                }else{

                    if(bloque3.data.leche === ""){

                        $( "#b3_div_porque_no" ).hide();

                    }else{

                        // si no se lo hizo muestra por que no..
                        $( "#b3_div_porque_no" ).show("slow");

                    }

                }

                var edad= parseInt(bloque1.conf.edad)
                if(edad <=1 ){               // verifico si es menor a un año no pregunto si camino

                    $( "#b3_camino").hide();

                }else{

                    $( "#b3_camino").show();
                }


                if(edad >= 3  && edad <= 6 ){               // verifico si esta entre 3 y 6 pregunto oculista

                    $( "#b3_oculista").show();

                }else{

                    $( "#b3_oculista").hide();
                }

                if((edad >= 2  && edad <= 14) && bloque1.conf.discapacidad == "1" ){               // verifico si esta entre 2 y 14 debo mostrar salud y actividades

                    $( "#b3_controles").show();

                }else{

                    $( "#b3_controles").hide();
                }





                if(bloque3.data.escuela == '1'){
                    // si tien control hecho muestra complejidad
                    $( "#b3_div_problem" ).show("slow");

                }else{
                    // si no se lo hizo muestra por que no..
                    $( "#b3_div_problem" ).hide("slow");
                }

                if(bloque3.data.extra == '1'){
                    // si tien control hecho muestra complejidad
                    $( "#b3_div_activity" ).show("slow");
                    $( "#b3_div_donde" ).hide();

                }else{
                   
                    $( "#b3_div_activity" ).hide("slow");
                    $( "#b3_div_donde" ).hide();
                    bloque3.data.activity='1';
                    $( "#b3_activity" ).val(bloque3.data.activity);
                    $("#b3_activity[value=1]").attr("selected",true);
                    
                }


                if(bloque3.data.activity == '3' ||  bloque3.data.activity == '2' ||  bloque3.data.activity == '5'){
                    // si tien control hecho muestra complejidad
                    $( "#b3_div_donde" ).show("slow");

                }else{
                    // si no se lo hizo muestra por que no..
                    $( "#b3_div_donde" ).hide();
                }                

        },

        bindComponent: function(){

                    $( "#b3_leche" ).on(
                        'change', function(){

                            bloque3.data.leche= $(this).val();
                            bloque3.update();
                    });

                    $( "#b3_escuela" ).on(
                        'change', function(){

                            bloque3.data.escuela= $(this).val();
                            bloque3.update();
                    });

                    $( "#b3_extra" ).on(
                        'change', function(){

                            bloque3.data.extra= $(this).val();
                            bloque3.update();
                    });


                    $( "#b3_activity" ).on(
                        'change', function(){

                            bloque3.data.activity= $(this).val();
                            bloque3.update();
                    });                    
        },

        show_me: function(){

            // Mostrar el bloque
            $( bloque3.template.html ).show("slow");
            bloque3.estado= true;
            bloque3.data.edad=parseInt(bloque1.conf.edad)
        },

        hide_me: function(){
            // ocultar el bloque
            $( bloque3.template.html ).hide("slow");
            bloque3.estado= false;
        },  

        validate:function(){

         var validacion = false;

            if($("#b2_uso").is(':visible')){

                if($('#b2_uso').val() != ""){

                    validacion = true;

                }else{
                    validacion = false;
                }
            }   


            if($('#b2_otro').val() != ""){

                validacion = true;

            }else{
                validacion = false;
            }

            return  validacion;
            
        } ,
        parse: function(){

            var tmp = $(bloque3.template.html).find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();

            return parseData(tmp);

        }   
}


var bloque4 ={       // mUjer
        estado: false,

        data:{

            consulta: "",

            pap: {
                uso:     '0'
            },

            mamo: {
                uso:     '0'
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
                if(edad > 18 && responde){
                    // si es mayor a 18 debo mostrar pap
                    $('#b4_div_pap').show()

                        if(bloque4.data.pap.uso == '0'){

                                $( "#b4_div_pap_si" ).show("slow");
                                $( "#b4_div_pap_no" ).hide("slow");

                        }else{

                                $( "#b4_div_pap_si" ).hide("slow");
                                $( "#b4_div_pap_no" ).show("slow");
                        }


                }else{

                    $('#b4_div_pap').hide()

                }


                if(edad >= 40 && responde){
                    // si es mayor a 40 debo mostrar 
                    $('#b4_div_mamo').show()

                        if(bloque4.data.mamo.uso == '0'){
                            $( "#b4_div_mamo_si" ).show("slow");
                            $( "#b4_div_mamo_no" ).hide("slow");


                        }else{

                            $( "#b4_div_mamo_si" ).hide("slow");
                            $( "#b4_div_mamo_no" ).show("slow");
                        }

                }else{

                    $('#b4_div_mamo').hide()

                }

                // compruebo si tiene discapacidad
                if(bloque1.conf.discapacidad === "1" && bloque1.conf.genero ==="f"){
                    // muestro esto si no tiene discapacidad y es mujer
                    $('#b4_div_consulta').show();

                    if(bloque4.data.consulta=== "0"){
                        // si seleccionno Si
                        $( "#b4_div_consulta_si" ).show("slow");
                        $( "#b4_div_consulta_no" ).hide("slow");

                    }else{
                        // si selecciona no verifica si esta vacio no muestra ninguno
                        if(bloque4.data.consulta ===""){

                            $( "#b4_div_consulta_no" ).hide();
                            $( "#b4_div_consulta_si" ).hide();

                        }else{
                            // de otro modo muestra los corrrespondientes
                            $( "#b4_div_consulta_no" ).show("slow");
                            $( "#b4_div_consulta_si" ).hide("slow");

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

        },
        bindComponent: function(){
                    // vinculo eventos de cada select 
                    $( "#b4_pap" ).on(
                        'change', function(){

                            bloque4.data.pap.uso= $(this).val();
                            bloque4.update();

                    });

                    $( "#b4_mamo" ).on(
                        'change', function(){

                            bloque4.data.mamo.uso= $(this).val();
                            bloque4.update();

                    });

                    $( "#b4_consulta" ).on(
                        'change', function(){

                            bloque4.data.consulta= $(this).val();
                            bloque4.update();

                    });

                    $( "#b4_consulta_no" ).on(
                        'change', function(){
                            var seleccion = $(this).val();
                            if(seleccion == "6") {

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
            
        } ,
        parse: function(){

            var tmp = $(bloque4.template.html).find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();

            return parseData(tmp);

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


                    if(bloque5.data.consulta ==""){

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
                        'change, click', function(){

                            bloque5.data.medico= $(this).val();
                            bloque5.update();

                    });

                    $( "#b5_atencion_no" ).on(
                        'change', function(){

                            var seleccion = $(this).val();
                            if(seleccion == "6") {

                                $('#b5_div_cual').show("slow");

                            }else{

                                $('#b5_div_cual').hide("slow");
                                $('#b5_div_cual').val('');
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

                var items= ['1','2','3','4','5']
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
            if(edad > 2  && bloque1.conf.embarazo ==="1"){

                $('#b6_uso').show();

            }else{

                $('#b6_uso').hide();

            }

            if(bloque6.data.consulta == '1'){

                $( "#b6_div_consulta_si" ).show("slow");
                $( "#b6_div_consulta_no" ).hide("slow");
                
            }else{


                if(bloque6.data.consulta ==""){

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
                    if(seleccion == "6") {

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
                        'change, click', function(){

                            bloque7.uso= $(this).val();
                            bloque7.update();
                    });
                    $( "#b7_problem" ).on(
                        'change, click', function(){

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

            
        } ,

        parse: function(){

            var tmp = $(bloque7.template.html).find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();

            return parseData(tmp);

        }  




}




var bloque9 ={       // laboral

        estado: false,
        template: {
                    // asigno el nombre del selector de bloque
                    html: '#bloque_9'
        },

        data:{

                optitular:   [
							"Trabajador Remunerado",
							"Jubilado o Pensionado",
							"Trabaja con Remuneración y Estudia",
							"Estudia exclusivamente",
							"Trabajo Doméstico no Remunerado exclusivamente",
							"Busca Trabajo",
							"No Trabaja",
							"Otra",]

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
                        indice = i;
                        $("#b1_ocupacion").append( '<option value="'+ (indice +1) +'">'+ bloque9.data.optitular[i] +'</option>');
                    }

            }else{

                $.each(bloque9.data.optitular, function(key, value){   // carga el select
                    indice = key;
                    $("#b1_ocupacion").append( '<option value="'+ (indice +1)  +'">'+ value +'</option>');

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






    function parseData(arreglo, data){
        //var parse= {};
        var parse = (typeof data == 'undefined') ? [] : data;

        arreglo.forEach(function(element) {

                parse.push({'idPregunta': element.name ,
                'idRespuesta' : element.value})
            
        });


        return parse;
    }



    function enabledBlock(){

        /*cargo los bloques en un array
            recorro los estados, y si esta activo lo pongo en un segundo arregloo para validarlo

            valido cada array, y si esta ok  saco los datos del bloque y los voy concatenando

            cuando llego al final, guardo en local Storage como encuestados 

            el bloque 2 se guarda en general..
        */ 
        var bloques = [bloque1, bloque2, bloque3, bloque3, bloque4, bloque5, bloque6, bloque7, bloque9];
        var arr = [];
        $.each( bloques , function (index, valor){

                if (valor.estado){

                    arr.push(valor) ;
                }
        })

        return arr;


    }


    function validateBlock( lista){

        /**
         * Aqui hay que recorrrer cada bloque y accionar el metodo validacion
         * recorda añadir un parametro de Title para identificar el modulo donde salta la validacion
         * 
         * 
         * 
         * 
         * 
         */


    }



function cleanArray( actual ){   // limpiar arreglos de elementos vacios
  var newArray = new Array();
  for( var i = 0, j = actual.length; i < j; i++ ){
      if ( actual[ i ] ){
        newArray.push( actual[ i ] );
    }
  }
  return newArray;
}