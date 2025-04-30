<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

// Verificar si el rol es administrador
if (isset($_SESSION['rol']) && $_SESSION['rol'] != 1) {
    header("Location: index.php");
    exit();
}

// Incluir la conexión a la base de datos
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['contrasena']) && !empty($_POST['contrasena']) && isset($_POST['rol']) && !empty($_POST['rol'])) {

        $nombre = $_POST['nombre'];
        $contrasena = md5($_POST['contrasena']);
        $rol = (int)$_POST['rol'];
        
        $sql = "INSERT INTO usuarios (nombre, contrasena, rol) VALUES (?, ?, ?)";
        $resultado = $conexion->prepare($sql);
        $resultado->bind_param("ssi", $nombre, $contrasena, $rol);
        
        if ($resultado->execute()) {
            echo "Usuario creado exitosamente.";
        } else {
            echo "Error al crear el usuario.";
        }
        
        $resultado->close();
    } else {
        echo "Por favor, completa todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}

$conexion->close();
?>
