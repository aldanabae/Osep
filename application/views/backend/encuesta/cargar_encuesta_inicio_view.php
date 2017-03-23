<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			



<!--<div class="container">   contenedor principal -->
 
        <form id="add_funds" action="<?php echo(site_url('encuesta/cargarEncuesta/cargabloques'));  ?>" method="post">

        <div class="row form-horizontal" id= "bloque_0">     <!-- bloque 0 -->
                <div class="panel panel-default">
                
                    <div class="panel-heading">Bloque 0 Identificacion de territorio , facilitador</div>
                        <div class="panel-body">
                        
                            <div class="form-group">
                                <label for="inputName" class="control-label col-xs-6">Numero relevamiento:</label>
                                <div class="col-xs-6">
                                    <input type="name" class="form-control" placeholder="Numero" name= "num_relevamiento">
                                </div>
                            </div>				
                        
                            <div class="form-group">
                                <label for="inputName" class="control-label col-xs-6">Nombre y apellido:</label>
                                <div class="col-xs-6">
                                    <input type="name" class="form-control" placeholder="Nombre y apellido" name= "nom_facilitador">
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="fecha_relevamiento" class="control-label col-xs-6">fecha:</label>
                                <div class="col-xs-6">
                                    <input class="form-control date-picker" id="id-date-picker-1" data-date-format="dd-mm-yyyy" type="text" name= "fecha_relevamiento">
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label class="control-label col-xs-6">Departamento</label>
                                <div class="col-xs-6">
                                    <select class="form-control" id="departamento" name ="select_dep">
                                    <option value="select1">Date</option>
                                    </select>
                                </div>

                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-xs-6">Distrito:</label>
                                <div class="col-xs-6">
                                    <select class="form-control" id="distrito" name "select_dep"name "select_distrito">
                                    <option value="select2">Date</option>
                                    </select>
                                </div>

                            </div>	
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Barrio:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" placeholder="Barrio" name="barrio">
                                </div>
                            </div>
                            
                            <hr>
                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Calle:</label>
                                <div class="col-xs-6">
                                    <input type="text" name = "ini_calle" class="form-control" placeholder="Asunto" name ="calle">
                                </div>
                            </div>				 
                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Numero:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" placeholder="Asunto" name ="numero">
                                </div>
                            </div>					 
                            
                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">entre que calles?:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" placeholder="Asunto" name ="entre_calle">
                                </div>
                            </div>		
                            
                            <div class="form-group">
                                <label for="inputPassword" class="control-label col-xs-6">Observaciones:</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" placeholder="Asunto" name= "observaciones">
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
