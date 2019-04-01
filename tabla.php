<?php
require_once('userConnect.php');
$lastId = $_GET['id'];
$table = $_GET['t'];
$sql = "CREATE TABLE $table(
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
idevento int(10),
usuario VARCHAR(50),
nombre VARCHAR(50),
apellido VARCHAR(50),
email VARCHAR(100),
nacimiento VARCHAR(20),
sexo VARCHAR(10),
entradas int(10)
)";  
$result = $conexion->query($sql);
header('location: upload.php?id='.$lastId);
?>