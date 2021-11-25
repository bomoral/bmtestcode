<?php
@header("Expires: 0");
@header("Last-Modified: 0");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", false);
@header("Pragma: no-cache");
session_start();
define('OMG [:)]',1);

//phpinfo();

function sayHello(){
  echo("hola");
}


$laAccion = isset($_GET['accion']) ? $_GET['accion'] : 'nulo';

echo('La accion es ' . $laAccion);



//sayHello();

?>
<br />
<a href="/sinfo">Test de HTACCESS</a><br />
<a href="/phpinfo.php">Test de phpinfo</a><br />
<a href="/base.php">Test de base de datos</a><br />
<a href="/getip">Test de IP Address/Geo</a><br />