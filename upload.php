<?php
require_once('header.php');
require_once('conexion.php');
if(isset($_SESSION['usuarivalido']))
{
    $id = $_GET['id'];
    $result = $conexion->query("SELECT * FROM eventos where id = $id");
    $row = $result->fetch_array();
    $userId = $row['organizador'];
    $user = $conexion->query("SELECT * FROM usuario WHERE id = $userId")->fetch_array();
}
else
{
    header('location: login.php?v=1');
}
 
?>
<link rel="stylesheet" href="css/event.css">

<form action="comeon.php?id=<?php echo $row['id'];?>" method="post" class="contenedor" enctype="multipart/form-data">
    <div class="todo-evento">
        <div id="imgPortada" >
        <img id="port" src="img/eventos/<?php echo $row['portada'];?>">
            <input type="file" name="portada" id="portada" value="<?php echo $row['portada'];?>">
            <label for="portada" id="imgname2"><i class="far fa-image">&nbsp;</i>Elige una portada</label>
        </div>
        <div class="datos-evento">
            <div id="imgMini">
                <img id="mini" src="img/eventos/<?php echo $row['imagen'];?>">
                <input type="file" name="imagen" id="miniatura" value="<?php echo $row['imagen'];?>">
                <label for="miniatura" id="imgname1"><i class="far fa-image">&nbsp;</i>Elige una miniatura</label>
            </div>
            <div class="info-evento">
                <input class="evento-title" type="text" name="titulo" value="<?php echo $row['titulo'];?>">
                <a href="perfil.php?user=<?php echo $user['id']?>"><i class="fas fa-user-astronaut">&nbsp;</i><?php echo $user['usuario']?></a>
                <div class="datitos">
                <p><i class="fas fa-map-marker-alt">&nbsp;</i><input type="text" name="direccion" value="<?php echo $row['direccion'];?>"></p>
                <p><i class="fas fa-calendar-day">&nbsp;</i><input type="text" name="fecha" value="<?php echo $row['fecha'];?>"></p>
                <p><i class="fas fa-clock">&nbsp;</i><input type="text" name="hora" value="<?php echo $row['hora'];?>"></p>
                <p><i class="fas fa-users">&nbsp;</i><?php echo $row['asistentes'];?></p>
                </div>
            </div>
        </div>
        <div class="descript">
            <h2>Descripcion:</h2><br>
            <p><textarea maxlength="200" name="descripcion"  rows="1" placeholder="Describe tu evento..."><?php echo $row['descripcion'];?></textarea></p>
        </div>
    </div>

    <!-- ads -->
    <div class="sidebar">
        <div class="entradas">
            <h2>S/.<input type="text" name="precio" planceholder="Precio" value="<?php echo $row['precio'];?>"></h2> <a href="#">Comprar</a>
        </div>
    </div>
    <div class="envio">
        <input type="submit" value="Guardar">
    </div>
</form>
<?php
require_once('footer.php');
?>