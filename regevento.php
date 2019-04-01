<?php 
require_once('confirmUser.php');
require_once("header.php");
require_once("conexion.php");
?>
<link href="css/1.css" rel="stylesheet" id="bootstrap-css">
<div class="contain">
    <form action="crearEvento.php"  method="post">
        <h1>Crea tu evento aquí</h1>
                <br>

        <p>Ingresa los datos del evento</p><br>
        <div class="login"> 
        <input type="text" name="titulo" placeholder='Título del evento' required />
        <input type="text" name="fecha" placeholder="01-01-2019" id="fecha" maxlength="10" required> 
        <input type="text" name="hora" placeholder="00:00" id="hora" maxlength="5" required>
        <input type="text" name="direccion" placeholder="Dirección" required/>
        <select name="categoria" required>
            <option value="0" selected>Categoria</option>

            <?php
            $result = $conexion->query("SELECT * FROM categoria ORDER BY categoria");
            while($row = $result->fetch_array())
            {
            ?>
                <option value="<?php echo $row['id'];?>"><?php echo $row['categoria'];?></option>
            <?php
            }
            ?>
        </select>
        <input type="submit" value="Crear">
        </div>
    </form>
</div>
<?php
require_once("footer.php");
?>