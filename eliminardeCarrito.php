<?php
// Iniciar la sesión
session_start();
// Conectar a la base de datos (aquí debes ingresar tus propias credenciales)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Creating conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// VVerifying conexion
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

$sql = "DELETE
        FROM `test`.`usercourses`
        WHERE `id` = '".$_GET['id']."';";

                    if ($conn->query($sql) === TRUE) {
                      echo "Curso adquirido exitosamente";
                    } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                    }
// Redirigir al usuario a la página de inicio o a donde desees
header("Location:pagos.php");
exit;
