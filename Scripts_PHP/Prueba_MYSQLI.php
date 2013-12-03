<?php
include "funcion.php";
$conexion = crearConexionMYSQLI();
function colocar($d){
        try{
        	global $conexion;
            $conexion->query("INSERT INTO datos (dato) VALUES ('".$d."')");
        }catch(Exception $e){
            return false;
        }
}

$t = microtime_float();
for($i =0; $i < 1000; $i++){
	colocar(generarDatoAleatorio());
	$r = microtime_float();
	echo ($r-$t)."<br>";
	$t = microtime_float();
}
?>