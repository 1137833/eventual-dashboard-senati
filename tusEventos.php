<?php
require_once('conexion.php');
require_once('confirmUser.php');
$idUser=$_SESSION['usuarivalido']['id'];

$rel = $conexion->query("SELECT * FROM eventos WHERE organizador = $idUser"); 
while($row = $rel->fetch_array())
{
?>
<div class="evento">
<a href="plantilla.php?id=<?php echo $row['id']?>">
    <div class="miniatura">
        <img src="img/eventos/<?php echo $row['imagen']?>">
    </div>
    <div class="div-info-card">
        <div class="datos">
            <h2><?php echo $row['titulo']?></h2>
        </div>
        <div class="info">
            <ul>
                <li><i class="fas fa-map-marker-alt"></i><?php echo $row['direccion']?></li>
                <li><i class="fas fa-calendar-day"></i><?php echo $row['fecha'];?></li>
                <li><i class="fas fa-clock"></i><?php echo $row['hora'];?></li>
            </ul>
        </div>
    </div>
    </a>
    <div class="control">
        <a href="#" onclick="asistentes(<?php echo $row['id']?>)"><i class="fas fa-users"></i><br>
            <p><?php echo $row['asistentes'];?></p>
        </a>
        <a href="upload.php?id=<?php echo $row['id'] ?>" id="editarEvento"><i class="far fa-edit"></i><br>
            <p>Editar</p>
        </a>
        <a href="#" id="eliminarEvento"><i class="far fa-trash-alt"></i><br>
            <p>Eliminar</p>
        </a>
    </div>
</div>
<?php
}
?>
<script>
    function asistentes(id)
    {
        var id = id;
        $.ajax({  
            url: 'asistentes.php',  
            type: 'GET',
            dataType:"html",
            data: 'id='+id,
            success: function(data) {  
                $('#contenido').html(data);  
            }  
        });
    }
</script>