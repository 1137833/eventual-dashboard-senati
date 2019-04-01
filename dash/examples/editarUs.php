<?php
require_once("conexion.php");

$id=$_POST['id'];
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$clave=$_POST['clave'];
$nacimiento=$_POST['nacimiento'];
$sexo=$_POST['sexo'];

$sql="UPDATE usuario SET usuario='$usuario', nombre='$nombre', apellido='$apellido', email='$email', clave='$clave', nacimiento='$nacimiento', sexo='$sexo' WHERE id=$id";

$resultado=$conexion->query($sql);

if($resultado)
{
    $ruta="Location: editarRegUser.php?id=$id&v=1";
}
else
{
    $ruta="Location: editarRegUser.php?id=$id&v=2";
}

header($ruta);

?>