			<div class="main-content">
				<div class="main-content-inner">


					<div class="page-content">

						<!-- /section:settings.box -->
						<div class="page-header col-xs-12">

                            <div class="col-xs-8">

                                    <h1><?php echo $encuestas['encuesta']->nombreEncuesta ?> 
                                    </h1>

                            </div>
                            <div class="col-xs-4 text-left">
							        <h4> <a href="<?php  echo base_url('encuesta/abmbloque/create/').$id_encuesta ?>" >Nuevo Bloque</a> /
                                    
                                     <a href="<?php  echo base_url('encuesta/abmpreguntaC/crear/').$id_encuesta ?>" >Nueva Pregunta</a> 
                                    </h4>
                            </div>
                                                        
						</div><!-- /.page-header -->



						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->



<?php

$this->load->model('encuesta/pregunta_model', 'pregunta');
//$data['preguntas']= $this->pregunta->get_all_pregunta(5);



if($encuestas['bloques'])  // si no hay bloques no procesa nada
{

    foreach($encuestas['bloques'] as $bloque){


   
?>

    
    						<div class="page-header">
                            <h4> <?php echo($bloque->nombreBloque);  ?> </h4>

						    </div><!-- /.page-header -->

<?php


unset($data);

$data['preguntas']= $this->pregunta->get_all_pregunta($bloque->idBloque);

if($data['preguntas'] != 0){


?>


										<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>

													<th>Pregunta</th>
													<th>descripcion</th>
													<th class="hidden-480">Status</th>

												</tr>
											</thead>

											<tbody>


<?php   foreach($data['preguntas'] as $pregunta){   ?>

												<tr>

													<td>
														<?php  echo $pregunta->pregunta; ?>
													</td>
													<td><?php  echo $pregunta->descripPregunta; ?></td>
													

													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<button class="btn btn-xs btn-success">
																<i class="ace-icon fa fa-check bigger-120"></i>
															</button>

															
														</div>

													</td>
												</tr>
<?php
}   // cierro el foreach


} //  cierro el if
?>										
											</tbody>
										</table>









<?php
    }



} // cierro filtro de bloques, si no hay bloques para la encuesta no muestra nada

?>
				



<?php
print '======================================================';
$this->db->select('*');
$this->db->from('respuesta_pregunta');
$this->db->join('pregunta','pregunta.idPregunta=respuesta_pregunta.idPregunta','left');
$this->db->join('bloque','bloque.idBloque=pregunta.idBloque','left');
$this->db->join('encuesta','encuesta.idEncuesta=bloque.idEncuesta','left');
$this->db->join('tipo_pregunta','tipo_pregunta.idTipoPregunta=pregunta.idTipoPregunta','left');
$this->db->join('etiqueta','etiqueta.idEtiqueta=pregunta.idEtiqueta','left');

$this->db->join('respuesta','respuesta.idRespuesta=respuesta_pregunta.idRespuesta','left');
$query = $this->db->get();	

$respuesta=null;
if ($query->num_rows() > 0) 
{
    $respuesta= $query;
}else{
 $respuesta=  false;	
}

var_dump($respuesta);
?>


































							</div>
								


							</div><!-- /.col -->
					 </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>


<!--Para que se vean los botones de la tabla responsive-->


<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
</script>

<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/app/encuesta.js'); ?>"></script>


<?php



//var_dump($encuestas);