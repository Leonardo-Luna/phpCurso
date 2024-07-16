<?php

//Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "sistema") or die("No se pudo conectar " . mysqli_connect_error());

if(isset($_GET['nombre']))
{
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $detalle = $_GET['detalle'];

    //Comando SQL
    $sql = "INSERT INTO clientes (id, nombre, apellido, email, telefono, detalle) VALUES (NULL, '$nombre', '$apellido', '$email', '$telefono', '$detalle');";
    //Ejecución del comando SQL en la base de datos (conn)
    $query = mysqli_query($conn, $sql);

    if($query)
    {
        echo "Fila insertada";
    }
    else
    {
        echo mysqli_error($conn);
    }

}

?>