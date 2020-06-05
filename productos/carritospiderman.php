
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../estilos.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Spiderman</title>
    </head>
    
    <body>
    
        <header>
            <div class="container">
    
                <div class="row">
                    <div class="col-md-auto">
                        <img src="../img/arcalogo.jpeg" alt="ARCADE" class="rounded float-left" height="90" width="90">
                    </div>
    
                    <div class="col">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Todas las categorias</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accesorios</a>
                                    <a class="dropdown-item" href="#">Consolas</a>
                                    <a class="dropdown-item" href="#">Videojuegos</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Articulos reacondicionados</a>
                                </div>
                            </div>
    
                            <input class="form-control" type="text" placeholder="Buscar articulos...">
    
                            <div class="input-group-append">
                                <button type="button" class="btn btn-dark">Buscar</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row-md-right">
                    <h6>
                        <a href="./acceso/login.php">Iniciar sesion</a>
                    </h6>
                    <h6>
                        <a href="./acceso/salir.php" >Cerrar sesion</a>
                    </h6>
                </div>
            </div>
        </header>
    <?php
include "../acceso/conexion.php";

$nombre = "Spiderman";
$presio = 700;
    $insertar = "INSERT INTO carrito(Nombre,Precio) 
                VALUES ('$nombre','$presio')";

                $resultado=mysqli_query($conecta,$insertar);

                if(!$resultado || empty($resultado)){
                    echo 'Error al registrarse';

                }else{
                    
                }



?>
<center>
<h5>Producto Registrado en el Carrito con éxito!</h5>
<br>
<form action="../index.html">
    <input type="submit" value="Volver a Inicio" />
    
            </center>
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <div class="divhorario">
                        <h5>Nuestro Horario</h5>
                        <p>Lunes a Viernes de 9AM a 2PM y de 4PM a 9PM</p>
                        <p>Sabados de 10AM a 3PM </p>
                        <p>Descansamos los domingos</p>
                    </div>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Siguenos en redes!</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.facebook.com/ArcadeColima/">Facebook</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->


                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>

    </footer>



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
