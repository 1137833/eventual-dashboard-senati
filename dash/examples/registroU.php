<?php
require_once('conexion.php');

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$clave = $_POST['clave'];
$nacimiento = $_POST['fecha'];
$sexo = $_POST['sexo'];

$sql = "INSERT INTO usuario(usuario, nombre, apellido, email, clave, nacimiento, sexo, t_usuario) VALUE('$usuario','$nombre', '$apellido', '$email', '$clave', '$nacimiento', '$sexo', '1')";
$resultado = $conexion->query($sql);

if($resultado)
{
    echo "registro correcto";
    $ruta="Location: RegistroUser.php?v=1";
}
else
{
    echo "Registro Incorrecto";
    $ruta = 'location: registroUser.php?v=2';

}
header($ruta);
?>