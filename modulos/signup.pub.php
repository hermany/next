<?php
header("Content-Type: text/html;charset=utf-8");
require_once(_RUTA_NUCLEO."clases/class-constructor.php");
$fmt = new CONSTRUCTOR;
$fmt->publicacion->publicacion($fmt,$pub_id);
?>

<div class="pub container-fluid pub-<?php echo $fmt->publicacion->get_pub_nombre(); ?>">
  <div class="container">
    <h1 class="title" lang="es">Crea una nueva cuenta</h1>
    <span class="descripcion" lang="es">para tu empresa</span>
    <form class="form" method="post">
      <div class="form-control col-sm-6 pull-left ">
        <i class="icn icn-user"></i>
        <input lang="es" class="input-icon" name="inputNombre" id="inputNombre" placeholder="Nombre(s)" value="">
      </div>
      <div class="form-control col-sm-6 pull-right">
        <input class="" lang="es" name="inputApellidos" id="inputApellidos" placeholder="Apellidos" value="">
      </div>
      <div class="form-control">
        <i class="icn icn-email"></i>
        <input class="input-icon" lang="es" name="inputEmail" id="inputEmail" placeholder="Email: nombre@tuempresa.com" value="">
      </div>
      <div class="form-control">
        <i class="icn icn-suitcase"></i>
        <input class="input-icon"  lang="es" name="inputEmpresa" id="inputCuenta" placeholder="Nombre de la cuenta ( luego puedes crear más cuentas)" value="">
      </div>
      <div class="form-control">
        <div class="checkbox">
           <label>
             <input type="checkbox" lang="es"> Está bien enviarme (muy ocasional)
un email sobre novedades de Next.
           </label>
         </div>
      </div>
      <div class="form-control">
        <button class="btn btn-primary btn-lg-extra btn-icon" type="button" name="button">Siguiente paso <i class="icn icn-arrow-circle-right"></i> </button>
      </div>
    </form>
  </div> <!-- fin container -->
</div> <!-- fin pub -->
