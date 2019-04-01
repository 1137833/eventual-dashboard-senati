<?php
require_once("header.php");
?>
<link href="css/1.css" rel="stylesheet" id="bootstrap-css">
<div class="contain background">
    <form action="registroUsuario.php" method="post">
        <h1>Crea un Cuenta</h1>
                <br>
        <div class="registro">
        <div class="datosPersonal">
            <label for="">Nombres</label>
            <input type="text" name="nombre" placeholder='Nombres' class="input" required /><br>
            <label for="">Apellidos</label>
            <input type="text" name="apellido" placeholder="Apellidos" class="input" required/><br>
            <label for="">Fecha de nacimiento</label>
            <input type="text" name="fecha" placeholder="01-01-2019" id="fecha" maxlength="10" required> 
            <label for="">Sexo</label>
            <select name="sexo" id="" required>
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
            </select>
        </div>
        <div class="datosUsuario">
            <label for="">Nombre de usuario</label>
            <input type="text" name="usuario" placeholder='Nombre de usuario' class="input" required /><br>
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Correo Electrónico" class="input" required/><br>
            <label for="">Contraseña</label>
            <input type="password" name="clave" placeholder="Contraseña" class="input" required/><br>
            <input type="submit" value="Registrarse">
        </div>
        </div>

            

    </form>
   
</div>
    

<?php
require_once("footer.php");
?>

