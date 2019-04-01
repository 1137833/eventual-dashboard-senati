<?php
require_once('conexion.php');
?>
       <!-- banner -->
<div class="slider-cont">
<?php
    
    $cont = 1;
    $rel = $conexion->query("SELECT * FROM eventos"); 
    while($row = $rel->fetch_array())
    {
        $userId = $row['organizador'];
    $user = $conexion->query("SELECT * FROM usuario WHERE id = $userId")->fetch_array();
        if($cont <=4)
        {

?>

<div class="slider">
        <div class="column1">
            <h1><?php echo $row['titulo'];?></h1>
            <p class="descripcion"><?php echo $row['descripcion'];?></p>
        </div>
    <div class="slider-image">
        <a href="plantilla.php?id=<?php echo $row['id'];?>"><?php echo "<img class='port' src='img/eventos/".$row['imagen']."'>"; ?></a>
        <a href="#" class="prev"><i class="fas fa-arrow-left"></i></a>
        <a href="#" class="next"><i class="fas fa-arrow-right"></i></a>
    </div>

   <div class="column3">
        <div class="info">
            <p><i class="fas fa-user-astronaut"></i><?php echo $user['usuario']?></p>
            <p><i class="fas fa-map-marker-alt"></i><?php echo $row['direccion'];?></p>
            <p><i class="fas fa-calendar-day"></i><?php echo $row['fecha'];?></p>
            <p><i class="fas fa-clock"></i><?php echo $row['hora'];?></p>
            <p><i class="fas fa-users"></i><?php echo $row['asistentes'];?></p>
        </div>
        <div class="buy"><a href="entradas.php?id=<?php echo $row['id'];?>">Comprar</a></div>
    </div>
</div>

<?php
$cont = $cont + 1;    
}
    }
    ?>
</div>
        <!-- end banner -->

<section class="section"> <!-- Top Ventas -->
<div class="finter-title">
        <h3>Top ventas</h3>
        <a href="eventos.php">Ver más</a>
    </div>
    <div class="content">
        <?php

        $rel = $conexion->query("SELECT * FROM eventos ORDER BY asistentes DESC LIMIT 3"); 

        require("itemEvento.php");

        ?>
    </div>
</section>
<section class="section"> <!-- weak -->
<div class="finter-title">
        <h3>Este mes</h3>
        <a href="eventos.php">Ver más</a>
    </div>
    <div class="content">
        <?php
        $m = $conexion -> query("SELECT * FROM eventos")->fetch_array();
        $mes = date("m", strtotime($m['fecha']));
        $rel = $conexion -> query("SELECT * FROM eventos WHERE $mes = MONTH(CURDATE()) ORDER BY fecha DESC LIMIT 3");
        require("itemEvento.php");
        
        ?>
    </div>
</section>
<section class="section"> <!-- New -->
    <div class="finter-title">
        <h3>Nuevos eventos</h3>
        <a href="eventos.php">Ver más</a>
    </div>
    <div class="content">
    <?php

        $rel = $conexion->query("SELECT * FROM eventos ORDER BY id DESC LIMIT 9"); 

                require("itemEvento.php");

        ?>
    </div>
</section>