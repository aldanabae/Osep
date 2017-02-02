$(document).ready(function(){

    var next = 1;
    $("#btn-nueva").on('click', function(e) {
    //alert('El valor es: ');	
        e.preventDefault();
        next++;

    $('#panel-respuestas').append( '<div class="input-group add-more formSpace" id ="con-preg-'+next+'"><input class="form-control " id="preg-'+next+'" class="col-xs-12" type="text" name=respuesta[]><span class="input-group-addon btn-del" id= ""><i class="ace-icon fa fa-minus"></i></span></div>');

    })
	

    $("body").on("click",".btn-del",function(e){
            e.preventDefault();
            if(next > 1){
            
                $(this).parent('div').remove(); //eliminar el campo
                next--;
            }
            return false;


    });











    
    
});