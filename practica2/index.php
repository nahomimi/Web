<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Acceso</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <form action="controlador.php" method="post">

        <!-- (= -->

        <h2>Login</h2>

        <input type="text" name="usuario" placeholder="Usuario" required>

        <input type="password" name="contrasena" placeholder="Contraseña" required>

        <input type="submit" class="btn" value="Acceder">

    </form>

</div>
</body>
</html>