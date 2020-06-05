<?php
    session_start();
    session_destroy();
    include "conexion.php";
    $sentencia="DELETE from carrito";
    $resultado=mysqli_query($conecta,$sentencia);
    echo 'carrito eliminado">';
    if(!$resultado || empty($resultado)){
        echo 'Error en borrar';

    }else{
        echo 'carrito borrado';
        header("location: ../index.html");

    }
    

?>