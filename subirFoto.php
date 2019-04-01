<?php
require_once('conexion.php');
$idu = $_GET['idu'];
$fotoName = $_FILES['fotoPerfil']['name'];
$fotoArchivo = $_FILES['fotoPerfil']['tmp_name'];
$ubicacion = "img/usuario/";
move_uploaded_file($fotoArchivo, $ubicacion.$fotoName);

$sql="UPDATE usuario SET foto = '$fotoName' WHERE id = $idu";
$resultado = $conexion->query($sql);

if($resultado)
{
    $ruta = 'location: perfil.php?idu='.$idu;
}
else
{
    //incorrecto
    $ruta = 'location: fotoPerfil.php?idu='.$idu;
}

header($ruta);

?>