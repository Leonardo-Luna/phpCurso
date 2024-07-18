<?php

                                            # Variables
# Básicas
$null = null;

$boolean = true;
$boolean = false;
$boolean = $null == null; # True

$int = 5;

$float = 5.7;

$string = "Hola mundo!";

$array = array(1, 2, 3); # array[0-2] - [0] = 1 | [1] = 2 | [2] = 3
$array2 = array("Índice 1", "Índice 2", "Índice 3");

# Objetos
class animal {

    private $especie;
    private $nombre;
    private $edad;

    function __construct($especie = null, $nombre = null, $edad = null) {
        $this->especie = $especie;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    function toString() {
        if(isset($this->especie) and isset($this->nombre) and isset($this->edad)) {
            return $this->especie . " | " . $this->nombre . " | " . $this->edad;
        } else {
            return "No se cargaron los datos del animal solicitado.";
        }
    }

}

$animal1 = new animal();
$animal2 = new animal("Gato", "Pepe", 3);
echo $animal1->toString(); # Imprime el aviso de que el objeto está vacío
echo "<br/>";
echo $animal2->toString();

# Enumerativos
enum Color : string {
    case Rojo = "#FF0000";
    case Verde = "#00FF00";
    case Azul = "#0000FF";
}

function imprimirColor(Color $color){
    return "El valor hexadecimal del color es " . $color->value;
}

echo "<br/>" . imprimirColor(Color::Rojo);

function numeros(): iterable {
    yield 1;
    yield 2;
    yield 3;
}

// Asigno todos los valores de numeros() a $numeros para iterar sobre los mismso
$numeros = numeros();
foreach($numeros as $elemento) {
    echo "<br/>" . $elemento;
}

?>