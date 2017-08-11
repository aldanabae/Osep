







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
                spnr.init();
                    setTimeout(function () {
                                spnr.stop();
                                cargar.parse();
                                $("#btn_guardar").hide()
                    }, 2500);

            });
            

        },

        parse: function(){

            var tmp = $('#add_encuesta').find("select, textarea, input, radio, input:checkbox").filter(":visible").serializeArray();

            var datos = JSON.encode(parseData(tmp));
            setAjax(datos, 'guardarEncuesta', function(){

                    cargar.notice();

            });
        },




}

spinner = new Spinner(cargar.opts);