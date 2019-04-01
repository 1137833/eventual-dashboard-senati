<?php
require('conexion.php');
$rel = $conexion -> query("SELECT * FROM eventos"); 
$titulo=array();
while($row = $rel -> fetch_array())
{
    $titulo[] = $row['titulo'];
}
session_start();
$Usuario=$_SESSION['usuarivalido']['usuario'];
$limit = count($titulo);
for($i = 0; $i < $limit; $i++)
{
    require('userConnect.php');
    $t = str_replace(" ", "_", $titulo[$i]);
    $row = $conexion -> query("SELECT * FROM $t")->fetch_array();
    if($row['usuario'] == $Usuario)
    {
        $id = $row['idevento'];
        require('conexion.php');
        $title = $conexion -> query("SELECT * FROM eventos WHERE id = $id")->fetch_array(); 
        echo $title['titulo']."<br>";
    }
}

?>
