<?php
    require_once("cabeza.php");
    /*require_once("conexion.php");

    if(isset($_GET['b'])&&isset($_GET['t']))
    {
        //algo que buscar
        $valor=$_GET['b'];
        $tipo=$_GET['t'];

        if(empty($valor))
        {
            $sql="SELECT *FROM usuario";
        }
        else
        {
            switch($tipo)
            {
            case 1: //busqueda por Dni
                    $sql="SELECT *FROM usuario WHERE usuario=".$valor;
                    break;
            case 2: //busqueda por Apellidos
                    $sql="SELECT *FROM usuario WHERE UPPER(apellido) LIKE UPPER('%".$valor."%')";
                    break;

            default: //otro caso
                    $sql="SELECT *FROM usuario";
            }
        }
    }
    else
    {
        //nada que buscar
        $sql="SELECT *FROM usuario";
    }

    $resultado=$conexion->query($sql);*/
?>


    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Editar usuarios</li>
    </ol>

    <hr>
        <p>Lista de usuario para Editar al Sistema.</p>

        <div id="inBuscar">

            <form action="adaptarEDUSER.php" method="post"> <!--listo-->

                <div class="form-row">

                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="dato" id="" placeholder="Nombre o Apellido Completo">
                    </div>

                    <div class="form-group col-md-3">
                        <select class="form-control" name="" id="">
                            <option value="1" selected>Usuario</option>
                            <option value="2">Apellidos</option>
                        </select>
                    </div>

                </div>
                    <button type="button" class="btn btn-outline-primary">Buscar</button>

            </form>
        </div>
    <hr>

    <div id="ouBuscar">
    <?php
    //echo "<p>Número de Registros Leidos: ".$resultado->num_rows."</p>";
    echo "<p>Aca se mensiona el numero de regitro</p>";
    echo "<div class='row'>";
    echo "<div class='col-sm-12'>";
    echo "<table class='table table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>USUARIO</th>";
    echo "<th>NOMBRE</th>";
    echo "<th>APELLIDO</th>";
    echo "<th>EMAIL</th>";
    echo "<th>CONTRASEÑA</th>";
    echo "<th>FECHA</th>";
    echo "<th>SEXO</th>";
    echo "<th>EDITAR</th>";
    echo "<th>ELIMINAR</th>";
    echo "</tr>";
    echo "</thead>";
    /*while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
    {
        echo "<tr>";
        echo "<td>".$fila['id']."</td>";
        echo "<td>".$fila['usuario']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['apellido']."</td>";
        echo "<td>".$fila['email']."</td>";
        echo "<td>".$fila['contraseña']."</td>";
        echo "<td>".$fila['fecha']."</td>";
        echo "<td>".$fila['sexo']."</td>";
        echo "<td><a href='editarRegUser.php?id=".$fila['id']."'><img src='img/editar.png'></a></td>";
        echo "<td><a href='#' data-toggle='modal' data-target='#deleteModal' onclick=enviarCodigo(".$fila['id'].")><img src='img/eliminar.png'></a></td>";
        echo "</tr>";
    }*/
    echo "</table>";
    echo "</div>";
    echo "</div>";
    ?>

    </div>





<?php
require_once("footer.php");
?>