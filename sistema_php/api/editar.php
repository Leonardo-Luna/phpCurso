<?php

//Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "sistema") or die("No se pudo conectar " . mysqli_connect_error());

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $detalle = $_GET['detalle'];

    //Comando SQL
    $sql = "UPDATE clientes SET nombre = '$nombre', apellido = '$apellido', email = '$email', telefono = '$telefono', detalle = '$detalle' WHERE `clientes`.`id` = '$id'";
    //Ejecución del comando SQL en la base de datos (conn)
    $query = mysqli_query($conn, $sql);

    if($query)
    {
        echo "Fila modificada";
    }
    else
    {
        echo mysqli_error($conn);
    }

}

?>