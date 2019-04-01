<?php
$valorBuscado=$_POST['dato'];
$tipo=$_POST['tipo'];

$ruta="Location: editarUser.php?b=".$valorBuscado."&t=".$tipo;

header($ruta);
?>