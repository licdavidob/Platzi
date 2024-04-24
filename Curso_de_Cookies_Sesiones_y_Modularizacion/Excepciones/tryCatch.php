<?php

try {
    $Resultado = 10 / 0;
    echo $Resultado;
} catch (\Throwable $th) {
    echo "Error: " . $th->getMessage();
}
