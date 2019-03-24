<?php
    require_once("cabeza.php");
    /*require_once("conexion.php");

    if(isset($_GET['id']))
    {
        $codigo=$_GET['id'];
        $sql="SELECT *FROM usuario where id=".$codigo;
        $resultado=$conexion->query($sql);
        $fila=$resultado->fetch_array(MYSQLI_ASSOC); //obtenemos el registro del resultado
        $codigo=$fila['id'];
        $usuario=$fila['usuario'];
        $nombre=$fila['nombre'];
        $apellido=$fila['apellido'];
        $email=$fila['email'];
        $contraseña=$fila['contraseña'];
        $fecha=$fila['fecha'];
        $sexo=$fila['sexo'];
    }*/
?>

    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Editar usuarios</li>
    </ol>
    <hr>
        <p>Lista de usuario para Editar al Sistema.</p>


    <form method="post" action="editarUs.php">

        <p>ID: <input type="text" name="codigo" value="<?php echo $codigo; ?>" readonly></p>
        <p>USUARIO: <input type="text" name="usuario" value="<?php echo $usuario; ?>" id=""></p>
        <p>NOMBRES: <input type="text" name="nombres" value="<?php echo $nombre; ?>" id=""></p>
        <p>APELLIDOS: <input type="text" name="apellidos" value="<?php echo $apellido; ?>" id=""></p>
        <p>EMAIL: <input type="text" name="direccion" value="<?php echo $email; ?>" id=""></p>
        <p>CONTRASEÑA: <input type="text" name="area" value="<?php echo $contraseña; ?>" id=""></p>
        <p>FECHA: <input type="text" name="dni" value="<?php echo $fecha; ?>" id=""></p>
        <p>SEXO: <input type="text" name="usuario" value="<?php echo $sexo; ?>" id=""></p>
        <p><input type="submit" value="ACTUALIZAR"></p>
    
    </form>
<?php
require_once("footer.php");
?>