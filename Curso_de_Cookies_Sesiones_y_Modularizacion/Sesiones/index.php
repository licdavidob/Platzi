<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil David</title>
</head>

<body>
    <?php if (isset($_SESSION['id'])) : ?>
        <h1> ¡Hola <?php echo $_SESSION['userName'] ?>!</h1>
        <h2>Datos Sesion:</h2>
        <ul>
            <li>Id: <?php echo $_SESSION['id'] ?></li>
            <li>Nombre: <?php echo $_SESSION['userName'] ?></li>
            <li>Email: <?php echo $_SESSION['email'] ?></li>
        </ul>
    <?php else : ?>
        <h1>Tu no eres un usuario logueado</h1>
    <?php endif; ?>
</body>

</html>