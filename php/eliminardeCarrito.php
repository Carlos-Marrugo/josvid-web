<?php
// Iniciar la sesión
session_start();

echo "aqui voy a eliminar";
// Redirigir al usuario a la página de inicio o a donde desees
header("Location: ../pagos.php");
exit;
