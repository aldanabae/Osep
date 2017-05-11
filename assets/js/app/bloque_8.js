







$(function() {
  // Handler for .ready() called.

    
    
});




var cargar = {

    opts :{
    lines: 13 // The number of lines to draw
    , length: 28 // The length of each line
    , width: 14 // The line thickness
    , radius: 42 // The radius of the inner circle
    , scale: 1 // Scales overall size of the spinner
    , corners: 1 // Corner roundness (0..1)
    , color: '#000' // #rgb or #rrggbb or array of colors
    , opacity: 0.25 // Opacity of the lines
    , rotate: 0 // The rotation offset
    , direction: 1 // 1: clockwise, -1: counterclockwise
    , speed: 1 // Rounds per second
    , trail: 60 // Afterglow percentage
    , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
    , zIndex: 2e9 // The z-index (defaults to 2000000000)
    , className: 'spinner' // The CSS class to assign to the spinner
    , top: '50%' // Top position relative to parent
    , left: '50%' // Left position relative to parent
    , shadow: false // Whether to render a shadow
    , hwaccel: false // Whether to use hardware acceleration
    , position: 'absolute' // Element positioning
    },
    
    target: document.getElementById('b8_spinner'),

    init: function(){

        $('.main-content').css("opacity", "0.2");
        
        spinner.spin(cargar.target);
    },

    stop:function(){

        if (spinner){
            $('.main-content').css("opacity", "1");
           spinner.stop();  
        }

    },


    notice: function(){

        // mando una alerta
        var unique_id = $.gritter.add({
            title: '<center><h3>Relevamiento almacenado correctamente</h3></center>',
            text: '<div class="row" ><div class="col-xs-12 center"><a href="index.php/bienvenidaC" class="btn" type="reset"><i class="fa fa-address-card-o" aria-hidden="true"></i>Nuevo Relevamiento</a>&nbsp; &nbsp; &nbsp;<a href="index.php/bienvenidaC" class="btn" type="reset"><i class="fa fa-home" aria-hidden="true"></i>Menu principal</a>&nbsp; &nbsp; &nbsp;</div><br></div>',
            image: '',
            sticky: true,
            time: '',
            class_name: 'gritter-success gritter-center' + ' gritter-light' 
        });
  
    },


    bind:function(){


        $('#gritter-sticky').on('click', cargar.notice());



    }




}

spinner = new Spinner(cargar.opts);