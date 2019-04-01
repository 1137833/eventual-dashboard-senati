//formato fecha y hora
$(document).ready(function(){
//baner slider
var select = 1;//variable que seleciona el slider que será mostrado

$('.slider').hide();
$('.slider:nth-child('+select+')').show();

 
 setInterval(() => {
    if(select >= 4)
        {
            select = 1;
        }
        else
        {
            select++;
        }
        $('.slider').hide();
        $('.slider:nth-child('+select+')').show();
 }, 7000);

 $('.next').click(function()
     {
        
        if(select >= 4)
        {
            select = 1;
        }
        else
        {
            select++;
        }
        $('.slider').hide();
        $('.slider:nth-child('+select+')').show();
});
$('.prev').click(function()
     {
        
        if(select == 1)
        {
            select = 4;
        }
        else
        {
            select--;
        }
        $('.slider').hide();
        $('.slider:nth-child('+select+')').show();
});

    $("#fecha").keyup(function(e){
        if (e.keyCode != 8){    
            if ($(this).val().length == 2){
                $(this).val($(this).val() + "-");
            }else if ($(this).val().length == 5){
                $(this).val($(this).val() + "-");
            }
        }
    });   
    $("#hora").keyup(function(e){
        if (e.keyCode != 8){    
            if ($(this).val().length == 2){
                $(this).val($(this).val() + ":");
            }
        }
    });
    
    function portada(input)
    {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();

            reader.onload = function(e)
            {
                $('#port').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#portada').change(function()
    {
        portada(this);
    });

    function miniatura(input)
    {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();

            reader.onload = function(e)
            {
                $('#mini').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#miniatura').change(function()
    {
        miniatura(this);
    });

    //foto de perfil
    function perfil(input)
    {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();

            reader.onload = function(e)
            {
                $('#foto').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#fotoPerfil').change(function()
    {
        perfil(this);
    });


    //contenido de perfil
    $.ajax({  
        url: 'tusEventos.php',  
        success: function(data) {  
            $('#contenido').html(data);  
        }  
    });

    $('#tusEventos').click(function()
    {
        $('#tusEventos').addClass('link-active');
        $('#tusEntradas').removeClass('link-active');
        $.ajax({  
            url: 'tusEventos.php',  
            success: function(data) {  
                $('#contenido').html(data);  
            }  
        });
    });
    $('#tusEntradas').click(function()
    {
        $('#tusEventos').removeClass('link-active');
        $('#tusEntradas').addClass('link-active');
        $.ajax({  
            url: 'tusEntradas.php',  
            success: function(data) {  
                $('#contenido').html(data);  
            }  
        });
    });
});

//cantidad de entradas
var cant = $('#numeroEntrada').val();
function calculo(precio)
{
    cant = $('#numeroEntrada').val();
    var precio = precio;
    var suma= precio * cant;
    $('#total').text(suma);
}
function mas(precio)
{
    cant++;
    var precio = precio;
    var suma= precio * cant;

    $('#total').text(suma);
    $('#numeroEntrada').val(cant);
}
function menos(precio)
{
    cant--;
    var precio = precio;
    var suma= precio * cant;

    $('#total').text(suma);
    $('#numeroEntrada').val(cant);
}
$("#comprar").click(function()
{
    $("#entradas-contain").show(100);
});
