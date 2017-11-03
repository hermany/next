<link rel="stylesheet" href="<?php echo _RUTA_WEB_NUCLEO; ?>css/icon-font.css?reload-<?php echo rand(5, 15);?>" type="text/css" media="screen" />
<!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" /> -->
<?php
$rand = range(1, 100);
shuffle($rand);
foreach ($rand as $val) {
  $vrand = $val;
}
?>
<link rel="stylesheet" href="<?php echo _RUTA_WEB; ?>css/next.theme.css?reload-<?php echo $vrand;?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo _RUTA_WEB; ?>css/lato-font.css?reload-<?php echo $vrand;?>" type="text/css" media="screen" />

