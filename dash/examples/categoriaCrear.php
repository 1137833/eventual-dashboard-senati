<?php
require_once('conexion.php');
$categoria = $_POST['categoria'];
$color = $_POST['color'];

$sql = "INSERT INTO categoria (categoria, color) VALUE('$categoria', '$color')";
$resultado = $conexion->query($sql);

if($resultado)
{
    echo "Registro Correcto";
    $ruta="Location: Categoria.php?v=1";
}
else
{
    echo "registro Incorrecto";
    $ruta="Location: Categoria.php?v=2";
}

header($ruta);
?>