<?php
//Archivo de configuración de la conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$database = "usuarios_evento";

$conexion = new mysqli($servidor, $usuario, $clave, $database);

//comprobamos si hay error
?>