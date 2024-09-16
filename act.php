<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los campos existen en el arreglo $_POST
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['idcurso'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $idcurso = $_POST['idcurso'];

        // Preparar la consulta SQL
        $sql = "UPDATE useraccount SET email=?, password=?, idcurso=?, name=? WHERE id=?";
       echo $sql.$_SESSION['id'];
        // Preparar la declaración
        if ($stmt = $conn->prepare($sql)) {
            // Vincular los parámetros
            $stmt->bind_param("ssiss", $email, $password, $idcurso,$name,$_SESSION['id']);

            // Ejecutar la declaración
            if ($stmt->execute()) {
                echo "Registro actualizado correctamente";
                header("Location: ./perfil.php");
            } else {
                echo "Error al actualizar el registro: " . $stmt->error;
            }

            // Cerrar la declaración
            $stmt->close();
        } else {
            echo "Error al preparar la declaración: " . $conn->error;
        }
    } else {
        echo "Por favor, completa todos los campos del formulario.";
    }
}

// Cerrar la conexión
$conn->close();
?>

