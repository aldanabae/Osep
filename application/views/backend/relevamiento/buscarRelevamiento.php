<div class="main-content">
  <div class="main-content-inner">
    <div class="page-content">
      
        <div class="page-header">
            <h1>
               Seleccionar Relevamiento
            </h1>
        </div>        
          

    <!-- Empieza el cuadro con Medicamentos de la bd -->  
    <form class="form-horizontal" role="form" action="<?php echo base_url() ?>relevamiento/relevamientoC/mostrarRelevamiento" method="post"><!-- Comienza formulario -->
            
      <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="row">

          <div class="col-xs-6">
            <div class="dataTables_length" id="longitudTabla">
              <label>Mostrar 
              <select aria-controls="dynamic-table" class="form-control input-sm" name="longitudTabla">
                <option value="10000">Todos</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="40">40</option>
                <option value="60">60</option>
                <option value="80">80</option>
                <option value="100">100</option>
                <option value="250">250</option>
                <option value="500">500</option>
              </select> lineas
              </label>

              <button class="btn btn-warning btn-xs" type="submit" nombre="CargarTabla">
                <i class="fa fa-check bigger-110 icon-only"></i> Filtrar
              </button>
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
                  if($contador == $limiteTabla)   break;
            ?>

            <tr>
              <td>
                <label class="pos-rel">
                  <?= $tabla->nroRelevamiento;?>
                </label>
              </td>
              <td><?= $tabla->fechaRelevamiento;?></td>
              <td><?= $tabla->nombreCriticidad;?></td>
              <td><?= $tabla->apellidoE;?> <?php echo $tabla->nombreE;?></td><!-- Nombre via de administracion no codigo -->
              
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

      </div><!-- Termina el cuadro con Medicamentos de la bd -->

    </form>


        </div><!-- /.page-content -->
    </div><!-- /.main-content-inner -->
</div><!-- /.main-content -->





<!--Para que se vean los botones de la tabla responsive-->

    <script type="text/javascript">
      window.jQuery || document.write("<script src='../assets/js/jquery.js'>"+"<"+"/script>");
    </script>


    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
    </script>
    <script src="../assets/js/bootstrap.js"></script> 