<?php
session_start();
if(isset($_SESSION['usuarivalido']))
{
  $nombreUsuario=$_SESSION['usuarivalido']['usuario'];
  $idUser=$_SESSION['usuarivalido']['id'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Numans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    <title>Proyecto1</title>
</head>
<body>
    <!-- container -->
    <div class="container"> 
        <!-- header -->
        <header>
            <div class="logo">
                <h1>Eventual 2.0</h1>
            </div>
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="eventos.php">Eventos</a>
                </li>
                <?php
                if(isset($_SESSION['usuarivalido']))
                {
                    echo "<li class='nombreUsuario'><a href='#'>".$nombreUsuario."</a>
                        <ul class='opusuario'>
                        <li><a href='perfil.php?idu=".$idUser."'><i class='far fa-user-circle'>&nbsp;</i>Perfil</a></li>
                        <li><a href='regevento.php'><i class='far fa-plus-square'>&nbsp;</i>Crear evento</a></li>
                        <li><a href='cerrar.php'><i class='fas fa-sign-out-alt'>&nbsp;</i>Cerrar Sesión</a></li>
                        </ul>
                    </li>";
                }
                else{
                    echo"
                <li>
                    <a href='login.php?v=1'>Acceder</a>
                </li>
                <li>
                    <a href='registro.php'>Registro</a>
                </li>";
                }
                ?>
            </ul>
        </header>
        <!-- end header -->