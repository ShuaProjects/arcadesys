<?php
include "../acceso/conexion.php";

$nombre = "Final Fantasy 7 Remake";
$presio = 600;
    $insertar = "INSERT INTO carrito(Nombre,Precio) 
                VALUES ('$nombre','$presio')";

                $resultado=mysqli_query($conecta,$insertar);

                if(!$resultado || empty($resultado)){
                    echo 'Error al registrarse';

                }else{
                    echo 'Producto registrado al carrito';
                }



?>
<form action="../index.html">
    <input type="submit" value="Volver a Inicio" />