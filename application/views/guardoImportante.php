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
                                                        <?php if($enc->idAfiliado!=""){
                                                                  echo $enc->idAfiliado;
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
                                                        <a data-toggle="tab" href="#bloque3" aria-expanded="true">Bloque 3: Salud de los Niños</a>
                                                      </li>
                                                      <li>
                                                        <a data-toggle="tab" href="#bloque4" aria-expanded="false">Bloque 4: Salud de las Mujeres</a>
                                                      </li>

                                                      <li>
                                                        <a data-toggle="tab" href="#bloque5" aria-expanded="false">Bloque 5: Adultos Mayores</a>
                                                      </li>

                                                      <li>
                                                        <a data-toggle="tab" href="#bloque6" aria-expanded="false">Bloque 6: Miembros con Discapacidad</a>
                                                      </li>

                                                      <li>
                                                        <a data-toggle="tab" href="#bloque7" aria-expanded="false">Bloque 7: Embarazadas</a>
                                                      </li>
                                                    </ul>

                                                    <div class="tab-content">
                                                        <div id="bloque3" class="tab-pane in active">                                                            
                                                            <div class="profile-user-info profile-user-info-striped">

                                                            <?php if($respElegidas){
                                                                      foreach ($respElegidas->result() as $respE){
                                                                          if($respE->idEncuestado == $idE){
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
                                                                      }
                                                                  }
                                                              ?> 
                                                          </div>    
                                                        </div>

                                                        <div id="bloque4" class="tab-pane">                                                           
                                                            <div class="profile-user-info profile-user-info-striped">

                                                            <?php if($respElegidas){
                                                                      foreach ($respElegidas->result() as $respE){
                                                                          if($respE->idEncuestado == $idE){
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
                                                                      }
                                                                  }
                                                              ?> 
                                                          </div>                                                           
                                                        </div>

                                                        <div id="bloque5" class="tab-pane">
                                                            <div class="profile-user-info profile-user-info-striped">

                                                            <?php if($respElegidas){
                                                                      foreach ($respElegidas->result() as $respE){
                                                                          if($respE->idEncuestado == $idE){
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
                                                                  }
                                                              ?> 
                                                          </div>
                                                        </div>

                                                        <div id="bloqu6" class="tab-pane">
                                                            <div class="profile-user-info profile-user-info-striped">

                                                            <?php if($respElegidas){
                                                                      foreach ($respElegidas->result() as $respE){
                                                                          if($respE->idEncuestado == $idE){
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
                                                                      }
                                                                  }
                                                              ?> 
                                                          </div>                                                           
                                                        </div>

                                                        <div id="bloque7" class="tab-pane">    
                                                            <div class="profile-user-info profile-user-info-striped">

                                                            <?php if($respElegidas){
                                                                      foreach ($respElegidas->result() as $respE){
                                                                          if($respE->idEncuestado == $idE){
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
                                                                      }
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


































                                                                  <?php $respEnc = $this->relevamiento_model->getRespEnc($idE);
                                if($respEnc){
                                    foreach ($respEnc->result() as $respE) {
                                        $idP = $respE->idPregunta;
                                        $bloque = $this->relevamiento_model->getBloque($idP);
                                        if($bloque){
                                            foreach ($bloque->result() as $bloq) {
                ?>                        


                    <h4 class="row header smaller lighter blue">
                      <span class="col-xs-6"> Bloque <?php echo $bloq->nroBloque;?> - <?php echo $bloq->nombreBloque;?> </span><!-- /.col -->
                    </h4>

                    <div class="widget-main">
                        <div class="profile-user-info profile-user-info-striped">



 <!-- Arreglar que si el idTipoPregunta ==1 entonces la respuesta tiene que ser mostrada como una cadena con comas o barras -->

                          <?php
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
                  }
                  
            ?> 
                      </div>
                    </div>



<div class="hr hr-16 hr-dotted"></div><!Linea Punteada Divisoria>


























<?php 
                $idsPreg = array();
                  $contador = 0;

                      if($respElegidas){
                      foreach ($respElegidas->result() as $respE){
                          if($respE->idBloque == 10){

                            $idP = $respE->idPregunta;

                           if (!in_array($idP, $idsPreg)){
                             $idsPreg[$contador] = $respE->idPregunta;
                             $contador++;
                           }
                         }
                        }
                      } 
                      $listaResp = "";
                      foreach ($respElegidas->result() as $respE){
                          if($respE->idBloque == 10){
                            foreach ($idsPreg as $id) {
                              if ($id == $respE->idPregunta){
                                $listaResp = $listaResp.$resp->respuesta; 
                              }
                            }





                        var_dump($idsPreg);
    die();