<?php
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);
  ini_set('display_errors','On');

  define('_HOST','localhost');
  define('_USUARIO','hermanyu_us');
  define('_PASSWORD','qwe123AS');
  define('_BASE_DE_DATOS','hermanyu_next');
  define("_MULTIPLE_SITE", "off");// on - off
  define('_TIPO_HTML',"http://");

  define('_RUTA_DEFAULT','');

  define('_RUTA_SERVER',str_replace("next","",$_SERVER['DOCUMENT_ROOT'])."/");
  //define('_RUTA_SERVER',$_SERVER['DOCUMENT_ROOT']);

  define('_RUTA_NUCLEO',_RUTA_SERVER."nucleo/");
  define('_RUTA_HOST',_RUTA_SERVER."next/");


  $ax = str_replace("/","",_RUTA_DEFAULT);
  $aw = array($ax.".",_RUTA_DEFAULT);

  //define('_RUTA_WEB_ROOT',_TIPO_HTML.$_SERVER['SERVER_NAME']."/");
  //define('_RUTA_WEB',_TIPO_HTML.$_SERVER['SERVER_NAME']."/".str_replace(_RUTA_SERVER,"",_RUTA_ROOT));
  define('_RUTA_WEB',"http://next.wappcom.com/");
  define("_RUTA_WEB_DEFAULT","");
  define("_RUTA_WEB_NUCLEO",'http://wappcom.com/nucleo/');
  define("_RUTA_IMAGES",'http://next.wappcom.com/');
  define("_THEME_DEFAULT","");
  define("_THEME_DEFAULT_ADMIN","");

  define('_VZ', "Zundi 2.0.5");


  $mostrar_rutas="off";

  if ($mostrar_rutas=="on"){
    echo "_HOST: "._HOST."<br/>";
    echo "_USUARIO: "._USUARIO."<br/>";
    echo "_PASSWORD: "._PASSWORD."<br/>";
    echo "_BASE_DE_DATOS: "._BASE_DE_DATOS."<br/><br/>";

    echo "_RUTA_SERVER: "._RUTA_SERVER."<br/>";
    echo "_RUTA_NUCLEO: "._RUTA_NUCLEO."<br/>";
    echo "_RUTA_HOST: "._RUTA_HOST."<br/>";
    echo "_RUTA_DEFAULT: "._RUTA_DEFAULT."<br/><br/>";

    echo "_TIPO_HTML: "._TIPO_HTML."<br/>";
    echo "_RUTA_WEB_NUCLEO: "._RUTA_WEB_NUCLEO."<br/>";
    echo "_RUTA_WEB_DEFAULT: "._RUTA_WEB_DEFAULT."<br/>";
    echo "_RUTA_WEB: "._RUTA_WEB."<br/><br/>";

    echo "_THEME_DEFAULT:"._THEME_DEFAULT."<br/>";
    echo "_THEME_DEFAULT_ADMIN:"._THEME_DEFAULT_ADMIN."<br/>";
    echo "_VZ: "._VZ."<br/>";
  }

?>
