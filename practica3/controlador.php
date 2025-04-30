<?php
// Iniciar sesión
session_start(); 

// Incluir la conexión a la base de datos 
include('conexion.php');

    // Verificar que la solicitud es mediante el método POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verificar si los campos "usuario" y "contrasena" no están vacíos 
        //dos formas diferentes:
        //isset: Verifica si una variable está definida y no es null.
        //empty: Verifica si una variable está vacía.
        if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['contrasena']) && !empty($_POST['contrasena'])) {
            
            // Asignar valores de los campos a variables
            $usuario = $_POST['usuario'];
            $contrasena = md5($_POST['contrasena']); // Considera usar password_hash en lugar de md5 por seguridad

            // Consulta preparada para verificar las credenciales del usuario
            $sql = "SELECT id, rol FROM usuarios WHERE nombre = ? AND contrasena = ?";
            $resultado = $conexion->prepare($sql); // Preparar la consulta SQL
            $resultado->bind_param("ss", $usuario, $contrasena); // Enlazar los parámetros de la consulta con las variables
            $resultado->execute(); // Ejecutar la consulta
            $resultado->store_result(); // Almacenar el resultado de la consulta

            // Verificar si se encontró un usuario con el nombre y contraseña proporcionados
            if ($resultado->num_rows === 1) {
                $resultado->bind_result($id, $rol); // Enlazar las variables para el resultado
                $resultado->fetch(); // Obtener los datos del usuario
                
                // Credenciales válidas, establecer sesión
                $_SESSION['id'] = $id; // Almacenar el ID del usuario en la sesión
                $_SESSION['nombre'] = $usuario; // Almacenar el nombre del usuario en la sesión

                // Redirigir según el rol del usuario
                switch ($rol) {
                    case 1:
                        header('Location: admin.php'); // Redirigir a la página de administrador
                        break;
                    case 2:
                        header('Location: maestro.php'); // Redirigir a la página de maestro
                        break;
                    case 3:
                        header('Location: alumno.php'); // Redirigir a la página de alumno
                        break;
                    default:
                        header('Location: index.php'); // Redirigir a la página de inicio por defecto
                        break;
                }
                exit(); // Detener la ejecución del script después de redirigir
            } else {
                // Si las credenciales son incorrectas, mostrar mensaje de error
                echo 'Nombre de usuario o contraseña incorrectos.';
            }

            $resultado->close(); // Cerrar la declaración preparada
        } else {
            // Si los campos de usuario o contraseña están vacíos, mostrar mensaje de error
            echo 'Por favor, ingresa tu nombre de usuario y contraseña.';
        }
    } else {
        // Si el método de solicitud no es POST, mostrar mensaje de error
        echo 'Método de solicitud no permitido.';
    }

// Cerrar la conexión a la base de datos
$conexion->close();
?>

