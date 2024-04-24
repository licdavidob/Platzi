<?php

function functionUno()
{
    return functionDos();
}

function functionDos()
{
    return functionTres();
}

function functionTres()
{
    return division();
}

function division()
{
    return 10 / 0;
}

try {
    $Resultado = functionUno();
    echo $Resultado;
} catch (\Throwable $e) {
    //Muestra el mensaje de error
    echo "Error: " . $e->getMessage() . "<br>";

    //Muestra el codigo de error
    echo "Codigo: " . $e->getCode() . "<br>";

    //Muestra el archivo donde se produjo el error
    echo "Archivo: " . $e->getFile() . "<br>";

    //Muestra la linea donde se produjo el error
    echo "Linea: " . $e->getLine() . "<br>";

    /**
     * Muestra el trace del error
     * Un trace es una lista de funciones que se ejecutaron antes de que se produjera el error
     */
    echo "Trace: <pre>";
    print_r($e->getTrace());
    echo "</pre>";
}
