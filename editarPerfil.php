<?php
require_once("header.php");
require_once('conexion.php');
if(isset($_SESSION['usuarivalido']))
{
    $row = $conexion -> query("SELECT * FROM usuario WHERE id = $idUser") -> fetch_array();
}
else
{
    header('location: login.php');
}
?>
<link href="css/1.css" rel="stylesheet">
<div class="contain background">
    <form action="editUser.php?idu=<?php echo $idUser ?>" method="post" enctype="multipart/form-data">
        <div class="foto-perfil">
            <img src="img/usuario/<?php echo $row['foto'];?>" id="foto">
            <input type="file" name="fotoPerfil" id="fotoPerfil" value="<?php echo $row['imagen'];?>">
            <label for="fotoPerfil" id="imgname1"><i class="far fa-image">&nbsp;</i>elegir foto</label>
        </div><br>
        <div class="registro">
        <div class="datosPersonal">
            <label for="">Nombres</label>
            <input type="text" name="nombre" placeholder='Nombres' class="input" required value="<?php echo $row['nombre'];?>"/><br>
            <label for="">Apellidos</label>
            <input type="text" name="apellido" placeholder="Apellidos" class="input" required value="<?php echo $row['apellido'];?>"/><br>
            <label for="">Fecha de nacimiento</label>
            <input type="text" name="fecha" placeholder="01-01-2019" id="fecha" maxlength="10" required value="<?php echo $row['nacimiento'];?>"> 
            <label for="">Sexo</label>
            <select name="sexo" id="" required>
                <?php
                if($row['sexo'] == 1)
                {
                ?>
                    <option value="1" selected>Masculino</option>
                    <option value="2">Femenino</option>
                <?php
                }else 
                {
                ?>
                    <option value="1">Masculino</option>
                    <option value="2" selected>Femenino</option>
                <?php 
                }
                ?>

            </select>
        </div>
        <div class="datosUsuario">
            <label for="">Nombre de usuario</label>
            <input type="text" name="usuario" placeholder='Nombre de usuario' class="input" required value="<?php echo $row['usuario'];?>"/><br>
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Correo Electrónico" class="input" required value="<?php echo $row['email'];?>"/><br>
            <label for="">Contraseña</label>
            <input type="password" name="clave" placeholder="Contraseña" class="input" required value="<?php echo $row['clave'];?>"/><br>
            <input type="submit" value="guardar">
        </div>
        </div>

            

    </form>
   
</div>
    

<?php
require_once("footer.php");
?>