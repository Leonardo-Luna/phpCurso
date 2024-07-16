<?php

include("Auto.php");

$auto = new Auto("Ford", 10000, 2019);

echo $auto->marca;
echo "<br/>";
$auto->marca = "Test";
echo $auto->marca;

?>