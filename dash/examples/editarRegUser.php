<?php
    require_once("cabeza.php");
    require_once("conexion.php");

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $sql="SELECT *FROM usuario where id=$id";
        $resultado=$conexion->query($sql);
        $fila=$resultado->fetch_array(MYSQLI_ASSOC); //obtenemos el registro del resultado
        $id=$fila['id'];
        $usuario=$fila['usuario'];
        $nombre=$fila['nombre'];
        $apellido=$fila['apellido'];
        $email=$fila['email'];
        $clave=$fila['clave'];
        $nacimiento=$fila['nacimiento'];
        $sexo=$fila['sexo'];
    }
?>

    
    <?php
        if(isset($_GET['v']))
        {
        $dato=$_GET['v'];
        if($dato==1)
        {
            ?>
                <div class="alert alert-info">
                <strong>CORRECTO: </strong> Se actualizo Correctamente!
                </div>
            <?php
        }
        else
        {
            ?>
                <div class="alert alert-info">
                <strong>Error: </strong> Ocurrio un Error!
                </div>
            <?php
        }
        }
    ?>

    <form method="post" action="editarUs.php">

    <div class="form-group row">
        <label  class="col-sm-1 col-form-label">ID:</label>
        <div class="col-sm-3">
        <input type="text" name="id" class="form-control" value="<?php echo $id; ?>" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label  class="col-sm-1 col-form-label">Usuario:</label>
        <div class="col-sm-3">
        <input type="text" name="usuario" class="form-control" value="<?php echo $usuario; ?>" placeholder="Usuario">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Nombre:</label>
        <div class="col-sm-3">
        <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" placeholder="Nombre">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Apellido:</label>
        <div class="col-sm-3">
        <input type="text" name="apellido" class="form-control" value="<?php echo $apellido; ?>" placeholder="Apellido">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Email:</label>
        <div class="col-sm-3">
        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Email">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Contraseña:</label>
        <div class="col-sm-3">
        <input type="text" name="clave" class="form-control" value="<?php echo $clave; ?>" placeholder="Contraseña">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Fecha:</label>
        <div class="col-sm-2">
        <input type="text" name="nacimiento" class="form-control" id="fecha" value="<?php echo $nacimiento; ?>" placeholder="Fecha">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Sexo:</label> 
        <div class="col-sm-2">
        <select class="form-control" name="sexo" id="">
            <?php
                if($sexo == 1)
                {
                ?>
                    <option value="1" selected>Masculino</option>
                    <option value="2">Femenino</option>
                <?php
                }
                else
                {
                ?>
                    <option value="1">Masculino</option>
                    <option value="2" selected>Femenino</option>
                <?php 
                }
            ?>
        </select>
        </div>
    </div>

    <p><input type="submit" class="btn btn-primary" value="ACTUALIZAR"></p>
    
    </form>
<?php
require_once("footer.php");
?>