<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">

            <div class="page-header">
                <h1>
                    Ver Relevamiento
                </h1>
            </div>  
        
<!Primera Caja de Datos/Relevamiento>

            <div class="widget-box"> <!-- Empieza el recuadro con su titulo -->
            <?php if($relevamiento){
                      foreach ($relevamiento->result() as $relev){
            ?>  
                <div class="widget-header">
                  <h5 class="widget-title">Relevamiento N° <?= $relev->nroRelevamiento;?></h5>
                    <div class="widget-toolbar">
                      <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                      </a>    
                    </div>
                </div>

                <div class="widget-body">
                  <div class="widget-main">

                    <h4 class="row header smaller lighter blue">
                      <span class="col-xs-12"> Bloque Identificación del Territorio/Facilitador/Familia Relevada</span><!-- /.col -->
                    </h4>

                    <div class="widget-main">
                        <div class="profile-user-info profile-user-info-striped">
                  
                        <div class="profile-info-row">
                          <div class="profile-info-name"> Facilitador </div>
                            <div class="profile-info-value">
                              <span class="editable" id="country">
                              <?php echo $relev->apellidoE;?> <?php echo $relev->nombreE; ?>
                              </span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Fecha Relevamiento </div>
                            <div class="profile-info-value">
                              <span class="editable" id="username">
                              <?php echo $relev->fechaRelevamiento;?>                         
                              </span>
                            </div>
                        </div>

                       <?php $idDirec = $relev->idDireccion;
                              $direccion = $this->relevamiento_model->getDireccion($idDirec);
                              if($direccion){
                                  foreach ($direccion->result() as $direc) {
                        ?>
                        <div class="profile-info-row">
                          <div class="profile-info-name"> Dirección </div>
                            <div class="profile-info-value">
                              <span class="editable" id="username">
                              <?php
                                        echo $direc->calle; 
                                        echo "&nbsp;";
                                        echo $direc->numero;
                              ?>                         
                              </span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name">Entre calles</div>
                            <div class="profile-info-value">
                              <span class="editable" id="username">
                              <?php
                                        echo $direc->entreCalles1;
                                        echo "/";
                                        echo $direc->entreCalles2;
                              ?>                         
                              </span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name">Manzana/Casa</div>
                            <div class="profile-info-value">
                              <span class="editable" id="username">
                              <?php if($direc->manzana!="" && $direc->casa!=""){
                                        echo "M".$direc->manzana;
                                        echo "-";
                                        echo "C".$direc->casa;
                                    }else{
                                      echo "--";
                                    }           
                              ?>                         
                              </span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Barrio</div>
                            <div class="profile-info-value">
                              <span class="editable" id="username">
                              <?php
                                        echo $direc->barrio;
                              ?>                         
                              </span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Localidad </div>
                            <div class="profile-info-value">
                              <span class="editable" id="username">
                              <?php
                                        echo $direc->descloc; 
                              ?>                         
                              </span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Departamento</div>
                            <div class="profile-info-value">
                              <span class="editable" id="username">
                              <?php
                                        $idDpto = $direc->id_tdeparta; 
                                        $departamento = $this->relevamiento_model->getDepartamento($idDpto);
                                        if($departamento){
                                            foreach ($departamento->result() as $dpto){
                                                echo $dpto->descdep;
                                            }
                                        }
                                    }
                                }
                              ?>                         
                              </span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Teléfono de Contacto </div>
                            <div class="profile-info-value">
                              <span class="editable" id="country">
                              <?php echo $relev->telSup; ?>
                              </span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Criticidad </div>
                            <div class="profile-info-value">
                              <span class="editable" id="country">
                              <?php echo $relev->nombreCriticidad; ?>
                              </span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Cantidad de Integrantes</div>
                            <div class="profile-info-value">
                              <span class="editable" id="country">
                                <!Resolver como mostrar la cantidad de encuestados-->
                              <?php echo $relev->cantEncuestados; ?>
                              </span>
                            </div>
                        </div>

            <?php     }
                  }
            ?> 
                        <?php if($respElegidas){
                                  foreach ($respElegidas->result() as $respE){
                                      if($respE->idBloque == 1){
                                        if($respE->respuesta!=""){
                                          echo '<div class="profile-info-row">
                                          <div class="profile-info-name">'.$respE->pregunta.'</div>
                                            <div class="profile-info-value">
                                              <span class="editable" id="country">
                                              '.$respE->respuesta.'
                                              </span>
                                            </div>
                                          </div>';
                                        }else{
                                          echo '<div class="profile-info-row">
                                          <div class="profile-info-name">'.$respE->pregunta.'</div>
                                            <div class="profile-info-value">
                                              <span class="editable" id="country">
                                              '.$respE->respBreve.'
                                              </span>
                                            </div>
                                          </div>';
                                        }
                                      }                     
                                  }
                              }
                        ?> 
                      </div>
                    </div>

                    <div class="hr hr-16 hr-dotted"></div><!Linea Punteada Divisoria>

                    <h4 class="row header smaller lighter blue">
                      <span class="col-xs-6"> Bloque Vivienda y Entorno </span><!-- /.col -->
                    </h4>

                    <div class="widget-main">
                        <div class="profile-user-info profile-user-info-striped">

 <!-- Arreglar que si el idTipoPregunta ==1 entonces la respuesta tiene que ser mostrada como una cadena con comas o barras -->

                        <?php if($respElegidas){
                                  foreach ($respElegidas->result() as $respE){
                                      if($respE->idBloque == 10){
                                        if($respE->respuesta!=""){
                                          echo '<div class="profile-info-row">
                                          <div class="profile-info-name">'.$respE->pregunta.'</div>
                                            <div class="profile-info-value">
                                              <span class="editable" id="country">
                                              '.$respE->respuesta.'
                                              </span>
                                            </div>
                                          </div>';
                                        }else{
                                          echo '<div class="profile-info-row">
                                          <div class="profile-info-name">'.$respE->pregunta.'</div>
                                            <div class="profile-info-value">
                                              <span class="editable" id="country">
                                              '.$respE->respBreve.'
                                              </span>
                                            </div>
                                          </div>';
                                        }
                                      }                     
                                  }
                              }
                        ?> 
                        </div>
                    </div>

                  </div>  
                </div>
            </div> 



            <!Segunda Caja de Datos/ Encuestados>
 
            <div class="widget-box"> <!-- Empieza el recuadro con su titulo -->
                <div class="widget-header">
                  <h5 class="widget-title">Encuestados</h5>
                      <!-- #section:custom/widget-box.toolbar -->
                      <div class="widget-toolbar">
                          <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                          </a>    
                      </div>
                      <!-- /section:custom/widget-box.toolbar -->
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="widget-main">
                            <div class="accordion-style1 panel-group" id="accordion">

                              <?php                 
                                  foreach($encuestados->result() as $enc){  
                                      $idE = $enc->idEncuestado;         
                              ?>  

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="<?php echo "#collapse".$idE;?>">
                                          <i data-icon-show="ace-icon fa fa-angle-right" data-icon-hide="ace-icon fa fa-angle-down" class="bigger-110 ace-icon fa fa-angle-down"></i> 
                                            &nbsp;Encuestado: <?php echo $enc->apellidoEncuestado;?> <?php echo $enc->nombreEncuestado;?>
                                          </a>
                                        </h4>
                                    </div>

                                    <div class="panel-collapse collapse" id="<?php echo "collapse".$idE;?>" >
                                        <div class="panel-body">
                                            <div class="widget-main">
                                              <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                              
                                                  <div class="profile-info-row">
                                                    <div class="profile-info-name"> DNI </div>
                                                      <div class="profile-info-value">
                                                        <?php echo $enc->dniEncuestado; ?> 
                                                      </div>
                                                    </div>

                                                  <div class="profile-info-row">
                                                    <div class="profile-info-name"> Edad</div>
                                                      <div class="profile-info-value">
                                                        <?php echo $enc->edad; ?> 
                                                      </div>
                                                    </div>

                                                  <div class="profile-info-row">
                                                    <div class="profile-info-name"> Sexo </div>
                                                      <div class="profile-info-value">
                                                        <?php echo $enc->sexo; ?> 
                                                      </div>
                                                    </div>

                                                  <div class="profile-info-row">
                                                    <div class="profile-info-name"> N° Afiliado </div>
                                                      <div class="profile-info-value">
                                                        <?php if($enc->nroAfiliado!=""){
                                                                  echo $enc->nroAfiliado;
                                                              }else{
                                                                echo "No es afiliado a OSEP";
                                                              }
                                                        ?> 
                                                      </div>
                                                    </div>
                                    
                                                </div>

                                                <h4>Bloques Relevados</h4>

                                                <div class="tabbable">
                                                    <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
                                                      <li class="active">
                                                        <a data-toggle="tab" href="#bloque1<?php echo $idE;?>" aria-expanded="true">B1: Datos Generales</a>
                                                      </li>

                                                      <li>
                                                        <a data-toggle="tab" href="#bloque2<?php echo $idE;?>" aria-expanded="false">B2: Utilizacion Servicios</a>
                                                      </li>

                                                      <li>
                                                        <a data-toggle="tab" href="#bloque3<?php echo $idE;?>" aria-expanded="false">B3: Niños</a>
                                                      </li>

                                                      <li>
                                                        <a data-toggle="tab" href="#bloque4<?php echo $idE;?>" aria-expanded="false">B4: Mujeres</a>
                                                      </li>

                                                      <li>
                                                        <a data-toggle="tab" href="#bloque5<?php echo $idE;?>" aria-expanded="false">B5: Adultos Mayores</a>
                                                      </li>

                                                      <li>
                                                        <a data-toggle="tab" href="#bloque6<?php echo $idE;?>" aria-expanded="false">B6: Discapacidad</a>
                                                      </li>

                                                      <li>
                                                        <a data-toggle="tab" href="#bloque7<?php echo $idE;?>" aria-expanded="false">B7: Embarazadas</a>
                                                      </li>
                                                    </ul>

                                                    <div class="tab-content">
                                                        <div id="bloque1<?php echo $idE;?>" class="tab-pane in active">                                                            
                                                            <div class="profile-user-info profile-user-info-striped">

                                                            <?php $respEnc = $this->relevamiento_model->getRespEncuestado($idE);
                                                                      if($respEnc){
                                                                          foreach ($respEnc->result() as $respE){
                                                                              if($respE->idBloque == 2){
                                                                                  if($respE->respuesta!=""){
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respuesta.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }else{
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respBreve.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }
                                                                              }
                                                                          }
                                                                      }else{
                                                                          echo "Bloques no relevados. NO es AFILIADO a OSEP";
                                                                      }
                                                            ?> 
                                                          </div>    
                                                        </div>

                                                        <div id="bloque2<?php echo $idE;?>" class="tab-pane">                                                            
                                                            <div class="profile-user-info profile-user-info-striped">

                                                            <?php $respEnc = $this->relevamiento_model->getRespEncuestado($idE);
                                                                      if($respEnc){
                                                                          foreach ($respEnc->result() as $respE){
                                                                              if($respE->idBloque == 3){
                                                                                  if($respE->respuesta!=""){
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respuesta.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }else{
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respBreve.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }
                                                                              }
                                                                          }
                                                                      }else{
                                                                          echo "Bloques no relevados. NO es AFILIADO a OSEP";
                                                                      }
                                                            ?> 
                                                          </div>    
                                                        </div>

                                                        <div id="bloque3<?php echo $idE;?>" class="tab-pane">                                                           
                                                            <div class="profile-user-info profile-user-info-striped">

                                                            <?php $respEnc = $this->relevamiento_model->getRespEncuestado($idE);
                                                                      if($respEnc){
                                                                          foreach ($respEnc->result() as $respE){
                                                                              if($respE->idBloque == 4 || $respE->idBloque == 5){
                                                                                  if($respE->respuesta!=""){
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respuesta.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }else{
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respBreve.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }
                                                                              }
                                                                          }                      
                                                                      }else{
                                                                          echo "Bloques no relevados. NO es AFILIADO a OSEP";
                                                                      }
                                                            ?> 
                                                          </div>                                                           
                                                        </div>

                                                        <div id="bloque4<?php echo $idE;?>" class="tab-pane">                                                           
                                                            <div class="profile-user-info profile-user-info-striped">

                                                            <?php $respEnc = $this->relevamiento_model->getRespEncuestado($idE);
                                                                      if($respEnc){
                                                                          foreach ($respEnc->result() as $respE){
                                                                              if($respE->idBloque == 6){
                                                                                  if($respE->respuesta!=""){
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respuesta.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }else{
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respBreve.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }
                                                                              }
                                                                          }                      
                                                                      }else{
                                                                          echo "Bloques no relevados. NO es AFILIADO a OSEP";
                                                                      }
                                                            ?> 
                                                          </div>                                                           
                                                        </div>

                                                        <div id="bloque5<?php echo $idE;?>" class="tab-pane">
                                                            <div class="profile-user-info profile-user-info-striped">

                                                            <?php $respEnc = $this->relevamiento_model->getRespEncuestado($idE);
                                                                      if($respEnc){
                                                                          foreach ($respEnc->result() as $respE){
                                                                              if($respE->idBloque == 7){
                                                                                  if($respE->respuesta!=""){
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respuesta.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }else{
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respBreve.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }
                                                                              }
                                                                          }                      
                                                                      }
                                                                      else{
                                                                          echo "Bloques no relevados. NO es AFILIADO a OSEP";
                                                                      }
                                                            ?> 
                                                          </div>
                                                        </div>

                                                        <div id="bloque6<?php echo $idE;?>" class="tab-pane">
                                                            <div class="profile-user-info profile-user-info-striped">

                                                            <?php $respEnc = $this->relevamiento_model->getRespEncuestado($idE);
                                                                      if($respEnc){
                                                                          foreach ($respEnc->result() as $respE){
                                                                              if($respE->idBloque == 8){
                                                                                  if($respE->respuesta!=""){
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respuesta.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }else{
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respBreve.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }
                                                                              }
                                                                          }                      
                                                                      }else{
                                                                          echo "Bloques no relevados. NO es AFILIADO a OSEP";
                                                                      }
                                                            ?> 
                                                          </div>                                                           
                                                        </div>

                                                        <div id="bloque7<?php echo $idE;?>" class="tab-pane">    
                                                            <div class="profile-user-info profile-user-info-striped">

                                                            <?php $respEnc = $this->relevamiento_model->getRespEncuestado($idE);
                                                                      if($respEnc){
                                                                          foreach ($respEnc->result() as $respE){
                                                                              if($respE->idBloque == 9){
                                                                                  if($respE->respuesta!=""){
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respuesta.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }else{
                                                                                      echo '<div class="profile-info-row">
                                                                                              <div class="profile-info-name">'.$respE->pregunta.'</div>
                                                                                                <div class="profile-info-value">
                                                                                                  <span class="editable" id="country">
                                                                                                    '.$respE->respBreve.'
                                                                                                  </span>
                                                                                                </div>
                                                                                              </div>';
                                                                                  }
                                                                              }
                                                                          }                      
                                                                      }else{
                                                                          echo "Bloques no relevados. NO es AFILIADO a OSEP.";
                                                                      }    
                                                            ?> 
                                                          </div>                                                          
                                                        </div>
                                                    </div>
                                                </div>

                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                              <?php
                                  }
                              ?>        
                         <!---... Fin Accordion Dinamico ... -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.page-content -->
    </div><!-- /.main-content-inner -->
</div><!-- /.main-content -->




<!--Para que se vean los botones de la tabla responsive-->

    <script type="text/javascript">
      window.jQuery || document.write("<script src='../../../assets/js/jquery.js'>"+"<"+"/script>");
    </script>


    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='../../../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
    </script>
    <script src="../../../assets/js/bootstrap.js"></script> 