<?php
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);
  ini_set('display_errors','On');



  define('_HOST','localhost');
  define('_USUARIO','');
  define('_PASSWORD','');
  define('_BASE_DE_DATOS','');


  // define('_SMTP','mail.pronto.com.bo');
  // define('_CORREO','pedidos@pronto.com.bo');
  // define('_PASSWORD_MAIL','Pronto@123A!');
  // define('_PUERTO',26);

  define("_MULTIPLE_SITE", "off");// on - off
  define('_TIPO_HTML',"http://");

  define('_THEME_DEFAULT','');
  define('_THEME_DEFAULT_ADMIN','');


  define('_RUTA_SERVER',str_replace("eldia","",$_SERVER['DOCUMENT_ROOT']));
  //define('_RUTA_SERVER',$_SERVER['DOCUMENT_ROOT']);

  define('_RUTA_NUCLEO',_RUTA_SERVER."nucleo/");
  define('_RUTA_HOST',_RUTA_SERVER."");


  $ax = str_replace("/","",_RUTA_DEFAULT);
  $aw = array($ax.".",_RUTA_DEFAULT);

  //define('_RUTA_WEB_ROOT',_TIPO_HTML.$_SERVER['SERVER_NAME']."/");
  //define('_RUTA_WEB',_TIPO_HTML.$_SERVER['SERVER_NAME']."/".str_replace(_RUTA_SERVER,"",_RUTA_ROOT));
  define('_RUTA_WEB'," ");
  define("_RUTA_WEB_DEFAULT","");
  define("_RUTA_WEB_NUCLEO",'http://tuweb.com/nucleo/');
  define("_THEME_DEFAULT","");
  define("_THEME_DEFAULT_ADMIN","");
  define('_RUTA_IMAGES','http://tuweb/');

  define('_VZ', "Zundi 2.1.5");


  $mostrar_rutas=false;

  if ($mostrar_rutas){
    // echo "_HOST: "._HOST."<br/>";
    // echo "_USUARIO: "._USUARIO."<br/>";
    // echo "_PASSWORD: "._PASSWORD."<br/>";
    // echo "_BASE_DE_DATOS: "._BASE_DE_DATOS."<br/><br/>";

    echo "_RUTA_SERVER: "._RUTA_SERVER."<br/>";
    echo "_RUTA_NUCLEO: "._RUTA_NUCLEO."<br/>";
    echo "_RUTA_HOST: "._RUTA_HOST."<br/>";
    echo "_RUTA_IMAGES: "._RUTA_IMAGES."<br/>";

    echo "_TIPO_HTML: "._TIPO_HTML."<br/>";
    echo "_RUTA_WEB_NUCLEO: "._RUTA_WEB_NUCLEO."<br/>";
    //echo "_RUTA_WEB_DEFAULT: "._RUTA_WEB_DEFAULT."<br/>";
    echo "_RUTA_WEB: "._RUTA_WEB."<br/><br/>";

    echo "_THEME_DEFAULT:"._THEME_DEFAULT."<br/>";
    echo "_THEME_DEFAULT_ADMIN:"._THEME_DEFAULT_ADMIN."<br/>";
    echo "_VZ: "._VZ."<br/>";
  }




?>
