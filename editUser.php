<?php
require_once('conexion.php');
$idu = $_GET['idu'];
$fotoName = $_FILES['fotoPerfil']['name'];
$fotoArchivo = $_FILES['fotoPerfil']['tmp_name'];
$ubicacion = "img/usuario/";
move_uploaded_file($fotoArchivo, $ubicacion.$fotoName);
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$clave = $_POST['clave'];
$nacimiento = $_POST['fecha'];
$sexo = $_POST['sexo'];

if(empty($fotoName))
{
    $sql="UPDATE usuario SET usuario = '$usuario',nombre = '$nombre',apellido = '$apellido',email = '$email',clave = '$clave',nacimiento = '$nacimiento',sexo = '$sexo' WHERE id = $idu";
}
else
{
    $sql="UPDATE usuario SET usuario = '$usuario',nombre = '$nombre',apellido = '$apellido',email = '$email',clave = '$clave',nacimiento = '$nacimiento',sexo = '$sexo' ,foto = '$fotoName' WHERE id = $idu";
}
$resultado = $conexion->query($sql);

if($resultado)
{
    $ruta = 'location: perfil.php?idu='.$idu;
}
else
{
    //incorrecto
    $ruta = 'location: editarPerfil.php';
}

header($ruta);

?>