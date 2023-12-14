<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body>
    <?php if (isset($_SESSION['id'])) : ?>
        <h1> ¡Hola <?php $_SESSION['userName'] ?>!</h1>
    <?php endif; ?>
</body>

</html>