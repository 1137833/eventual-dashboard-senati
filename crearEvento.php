<?php
require_once('conexion.php');

session_start();
$nombreUsuario=$_SESSION['usuarivalido']['id'];
$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$direccion = $_POST['direccion'];
$categoria = $_POST['categoria'];
$sql="INSERT INTO eventos(titulo, fecha, hora, direccion, categoria, organizador) VALUE('$titulo', '$fecha', '$hora', '$direccion', '$categoria','$nombreUsuario')";
$resultado = $conexion->query($sql);


if($resultado)
{
    $lastId = $conexion -> insert_id;
    $table = str_replace(" ", "_", $titulo);
    $ruta = 'location: tabla.php?id='.$lastId.'&&t='.$table; 
}
else
{
    //incorrecto
    $ruta = 'location: regevento.php';
}

header($ruta);
?>