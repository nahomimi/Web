<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Acceso</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="controlador.php" method="post">

        <!-- (= -->

        <h2>Login</h2>

        <input type="text" name="usuario" placeholder="Usuario" required>

        <input type="password" name="contrasena" placeholder="Contraseña" required>

        <select name="rol" required>
            <option value="" disabled selected>Tipo de rol</option>
            <option value="admin">Adiministrador</option>
            <option value="maestro">Maestro</option>
            <option value="alumno">Alumno</option>
        </select>

        <input type="submit" class="btn" value="Acceder">

    </form>
</body>

</html>