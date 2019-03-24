<?php
session_start();
session_destroy(); //elimina la sesión iniciada.
//redireccionamos al login

header("Location: login.php");
?>