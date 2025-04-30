<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container2">

    
<form action="cerrarSesion.php" method="post">
    
    <?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }
    echo "<h2>"."Bienvenid@ Alumn@, ".$_SESSION['nombre']."</h2>";
    ?>
    
    <img src="https://images.pexels.com/photos/714698/pexels-photo-714698.jpeg?auto=compress&cs=tinysrgb&w=400" alt="foto alusiva a un maestro">
    
    <input type="submit" class="btn" value="Cerrar Sesión">

</form>

</div>
</body>
</html>
