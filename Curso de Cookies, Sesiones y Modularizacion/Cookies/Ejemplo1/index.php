<?php

/**
 * El script de PHP crea una cookie y retorna el HTML con la cookie
 */
setcookie("header_color", "#12373d");

/**
 * La primera vez que se carga la pagina no se va a mostrar el color de la cookie
 * porque el navegador no ha recibido la cookie, pero si se recarga la pagina
 * se va a mostrar el color de la cookie ya que el navegador envía la cookie al servidor
 * y el servidor la recibe en la variable superglobal $_COOKIE (similar a $_GET y $_POST)
 */
if (isset($_COOKIE["header_color"])) {
    $color = $_COOKIE["header_color"];
} else {
    $color = "#121f3d";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header style="background: <?= $color ?>;">
        <img src="./logo.webp" alt="">
    </header>
</body>

</html>