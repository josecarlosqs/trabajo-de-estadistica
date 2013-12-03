<?php
function generarDatoAleatorio(){

$letras = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','i','z');
return $letras[rand(0, 25)];

}
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

function crearConexionMYSQLI(){
        $conexion = new mysqli("localhost","root","12345","pr_mysqli");
        if($conexion->connect_error){
            die("Error!");
        }
        return $conexion;
    }
?>