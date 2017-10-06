
$(function() {
  // Handler for .ready() called.
  cargar.bind();
    
});

var cargar = {

        notice: function(){
            // seteo las rutas del sistema
            var ruta = $('#localPath').val();
            // mando una alerta
            var unique_id = $.gritter.add({
                title: '<center><h3>Relevamiento almacenado correctamente</h3></center>',
                text: '<div class="row" ><div class="col-xs-12 center"><a href="'+ ruta +'/encuesta/cargarEncuesta/" class="btn"><i class="fa fa-address-card-o" aria-hidden="true"></i> Nuevo Relevamiento</a>&nbsp; &nbsp; &nbsp;<a href="'+ ruta +'/" class="btn" ><i class="fa fa-home" aria-hidden="true"></i> Menú Principal</a>&nbsp; &nbsp; &nbsp;</div><br></div>',
                image: '',
                sticky: true,
                time: '',
                class_name: 'gritter-success gritter-center' + ' gritter-light' 
            });


    
        },

        bind:function(){

            $('#guardar').on('click', function(event){


                event.preventDefault();
                if(validations('#add_encuesta')){

                    spnr.init();
                        setTimeout(function () {
                                    
                                    cargar.parse();
                                    
                                    spnr.stop();
                        }, 2000);

                }

            });


            $( "#b8_criticidad" ).on(     // preguntas mamo
                'change', function( ){

                    var estado = $(this).val();
                    
                    if(estado == "1"){

                        $('#b8_criticidad').parent().parent().removeClass( "has-warning has-error has-info" ).addClass( "has-success" );

                    }else{

                        if(estado == "2"){

                            $('#b8_criticidad').parent().parent().removeClass( "has-success has-error has-info" ).addClass( "has-warning" );
                            
                        }else{

                            if(estado == "3"){
                                
                                $('#b8_criticidad').parent().parent().removeClass( "has-warning has-success has-info" ).addClass( "has-error" );
                                
                            }else{

                                $('#b8_criticidad').parent().parent().removeClass( "has-warning has-success has-error" ).addClass( "has-info" );

                            }

                            
                        }

                    }
                    



            });

        },

        parse: function(){

            var tmp = $('#add_encuesta').find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();
                tmp.pop(); // elimino el ultimo elemento de criticidad por que lo quiero en otro lado

            var datos = JSON.encode(parseData(tmp));
            setAjax(datos, 'guardarEncuesta', function(){

                    cargar.notice();
                    $("#btn_guardar").hide();
            });
        },




}

spinner = new Spinner(cargar.opts);