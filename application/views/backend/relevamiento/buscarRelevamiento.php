<div class="main-content">
  <div class="main-content-inner">
    <div class="page-content">
      
        <div class="page-header">
            <h1>
               Seleccionar Relevamiento
            </h1>
        </div>        
          
        <!-- Empieza el cuadro con Relevamientos de la bd -->  
        <form class="form-horizontal" role="form" action="<?php echo base_url() ?>relevamiento/relevamientoC/mostrarRelevamiento" method="post"><!-- Comienza formulario -->
                
          <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
            <div class="row">

                <div class="col-xs-6">
                    <div class="dataTables_length">
                        <label>Seleccionar Filtro 
                          <select aria-controls="dynamic-table" class="form-control input-sm" id= "filtro" name="filtro" OnChange= "tipoFOnChange(this)">
                            <option value="longitud">Longitud tabla</option>
                            <option value="criticidad">Criticidad</option>
                            <option value="departamento">Departamento</option>
                            <option value="facilitador">Facilitador</option>
                            <option value="localidad">Localidad</option>
                          </select> 
                        </label>

                        <div id="longitud" style="display:;">
                          <label>Mostrar
                            <select aria-controls="dynamic-table" class="form-control input-sm" name="longitudTabla">
                              <option value="">-- Seleccione Cantidad --</option>
                              <option value="100000">Todos</option>
                              <option value="2">10</option>
                              <option value="4">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                            </select>
                           </label> 

                          <button class="btn btn-warning btn-xs" type="submit" nombre="CargarTabla">
                            <i class="fa fa-check bigger-110 icon-only"></i> Filtrar
                          </button>
                        </div>

                        <div id="criticidad" style="display:none;">
                          <label>Criticidad
                            <select aria-controls="dynamic-table" class="form-control input-sm" id="criticidad" name="filtroCri">
                              <!-- <option value="">-- Seleccione Criticidad --</option>
                              <option value="1">Nula</option>
                              <option value="2">Media</option>
                              <option value="3">Alta</option> -->
                            </select>
                           </label>
                            
                          <button class="btn btn-warning btn-xs" type="submit" nombre="CargarTabla">
                            <i class="fa fa-check bigger-110 icon-only"></i> Filtrar
                          </button>
                        </div> 

                        <div id="departamento" style="display:none;">
                          <label>Departamento
                            <select aria-controls="dynamic-table" class="form-control input-sm" name="filtroDpto">
                              <option value="">-- Seleccione Departamento --</option>
                              <option value="1">Capital</option>
                              <option value="2">Maipu</option>
                              <option value="3">Guaymallen</option>
                            </select>
                          </label>
                            
                          <button class="btn btn-warning btn-xs" type="submit" nombre="CargarTabla">
                            <i class="fa fa-check bigger-110 icon-only"></i> Filtrar
                          </button>
                        </div>

                        <div id="facilitador" style="display:none;">
                          <label>Facilitador
                            <select aria-controls="dynamic-table" class="form-control input-sm" name="filtroFac">
                              <option value="">-- Seleccione Facilitador --</option>
                              <option value="16">Pepe</option>
                              <option value="2">Pepa</option>
                              <option value="3">Pig</option>
                            </select>
                          </label>

                          <button class="btn btn-warning btn-xs" type="submit" nombre="CargarTabla">
                            <i class="fa fa-check bigger-110 icon-only"></i> Filtrar
                          </button>
                        </div>

                        <div id="localidad" style="display:none;">
                          <label>Localidad
                            <select aria-controls="dynamic-table" class="form-control input-sm" name="filtroLoc">
                              <option value="">-- Seleccione Localidad --</option>
                              <option value="116">4ta Seccion</option>
                              <option value="80">2da Seccion</option>
                              <option value="3">La Puntilla</option>
                            </select>
                          </label>

                          <button class="btn btn-warning btn-xs" type="submit" nombre="CargarTabla">
                            <i class="fa fa-check bigger-110 icon-only"></i> Filtrar
                          </button>
                        </div>                   
                    </div>
                </div>

                <div class="col-xs-6">
                    <div id="dynamic-table_filter" class="dataTables_filter">

                      <label>Número Relevamiento:
                        <input type="search" class="form-control input-sm" placeholder="" name="nroRelev" aria-controls="dynamic-table">
                      </label>

                      <button class="btn btn-warning btn-xs" type="submit" nombre="CargarTabla">
                        <i class="ace-icon fa fa-search  bigger-110 icon-only"></i>
                      </button>

                    </div>
                </div>
            </div>

            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
              <thead>
                  <tr>
                    <th>Número Relevamiento</th>
                    <th>Fecha Realización</th>
                    <th>Criticidad</th>
                    <th>Facilitador</th>
                    <th>Departamento</th>
                    <th>Localidad</th>
                    <th>
                      <div class="hidden-sm hidden-xs action-buttons">
                        <a class="purple" href="">
                          <i class=""></i>
                        </a>
                      </div>
                    </th>
                  </tr>
              </thead>

              <tbody>

                <?php //Limitar los datos segun lo que trae el select de cantidad de lineas a mostrar
                  if ($tablaRelevamientos){
                    $contador = 0;
                      
                    foreach($tablaRelevamientos->result() as $tabla){
                      if($contador == $limiteTabla) break;
                ?>

                <tr>
                  <td>
                    <label class="pos-rel">
                      <?= $tabla->nroRelevamiento;?>
                    </label>
                  </td>
                  <td><?= $tabla->fechaRelevamiento;?></td>
                  <td><?= $tabla->nombreCriticidad;?></td>
                  <td><?= $tabla->apellidoE;?> <?php echo $tabla->nombreE;?></td>    
                  <td><?= $tabla->descdep?></td>
                  <td><?= $tabla->descloc?></td>
                  <td>
                    <div class="hidden-sm hidden-xs action-buttons">

                        <a class="orange" href="<?php echo base_url() ?>relevamiento/relevamientoC/verRelevamiento/<?php echo $tabla->idRelevamiento;?>">
                          <i class="ui-icon ace-icon fa fa-search-plus orange bigger-130"></i>Ver Relevamiento
                        </a>
                    </div>

                    <div class="hidden-md hidden-lg">
                        <div class="inline pos-rel">

                          <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                          </button>

                          <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                              
                              <li>
                              <a href="<?php echo base_url() ?>relevamiento/relevamientoC/verRelevamiento/<?php echo $tabla->idRelevamiento;?>/<?php echo $this->uri->segment(4);?>" class="tooltip-info" data-rel="tooltip" title="Ver Relevamiento">
                                <span class="blue">
                                  <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </td>
                </tr>

                <?php  $contador++;
                    }
                  } 
                ?>

              </tbody>
            </table>

          </div>

        </form>

        </div><!-- /.page-content -->
    </div><!-- /.main-content-inner -->
</div><!-- /.main-content -->



  <script type="text/javascript">
    function tipoFOnChange(sel) {
        if (sel.value=="longitud"){
              divT = document.getElementById("longitud");
              divT.style.display = "";

              divM = document.getElementById("criticidad");
              divM.style.display = "none";

              divE = document.getElementById("departamento");
              divE.style.display = "none";

              divE = document.getElementById("facilitador");
              divE.style.display = "none";

              divE = document.getElementById("localidad");
              divE.style.display = "none";

        }else if (sel.value=="criticidad"){
              divT = document.getElementById("longitud");
              divT.style.display = "none";

              divM = document.getElementById("criticidad");
              divM.style.display = "";

              divE = document.getElementById("departamento");
              divE.style.display = "none";

              divE = document.getElementById("facilitador");
              divE.style.display = "none";

              divE = document.getElementById("localidad");
              divE.style.display = "none";

              var filtro = $('#filtro').val();

          var parametros = {
          "filtro" : filtro,
          };
          $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>index.php/relevamiento/RelevamientoC/cargarFiltros', 
            data: parametros, 
                  dataType: 'json',
            success: function(resp) { 
              if(resp){
                cargarCombo(resp);
              }
              else{
                document.getElementById("criticidad").disabled=true;
              }},
             error: function(xhr,status) { 
              console.log(xhr+"    "+status);
            },
          });

        }else if (sel.value=="departamento"){
              divT = document.getElementById("longitud");
              divT.style.display = "none";

              divM = document.getElementById("criticidad");
              divM.style.display = "none";

              divE = document.getElementById("departamento");
              divE.style.display = "";

              divE = document.getElementById("facilitador");
              divE.style.display = "none";

              divE = document.getElementById("localidad");
              divE.style.display = "none";

        }else if (sel.value=="facilitador"){
              divT = document.getElementById("longitud");
              divT.style.display = "none";

              divM = document.getElementById("criticidad");
              divM.style.display = "none";

              divE = document.getElementById("departamento");
              divE.style.display = "none";

              divE = document.getElementById("facilitador");
              divE.style.display = "";

              divE = document.getElementById("localidad");
              divE.style.display = "none";

        }else if (sel.value=="localidad"){

              divT = document.getElementById("longitud");
              divT.style.display = "none";

              divM = document.getElementById("criticidad");
              divM.style.display = "none";

              divE = document.getElementById("departamento");
              divE.style.display = "none";

              divE = document.getElementById("facilitador");
              divE.style.display = "none";

              divE = document.getElementById("localidad");
              divE.style.display = "";

        }
    }

    function cargarLocalidades(){
          var filtro = $('#criticidad').val();

          var parametros = {
          "filtro" : filtro,
          };
          $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>index.php/RelevamientoC/cargarFiltros', 
            data: parametros, 
                  dataType: 'json',
            success: function(resp) { 
              if(resp){
                cargarCombo(resp);
              }
              else{
                document.getElementById("criticidad").disabled=true;
              }},
             error: function(xhr,status) { 
              console.log(xhr+"    "+status);
            },
          });
        }

    function cargarCombo(lista){
      // document.getElementById("criticidad").options.length=0;
      // document.getElementById("criticidad").options[0]=new Option("Selecciona una opción", "");

      var combo=$("#criticidad");
          for (var i in lista){
              combo.append('<option value="'+lista[i].idCriticidad +'">'+ lista[i].nombreCriticidad +'</option>');
          }
    }
</script>



<!--Para que se vean los botones de la tabla responsive-->

    <script type="text/javascript">
      window.jQuery || document.write("<script src='../assets/js/jquery.js'>"+"<"+"/script>");
    </script>


    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
    </script>
    <script src="../assets/js/bootstrap.js"></script> 