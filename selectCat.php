<?php
require_once('conexion.php');
$cat = $_POST['cat'];
if($cat > 0)
{
        $rel = $conexion -> query("SELECT * FROM categoria WHERE id = $cat");
        $row = $rel -> fetch_array();
?>
<div class="cat-select" style="background: <?php echo $row['color']?>"><span><?php echo $row['categoria']?></span><a href="#" id="catx">x</a></div>
<?php
}
else
{
?>
<div class="cat-select" style="background: #ccc"><span>Todos</span><a href="#"><i class="fas fa-chevron-down"></i></a></div>
<?php
}
?>



<script>
$('#catx').click(function()
{
    category = 0;
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

    $('.cat-link').show(200);
    $('.all-cat').slideToggle(200);
});
</script>