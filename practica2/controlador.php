<?php
//iniciar sesion
session_start(); 

// Conexión a la base de datos "tu_servidor", "tu_usuario", "tu_contraseña", "tu_base_de_datos"
$conexion = new mysqli('localhost', 'nahomi', '123', 'login');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = $_POST['usuario'];
    $contrasena = md5($_POST['contrasena']);

    // Consulta para verificar las credenciales
    $sql = "SELECT id, rol FROM usuarios WHERE nombre = '$usuario' AND contrasena = '$contrasena'";
    
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows === 1) {
        // Usuario encontrado para guardar datos inicio de sesion
        $fila = $resultado->fetch_assoc();
        $_SESSION['id'] = $fila['id']; 
        $_SESSION['nombre'] = $usuario; 

        // Redirige según el rol
        switch ($fila['rol']) {
            case 1:
                header('Location: admin.php');
                exit();
                break;
            case 2:
                header('Location: maestro.php');
                exit();
                break;
            case 3:
                header('Location: alumno.php');
                break;
                exit();
            default:
                header('Location: index.php');
                break;
        }
    } else {
        // Credenciales incorrectas
        echo 'Nombre de usuario o contraseña incorrectos.';
    }

    // Cierra la conexión
    $conexion->close();
}
?>
