<?php
require_once("conexion.php");
$id=$_GET['id'];

$sql="DELETE FROM usuario WHERE id=$id";

$resultado=$conexion->query($sql);

if($resultado)
{
    $ruta="Location: editarUser.php";
}
else
{
    $ruta="";
}

header($ruta);
?>