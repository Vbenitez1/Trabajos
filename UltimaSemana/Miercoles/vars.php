<?php
// vars.php

session_start();

// Manejo del inicio de sesión
if (isset($_POST['nombre_usuario'])) {
    $_SESSION['usuario'] = htmlspecialchars($_POST['nombre_usuario']);
}

// Manejo del cierre de sesión
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
