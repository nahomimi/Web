<?php
// =3
if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
    // captura de datos
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];

    // campos vacios
    if (empty($usuario) || empty($contrasena) || empty($rol)) {
        header("Location: index.php");
        exit();
    } 
    else {
        //if validar datos admin
        if ($usuario === "admin" && $contrasena === "admin123" && $rol === "admin") {
            switch ($rol) {
                case "admin":
                    header("Location: admin.php");
                    exit();
            }
        } 
        //if validar datos maestro
        elseif ($usuario === "maestro" && $contrasena === "maestro123" && $rol === "maestro") {
            switch ($rol) {
                case "maestro":
                    header("Location: maestro.php");
                    exit();
            }
        } 
        //if validar datos alumno
        elseif ($usuario === "alumno" && $contrasena === "alumno123" && $rol === "alumno") {
            switch ($rol) {
                case "alumno":
                    header("Location: alumno.php");
                    exit();
            }
        } else {
            header("Location: index.php");
            exit();
        }
    }
}
?>
