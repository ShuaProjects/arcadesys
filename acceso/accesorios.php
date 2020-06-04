<?php
include "conexion.php";

if($_GET){
            $consola= $_GET['consola']; 
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
    <h1>Accesorio</h1>
    <section id="container">
    <form action="" method="GET">
        
              
</body>
</html>