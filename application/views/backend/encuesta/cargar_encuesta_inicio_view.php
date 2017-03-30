<div class="main-content">
	<div class="main-content-inner">
		<div class="page-content">
			



<!--<div class="container">   contenedor principal -->
 
        <form id="encuesta_ini" action="<?php echo(site_url('encuesta/cargarEncuesta/cargabloques'));  ?>" method="post">

        <div class="row form-horizontal" id= "bloque_0">     <!-- bloque 0 -->
                <div class="panel panel-default">
                
                    <div class="panel-heading">Bloque 0 Identificacion de territorio , facilitador</div>
                        <div class="panel-body">
                        
                            <div class="form-group">
                                <label for="inputName" class="control-label col-xs-6">Numero relevamiento:</label>
                                <div class="col-xs-6">
                                    <input type="name" class="form-control" placeholder="Numero" name= "num_relevamiento" id="num_relevamiento"  required>
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
                                    <input class="form-control date-picker" id="id-date-picker-1" data-date-format="dd-mm-yyyy" type="text" name= "fecha_relevamiento" id= "fecha_relevamiento" required>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label class="control-label col-xs-6">Departamento</label>
                                <div class="col-xs-6">
                                    <select class="form-control" id="departamento" name ="select_dep">
                                    		<option value="1">Capital	</option>
                                            <option value="2">General Alvear</option>
                                            <option value="3">Godoy Cruz</option>
                                            <option value="4">Guaymallén	 </option>
                                            <option value="5">Junín</option>
                                            <option value="6">La Paz</option>
                                            <option value="7">Las Heras</option>
                                            <option value="8">Lavalle </option>
                                            <option value="9">Lujan de Cuyo</option>
                                            <option value="10">Maipú</option>
                                            <option value="11">Malargue</option>
                                            <option value="12">Rivadavia</option>
                                            <option value="13">San Carlos</option>
                                            <option value="14">San Martín</option>
                                            <option value="15">San Rafael</option>
                                            <option value="16">Santa Rosa</option>
                                            <option value="17">Tunuyán</option>
                                            <option value="18">Tupungato</option>
                                    </select>
                                </div>

                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-xs-6">Distrito:</label>
                                <div class="col-xs-6">
                                    <select class="form-control" id="distrito" name "select_dep"name "select_distrito">
                                    <option value="1">1ª Sección Parque Central </option>
                                    <option value="1">2ª Sección Barrio Cívico</option>
                                    <option value="1">3ª Sección Parque O'Higgins</option>
                                    <option value="1">4ª Sección Área Fundacional</option>
                                    <option value="1">5ª Sección Residencial Sur</option>
                                    <option value="1">6ª Sección Residencial Norte</option>
                                    <option value="1">7ª Sección Residencial Parque</option>
                                    <option value="1">8ª Sección Aeroparque</option>
                                    <option value="1">9ª Sección Parque General San Martín</option>
                                    <option value="1">10ª Sección Residencial Los Cerros</option>
                                    <option value="1">11ª Sección San Agustín</option>
                                    <option value="1">12ª Sección Piedemonte</option>
                                    <option value="1">Bowen</option>
                                    <option value="1">General Alvear</option>
                                    <option value="1">San Pedro del Atuel</option>
                                    <option value="1">Gobernador Benegas</option>
                                    <option value="1">Godoy Cruz</option>
                                    <option value="1">Las Tortugas</option>
                                    <option value="1">Presidente Sarmiento</option>
                                    <option value="1">San Francisco del Monte</option>
                                    <option value="1">Belgrano</option>
                                    <option value="1">El Bermejo</option>
                                    <option value="1">Buena Nueva</option>
                                    <option value="1">Capilla del Rosario</option>
                                    <option value="1">Colonia Molina</option>
                                    <option value="1">Colonia Segovia</option>
                                    <option value="1">Dorrego</option>
                                    <option value="1">El Sauce</option>
                                    <option value="1">Jesús Nazareno</option>
                                    <option value="1">Kilómetro 8</option>
                                    <option value="1">Kilómetro 11</option>
                                    <option value="1">La Primavera</option>
                                    <option value="1">Las Cañas</option>
                                    <option value="1">Los Corralitos</option>
                                    <option value="1">Nueva Ciudad</option>
                                    <option value="1">Pedro Molina</option>
                                    <option value="1">Puente de Hierro</option>
                                    <option value="1">Rodeo de la Cruz</option>
                                    <option value="1">San Francisco del Monte</option>
                                    <option value="1">San José</option>
                                    <option value="1">Villa Nueva</option>
                                    <option value="1">Algarrobo Grande</option>
                                    <option value="1">Alto Verde</option>
                                    <option value="1">Ingeniero Giagnoni</option>
                                    <option value="1">Junín</option>
                                    <option value="1">La Colonia</option>
                                    <option value="1">Los Barriales</option>
                                    <option value="1">Medrano</option>
                                    <option value="1">Mundo Nuevo</option>
                                    <option value="1">Phillips</option>
                                    <option value="1">Rodríguez Peña</option>
                                    <option value="1">La Paz Norte</option>
                                    <option value="1">La Paz Sur</option>
                                    <option value="1">Desaguadero</option>
                                    <option value="1">Villa Antigua</option>
                                    <option value="1">Villa Nueva (Cabecera) de La Paz</option>
                                    <option value="1">Capdevilla</option>
                                    <option value="1">El Algarrobal</option>
                                    <option value="1">El Borbollón</option>
                                    <option value="1">El Challao</option>
                                    <option value="1">El Pastal</option>
                                    <option value="1">El Plumerillo</option>
                                    <option value="1">El Resguardo</option>
                                    <option value="1">El Zapallar</option>
                                    <option value="1">La Cieneguita</option>
                                    <option value="1">Las Cuevas</option>
                                    <option value="1">Las Heras (Ciudad)</option>
                                    <option value="1">Panquehua</option>
                                    <option value="1">Penitentes</option>
                                    <option value="1">Sierras de Encalada</option>
                                    <option value="1">Uspallata</option>
                                    <option value="1">capital</option>
                                    <option value="1">Costa de Araujo</option>
                                    <option value="1">El Carmen</option>
                                    <option value="1">El Chilcal</option>
                                    <option value="1">El Plumero</option>
                                    <option value="1">El Vergel</option>
                                    <option value="1">Gustavo André</option>
                                    <option value="1">Jocolí</option>
                                    <option value="1">Jocolí Viejo</option>
                                    <option value="1">La Asunción</option>
                                    <option value="1">La Holanda</option>
                                    <option value="1">La Palmera</option>
                                    <option value="1">La Pega</option>
                                    <option value="1">Las Violetas</option>
                                    <option value="1">Lagunas del Rosario</option>
                                    <option value="1">El Paramillo</option>
                                    <option value="1">San Francisco</option>
                                    <option value="1">San José</option>
                                    <option value="1">San Miguel</option>
                                    <option value="1">Tres de Mayo</option>
                                    <option value="1">Villa Tulumaya</option>
                                    <option value="1">Agrelo</option>
                                    <option value="1">Cacheuta</option>
                                    <option value="1">Carrodilla</option>
                                    <option value="1">Chacras de Coria</option>
                                    <option value="1">El Carrizal</option>
                                    <option value="1">Industrial</option>
                                    <option value="1">La Puntilla</option>
                                    <option value="1">Las Compuertas</option>
                                    <option value="1">Luján de Cuyo</option>
                                    <option value="1">Mayor Drummond</option>
                                    <option value="1">Perdriel</option>
                                    <option value="1">Potrerillos</option>
                                    <option value="1">Ugarteche</option>
                                    <option value="1">Vistalba</option>
                                    <option value="1">Coquimbito</option>
                                    <option value="1">Cruz de Piedra</option>
                                    <option value="1">Fray Luis Beltrán</option>
                                    <option value="1">General Gutiérrez</option>
                                    <option value="1">General Ortega</option>
                                    <option value="1">Las Barrancas</option>
                                    <option value="1">Lunlunta</option>
                                    <option value="1">Luzuriaga</option>
                                    <option value="1">Maipú</option>
                                    <option value="1">Rodeo del Medio</option>
                                    <option value="1">Russell</option>
                                    <option value="1">San Roque</option>
                                    <option value="1">Agua Escondida</option>
                                    <option value="1">Malargüe</option>
                                    <option value="1">Río Barrancas</option>
                                    <option value="1">Río Grande</option>
                                    <option value="1">Andrade</option>
                                    <option value="1">El Mirador</option>
                                    <option value="1">La Central</option>
                                    <option value="1">La Libertad</option>
                                    <option value="1">Los Árboles</option>
                                    <option value="1">Los Campamentos</option>
                                    <option value="1">Los Huarpes</option>
                                    <option value="1">Medrano</option>
                                    <option value="1">Mundo Nuevo</option>
                                    <option value="1">Reducción</option>
                                    <option value="1">Rivadavia</option>
                                    <option value="1">Santa María de Oro</option>
                                    <option value="1">San Isidro</option>
                                    <option value="1">Chilecito</option>
                                    <option value="1">Eugenio Bustos</option>
                                    <option value="1">La Consulta</option>
                                    <option value="1">Pareditas</option>
                                    <option value="1">Tres Esquinas</option>
                                    <option value="1">Villa San Carlos</option>
                                    <option value="1">Alto Salvador</option>
                                    <option value="1">Alto Verde</option>
                                    <option value="1">Buen Orden</option>
                                    <option value="1">Chapanay</option>
                                    <option value="1">Chivilcoy</option>
                                    <option value="1">El Central</option>
                                    <option value="1">El Divisadero</option>
                                    <option value="1">El Espino</option>
                                    <option value="1">El Ramblón</option>
                                    <option value="1">Las Chimbas</option>
                                    <option value="1">Montecaseros</option>
                                    <option value="1">Nueva California</option>
                                    <option value="1">Palmira</option>
                                    <option value="1">San Martín</option>
                                    <option value="1">Tres Porteñas</option>
                                    <option value="1">Cañada Seca</option>
                                    <option value="1">Cuadro Benegas</option>
                                    <option value="1">Cuadro Nacional</option>
                                    <option value="1">El Cerrito</option>
                                    <option value="1">El Sosneado</option>
                                    <option value="1">El Nihuil</option>
                                    <option value="1">Goudge</option>
                                    <option value="1">Jaime Prats</option>
                                    <option value="1">La Llave</option>
                                    <option value="1">Las Malvinas</option>
                                    <option value="1">Las Paredes</option>
                                    <option value="1">Monte Comán</option>
                                    <option value="1">Punta del Agua</option>
                                    <option value="1">Rama Caída</option>
                                    <option value="1">Real del Padre</option>
                                    <option value="1">San Rafael</option>
                                    <option value="1">Veinticinco de Mayo</option>
                                    <option value="1">Villa Atuel</option>
                                    <option value="1">Doce de Octubre</option>
                                    <option value="1">La Dormida</option>
                                    <option value="1">Las Catitas</option>
                                    <option value="1">Ñacuñan</option>
                                    <option value="1">Santa Rosa</option>
                                    <option value="1">Campo de los Andes</option>
                                    <option value="1">Colonia Las Rosas</option>
                                    <option value="1">El Algarrobo</option>
                                    <option value="1">El Totoral</option>
                                    <option value="1">La Primavera</option>
                                    <option value="1">Las Pintadas</option>
                                    <option value="1">Los Árboles</option>
                                    <option value="1">Los Chacayes</option>
                                    <option value="1">Los Sauces</option>
                                    <option value="1">Tunuyán</option>
                                    <option value="1">Villa Seca</option>
                                    <option value="1">Vista Flores</option>
                                    <option value="1">Anchoris</option>
                                    <option value="1">Cordón del Plata</option>
                                    <option value="1">El Peral (Tupungato)</option>
                                    <option value="1">El Zampal</option>
                                    <option value="1">El Zampalito</option>
                                    <option value="1">Gualtallary</option>
                                    <option value="1">La Arboleda</option>
                                    <option value="1">La Carrera</option>
                                    <option value="1">San José</option>
                                    <option value="1">Santa Clara</option>
                                    <option value="1">Tupungato</option>
                                    <option value="1">Villa Bastías</option>
                                    <option value="1">Zapata</option>
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
                                    <input type="text" name = "ini_calle" class="form-control" placeholder="calle" name ="calle" id= "calle" required>
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
