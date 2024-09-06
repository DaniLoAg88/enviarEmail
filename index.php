<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviar confirmación Email</title>
</head>
<body>
    <h2>Indica tus datos</h2>
    <form action="leerYenviar.php" method="post">
        <p>
            <label for="nombre">Introduce tu nombre</label>
            <input type="text" id="nombre" name="nombre">
        </p>
        <p>
            <label for="email">Introduce tu correo electrónico</label>
            <input type="email" id="email" name="email">
        </p>
        <p>
            <input type="submit" value="Enviar" id="enviar">
        </p>
    </form>
</body>
</html>
