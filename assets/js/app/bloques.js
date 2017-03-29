
// inicializo bloques
//var bloque1= $("#bloque_1");


var bloque3b= $("#bloque_3_b");
var bloque4= $("#bloque_4");
var bloque5= $("#bloque_5");
var bloque6= $("#bloque_6");
//var bloque7= $("#bloque_7");
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
            
            bloque3a.hide_me();   // bebes
            bloque3b.hide();   // niños

            bloque5.hide();     // adultos
            bloque6.hide();     // discapacidad
            bloque7.hide_me();     // embarazo
            bloque_btn.hide();     // botonera abajo 


        },

        update_data: function(){

            // verifico si tiene osep

            if(bloque1.conf.osep == '0'){

                $( "#b1_div_afiliado" ).show();
                bloque2.show_me();

            }else{

                $( "#b1_div_afiliado" ).hide();
                bloque2.hide_me();
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

                    bloque2.show_me();

                    var edad = parseInt(bloque1.conf.edad);

                            if (edad > 65){  //si es mayor a 56  despliego ancianidad

                                    bloque5.show();     // adultos
                            }else{

                                if (edad < 14)  // si esta entre 2 y 14  niños

                                    if( edad < 2)
                                    {

                                        bloque3a.show_me();   // bebes
                                    }else{

                                        bloque3b.show();   // niños
                                    }

                                }

                            if (bloque1.conf.discapacidad == '0'){

                                bloque6.show();     // discapacidad

                            }

                            if ( bloque1.conf.embarazo == '0' ){

                                bloque7.show_me();     // embarazo

                            }                      


                            if(bloque1.conf.genero == 'f'  )
                            {
                                // si es mujer y esta embarazada  despliego  
                                
                                if(edad > 16 ){

                                    bloque4.show_me();     // mujeres

                                }else{

                                     bloque4.hide_me();     // mujeres
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
  bloque2.init();
  bloque3a.init();
  bloque3b.init();
  bloque4.init();

  bloque7.init();
    $('.date-picker').datepicker({
        autoclose: true,
        todayHighlight: true
    })

});



var bloque2 ={

    uso:     '0',

    template: {
                // asigno el nombre del selector de bloque
                html: '#bloque_2'
    },


    update: function(){
            // actualizo ante los cambios

            if(bloque2.uso == '0'){
                $( "#b2_si" ).show();
                $( "#b2_area" ).show();
                $( "#b2_no" ).hide();


            }else{

                $( "#b2_si" ).hide();
                $( "#b2_area" ).hide();
                $( "#b2_no" ).show();
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
        $( bloque2.template.html ).show();

    },

    hide_me: function(){
        // ocultar el bloque
        $( bloque2.template.html ).hide();

    },  


}






var bloque4 ={

        pap: {

            uso:     '0'
        },

        mamo: {

            uso:     '0'

        },


        template: {
                    // asigno el nombre del selector de bloque
                    html: '#bloque_4'
        },


        update: function(){
                // actualizo ante los cambios

                if(bloque4.pap.uso == '0'){

                    $( "#b4_div_pap_si" ).show();
                    $( "#b4_div_pap_no" ).hide();

                }else{

                    $( "#b4_div_pap_si" ).hide();
                    $( "#b4_div_pap_no" ).show();

                }

                if(bloque4.mamo.uso == '0'){
                    $( "#b4_div_mamo_si" ).show();
                    $( "#b4_div_mamo_no" ).hide();


                }else{

                    $( "#b4_div_mamo_si" ).hide();
                    $( "#b4_div_mamo_no" ).show();
                }



        },

        init:  function(){
            // funcion de inicializacion
            bloque4.hide_me();
            bloque4.bindComponent();
            bloque4.update();

        },


        bindComponent: function(){

                    $( "#b4_pap" ).on(
                        'change, click', function(){

                            bloque4.pap.uso= $(this).val();
                            bloque4.update();

                    });

                    $( "#b4_mamo" ).on(
                        'change, click', function(){

                            bloque4.mamo.uso= $(this).val();
                            bloque4.update();

                    });


        },





        show_me: function(){

            // Mostrar el bloque
            $( bloque4.template.html ).show();

        },

        hide_me: function(){
            // ocultar el bloque
            $( bloque4.template.html ).hide();

        },  


}


var bloque7 ={

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
                    $( "#b7_div_complejo" ).show();
                    $( "#b7_div_porque_no" ).hide();

                }else{
                    // si no se lo hizo muestra por que no..
                    $( "#b7_div_porque_no" ).show();
                    $( "#b7_div_complejo" ).hide();

                }


                if(bloque7.problem == '1'){
                    
                    $( "#b7_cual" ).show();


                }else{

                    $( "#b7_cual" ).hide();
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
            $( bloque7.template.html ).show();

        },

        hide_me: function(){
            // ocultar el bloque
            $( bloque7.template.html ).hide();

        },  


}



var bloque3a ={

        leche:     '1',

        template: {
                    // asigno el nombre del selector de bloque
                    html: '#bloque_3_a'
        },


        update: function(){
                // actualizo ante los cambios

                if(bloque3a.leche == '1'){
                    // si tien control hecho muestra complejidad
                    $( "#b3a_div_porque_no" ).hide();


                }else{
                    // si no se lo hizo muestra por que no..
                    $( "#b3a_div_porque_no" ).show();

                }



        },

        init:  function(){
            // funcion de inicializacion
            bloque3a.hide_me();
            bloque3a.bindComponent();
            bloque3a.update();

        },


        bindComponent: function(){

                    $( "#b3_a_leche" ).on(
                        'change, click', function(){

                            bloque3a.leche= $(this).val();
                            bloque3a.update();

                    });



        },





        show_me: function(){

            // Mostrar el bloque
            $( bloque3a.template.html ).show();

        },

        hide_me: function(){
            // ocultar el bloque
            $( bloque3a.template.html ).hide();

        },  


}