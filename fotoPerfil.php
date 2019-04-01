<?php
require_once('header.php');
require_once('conexion.php');
$idu = $_GET['idu'];
$row = $conexion -> query("SELECT * FROM usuario WHERE id = $idu") -> fetch_array();
?>
<link href="css/1.css" rel="stylesheet">
<form action="subirFoto.php?idu=<?php echo $idu;?>" method="post" class="contain" enctype="multipart/form-data">
    <h1>Elige una foto de perfil</h1><br>
    <div class="foto-perfil">
        <img src="img/usuario/<?php echo $row['foto'];?>" id="foto">
        <input type="file" name="fotoPerfil" id="fotoPerfil" value="<?php echo $row['imagen'];?>">
        <label for="fotoPerfil" id="imgname1"><i class="far fa-image">&nbsp;</i>elegir foto</label>
    </div><br>
    <h2><?php echo $row['nombre']," ", $row['apellido'];?></h2><br> 
        <input class="guardar-foto-perfil" type="submit" value="Guardar">
</form>
<?php
require_once('footer.php');
?>