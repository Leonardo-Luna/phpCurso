<?php

//Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "sistema") or die("No se pudo conectar " . mysqli_connect_error());

//Comando SQL
$sql = "SELECT * FROM clientes;";
//Ejecución del comando SQL en la base de datos (conn)
$result = mysqli_query($conn, $sql);
//Traigo e itero sobre las filas, los datos se guardan en un array
$cliente = array();
while($row = mysqli_fetch_array($result))
{
    //Almaceno todos los array de datos en un array de clientes
    array_push($cliente, $row);
}

echo json_encode($cliente);

mysqli_free_result($result);
mysqli_close($conn);

?>