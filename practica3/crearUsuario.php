<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Archivo CSS personalizado -->
    <link href="estilos.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <nav class="navbar navbar-dark" style="background-color: #FF007F; border-radius: 0.5rem;">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="admin.php"><i class="bi bi-house-door-fill"></i> Inicio</a>
            <a class="nav-link text-light" href="usuarios.php"><i class="bi bi-people-fill"></i> Usuarios</a>
        </div>
    </nav>

    <div class="card mt-5" style="background: #1A1A2E">
        <div class="card-header">
            <h3 class="card-title"><i class="bi bi-person-plus-fill"></i> Crear Nuevo Usuario</h3>
        </div>
        <div class="card-body">
            <form action="insertarUsuario.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre de Usuario" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
                    <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-badge"></i></span>
                    <select class="form-select" name="rol" required>
                        <option value="" disabled selected>Tipo de rol</option>
                        <option value="1">Administrador</option>
                        <option value="2">Maestro</option>
                        <option value="3">Alumno</option>
                    </select>
                </div>
                <div class="d-grid">
                    <input type="submit" class="btn btn-success" value="Crear Usuario">
                </div>
            </form>

            <form action="usuarios.php" method="post" class="mt-3"> 
                <div class="d-grid">
                    <input type="submit" class="btn btn-secondary" value="Regresar"> 
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>

</body>
</html>
