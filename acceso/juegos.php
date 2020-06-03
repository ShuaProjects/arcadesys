<?php
include "conexion.php";

if($_POST){
            $consola= $_POST['consola']; 
            $query = "SELECT * FROM producto_arcade WHERE Consola='$consola'";
            $resultado = $conecta->query($query);
            while($row = $resultado->fetch_assoc()) {
            ?>
               <tr>
                        <td> <?php echo $row ['Nombre_Producto']; ?> </td> 
                        <td> <?php echo" ";?> </td> 
                        <td> <?php echo $row ['Precio']; ?></td> 
                        <td> <?php echo" ";?> </td> 
                        <td> <?php echo $row ['Consola']; ?></td> 
                        <td> <?php echo" ";?> </td> 
                        <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>  
                        <td> <?php echo"<br>";?> </td>               
                </tr>
                        <?php
            }
        }
                        ?>
                        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>juegos por consola</h1>
    <section id="container">
    <form action="" method="post">
        <p>
            Consola en la que desea buscar <br>
            <input type="text" name="consola" id="consola">
            <br>
            <input type="submit" value="Buscar">
        </p>
              
</body>
</html>