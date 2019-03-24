<?php
require_once("cabeza.php");
?>

<!-- la clase content es importante para separar la cabeza del contenido del medio-->


<ol class="breadcrumb">
    <li class="breadcrumb-item active">Registrar Usuarios</li>
</ol>

<form>

  <div class="form-group row">
    <label  class="col-sm-1 col-form-label">Usuario:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="Usuario">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-1 col-form-label">Nombre:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-1 col-form-label">Apellido:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="Apellido">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-1 col-form-label">Email:</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" placeholder="Email">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-1 col-form-label">Contraseña:</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" placeholder="Contraseña">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-1 col-form-label">Fecha:</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="fecha" placeholder="Fecha">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-1 col-form-label">Sexo:</label> 
    <div class="col-sm-2">
      <select class="form-control" name="" id="">
      <option value="">Masculino</option>
      <option value="">Femenino</option>
      </select>
    </div>
  </div>
</form>

<button href="#" type="button" class="btn btn-outline-primary">Enviar</button>


<?php
require_once("footer.php");
?>