<?php

//Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "sistema") or die("No se pudo conectar " . mysqli_connect_error());

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    //Comando SQL
    $sql = "DELETE FROM clientes WHERE `clientes`.`id` = '$id'";
    //Ejecución del comando SQL en la base de datos (conn)
    $query = mysqli_query($conn, $sql);

    if($query)
    {
        echo "Fila eliminada";
    }
    else
    {
        echo mysqli_error($conn);
    }

}

?>