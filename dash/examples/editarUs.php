<?php
require_once("conexion.php");

$codigo=$_POST['codigo'];
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellidos'];
$email=$_POST['direccion'];
$contraseña=$_POST['area'];
$fecha=$_POST['dni'];
$sexo=$_POST['usuario'];

$sql="UPDATE usuario SET usuario='$usuario', nombre='$nombre', apellido='$apellido', email='$email', contraseña='$contraseña', fecha='$fecha', sexo='$sexo' WHERE id=$codigo";

$resultado=$conexion->query($sql);

if($resultado)
{
    $ruta="Location: editarRegUser.php?id=$codigo&v=1";
}
else
{
    $ruta="Location: editarRegUser.php?id=$codigo&v=2";
}

header($ruta);

?>