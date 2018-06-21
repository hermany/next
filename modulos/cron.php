<?php 
require_once("../config.php");
require_once(_RUTA_NUCLEO."clases/class-constructor.php");
$fmt = new CONSTRUCTOR();
$fecha =  $fmt->class_modulo->fecha_hoy('America/La_Paz');


$sql="UPDATE mod_tarea SET
						mod_tar_fecha_hora_fin='".$fecha."'
						WHERE mod_tar_id ='1'";
$fmt->query->consulta($sql);
?>