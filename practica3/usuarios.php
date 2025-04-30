<!DOCTYPE html>
<html lang="es">

<head>
    <title>Usuarios</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Archivo CSS personalizado -->
    <link href="estilos2.css" rel="stylesheet">
</head> 
<body> 

<div class="container mt-5">

    <nav class="navbar navbar-dark" style="background-color: #FF007F; border-radius: 0.5rem;">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="admin.php"><i class="bi bi-house-door-fill"></i> Inicio</a>
            <a class="nav-link text-light" href="usuarios.php"><i class="bi bi-people-fill"></i> Usuarios</a>
        </div>
    </nav>

    <?php
    session_start(); 
    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }

    if (isset($_SESSION['rol']) && $_SESSION['rol'] != 1) {
        header("Location: index.php");
        exit();
    }

    include('conexion.php');

    // Consultar la lista de usuarios
    $sql = "SELECT id, nombre, contrasena, rol FROM usuarios";
    $resultado = $conexion->query($sql);
    ?>
    
    <div class="card mt-5 w-100">
        <div class="card-header" style="background-color: #1A1A2E; color: #FF007F;">
            <h3 class="card-title"><i class="bi bi-list-ul"></i> Lista de Usuarios</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Contraseña</th>
                            <th>Rol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($fila = $resultado->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $fila['id'] . "</td>";
                            echo "<td>" . $fila['nombre'] . "</td>";
                            echo "<td>" . $fila['contrasena'] . "</td>";
                            echo "<td>" . $fila['rol'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between mt-4">
        <form action="crearUsuario.php" method="get"> 
            <input type="submit" class="btn btn-success" value="Crear Usuario">
        </form>
        
        <form action="cerrarSesion.php" method="post">
            <input type="submit" class="btn btn-danger" value="Cerrar Sesión">
        </form>
    </div>
    
    <?php
    $conexion->close();
    ?>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>

</body>
</html>
