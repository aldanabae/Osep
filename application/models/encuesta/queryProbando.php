<?php
$this->db->select('*');
$this->db->from('pregunta_respuesta');
$this->db->join('pregunta','pregunta.idPregunta=pregunta_respuesta.idPregunta','left');
$this->db->join('bloque','bloque.idBloque=pregunta.idBloque','left');
$this->db->join('encuesta','encuesta.idEncuesta=bloque.idEncuesta','left');
$this->db->join('tipo_pregunta','tipo_pregunta.idTipoPregunta=pregunta.idTipoPregunta','left');
$this->db->join('etiqueta','etiqueta.idEtiqueta=pregunta.idEtiqueta','left');

$this->db->join('respuesta','respuesta.idRespuesta=pregunta_respuesta.idRespuesta','left');
$query = $this->db->get();	

if ($query->num_rows() > 0) 
{
    return $query;
}else{
 return false;	
}

?>