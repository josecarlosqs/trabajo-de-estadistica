<?php
include "funcion.php";
$conexion = mysql_connect("localhost", "root", "12345");
mysql_select_db("pr_mysql", $conexion);
$t = microtime_float();
for($i =0; $i < 1000; $i++){
	mysql_query("INSERT INTO datos (dato) VALUES ('".generarDatoAleatorio()."')");
	$r = microtime_float();
	echo ($r-$t)."<br>";
	$t = microtime_float();
}
?>