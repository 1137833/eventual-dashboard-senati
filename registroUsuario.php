<?php
require_once('conexion.php');
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$clave = $_POST['clave'];
$nacimiento = $_POST['fecha'];
$sexo = $_POST['sexo'];

$sql = "INSERT INTO usuario(usuario, nombre, apellido, email, clave, nacimiento, sexo) VALUE('$usuario','$nombre', '$apellido', '$email', '$clave', '$nacimiento', '$sexo')";
$resultado = $conexion->query($sql);

if($resultado)
{
    $user = $conexion -> query("SELECT * FROM usuario");
    while($row = $user -> fetch_array(MYSQLI_ASSOC))
    {
        if($row['usuario'] == $usuario && $row['clave'] == $clave)
        {
            session_start();
            $_SESSION['usuarivalido']=$row;
            break;
        }
    }
    $idu = $_SESSION['usuarivalido']['id'];
    $ruta = 'location: fotoPerfil.php?idu='.$idu;
}
else
{
    $ruta = 'location: registro.php';

}
header($ruta);
?>