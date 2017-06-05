<?php
header("Content-Type: text/html;charset=utf-8");
require_once(_RUTA_NUCLEO."clases/class-constructor.php");
$fmt = new CONSTRUCTOR;
//$fmt->header->cnd_jquery();
?>

<div class="nav container-fluid" >
    <a class="nav-brand" href="<?php echo _RUTA_WEB; ?>" ></a>
    <ul class="nav-inner">
      <? echo $fmt->nav->traer_cat_hijos_menu("0","0","1"); ?>
    </ul>
    <div class="pull-right block-top-botones">
      <a class="btn btn-login" href="<?php echo _RUTA_WEB; ?>login">Ingresar</a>
      <a class="btn btn-crear-cuenta" href="<?php echo _RUTA_WEB; ?>signup">Crea una cuenta gratis</a>
    </div>
</div>
