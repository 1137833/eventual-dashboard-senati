<?php
require_once("header.php");
?>
<link href="css/1.css" rel="stylesheet">
<div class="contain">

    <form action="verificar.php" method="post">
        <h1>Inicia Sesión</h1>
                <br>
        <p>Ingresa tu usuario y contraseña</p><br>
        <div class="login">
        <label><i class="fas fa-user"></i>&nbsp; usuario o Email</label>
        <input type="text" placeholder='Correo electrónico' name="usser" class="input" required />
        <label><i class="fas fa-lock"></i>&nbsp; Contraseña</label>
        <input type="password" placeholder="contraseña" name="pass" class="input" required/>
        <input type="submit" value="Inciar sesión">
        <a href="index.php">¿Olvidastes tu cuenta?</a>
        </div>
    </form>
</div>
    
<?php
require_once("footer.php");
?>

