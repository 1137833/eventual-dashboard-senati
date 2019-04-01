<?php
require('conexion.php');
$id = $_GET['id'];
$iduser=$_GET['idu'];
$ev=$_GET['ev'];
$rel = $conexion -> query("SELECT * FROM usuario WHERE id = $iduser");
$row = $rel -> fetch_array();


$user = $row['usuario'];
$nombre = $row['nombre'];
$apellido = $row['apellido'];
$email = $row['email'];
$nacimiento = $row['nacimiento'];
$sexo = $row['sexo'];
$entradas = $_POST['numero'];

require_once('userConnect.php');

$sql = "INSERT INTO $ev(idevento, usuario, nombre, apellido, email, nacimiento, sexo, entradas) VALUE('$id', '$user','$nombre', '$apellido', '$email', '$nacimiento', '$sexo', '$entradas')";
$resultado = $conexion->query($sql);

if($resultado)
{
    $ruta = 'location: index.php';
    $rel = $conexion -> query("SELECT * FROM $ev");
    $sum=0;
    while($row = $rel -> fetch_array())
    {
            $sum = $sum + $row['entradas'];
    }
    require('conexion.php');
    $sql="UPDATE eventos SET asistentes = '$sum' WHERE id = $id";
    $resultado = $conexion->query($sql);
}
else
{
    $ruta = 'location: perfil.php';

}
header($ruta);
?>