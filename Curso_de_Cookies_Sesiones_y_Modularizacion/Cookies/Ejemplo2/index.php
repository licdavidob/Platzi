<?php

setcookie(
    // Nombre de la cookie
    "cookie_ejemplo",

    // Valor de la cookie
    "Soy una cookie de ejemplo",

    // Tiempo de vida de la cookie
    // Segundos * Minutos * Horas * Dias = 365 año
    time() + 60 * 60 * 24 * 365,

    // Ruta donde estará disponible la cookie
    "/",

    // Dominio donde estará disponible la cookie
    "localhost",

    // Si es true la cookie solo estará disponible en HTTPS
    false,

    // Si es true la cookie no estará disponible para JavaScript
    true
);

echo "Cookie creada!!! \n";

echo var_dump($_COOKIE);
