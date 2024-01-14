<?php

// require('Animales/Gatos/gato.php');
// require('Animales/Perros/perro.php');

require('vendor/autoload.php');

use Animales\Gatos\gato as Gato;
use Animales\Perros\perro as Perro;

$gato = new Gato();
$gato->setNombre('Garfield');
$gato->setEdad(5);
$gato->setColor('Naranja');

$perro = new Perro();
$perro->setNombre('Scooby Doo');
$perro->setEdad(7);
$perro->setColor('Café');

echo 'El gato ' . $gato->getNombre() . ' tiene ' . $gato->getEdad() . ' años y es de color ' . $gato->getColor() . '<br>';
echo 'El perro ' . $perro->getNombre() . ' tiene ' . $perro->getEdad() . ' años y es de color ' . $perro->getColor() . '<br>';
