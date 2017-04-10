<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			


            



<?php


 var_dump($lib);
var_dump($_SESSION);



// $encuestados = array(
    
// array(
// 'nombreE' =>"",
// 'apellidoE' =>"asas",
// 'dniE' =>"2222",
// 'edad' =>"11",
// 'sexo' =>"m",
// 'nroAfiliado' =>"wewewewewe",
// "pregResp" => array(
    
//     ['idPregunta' => "5",
//     'idRespuesta' =>"tu vieja"],

//     ['idPregunta' => "5",
//     'idRespuesta' =>"6"],


//     ['idPregunta' => "5",
//     'idRespuesta' =>"6"],

//     ['idPregunta' => "7",
//     'idRespuesta' =>"7"],
    
//     ['idPregunta' => "88",
//     'idRespuesta' =>"33"],

// )

// ) ,// cierre princ




// array(
// 'nombreE' =>"carlos",
// 'apellidoE' =>"asas",
// 'dniE' =>"2222",
// 'edad' =>"11",
// 'sexo' =>"m",
// 'nroAfiliado' =>"wewewewewe",
// "pregResp" => array(
    
//     ['idPregunta' => "5",
//     'idRespuesta' =>"tu vieja"],

//     ['idPregunta' => "5",
//     'idRespuesta' =>"6"],


//     ['idPregunta' => "5",
//     'idRespuesta' =>"6"],

//     ['idPregunta' => "7",
//     'idRespuesta' =>"7"],
    
//     ['idPregunta' => "88",
//     'idRespuesta' =>"33"],

// )

// ) // cierre princ

// );



// var_dump($encuestados[0]['pregResp'][1]['idPregunta']);
// var_dump($encuestados[1]['nombreE']);


?>

<!--<div class="container">   contenedor principal -->
 <input type="hidden" name="localPath"  id="localPath" value="<?php echo base_url(); ?>">
        <form id="encuesta_ini" action="<?php echo(site_url('encuesta/cargarEncuesta/cargabloques'));  ?>" method="post">

        <div class="row form-horizontal" id= "bloque_0">     <!-- bloque 0 -->
                <div class="panel panel-default">
                
                    <div class="panel-heading">Bloque 0 Identificacion de territorio , facilitador</div>
                        <div class="panel-body">
                        
                            <div class="form-group">
                                <label for="inputName" class="control-label col-xs-6">Numero relevamiento:</label>
                                <div class="col-xs-6">
                                    <input type="name" class="form-control" placeholder="Numero" name= "nroRelev" id="nroRelev" value= "<?php echo($lib['nroRelevamiento']); ?>" required>
                                </div>
                            </div>				
                        
                            <div class="form-group">
                                <label for="inputName" class="control-label col-xs-6">Nombre y apellido:</label>
                                <div class="col-xs-6">
                                    <input type="name" class="form-control" placeholder="Nombre y apellido" name= "nom_facilitador" id="nom_facilitador"  required>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="fecha_relevamiento" class="control-label col-xs-6">fecha:</label>
                                <div class="col-xs-6">
                                    <input class="form-control date-picker" id="id-date-picker-1" data-date-format="dd-mm-yyyy" type="text" name= "fechaR" id= "fecha_relevamiento" required>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label class="control-label col-xs-6">Departamento</label>
                                <div class="col-xs-6">
                                    <select class="form-control" id="departamento" name ="select_dep" onchange="cargarLocalidades()">
                                    		<option value="0">Seleccionar</option>
                                            <option value="1">Capital	</option>
                                            <option value="17">General Alvear</option>
                                            <option value="4">Godoy Cruz</option>
                                            <option value="3">Guaymallén	 </option>
                                            <option value="8">Junín</option>
                                            <option value="11">La Paz</option>
                                            <option value="2">Las Heras</option>
                                            <option value="12">Lavalle </option>
                                            <option value="5">Lujan de Cuyo</option>
                                            <option value="6">Maipú</option>
                                            <option value="18">Malargue</option>
                                            <option value="9">Rivadavia</option>
                                            <option value="15">San Carlos</option>
                                            <option value="7">San Martín</option>
                                            <option value="16">San Rafael</option>
                                            <option value="10">Santa Rosa</option>
                                            <option value="14">Tunuyán</option>
                                            <option value="13">Tupungato</option>
                                    </select>
                                </div>

                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-xs-6">Distrito:</label>
                                <div class="col-xs-6">
                                    <select class="form-control" id="localidad" name ="localidad" >
                                    

                                    </select>
                                </div>

                            </div>	
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Barrio:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" placeholder="Barrio" name="barrio" id="barrio" required>
                                </div>
                            </div>
                            
                            <hr>
                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Calle:</label>
                                <div class="col-xs-6">
                                    <input type="text" name = "ini_calle" class="form-control" placeholder="calle" id= "calle" required>
                                </div>
                            </div>				 
                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Numero:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" placeholder="numero" name ="numero" id= "numero" required>
                                </div>
                            </div>					 
                            
                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">entre que calles?:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" placeholder="calles" name ="entre_calle" id= "entre_calle" required>
                                </div>
                            </div>		
                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Observaciones:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" placeholder="observaciones" name= "observaciones">
                                </div>
                            </div>						 


                        </div>

                </div>		

     
                
        </div>	

        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Continuar" name= "Continuar">
                <input type="reset" class="btn btn-default" value="Cerrar" name="Cerrar">
            </div>
        </div>



    </form>


</div>
 


		</div><!-- /.page-content -->
	</div><!-- /.main-content-inner -->
</div><!-- /.main-content -->



<!--Para que se vean los botones de la tabla responsive-->
