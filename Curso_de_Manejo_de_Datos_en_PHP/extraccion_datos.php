<?php

$Dato = 'Estudio PHP';
echo "$Dato[0]<br>"; //Imprime la letra E

$Parrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatibus delectus accusantium aperiam incidunt soluta asperiores, assumenda perspiciatis quae? Accusantium quisquam autem aut repellat adipisci totam, expedita at cupiditate hic.';
$Extraer = substr($Parrafo,0,20); //A partir de la posición 0, extrae 20 elementos
echo "$Extraer<br>";

$Datos = 'Java,PHP,Laravel';
$Arreglo = explode(',',$Datos); //Toma una cadena y la transforma a un arreglo
echo "$Arreglo[0]<br>";

$Texto = implode(', ',$Arreglo); //Toma un arreglo y lo transforma a una cadena
echo "$Texto<br>";

$TextoFeo = '    Curso de PHP    '; //Es un texto con espacios innecesarios a los extremos
$TextoBonito = trim($TextoFeo); //Quita los expacios innecesarios de ambos lados
$TextoIzquierda = ltrim($TextoFeo); //Quita los expacios innecesarios del lado izquierdo
$TextoDerecha = rtrim($TextoFeo); //Quita los expacios innecesarios del lado derecho
$TextoRelleno1 = 'Quiero aprender del';
$TextoRelleno2 = 'Porque quiero volverme el mejor';

    //Se visualiza mejor en consola 
echo "$TextoRelleno1 $TextoFeo $TextoRelleno2<br>";
echo "$TextoRelleno1 $TextoBonito $TextoRelleno2<br>";
echo "$TextoRelleno1 $TextoIzquierda $TextoRelleno2<br>";
echo "$TextoRelleno1 $TextoDerecha $TextoRelleno2<br>";

?>