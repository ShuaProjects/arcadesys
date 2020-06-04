<!DOCTYPE html>
<html lang="en">
<?php
include "../acceso/conexion.php";

$nombre = "Mario + Rabbids Kingdom Battle";
$presio = 1400;
    $insertar = "INSERT INTO carrito(Nombre,Precio) 
                VALUES ('$nombre','$presio')";

                $resultado=mysqli_query($conecta,$insertar);

                if(!$resultado || empty($resultado)){
                    echo 'Error al registrarse';

                }else{
                    echo 'Producto registrado al carrito';
                }



?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="POSt"></form>
    Mario + Rabbids Kingdom Battle
    <br>

    Nintendo Switch
    <br>
    Precio: $1400
    <br>
    <img src="../img/catalogs/nintendo/mrab.jpg" alt="Spider-Man" >
    <input type="submit" value="agaregar al carrito">
</body>

<?php



?>

</html>