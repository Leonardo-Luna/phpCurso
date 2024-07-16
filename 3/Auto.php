<?php

class Auto 
{

    private $marca;
    private $precio;
    private $modelo;

    function __construct($marca, $precio, $modelo)
    {
        $this->marca = $marca;
        $this->precio = $precio;
        $this->modelo = $modelo;
    }

    //El getter recibe por parámetro de manera automática la propiedad que se intenta acceder
    //Esta puede ser identificadad usando $propiedad
    function __get($propiedad)
    {
        return $this->$propiedad;
    }

    function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

}

?>