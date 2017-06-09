<?php
header("Content-Type: text/html;charset=utf-8");
require_once(_RUTA_NUCLEO."clases/class-constructor.php");
$fmt = new CONSTRUCTOR;
?>
<!-- <script src="<?php echo _RUTA_WEB_NUCLEO; ?>js/jquery.slides.min.js"></script> -->
<script>
  $(function(){
    // $("#slides").slidesjs({});
  });
</script>
<div class="slide-portada" id="slides">
  <?php
    $consulta_m ="SELECT DISTINCT mul_id,mul_url_archivo, mul_leyenda, mul_descripcion FROM multimedia, multimedia_categorias  WHERE mul_cat_cat_id=1  and mul_cat_mul_id=mul_id AND mul_activar=1 ORDER BY `multimedia_categorias`.`mul_cat_orden` desc limit 0,5";
    $rs_m =$fmt->query->consulta($consulta_m);
    $num_m=$fmt->query->num_registros($rs_m);
    if($num_m>0){
      for($im=0;$im<$num_m;$im++){
        list($fila_id,$fila_url, $leyenda, $descripcion)=$fmt->query->obt_fila($rs_m);
        // echo "fila_url".$fila_url;
        $ix_id[$im] = $fila_id;
        $ix_url[$im] = $fila_url;
        $ix_l[$im] = $leyenda;
        $ix_d[$im] = $descripcion;
        ?>
        <div class='block-img'  style="background:url(<?php echo _RUTA_IMAGES.$ix_url[$im]; ?>)no-repeat center top" >
          <div class="block-texto">
            <h1 class="titulo" lang="es">
              <?php echo $ix_l[$im]; ?>
            </h1>
            <div class="texto" lang="es">
              <?php echo $ix_d[$im]; ?>
            </div>
            <div class="block-btn">
              <a class="btn btn-login btn-lg" href="<?php echo _RUTA_WEB; ?>signup" lang="es">Descubre más</a>
              <a class="btn btn-crear-cuenta btn-lg" href="<?php echo _RUTA_WEB; ?>signup" lang="es">Create una cuenta gratis</a>
            </div>
          </div>
        </div>
        <?php
      }
    }
  ?>
</div>
