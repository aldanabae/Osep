
// inicializo bloques
//var bloque1= $("#bloque_1");

var bloque3a= $("#bloque_3_a");
var bloque3b= $("#bloque_3_b");
var bloque4= $("#bloque_4");
var bloque5= $("#bloque_5");
var bloque6= $("#bloque_6");
var bloque7= $("#bloque_7");
var bloque8= $("#bloque_8");
var bloque_btn= $("#btn_encuesta");
//var bloque9= $("#bloque_9");





// logica bloque1

//$("#bloque_1 input[name$='b1_genero']").on('change, click' ,function(){alert('es macho')})

var bloque1= {

// 0 es si  1  es el no
    conf: {
        nombre: null,
        edad: null,
        genero: "m",
        osep: '0',
        embarazo: '1',
        discapacidad: '1',
        update: function(){

	        bloque1.update_data();
        }

    },

    init: function(){

        // inicializo los bloques
        
        bloque3a.hide();   // bebes
        bloque3b.hide();   // niños
        bloque4.hide();     // mujeres
        bloque5.hide();     // adultos
        bloque6.hide();     // discapacidad
        bloque7.hide();     // embarazo
        bloque_btn.hide();     // botonera abajo 


    },

    update_data: function(){

        // verifico si tiene osep

        if(bloque1.conf.osep == '0'){

            $( "#b1_div_afiliado" ).show();

        }else{

            $( "#b1_div_afiliado" ).hide();
        }

        $( "#b1_osep" ).val(bloque1.conf.osep);
        $("#b1_osep[value=0]").attr("selected",true);

        // verifico genero
        if(bloque1.conf.genero == 'm'){

            $( "#b1_div_embarazo" ).hide();
            bloque1.conf.embarazo= '1';
        }else{

            $( "#b1_div_embarazo" ).show();
        }

        if(bloque1.conf.discapacidad == '0'){

            $("#b1_disc option[value=0]").attr("selected",true);

        }else{
            $("#b1_disc option[value=1]").attr("selected",true);

        }



    },

    bindComponent: function(){
            bloque1.init();
            bloque1.update_data();

                $( "#bloque_1 input[name$='b1_genero']" ).on(
                    'change, click', function(){

                        bloque1.conf.genero= $(this).val();
                        bloque1.conf.embarazo= '1';
                        bloque1.conf.update();

                    });

                $( "#b1_nombre" ).on(
                    'focusout', function(){

                        bloque1.conf.nombre= $(this).val();
                        bloque1.conf.update();

                    });

                $( "#b1_edad" ).on(
                    'focusout', function(){

                        bloque1.conf.edad= $(this).val();
                        bloque1.conf.update();

                    });

                $( "#b1_estudio" ).on(
                    'change, click', function(){

                        bloque1.conf.estudio= $(this).val();
                        bloque1.conf.update();

                    });

                $( "#b1_osep" ).on(
                    'change, click', function(){

                        bloque1.conf.osep= $(this).val();
                        bloque1.conf.update();

                    });

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

               $( "#b1_disc" ).on(
                    'change, click', function(){

                        bloque1.conf.discapacidad= $(this).val();
                        bloque1.conf.update();

                });

                $( "#btn_bloques" ).on(
                    'click', function(){
                        bloque1.init();
                        bloque1.action_block();
                        

                });               




    },

    action_block : function(){

        if(bloque1.validate()){

            if(bloque1.conf.osep == "0"){

                bloque2.show();

                var edad = parseInt(bloque1.conf.edad);

                        if (edad > 65){  //si es mayor a 56  despliego ancianidad

                                bloque5.show();     // adultos
                        }else{

                            if (edad < 14)  // si esta entre 2 y 14  niños

                                if( edad < 2)
                                {

                                    bloque3a.show();   // bebes
                                }else{

                                    bloque3b.show();   // niños
                                }

                            }

                        if (bloque1.conf.discapacidad == '0'){

                            bloque6.show();     // discapacidad

                        }

                        if ( bloque1.conf.embarazo == '0' ){

                            bloque7.show();     // embarazo

                        }                      


                        if(bloque1.conf.genero == 'f'  )
                        {
                            // si es mujer y esta embarazada  despliego  
                            
                            if(edad > 16 ){

                                bloque4.show();     // mujeres

                            }

                        }




            }
                        



           
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



        return  validacion;

        
    }

}


$(function() {
  // Handler for .ready() called.


  bloque1.bindComponent();



    $('.date-picker').datepicker({
        autoclose: true,
        todayHighlight: true
    })

});



var bloque2 ={

    template: {
                // asigno el nombre del selector de bloque
                html: '#bloque_2'
    },


    update: function(){
            // actualizo ante los cambios



    },

    init:  function(){
        // funcion de inicializacion
        bloque2.hide_me();

    },


    bindComponent: function(){

                $( "#b2_uso" ).on(
                    'change, click', function(){

                        bloque1.conf.estudio= $(this).val();
                        bloque1.conf.update();

                    });

    },





    show_me: function(){

        // Mostrar el bloque
        $( bloque2.template.html ).show();

    },

    hide_me: function(){
        // ocultar el bloque
        $( bloque2.template.html ).hide();

    },  


}
