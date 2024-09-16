<?php
include 'database.php';

if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['idcurso']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['idcurso'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Contraseña proporcionada por el usuario
    $idcurso = $_POST['idcurso'];

    // Preparar la consulta para insertar el usuario en la base de datos
    $stmt = mysqli_prepare($conexion, "INSERT INTO useraccount (name, email, password, idcurso) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $password, $idcurso); // No hash de la contraseña
    $ejecutar = mysqli_stmt_execute($stmt);

    if ($ejecutar) {
        // Registro exitoso, redirigir al usuario a la página de inicio de sesión
        echo '
            <html>
            <head>
                <!-- SweetAlert2 CSS -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
                <!-- SweetAlert2 JS -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            </head>
            <body>
                <script>
                    Swal.fire({
                        icon: "success",
                        title: "Usuario registrado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Aceptar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "../login.html";
                        }
                    });
                </script>
            </body>
            </html>
        ';
    } else {
        // Error al registrar el usuario
        echo '
            <html>
            <head>
                <!-- SweetAlert2 CSS -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
                <!-- SweetAlert2 JS -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            </head>
            <body>
                <script>
                    Swal.fire({
                        icon: "error",
                        title: "Error al registrar el usuario",
                        showConfirmButton: true,
                        confirmButtonText: "Intentar de nuevo"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "../register.html";
                        }
                    });
                </script>
            </body>
            </html>
        ';
    }
}
mysqli_close($conexion);
?>

