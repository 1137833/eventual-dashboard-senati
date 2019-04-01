<?php 
require_once("header.php");
require_once("conexion.php");
$rel = $conexion -> query("SELECT * FROM categoria");
?>
<div class="all-events">
    <div class="filtro">
        <div class="categoria">
            <h3>Categoria</h3>
            <div id="select-cat">
            </div>
            <div class="all-cat">
                <?php
                while($row = $rel -> fetch_array())
                {
                ?>
                <a href="#" class="cat-link" onclick="cate(<?php echo $row['id']?>);" style="background: <?php echo $row['color']?>">
                    <?php echo $row['categoria'] ?>
                </a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="mostrar-solo">
        <h3>Mostrar</h3><br>
            <ul>
                <li><a href="#" class="mostrarSolo solo-selected" onclick="mostrarSolo(0)"><i class="far fa-list-alt">&nbsp;</i>Todos</a></li>
                <li><a href="#" class="mostrarSolo" onclick="mostrarSolo(1)"><i class="fas fa-chart-line">&nbsp;</i>Top ventas</a></li>
                <li><a href="#" class="mostrarSolo" onclick="mostrarSolo(2)"><i class="far fa-calendar-alt">&nbsp;</i>Éste mes</a></li>
                <li><a href="#" class="mostrarSolo" onclick="mostrarSolo(3)"><i class="fas fa-fire">&nbsp;</i>Nuevos eventos</a></li>
            </ul>
        </div>
    </div>
    <div id="mostrar-eventos"></div>
</div>

<script>
var category = 0;
var filter = 0;
$(document).ready(function()
{
    //categorias limpias
    $.ajax({
        url: 'selectCat.php',  
        type: 'POST',
        dataType:"html",
        data: {cat: category, fil: filter},
        success: function(data) {  
            $('#select-cat').html(data);  
        }  
    });
    //mostramos todos los eventos
    $.ajax({  
        url: 'mostrarEventos.php',  
        type: 'POST',
        dataType:"html",
        data: {cat: category, fil: filter},
        success: function(data) {  
            $('#mostrar-eventos').html(data); 
        }
    });

    //mostramos y ocultamos la categoria selecionada
    $('.cat-link').click(function () {
        $('.cat-link').show(200);
        $(this).hide(200);
    });
});

$('.categoria').hover(function()
{
    $('.all-cat').slideToggle(200);
});
function cate(cat)
{
    category = cat;
    $.ajax({
        url: 'selectCat.php',  
        type: 'POST',
        dataType:"html",
        data: {cat: category, fil: filter},
        success: function(data) {  
            $('#select-cat').html(data);  
        }  
    });
    $.ajax({  
        url: 'mostrarEventos.php',  
        type: 'POST',
        dataType:"html",
        data: {cat: category, fil: filter},
        success: function(data) {  
            $('#mostrar-eventos').html(data); 
        }
    });
    
}
function mostrarSolo(val)
{
    filter = val;
    $.ajax({  
        url: 'mostrarEventos.php',  
        type: 'POST',
        dataType:"html",
        data: {cat: category, fil: filter},
        success: function(data) {  
            $('#mostrar-eventos').html(data); 
        }
    });
}
$('.mostrarSolo').click(function()
{
    $('.mostrarSolo').removeClass('solo-selected');
    $(this).addClass('solo-selected');
});


</script>
<?php
require_once("footer.php");
?>