<?php
require_once("cabeza.php");
?>

<!-- la clase content es importante para separar la cabeza del contenido del medio-->


<ol class="breadcrumb">
    <li class="breadcrumb-item active">Registrar Usuarios</li>
</ol>

<?php
    if(isset($_GET['v']))
    {
      $dato=$_GET['v'];
      if($dato==1)
      {
        ?>
            <div class="alert alert-info">
            <strong>CORRECTO: </strong> Registro Correcto!
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

<form method="post" action="registroU.php">

  <div class="form-row">

    <div class="form-group col-md-4">
        <label>Usuario</label>
        <input type="text" name="usuario" class="form-control" placeholder="Usuario">
    </div>

    <div class="form-group col-md-4">
      <label>Nombre</label>
      <input type="text" name="nombre" class="form-control" placeholder="Nombre">
    </div>

    <div class="form-group col-md-4">
      <label>Apellido</label>
      <input type="text" name="apellido" class="form-control" placeholder="Apellido">
    </div>

  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email" name="email" class="form-control" placeholder="Email">
    </div>

    <div class="form-group col-md-6">
      <label>Contraseña</label>
      <input type="password" name="clave" class="form-control" placeholder="Contraseña">
    </div>

  </div>

  <div class="form-row">

    <div class="form-group col-md-2">
        <label>Fecha de Nacimiento</label>
        <input type="text" name="nacimiento" class="form-control" id="fecha" placeholder="Fecha">
    </div>

    <div class="form-group col-md-2">
      <label>Sexo</label> 
        <select class="form-control" name="sexo" id="">
          <option value="1" selected>Masculino</option>
          <option value="2">Femenino</option>
        </select>
    </div>

  </div>

  <input type="submit" class="btn btn-primary" value="Registrar">
</form>



<?php
require_once("footer.php");
?>