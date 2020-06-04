                
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcadeSys</title>
</head>
<body>
    <h1>Juegos por consola</h1>

<div class="container">

    <div class="row">
        <?php
            include "conexion.php";

            if($_GET){
            $consola= $_GET['consola']; 
            $query = "SELECT * FROM producto_arcade WHERE Consola='$consola'";
            $resultado = $conecta->query($query);
            while($row = $resultado->fetch_assoc()) {
            ?>
                <div class="card" style="width: 14rem; ">
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row ['Nombre_Producto']; ?></h5>
                        <p><?php echo $row ['Precio']; ?></p>
                        <p><?php echo $row ['Consola']; ?></p>
                        <a href="./carrito.php?id=<?php echo $row ['Id_Producto']; ?>" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>

                        <?php
            }
        }
                        ?>
    </div>

</div>

        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>     
</body>
</html>