
// inicializo bloques
//var bloque1= $("#bloque_1");
var bloque2= $("#bloque_2");
var bloque3a= $("#bloque_3_a");
var bloque3b= $("#bloque_3_b");
var bloque4= $("#bloque_4");
var bloque5= $("#bloque_5");
var bloque6= $("#bloque_6");
var bloque7= $("#bloque_7");
var bloque8= $("#bloque_8");
//var bloque9= $("#bloque_9");

// inicializo los bloques

bloque3a.hide();   // bebes
bloque3b.hide();   // niños
bloque4.hide();     // mujeres
bloque5.hide();     // adultos
bloque6.hide();     // discapacidad
bloque7.hide();     // embarazo


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


    update_data: function(){

        // verifico si tiene osep

        if(bloque1.conf.osep == '0'){

            $( "#b1_div_afiliado" ).show();

        }else{

            $( "#b1_div_afiliado" ).hide();
        }

        $( "#b1_osep" ).val(bloque1.conf.osep);
        

        // verifico genero
        if(bloque1.conf.genero == 'm'){

            $( "#b1_div_embarazo" ).hide();
            bloque1.conf.embarazo= '1';
        }else{

            $( "#b1_div_embarazo" ).show();
        }

        $( "#b1_embarazo" ).val(bloque1.conf.embarazo);

        $( "#b1_disc" ).val(bloque1.conf.discapacidad);
    },

    bindComponent: function(){

            bloque1.update_data();

                $( "#bloque_1 input[name$='b1_genero']" ).on(
                    'change, click', function(){

                        bloque1.conf.genero= $(this).val();
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


    },

    accion_bloques : function(){

        //var edad = parseInt(bloque1.conf.edad);
        var edad = bloque1.conf.edad;

                if(bloque1.conf.genero == 'f' &&  edad ){

                // bloque3_a.mostrar(false);
                // bloque3b.mostrar(false);
                // bloque7.mostrar(false);











                }else{

                //bloque3b.mostrar(true);

                }

            bloque1.update_data();
    },



    desplegar_ninio: function(){

        if(bloque1.conf.edad != null){


            if(parseInt(bloque1.conf.edad) > 2 && parseInt(bloque1.conf.edad)< 15 ){

                bloque3b.show();   // desplegar formulario niños
                bloque3a.hide();   // bebes  no

            }else{

                bloque3b.hide();   // desplegar formulario niños
                bloque3a.show();   // bebes  no

            }

        }

    },

    desplegar_mujer: function(){


        if(bloque1.conf.edad != null){


            if(parseInt(bloque1.conf.edad) > 16 ){

                bloque4.show();   // desplegar formulario niños
                bloque3a.hide();   // bebes  no

            }else{

                bloque1.desplegar_ninio();

            }

        }






        
    },

    desplegar_disc: function(){

        
    },

    desplegar_ancianidad: function(){

        
    }






}


$(function() {
  // Handler for .ready() called.


  bloque1.bindComponent();

});