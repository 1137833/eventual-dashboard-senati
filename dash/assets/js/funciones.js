function enviarCodigo(codigo)
{
    //accedo al objeto que deseo manipular
    var obj=document.getElementById("enlace");
    //cambio el valor de sus atributos del objeto.
    obj.href="eliminarU.php?id="+codigo; //asigno la nueva ruta el objeto
    document.getElementById("mostrar").innerHTML=' COD: '+codigo;
}