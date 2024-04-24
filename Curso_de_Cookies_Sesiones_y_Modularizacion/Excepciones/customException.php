<?php

class MichiException extends Exception
{
    public function getMeow()
    {
        return "Meow desde el gato";
    }
}

class ConejiException extends Exception
{
    public function getRabbut()
    {
        return "Conejo desde el conejo";
    }
}

try {
    $exception = readline("Excepcion a lanzar: ");
    if ($exception == "michi")
        throw new MichiException("Meow");
    else
        throw new ConejiException("Conejo");
} catch (MichiException $e) {
    echo $e->getMessage() . "\n";
    echo $e->getMeow() . "\n";
} catch (ConejiException $e) {
    echo $e->getMessage() . "\n";
    echo $e->getRabbut() . "\n";
} finally {
    echo "Se ha lanzado la excepcion";
}
