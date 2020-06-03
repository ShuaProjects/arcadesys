<?php
    // Iniciar sesión
    session_start();
    $usuario_conectado = $_SESSION["Nombre"];
    echo "<h1>Bienvenido: $usuario_conectado</h1>";

    // 1.- El servidor termine el tiempo de la sesión
   // session_unset();
    // 2.- Terminar la sesión con código
    //session_destroy();
?>
