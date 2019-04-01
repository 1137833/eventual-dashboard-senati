<?php
require_once('conexion.php');
$cat = $_POST['cat'];
$filer = $_POST['fil'];
switch($filer)
{
    case 0:
        if($cat > 0)
        {
            $rel = $conexion -> query("SELECT * FROM eventos WHERE categoria = $cat");
        }
        else
        {
            $rel = $conexion -> query("SELECT * FROM eventos");
        }
    break;

    case 1:
        if($cat > 0)
        {
            $rel = $conexion -> query("SELECT * FROM eventos WHERE categoria = $cat AND asistentes > 30 ORDER BY asistentes DESC");
        }
        else
        {
            $rel = $conexion -> query("SELECT * FROM eventos WHERE asistentes > 30");
        }
    break;

    case 2:
    $row = $conexion -> query("SELECT * FROM eventos")->fetch_array();
    $mes = date("m", strtotime($row['fecha']));
    if($cat > 0)
    {
        $rel = $conexion -> query("SELECT * FROM eventos WHERE categoria = $cat AND $mes = MONTH(CURDATE()) ORDER BY fecha DESC");
    }
    else
    {
        $rel = $conexion -> query("SELECT * FROM eventos WHERE $mes = MONTH(CURDATE())");
    }
    break;

    case 3:
        if($cat > 0)
        {
            $rel = $conexion -> query("SELECT * FROM eventos WHERE categoria = $cat ORDER BY id DESC");
        }
        else
        {
            $rel = $conexion -> query("SELECT * FROM eventos ORDER BY id DESC");
        }
    break;    
}
require("itemEvento.php");
?>