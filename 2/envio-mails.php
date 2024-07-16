<?php

//Inicializo vacío para que no de error
$mail = "";
$encabezado = "";
$mensaje = "";

//Verifico cuando se presione "Enviar"
if(isset($_GET["accion"]))
{
    if($_GET["accion"] == "Enviar")
    {
        //Traigo el mail, encabezado y mensaje
        $mail  = $_GET["email"];
        $encabezado = $_GET["encabezado"];
        $mensaje = $_GET["mensaje"];
    }

    //Chequeo que el mail, encabezado y mensaje no estén vacíos
    if($mail != "" && $encabezado != "" && $mensaje != "") {
        mail($mail, $encabezado, $mensaje);
        //Utilizo die porque es la única forma de hacer este efecto que conozco por el momento
        die("Si la página estuviese hosteado, se hubiese enviado el e-mail.");
    }
}

?>

<html>

    <form>

        <h3>Ingrese el destinatario:</h3>
        <input type="text" value="<?=$mail?>" name="email"/>
        <br/>
        <h3>Ingrese el encabezado:</h3>
        <input type="text" value="<?=$encabezado?>" name="encabezado"/>
        <br/>
        <h3>Ingrese el mensaje:</h3>
        <textarea name="mensaje"><?=$mensaje?></textarea>
        <br/> <br/>
        <input type="submit" value="Enviar" name="accion"/>

    </form>

</html>