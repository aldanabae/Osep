//choreado de motools

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









    function parseData(arreglo, data){
        //var parse= {};
        var parse = (typeof data == 'undefined') ? [] : data;

        var nombres= apellidos(bloque1.conf.nombre);

        parse.push(

            {
                "nombre":nombres.nombre,
                "Apellido":nombres.apellido,
                "dni":$('#b1_dni').val(),
                "edad":bloque1.conf.edad,
                "sexo":bloque1.conf.genero,
                "id_relev":$('#hdnid_relevamiento').val(),
                "n_afiliado":$('#b1_afiliado').val() + '/'+$('#b1_barra').val() ,
                "respondeR":encuesta.responde ? '1' : '0'

            }

        )

        arreglo.forEach(function(element) {

                parse.push( [element.name ,
                 element.value])
            
        });


        return parse;
    }



    function enabledBlock(){

        /*cargo los bloques en un array
            recorro los estados, y si esta activo lo pongo en un segundo arregloo para validarlo

            valido cada array, y si esta ok  saco los datos del bloque y los voy concatenando

            cuando llego al final, guardo en local Storage como encuestados 

            el bloque 2 se guarda en general..
        */ 
        var bloques = [bloque1, bloque3, bloque3a ,bloque3b, bloque4, bloque5, bloque6, bloque7, bloque9];
        var arr = [];
        $.each( bloques , function (index, valor){

                if (valor.estado){

                    arr.push(valor) ;
                }
        })

        return arr;


    }


    function validateBlock( lista){

        /**
         * Aqui hay que recorrrer cada bloque y accionar el metodo validacion
         * recorda añadir un parametro de Title para identificar el modulo donde salta la validacion
         * 
         * 
         * 
         * 
         * 
         */


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





		function setAjax(datos){
			//var idDpto = $('#departamento').val();
            var path   = $("#localPath").val();
            var url= path+'index.php/encuesta/cargarEncuesta/encuestaAjax';
			var formulario   = "";
			var parametros = "datos=" + datos;

			$.ajax({
				type: 'POST',
				url: url, 
				data: parametros, 
			       	dataType: 'json',
				success: function(resp) { 
					if(resp){
						console.log(resp);
					}
					},
				 error: function(xhr,status) { 
					console.log(xhr+"    "+status);
				},
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