










$(function() {

    $('.date-picker').datepicker({
        autoclose: true,
        todayHighlight: true
    })


 $("#encuesta_ini").submit(function () { 

var retorno = false;   // variable de retorno para el submit
// debo comprobar la existencia de la variable local
if ( localStorage.getItem('general')){

    localStorage.removeItem("general");

}



var general = $("#bloque_0").find("select, textarea, input").serializeArray();

localStorage.setItem('general' , JSON.stringify(general));

retorno= true;

return retorno;





})






});