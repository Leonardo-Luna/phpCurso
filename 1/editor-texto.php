<?php

//Archivo por defecto
$archivo = "Archivo.txt";

//IsSet verifica si existe la variable (tiene datos el campo "archivo" del vector $_GET)
if(isset($_GET["archivo"]))
{
    
    //Traigo el nombre del archivo
    $archivo = $_GET["archivo"];

    if(isset($_GET["accion"]) and $_GET["accion"] == "Guardar")
    {
        //Modificar contenido de un archivo
        file_put_contents($archivo, $_GET["texto"]);
    }

}

//Leer ontenido de un archivo
$mensaje = "";
$texto = @file_get_contents($archivo) or $mensaje = "Archivo no encontrado, se creará.";

?>

<h3> Editar archivo de texto </h3>

<form>
    <label>Nombre del archivo:</label>
    <input type="text" name="archivo" value="<?=$archivo?>" />
    <br/> <br/>
    <input type="submit" value="Cargar contenido" name="cargar" />
    <output> <?=$mensaje?> </output>
    <br/> <br/>
    <textarea name="texto"><?=$texto?></textarea>
    <br/><br/>
    <input type="submit" value="Guardar" name="accion" style="margin-left:200px" />
</form>

<style>

    textarea {
        width: 500px; height: 200px
    }

</style>