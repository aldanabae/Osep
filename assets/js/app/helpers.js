    var special = {'\b': '\\b', '\t': '\\t', '\n': '\\n', '\f': '\\f', '\r': '\\r', '"' : '\\"', '\\': '\\\\'};

    var escape = function(chr){
        return special[chr] || '\\u' + ('0000' + chr.charCodeAt(0).toString(16)).slice(-4);
    };

    JSON.validate = function(string){
        string = string.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, '@').
                        replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']').
                        replace(/(?:^|:|,)(?:\s*\[)+/g, '');

        return (/^[\],:{}\s]*$/).test(string);
    };

    JSON.encode = JSON.stringify ? function(obj){
        return JSON.stringify(obj);
    } : function(obj){
        if (obj && obj.toJSON) obj = obj.toJSON();

        switch (typeOf(obj)){
            case 'string':
                return '"' + obj.replace(/[\x00-\x1f\\"]/g, escape) + '"';
            case 'array':
                return '[' + obj.map(JSON.encode).clean() + ']';
            case 'object': case 'hash':
                var string = [];
                Object.each(obj, function(value, key){
                    var json = JSON.encode(value);
                    if (json) string.push(JSON.encode(key) + ':' + json);
                });
                return '{' + string + '}';
            case 'number': case 'boolean': return '' + obj;
            case 'null': return 'null';
        }

        return null;
    };

    JSON.secure = true;

    JSON.decode = function(string, secure){
        if (!string || typeOf(string) != 'string') return null;

        if (secure == null) secure = JSON.secure;
        if (secure){
            if (JSON.parse) return JSON.parse(string);
            if (!JSON.validate(string)) throw new Error('JSON could not decode the input; security is enabled and the value is not secure.');
        }

        return eval('(' + string + ')');
    };


    function parseData(arreglo,option){
        //var parse= {};
        var parse = [];

        if(option){

            var nombres= apellidos(bloque1.conf.nombre);
            parse.push(
                {
                    "nombre":nombres.nombre,
                    "apellido":nombres.apellido,
                    "dni":$('#b1_dni').val(),
                    "edad":bloque1.conf.edad,
                    "sexo":bloque1.conf.genero,
                    "id_relev":$('#hdnid_relevamiento').val(),
                    "n_afiliado":$('#b1_afiliado').val() + '/'+$('#b1_barra').val() ,
                    "respondeR":encuesta.responde ? '1' : '0'

                }
            )
        }else{

            parse.push(
                {
                    "id_relev":$('#hdnid_relevamiento').val(), // id unico del relevamiento
                    "numrelevamiento":$('#hdnid_numRel').val(),
                    "idCriticidad":$('#b8_criticidad').val()
                })





        }

        arreglo.forEach(function(element) {

                parse.push( [element.name ,
                 element.value])
            
        });


        return parse;
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


    function setAjax(datos, endpoint, success, onerror){
        //var idDpto = $('#departamento').val();
        var path   = $("#localPath").val();
        var url= path+'index.php/encuesta/cargarEncuesta/'+ endpoint;
        var parametros = "datos=" + datos;

        var result="";
        $.ajax({
            type: 'POST',
            url: url, 
            data: parametros, 
                dataType: 'json',
            success: function(json){

                success(json);
            },
            
            error: function(xhr,status) { 
                //console.log(xhr+"    "+status);
                alert('Existio un error en el almacenamiento, intente nuevamente');
                onerror;
            },
            beforeSend: function(){
                // Code to display spinner
                    
                    spnr.init();

            },

            complete: function(){
                // Code to hide spinner.
                    spnr.stop();
            }
        });


        
    }
    

    function apellidos(nombre){

        arregloNombre = nombre.split(' ');//Array del nombre con las palabras separadas en cada posición 
        fullName = [];//Array que contendra el nombre final
        palabrasReservadas =['da', 'de', 'del', 'la', 'las', 'los', 'mar', 'san','puebla', 'santa', 'montes' ,'cairo','mac', 'mc', 'van', 'von', 'y', 'i',];//Palabras de apellidos y nombres compuetos,  aqui podemos agregar más palabras en caso de ser necesario.
        auxPalabra = "";//Variable auxiliar para concatenar los apellidos compuestos
        arregloNombre.forEach(function(name){
                nameAux = name.toLowerCase();
            if(palabrasReservadas.indexOf(nameAux)!=-1)
            {
            auxPalabra += name+' ' ;
            }
            else {
                        fullName.push(auxPalabra+name);
                auxPalabra = "";
            }
        });

        var apellido= fullName[0]
        delete fullName[0];
        var nombreCompleto = "";

        fullName.forEach(function(nombre){
            if(nombre!="")
            {
            nombreCompleto +=nombre+" ";
            }
        });
        var retorno= {

            nombre: nombreCompleto,
            apellido: apellido

        }

            return retorno;

    }


    function cleanString(cadena){// limpia String de comas y puntos ..  para numeros

        // Definimos los caracteres que queremos eliminar
        var specialChars = "!@#$^&%*()+=-[]\/{}|:<>?,.";

        for (var i = 0; i < specialChars.length; i++) {
            cadena= cadena.replace(new RegExp("\\" + specialChars[i], 'gi'), '');
        }  

        return cadena;
    }

    //validations

    function validations(div){  // metodo de validacion generico
        
        
                    var validacion = false;  // variable de retorno para devolver
                    var componentes= [];    // declaro un arreglo vacio
                    var red_css        = false; // si hay algun imput en rojo esta variable queda en verdadero
        
                    $(div).find('input, select, textarea, input:checkbox').filter(function(index){
        
                        // filtro todos los elementos que eisten en el div seleccionado
                        if($(this).is(':visible')){ 
        
                            componentes.push($(this));  // guardo los que estan visibles en un arreglo para analizar despues
                        }
                    })
        
                   
                    $.each(componentes,function (key, el){
        
                        if(el.prop('required')  ){  // si el campo es requierido  entonces debo validarlo 
                            
        
                                if(el.val() == "" || el.val() == null  ){ // si es requerido  y esta vacio o null  debomarcarlo como que esta en falta
        
                                    el.parent().parent().addClass('has-error')
                                    validacion = false; // validacion incorrecta
                                    red_css = true;     // estoy colocando una clase de error
                                    

                                }else{    // si no esta vacio ni null devo verificar el tipo de input y su limite
        
                                    if(el.prop('type') == 'number'){   // si es de tipo number  entonces debo ver el limite 
        
                                        var limite = el.data('limit')          // traigo el limite establecido
                                        var valor = parseInt(cleanString(el.val().trim()));     // limpio la cadena de . ,  y espacios
                                        if(valor >=0  && valor<= limite ){  // ya tengo el limite  si esta fuera del valor lo pongo como en falta.
        

                                            if(el.prop('name') == "b1_afiliado"){
                                                
                                                //console.log(el.prop('name'));

                                                $('#b1_afiliado').parent().parent().addClass('has-error')
                                            }


                                            el.parent().parent().removeClass('has-error')
                                            validacion = true; // validacion correcta
                                            
                                        }else{ //no cumple con el parametro  lo pongo rojo
        
                                            el.parent().parent().addClass('has-error')

                                            
                                                if(el.prop('name') == "b1_afiliado"){
                                                    
                                                    console.log(el.prop('name'));

                                                    $('#b1_afiliado').parent().parent().addClass('has-error')
                                                }

                                            validacion = false;  // validadcion incorrecta
                                            red_css = true;     // estoy colocando una clase de error
                                        }
        
                                    }else{  // si no esta vacio y no es numerico  entonces esta correcto  el valor
        
        
                                        el.parent().parent().removeClass('has-error')
                                        validacion = true; // la validacion es correcta
                                    }
                
                                }
                                
                        } // de otro modo es opcional
        
                        
                    } );
                    
                    if( validacion && !red_css )  {  // retorno el resultado de todo el analisis
        
                        return true;
                    }else{
        
                        return false;
                    }
        
        
                }

    //set Spinjs

    var spnr= {


        opts :{
              lines: 13 // The number of lines to draw
            , length: 28 // The length of each line
            , width: 20 // The line thickness
            , radius: 42 // The radius of the inner circle
            , scale: 2 // Scales overall size of the spinner
            , corners: 1 // Corner roundness (0..1)
            , color: '#000' // #rgb or #rrggbb or array of colors
            , opacity: 0.25 // Opacity of the lines
            , rotate: 0 // The rotation offset
            , direction: 1 // 1: clockwise, -1: counterclockwise
            , speed: 2 // Rounds per second
            , trail: 60 // Afterglow percentage
            , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
            , zIndex: 2e9 // The z-index (defaults to 2000000000)
            , className: 'spinner' // The CSS class to assign to the spinner
            , top: '60%' // Top position relative to parent
            , left: '50%' // Left position relative to parent
            , shadow: true // Whether to render a shadow
            , hwaccel: false // Whether to use hardware acceleration
            , position: 'absolute' // Element positioning
              //=============// opciones propias del comp
            , target:"btn_guardar"   // donde va a ejecutarse el spiner
            , content:"btn_guardar"  // contenerod de opacidad
            , contentOpct: "0.2"
        },

        

        setContent: function(content){

            spnr.opts.content=content;
        },

        setTarget: function(tgt){

            spnr.opts.target=document.getElementById(tgt);
        },
        
         

        init: function(){
            spnr.exOpacity();        
            target = document.getElementById('btn_encuesta')
            spinner.spin(target);
        },

        stop:function(){

            if (spinner){
                spnr.quitOpacity()
                spinner.stop();  
            }

        },

        exOpacity:function(){  // ejecuta opacidad en el contenedor

            $('#add_encuesta').css("opacity", spnr.opts.contentOpct);

        },
        quitOpacity:function(){ // quita la  opacidad en el contenedor

            $('#add_encuesta').css("opacity", "1");
        },       


}

spinner = new Spinner(spnr.opts);
