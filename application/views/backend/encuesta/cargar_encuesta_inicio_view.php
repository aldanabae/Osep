<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">

<?php

$dato_rel= $relevamiento; // array de relevamiento qeu viene del controlador
    // valido el contenido del relevamiento, si hay un solo elemento 
    //es por que no hay relevamiento abierto, de otro modo pone el parametro en true
    // y carga los valores en los campos
    $completar = false;

    if(count($dato_rel) > 1){

        $completar = true;
        $cantidad= unserialize($dato_rel['cantEncuestados']);
        
    }

    // campo oculto de refecencia por si es una edicion o es un guardado basico

?>
    

<?php

    $result = ""; // variable cadena donde va el value del hidden edades
    if($completar){


        if($cantidad['embarazo']== 0){

            if(count($cantidad['edades']) > 1){

                $result = implode(',',$cantidad['edades']);

            }elseif (count($cantidad['edades']) == 1){

                $result = $cantidad['edades'][0];

            }
        }
    }


?>

<!--campos ocultos de recarga de datos  -->

    <input type="hidden" name="hdnembarazo"  id="hdnembarazo" value="<?php echo ($completar) ? $cantidad['embarazo'] : ""; ?>">
    <input type="hidden" name="hdnedades"  id="hdnedades" value="<?php echo $result; ?>">
    <input type="hidden" name="hdndep"  id="hdndep" value="<?php echo ($completar) ? $dato_rel['dptoNumero'] : ""; ?>">
    <input type="hidden" name="hdnloc"  id="hdnloc" value="<?php echo ($completar) ? $dato_rel['id_tlocalidad'] : ""; ?>">



        <form id="encuesta_ini" action="<?php echo(site_url('encuesta/cargarEncuesta/cargabloques'));  ?>" method="post">

        <!--campos ocultos de pasaje de datos  -->
        <input type="hidden" name="accion"  id="accion" value="<?php echo ($completar) ? "edicion" : "guardar"; ?>">
        <input type="hidden" name="hdnIdrelev"  id="hdnIdrelev" value="<?php echo ($completar) ? $dato_rel['idRelevamiento'] : ""; ?>">
        <input type="hidden" name="hdnIdDirec"  id="hdnIdDirec" value="<?php echo ($completar) ? $dato_rel['idDireccion'] : ""; ?>">
        <input type="hidden" name="localPath"  id="localPath" value="<?php echo base_url(); ?>">

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
                                            print '<select class="form-control" id="nom_facilitador" name ="nom_facilitador" >
                                            <option value="'.$listado[0][0].'" selected>'. $listado[0][1].'</option></select>';

                                        }else{

                                            echo '<select class="form-control" id="nom_facilitador" name ="nom_facilitador" required>';
                                                echo '<option value="" disabled selected hidden>Seleccionar</option>';
                                                foreach($listado as $list){

                                                    if($list[0] == $selectedItem){

                                                        echo '<option value="'.$list[0].'" selected>'.$list[1].'</option>';

                                                    }else{

                                                        echo '<option value="'.$list[0].'">'.$list[1].'</option>';

                                                    }

                                                }
                                            

                                        }

                                        echo'</select>';
                                    ?>

                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputName" class="control-label col-xs-6">Número Relevamiento (*)</label>
                                <div class="col-xs-6">
                                    
                                    <input type="text" class="form-control"  name= "nroRelev" id="nroRelev" value= "<?php echo($dato_rel['nroRelevamiento']); ?>" readonly>
                                </div>
                            </div>	                            
                            
                            <div class="form-group">
                                <label for="fecha_relevamiento" class="control-label col-xs-6">Fecha Relevamiento (*)</label>
                                <div class="col-xs-6">
                                    <input class="form-control date-picker" id="id-date-picker-1" value= "<?php echo ($completar) ? implode('-',array_reverse(explode('-',$dato_rel['fechaRelevamiento']))) : ""; ?>" data-date-format="dd-mm-yyyy" type="text" name= "fechaRelev" id= "fecha_relevamiento" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-xs-6">Departamento (*)</label>
                                <div class="col-xs-6">
                                    <select class="form-control" id="departamento" name ="idDep" id ="select_dep" required>


                                        <?php       
                                            // condicional para cargar los dep  o cargar y seleccionar uno
                                        
                                            if($completar){

                                                foreach($departamento as $dep){ 

                                                        echo '<option value="'.$dep->id_tdeparta.'" >'.$dep->descdep.'</option>'; // carga el resto normalmente
                                                }

                                            }else{
                                                
                                                echo '<option value="" disabled selected hidden>Seleccionar</option>';
                                                foreach($departamento as $dep){  // este solo carga cuando no tiene  relev pendientes

                                                    echo '<option value="'.$dep->id_tdeparta.'" >'.$dep->descdep.'</option>';

                                                }



                                            }
                                        
                                        
                                        
                                        ?>




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
                                    <input type="text" name = "b0_calle" value= "<?php echo ($completar) ? $dato_rel['calle'] : ""; ?>" class="form-control"  id= "calle" >
                                </div>
                            </div>				 
                            
                            <div class="form-group">
                                <label  class="control-label col-xs-6">Número (*)</label>
                                <div class="col-xs-4">
                                    <input type="number" class="form-control"  value= "<?php echo ($completar) ? $dato_rel['numero'] : ""; ?>" name ="numero" id= "numero" >
                                </div>
                                <div class="col-xs-2 checkbox">
                                    <label><input type="checkbox" value="1" id="b0_sin_numero">Sin número</label>
                                </div>
                            </div><hr>	

                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Barrio</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control"  value= "<?php echo ($completar) ? $dato_rel['barrio'] : ""; ?>" name="barrio" id="barrio">
                                </div>
                            </div>

                            <div class="form-group" id="manzana">
                                <label for="inputPassword" class="control-label col-xs-6">Manzana (*)</label>
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" value= "<?php echo ($completar) ? $dato_rel['manzana'] : ""; ?>" name="barrio_m" id="barrio_m">
                                </div>
                                <label for="inputPassword" class="control-label col-xs-2">Casa (*)</label>
                                <div class="col-xs-2">
                                    <input type="number" class="form-control" value= "<?php echo ($completar) ? $dato_rel['casa'] : ""; ?>" name="barrio_c" id="barrio_c">
                                </div>
                            </div>


                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Entre calles</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control"  value= "<?php echo ($completar) ? $dato_rel['entreCalles1'] : ""; ?>" name ="entre_calle" id= "entre_calle" >
                                </div>
                            </div>		                           
                            	 
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Teléfono del titular (*)</label>
                                <div class="col-xs-6">
                                    <input type="number" class="form-control"  name ="tel_titular" value= "<?php echo ($completar) ? $dato_rel['telTitular'] : ""; ?>" id= "tel_titular" required>
                                </div>
                            </div>	

                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Teléfono para supervisión (encuestado)</label>
                                <div class="col-xs-6">
                                    <input type="number" class="form-control" value= "<?php echo ($completar) ? $dato_rel['telSup'] : ""; ?>" name ="tel_super" id= "tel_super" >
                                </div>
                            </div>	

<!-- bloque de cantidad-->

                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">¿Cuántas personas viven habitualmente en este domicilio? (*)</label>
                                <div class="col-xs-6">
                                


                    
                                    <input type="number" class="form-control"   name= "cantidad" value= "<?php echo ($completar) ? $cantidad['cantidad'] : ""; ?>" id= "cantidad" maxlength="2" min="1" max="20" required>
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
                                    <input type="text" class="form-control" value= "<?php echo ($completar) ? $dato_rel['observacion'] : ""; ?>"  name= "observaciones">
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