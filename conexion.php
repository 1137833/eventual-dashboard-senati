<?php
//Archivo de configuración de la conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$database = "eventual";

$conexion = new mysqli($servidor, $usuario, $clave, $database);

//comprobamos si hay error
if($conexion -> connect_error)
{
    die('error de conexión (' . $conexion -> connect_error . ')' 
    . $conexion -> connect_error);
}
?>