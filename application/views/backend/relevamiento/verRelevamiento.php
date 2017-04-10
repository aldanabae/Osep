<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">

            <div class="page-header">
                <h1>
                    Ver Relevamiento
                </h1>
            </div>  
        

<div class="widget-box"> <!-- Empieza el recuadro con su titulo -->
  <?php if($relevamiento){
                          foreach ($relevamiento->result() as $relev){
                ?>  
        <div class="widget-header">
          <h5 class="widget-title">Relevamiento <?= $relev->nroRelevamiento;?></h5>
            <div class="widget-toolbar">
              <a href="#" data-action="collapse">
                <i class="ace-icon fa fa-chevron-up"></i>
              </a>    
            </div>
        </div>

        <div class="widget-body">
          <div class="widget-main">
            <div class="widget-main">
                <div class="profile-user-info profile-user-info-striped">
                
                <div class="profile-info-row">
                  <div class="profile-info-name"> Fecha Relevamiento </div>
                    <div class="profile-info-value">
                      <span class="editable" id="username">
                      <?php echo $relev->fechaRelevamiento;?>                         
                      </span>
                    </div>
                </div>

                <div class="profile-info-row">
                  <div class="profile-info-name"> Criticidad </div>
                    <div class="profile-info-value">
                      <span class="editable" id="country">
                      <?php 
                       
                          echo $relev->observCriticidad;
                       
                      ?>
                      </span>
                    </div>
                </div>


              </div>
                  </div>
          </div>  
        </div>

  <?php     }
                      }
                ?> 
          </div> 































              
            <div class="widget-box"> <!-- Empieza el recuadro con su titulo -->
                <?php if($relevamiento){
                          foreach ($relevamiento->result() as $relev){
                ?>  

                <div class="widget-header">
                  <h5 class="widget-title">Relevamiento <?= $relev->nroRelevamiento;?></h5>
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
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                          <i data-icon-show="ace-icon fa fa-angle-right" data-icon-hide="ace-icon fa fa-angle-down" class="bigger-110 ace-icon fa fa-angle-right"></i>
                                            Probando acordeon 1
                                          </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                          Panel Body
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                      <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                              <i data-icon-show="ace-icon fa fa-angle-right" data-icon-hide="ace-icon fa fa-angle-down" class="bigger-110 ace-icon fa fa-angle-right"></i>
                                                PRobando Acordeon 2
                                            </a>
                                          </h4>
                                      </div>
                                      <div id="collapseTwo" class="panel-collapse collapse">
                                          <div class="panel-body">
                                            Panel Body
                                          </div>
                                      </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTres">
                                          <i data-icon-show="ace-icon fa fa-angle-right" data-icon-hide="ace-icon fa fa-angle-down" class="bigger-110 ace-icon fa fa-angle-right"></i>
                                              PRobando Acordeon 2
                                          </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTres" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            1.- VHWXGDRSEDMQZGX 1.- VHWXGDRSEDMQZGX
                                            2.- CJYHDVRLZPHSQYD
                                            3.- YNOSUYRYDPDAYYO
                                            4.- UWKFBFJVJHJSSWU
                                            5.- AWGIBMVYAUGVTHW
                                        </div>
                                    </div>
                                </div>
                         <!---
                         ... other panels ... 
                         -->
                            </div>
                        </div>

                <?php     }
                      }
                ?>
                      
                    </div>
                </div>

            </div>
        </div><!-- /.page-content -->
    </div><!-- /.main-content-inner -->
</div><!-- /.main-content -->




