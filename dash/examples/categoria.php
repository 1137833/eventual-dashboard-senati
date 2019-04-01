<?php
require_once("cabeza.php");
?>

    <?php
        if(isset($_GET['v']))
        {
        $dato=$_GET['v'];
        if($dato==1)
        {
            ?>
                <div class="alert alert-info">
                <strong>CORRECTO: </strong> Se Registro la Categoria!
                </div>
            <?php
        }
        else
        {
            ?>
                <div class="alert alert-info">
                <strong>Error: </strong> Ocurrio un Error al Crear la Categoria!
                </div>
            <?php
        }
        }
    ?>



    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Crear Categoria</li>
    </ol>

    <form method="post" action="categoriaCrear.php">

    <div class="form-group row">
        <label  class="col-sm-1 col-form-label">Nombre:</label>
            <div class="col-sm-5">
                <input type="text" name="categoria" class="form-control" placeholder="Nombre de la Categoria">
            </div>
    </div>

    <div class="form-group row">
        <label  class="col-sm-1">Color:</label>
            <div class="col-sm-1">
                <input type="color" name="color" class="form-control" placeholder="Nombre de la Categoria">
            </div>
    </div>

    <input class="btn btn-primary" type="submit" value="Crear">
    
    </form>

    


<?php
require_once("footer.php");
?>