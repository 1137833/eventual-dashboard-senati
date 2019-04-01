<?php
require_once('header.php');
require_once('conexion.php');
$id = $_GET['id'];
$result = $conexion->query("SELECT * FROM eventos where id = $id");
$row = $result->fetch_array();
$userId = $row['organizador'];
$user = $conexion->query("SELECT * FROM usuario WHERE id = $userId")->fetch_array(); 
?>
<link rel="stylesheet" href="css/event.css">

<div class="contenedor">
    <div class="todo-evento">
        <div id="imgPortada" ><img src="img/eventos/<?php echo $row['portada']?>"></div>
        <div class="datos-evento">
            <div id="imgMini"><img src="img/eventos/<?php echo $row['imagen'] ?>"></div>
            <div class="info-evento">
                <h1><?php echo $row['titulo'];?></h1>
                <a href="perfil.php?user=<?php echo $user['id']?>"><i class="fas fa-user-astronaut">&nbsp;</i><?php echo $user['usuario']?></a>
                <div class="datitos">
                <p><i class="fas fa-map-marker-alt">&nbsp;</i><?php echo $row['direccion'];?></p>
                <p><i class="fas fa-calendar-day">&nbsp;</i><?php echo $row['fecha'];?></p>
                <p><i class="fas fa-clock">&nbsp;</i><?php echo $row['hora'];?></p>
                <p><i class="fas fa-users">&nbsp;</i><?php echo $row['asistentes'];?></p>
                </div>
            </div>
        </div>
        <div class="descript">
            <h2>Descripcion:</h2><br>
            <p><?php echo $row['descripcion'];?></p>
        </div>

        <div class="entradas-contain" id="entradas-contain">
        <form action="comprarEntrada.php?idu=<?php echo $idUser?>&&ev=<?php echo str_replace(" ", "_", $row['titulo']) ?>&&id=<?php echo $id ?>" method="post">
        <h2>Compra tus entradas para <?php echo $row['titulo'] ?></h2><br>
                    <br>
            <div class="ticket">
                <div class="precio">
                    <h3>Precio por entrada</h3>
                    <h2>S/.<?php echo $row['precio'] ?></h2> 
                </div>  
                <div class="cantidad">
                    <h3>Cantidad</h3>
                    <div class="numero-entradas">
                        <div class="mas"><a  onclick="mas(<?php echo $row['precio'] ?>)"><i class="fas fa-chevron-up"></i></a></div>
                        <input type="text" id="numeroEntrada" name="numero" value="0" onkeyup="calculo(<?php echo $row['precio'] ?>)">
                        <div class="menos"><a  onclick="menos(<?php echo $row['precio'] ?>)"><i class="fas fa-chevron-down"></i></a></div> 
                    </div>
                    
                </div>
                <div class="total">
                    <h3>Total: </h3>
                    <h2>S/.<span id="total">00</span></h2>
                </div>
            </div><br>
            <input type="submit" value="Comprar">
        </form>
   </div>
    </div>

    <!-- ads -->
    <div class="sidebar">
        <div class="entradas">
            <h2>S/.<?php echo $row['precio'] ;?></h2><a href="#entradas-contain" id="comprar">Comprar</a>
        </div>
        <div class="ad">
        <img src="https://gaia.adage.com/images/bin/image/x-large/328896594_1532.jpg?1533836518">
        </div>
        <div class="ad">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQSbJ87y5SQAmyXkL8QIKAu8AGDaDd1acpDbiMAcQxHM-1-zmkhw">
        </div>
        <div class="ad">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfv3b0fasjxkWlhy-VZ3eo2XAiJFuehSDZJhiIzlBxfdQQFkmB">
        </div>
    </div>
</div>


<section class="section"> <!-- Similares -->
<div class="finter-title">
        <h3>Similares</h3>
        <a href="eventos.php?f=0&&id=<?php echo $row['categoria'];?>">Ver más</a>
    </div>
    <div class="content">
        <?php
        $cat = $row['categoria'];
        $rel = $conexion->query("SELECT * FROM eventos WHERE categoria = $cat ORDER BY fecha DESC"); 
        require("itemEvento.php");
        ?>
    </div>
</section>
<?php
require_once('footer.php');
?>