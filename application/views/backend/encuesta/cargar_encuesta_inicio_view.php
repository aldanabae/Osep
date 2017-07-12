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





?>



<!--<div class="container">   contenedor principal -->
 <input type="hidden" name="localPath"  id="localPath" value="<?php echo base_url(); ?>">
 
        <form id="encuesta_ini" action="<?php echo(site_url('encuesta/cargarEncuesta/cargabloques'));  ?>" method="post">

        <div class="row form-horizontal" id= "bloque_0">     <!-- bloque 0 -->
                <div class="panel panel-default">
                
                    <div class="panel-heading orange">Bloque de Identificación del Territorio/Facilitador/Familia relevada</div>
                        <div class="panel-body">
                        
			
                            <div class="form-group">
                                <label for="inputName" class="control-label col-xs-6">Facilitador (*)</label>
                                <div class="col-xs-6">

                                    <?php

                                        $limite = count($listado);  // me fijo la cantidad de elementos que vienen en el arreglo
                                                                    // si es uno pongo un text  bloqueado, si no pongo un select
                                                                    
                                        if( $limite == 1){
                                            print '<select class="form-control" id="nom_facilitador" name ="nom_facilitador" disabled>
                                            <option value="'.$listado[0][0].'" >'. $listado[0][1].'</option></select>';

                                        }else{

                                            echo '<select class="form-control" id="nom_facilitador" name ="nom_facilitador" required>';
                                                echo '<option value="" disabled selected hidden>Seleccionar</option>';
                                                foreach($listado as $list){

                                                    echo '<option value="'.$list[0].'">'.$list[1].'</option>';

                                                }
                                            echo'</select>';

                                        }


                                    ?>

                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputName" class="control-label col-xs-6">Número Relevamiento (*)</label>
                                <div class="col-xs-6">
                                    
                                    <input type="text" class="form-control"  name= "nroRelev" id="nroRelev" value= "<?php //echo($lib['nroRelevamiento']); ?>" required>
                                </div>
                            </div>	                            
                            
                            <div class="form-group">
                                <label for="fecha_relevamiento" class="control-label col-xs-6">Fecha Relevamiento (*)</label>
                                <div class="col-xs-6">
                                    <input class="form-control date-picker" id="id-date-picker-1" data-date-format="dd-mm-yyyy" type="text" name= "fechaRelev" id= "fecha_relevamiento" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-xs-6">Departamento (*)</label>
                                <div class="col-xs-6">
                                    <select class="form-control" id="departamento" name ="idDep" id ="select_dep" onchange="cargarLocalidades()"required>
                                    		<option value="" disabled selected hidden>Seleccionar</option>
                                            <option value="1">Capital</option>
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
                                <label class="control-label col-xs-6">Distrito (*)</label>
                                <div class="col-xs-6">
                                    <select class="form-control" id="localidad" name ="idLocalidad" required>
                                    

                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Calle (*)</label>
                                <div class="col-xs-6">
                                    <input type="text" name = "b0_calle" class="form-control"  id= "calle" >
                                </div>
                            </div>				 
                            
                            <div class="form-group">
                                <label  class="control-label col-xs-6">Número (*)</label>
                                <div class="col-xs-4">
                                    <input type="number" class="form-control"  name ="numero" id= "numero" >
                                </div>
                                <div class="col-xs-2 checkbox">
                                    <label><input type="checkbox" value="1" id="b0_sin_numero">Sin número</label>
                                </div>
                            </div><hr>	

                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Barrio</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control"  name="barrio" id="barrio">
                                </div>
                            </div>

                            <div class="form-group" id="manzana">
                                <label for="inputPassword" class="control-label col-xs-6">Manzana (*)</label>
                                <div class="col-xs-2">
                                    <input type="text" class="form-control"  name="barrio_m" id="barrio_m">
                                </div>
                                <label for="inputPassword" class="control-label col-xs-2">Casa (*)</label>
                                <div class="col-xs-2">
                                    <input type="number" class="form-control"  name="barrio_c" id="barrio_c">
                                </div>
                            </div>


                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Entre calles</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control"  name ="entre_calle" id= "entre_calle" >
                                </div>
                            </div>		                           
                            	 
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Teléfono del titular (*)</label>
                                <div class="col-xs-6">
                                    <input type="number" class="form-control"  name ="tel_titular" id= "tel_titular" required>
                                </div>
                            </div>	

                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Teléfono para supervisión (encuestado)</label>
                                <div class="col-xs-6">
                                    <input type="number" class="form-control" name ="tel_super" id= "tel_super" >
                                </div>
                            </div>	

<!-- bloque de cantidad-->

                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">¿Cuántas personas viven habitualmente en este domicilio? (*)</label>
                                <div class="col-xs-6">
                                    <input type="number" class="form-control"  name= "cantidad"  id= "cantidad" maxlength="2" min="1" max="20" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-6">¿Hay alguna mujer embarazada? (*)</label>
                                <div class="col-xs-6">
                                    <select class="form-control" name= "embarazo" id= "embarazo" required>
                                    <option value="" disabled selected hidden>Seleccionar</option>
                                    <option value="0">SI</option>
                                    <option value="1" >NO</option>
                                    </select>
                                </div>
    					    </div>


                            <div class="form-group" id= "filter_embarazo">
                                <label class="control-label col-xs-6"></label>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label col-xs-4">¿De qué edad/es?</label>
                                        <div class="col-xs-8" >

                                            <ul id = "list_edades"class="text-uppercase">

                                            </ul>
                                            <input type="number" class="form-control"  name ="edad_embarazo" id= "edad_embarazo" >
                                            <br>
                                            
                                            <button type="button" class="btn btn-info" id="btn_nueva_edad">Ingresar Edad</button>                                           
                                            
                                        </div>  
                                    </div>
                                </div>
				            </div>


<!-- bloque de observaciones-->

                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Observaciones</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control"  name= "observaciones">
                                </div>
                            </div>


                            
                            <div class="form-group">
                                <label for="warning" class="control-label col-xs-6 text-warning">Rellene los campos obligatorios marcados con un asterisco (*) </label>
                                <div class="col-xs-6">
                                    
                                </div>
                            </div>		
                        </div> 
                </div>		
        </div>	


        <br>


        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-info" value="Continuar" name= "Continuar">
                <input type="button" class="btn btn-default" value="limpiar" name="Cerrar"  onclick="javascript:location.reload()">
            </div>
        </div>

        </form>

 
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