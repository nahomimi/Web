<?php 
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'nahomi', '123', 'login');
$conexion->set_charset("utf8");

// Verificar conexión
if ($conexion->connect_error) { 
    die('Error de Conexión (' . $conexion->connect_errno . ') ' . $conexion->connect_error); 
}
 ?>