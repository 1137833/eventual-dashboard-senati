<?php
while($row = $rel->fetch_array())
{
    $userId = $row['organizador'];
    $user = $conexion->query("SELECT * FROM usuario WHERE id = $userId")->fetch_array(); 
?>
<div class="evento">
<a href="plantilla.php?id=<?php echo $row['id']?>">
    <div class="miniatura">
        <img src="img/eventos/<?php echo $row['imagen']?>">
    </div>
    <div class="div-info-card">
        <div class="datos">
            <h2><?php echo $row['titulo']?></h2>
            <p href="perfil.php?u=<?php echo $row['organizador']?>"><i class="fas fa-user-astronaut"></i><?php echo $user['usuario']?></p>
            <p><i class="fas fa-map-marker-alt"></i><?php echo $row['direccion']?></p>
        </div>
        <div class="info">
            <ul>
                <li><i class="fas fa-calendar-day"></i><?php echo $row['fecha'];?></li>
                <li><i class="fas fa-clock"></i><?php echo $row['hora'];?></li>
                <li><i class="fas fa-users"></i><?php echo $row['asistentes'];?></li>
            </ul>
        </div>
    </div>
    </a>
</div>

<?php
}
?>

