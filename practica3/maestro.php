<!DOCTYPE html>
<html lang="es">

<head>
    <title>Bienvenido</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Archivo CSS personalizado -->
    <link href="estilos.css" rel="stylesheet">

</head>

<body> 
<div class="container my-5">

    <div class="card" style="background: #1A1A2E; color: #FF007F; border: 2px solid #310642;">
        <div class="card-body text-center">

            <?php
            session_start();
            if (!isset($_SESSION['id'])) {
                header("Location: index.php");
                exit();
            }
            echo "<h2 class='card-title'><i class='bi bi-person-circle'></i> Bienvenid@ Maestr@, ".$_SESSION['nombre']."</h2>";
            ?>

            <img src="https://images.pexels.com/photos/714698/pexels-photo-714698.jpeg?auto=compress&cs=tinysrgb&w=400" alt="foto alusiva a un maestro" class="img-fluid rounded mt-4 mb-3" style="border: 2px solid #FF007F;">

            <form action="cerrarSesion.php" method="post">
                <input type="submit" class="btn btn-primary btn-lg" value="Cerrar Sesión">
            </form>

        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
