<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			


            



<?php


 //var_dump($lib);
// var_dump($_SESSION);
// var_export ($lib);


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
                
                    <div class="panel-heading">Bloque de identificación del territorio/facilitador/familia relevada</div>
                        <div class="panel-body">
                        
			
                        
                            <div class="form-group">
                                <label for="inputName" class="control-label col-xs-6">Facilitador:</label>
                                <div class="col-xs-6">
                                    <input type="name" class="form-control"  name= "1" id="nom_facilitador"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputName" class="control-label col-xs-6">Numero relevamiento:</label>
                                <div class="col-xs-6">
                                    <input type="name" class="form-control"  name= "nroRelev" id="nroRelev" value= "<?php echo($lib['nroRelevamiento']); ?>" required>
                                </div>
                            </div>	                            

                            
                            <div class="form-group">
                                <label for="fecha_relevamiento" class="control-label col-xs-6">Fecha del relevamiento:</label>
                                <div class="col-xs-6">
                                    <input class="form-control date-picker" id="id-date-picker-1" data-date-format="dd-mm-yyyy" type="text" name= "2" id= "fecha_relevamiento" required>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label class="control-label col-xs-6">Departamento</label>
                                <div class="col-xs-6">
                                    <select class="form-control" id="departamento" name ="3" id ="select_dep" onchange="cargarLocalidades()">
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
                                    <select class="form-control" id="localidad" name ="4" >
                                    

                                    </select>
                                </div>

                            </div>




                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Barrio:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control"  name="5" id="barrio">
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Manzana:</label>
                                <div class="col-xs-2">
                                    <input type="text" class="form-control"  name="5" id="barrio">
                                </div>
                                <label for="inputPassword" class="control-label col-xs-2">Casa:</label>
                                <div class="col-xs-2">
                                    <input type="text" class="form-control"  name="5" id="barrio">
                                </div>

                            </div>

                            
                            <hr>
                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Calle:</label>
                                <div class="col-xs-6">
                                    <input type="text" name = "ini_calle" class="form-control"  id= "calle" required>
                                </div>
                            </div>				 
                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Numero:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control"  name ="numero" id= "numero" required>
                                </div>
                            </div>					 
                            
                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Entre calles:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control"  name ="entre_calle" id= "entre_calle" >
                                </div>
                            </div>		
                            


                            	 
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Teléfono del encuestado:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control"  name ="tel_titular" id= "tel_titular" >
                                </div>
                            </div>	

                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Teléfono para supervisión:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control"  name ="tel_super" id= "tel_super" >
                                </div>
                            </div>	


<!-- bloque de cantidad-->
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">¿Cuántas personas viven habitualmente en este domicilio?:</label>
                                <div class="col-xs-6">
                                    <input type="number" class="form-control"  name= "cantidad" required>
                                </div>
                            </div>

                        <div class="form-group">
                            <label class="control-label col-xs-6">¿Hay alguna mujer embarazada?:</label>
                            <div class="col-xs-6">
                                <select class="form-control" name= "embarazo" id= "embarazo">
                                <option value="0">SI</option>
                                <option value="1" selected >NO</option>
                                </select>
                            </div>

					    </div>




                        <div class="form-group" id= "filter_embarazo">
                            <label class="control-label col-xs-6"></label>
                            <div class="col-xs-6">


                                    <div class="form-group">
                                        <label class="control-label col-xs-4">¿De qué edad/es? </label>
                                        <div class="col-xs-8" >

                                            <ul id = "list_edades"class="text-uppercase">

                                            </ul>
                                            <input type="number" class="form-control"  name ="edad_embarazo" id= "edad_embarazo" >
                                            <br>
                                            <button type="button" class="btn btn-success" id="btn_nueva_edad">Ingresar edad</button>
                                        </div>

                                    </div>
                            </div>

					    </div>





                            <!-- bloque de observaciones-->

                        <div class="form-group">
                            <label for="inputPassword" class="control-label col-xs-6">Observaciones:</label>
                            <div class="col-xs-6">
                                <input type="text" class="form-control"  name= "observaciones">
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

        <script type="text/javascript">
            window.jQuery || document.write("<script src='../../assets/js/jquery.js'>"+"<"+"/script>");
        </script>


        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='../../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
        </script>
        <script src="../../assets/js/bootstrap.js"></script>