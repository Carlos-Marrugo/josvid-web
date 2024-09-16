<?php
session_start(); // Iniciar sesión

// Incluir el archivo de configuración de la base de datos
include 'database.php';

//Se recuperan los datos enviados desde el formulario de inicio de sesion desde el metodo post
$email = $_POST['email'];
$password = $_POST['password'];
$idcurso = $_POST['idcurso'];

// Consulta SQL para verificar las credenciales del usuario
$stmt = mysqli_prepare($conexion, "SELECT * FROM useraccount WHERE email = ?");
mysqli_stmt_bind_param($stmt, 's', $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($user) {
    // Verificar la contraseña
    if ($password === $user['password']) { // Comparación directa de contraseñas
        // Iniciar sesión correctamente
        $_SESSION['user'] = $user['email'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['idcurso'] = $user['idcurso'];    

        // Redirigir al usuario a la página principal
        header("Location: ../index.php");
        exit;
    } else {
        // Contraseña incorrecta
        echo '<!DOCTYPE html>
        <html lang="zxx">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Contraseña incorrecta",
                    text: "Intenta de nuevo.",
                    confirmButtonText: "OK"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = "../login.html";
                    }
                });
            </script>
        </body>
        </html>';
        exit;
    }
} else {
    // Usuario no encontrado
    echo '<!DOCTYPE html>
    <html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    </head>
    <body>
        <script>
            Swal.fire({
                icon: "error",
                title: "Usuario no encontrado",
                text: "Intenta de nuevo.",
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "../login.html";
                }
            });
        </script>
    </body>
    </html>';
    exit;
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
