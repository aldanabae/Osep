

// inicializo bloques

//var bloque1= $("#bloque_1");
var bloque2= $("#bloque_2");
var bloque3a= $("#bloque_3_a");
var bloque3b= $("#bloque_3_b");
var bloque3b= $("#bloque_4");
var bloque5= $("#bloque_5");
var bloque6= $("#bloque_6");
var bloque7= $("#bloque_7");
var bloque8= $("#bloque_8");
var bloque9= $("#bloque_9");


// inicializo los bloques

bloque3a.hide();
bloque3b.hide();
bloque3b.hide();
bloque5.hide();
bloque6.hide();
bloque7.hide();


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

	        bloque1.accion_bloques();
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


                if(bloque1.conf.genero == 'm'){

                // bloque3_a.mostrar(false);
                // bloque3b.mostrar(false);
                // bloque7.mostrar(false);

                }else{

                //bloque3b.mostrar(true);

                }

            bloque1.update_data();
    }


}


$(function() {
  // Handler for .ready() called.


  bloque1.bindComponent();

});