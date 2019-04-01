<?php
require_once('conexion.php');
$id = $_GET['id'];
$titulo = $_POST['titulo'];
$direccion = $_POST['direccion'];
$fecha = $_POST['fecha'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
//miniatura
$mininame = $_FILES['imagen']['name'];
$miniArchivo = $_FILES['imagen']['tmp_name'];
//portada
$portname = $_FILES['portada']['name'];
$portArchivo = $_FILES['portada']['tmp_name'];
//guardamos las imagenes
$ubicacion = "img/eventos/";
move_uploaded_file($portArchivo, $ubicacion.$portname);
move_uploaded_file($miniArchivo, $ubicacion.$mininame);
if(empty($mininame) && empty($portname))
{
    $sql="UPDATE eventos SET titulo = '$titulo', direccion = '$direccion', fecha = '$fecha', hora = '$hora', descripcion = '$descripcion', precio = '$precio' WHERE id = $id";
}
elseif(empty($mininame))
{
    $sql="UPDATE eventos SET titulo = '$titulo', direccion = '$direccion', fecha = '$fecha', hora = '$hora', descripcion = '$descripcion', portada ='$portname', precio = '$precio' WHERE id = $id";
}
elseif(empty($portname))
{
    $sql="UPDATE eventos SET titulo = '$titulo', direccion = '$direccion', fecha = '$fecha', hora = '$hora', descripcion = '$descripcion', imagen = '$mininame', precio = '$precio' WHERE id = $id";
}
else
{
    $sql="UPDATE eventos SET titulo = '$titulo', direccion = '$direccion', fecha = '$fecha', hora = '$hora', descripcion = '$descripcion', imagen = '$mininame', portada ='$portname', precio = '$precio' WHERE id = $id";
}

$resultado = $conexion->query($sql);

if($resultado)
{
    $ruta = 'location: plantilla.php?id='.$id;
}
else
{
    //incorrecto
    $ruta = 'location: regevento.php?V=1';
}

header($ruta);
?>