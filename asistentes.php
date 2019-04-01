<?php
require_once('conexion.php');
$id = $_GET['id'];
$evento = $conexion->query("SELECT * FROM eventos WHERE id = $id")->fetch_array();
$titulo = str_replace(" ", "_", $evento['titulo']);
echo "<h1>".$evento['titulo'].":</h1></br>";
//usuarios
require_once('userConnect.php');
$asistentes = $conexion->query("SELECT * FROM $titulo");
?>
<table>
    <thead>
        <tr>
            <th>USUARIO</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>EMAIL</th>
            <th>CUMPLEAÑOS</th>
            <th>SEXO</th>
            <th>ENTRADAS</th>
        </tr>
    </thead>
    <tbody>
<?php
while($row = $asistentes->fetch_array())
{
    if(empty($row))
    {
        echo"Aún no tiene asistentes";
    }
    else
    {
    ?>
    <tr>
        <td><?php echo $row['usuario'] ?></td>
        <td><?php echo $row['nombre'] ?></td>
        <td><?php echo $row['apellido'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['nacimiento'] ?></td>
        <td><?php echo $row['sexo'] ?></td>
        <td><?php echo $row['entradas'] ?></td>
    </tr>
    <?php
    }
}
?>
</tbody>
</table>