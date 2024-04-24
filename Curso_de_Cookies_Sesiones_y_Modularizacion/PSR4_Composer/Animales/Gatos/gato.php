<?php

//Los namespace deben ser iguales a la estructura de carpetas
namespace Animales\Gatos;

// La clase debe tener el mismo nombre que el archivo
class gato
{
    private $nombre;
    private $edad;
    private $color;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function getColor()
    {
        return $this->color;
    }
}
