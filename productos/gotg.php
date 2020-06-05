
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../estilos.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guardians of the Galaxy</title>
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
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Todas las categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../acceso/todosjuegos.php?ini=7000&fin=7800">Videojuegos</a>
                    <a class="dropdown-item" href="../acceso/accesorios.php?consola=Accesorio%">Accesorios</a>
                    <a class="dropdown-item" href="../acceso/accesorios.php?consola=consola%">Consolas</a>
                    <a class="dropdown-item">Articulos reparados</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PS4
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../acceso/juegos.php?consola=Play Station 4">Videojuegos</a>
                    <a class="dropdown-item" href="../acceso/juegos.php?consola=Accesorio PS">Accesorios</a>
                    <a class="dropdown-item" href="../acceso/juegos.php?consola=Consola PS4">Consolas</a>
                    <a class="dropdown-item">Articulos reparados</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PS3
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../acceso/juegos.php?consola=Play Station 3">Videojuegos</a>
                    <a class="dropdown-item" href="../acceso/jurgos.php?consola=Accesorio PS">Accesorios</a>
                    <a class="dropdown-item" href="../acceso/juegos.php?consola=Consola PS3">Consolas</a>
                    <a class="dropdown-item">Articulos reparados</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    XBOX One
                </a>
                <form action="" method="GET"></form>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="../acceso/juegos.php?consola=Xbox One">Videojuegos</a>
                    <a class="dropdown-item" href="../acceso/jurgos.php?consola=Accesorio one">Accesorios</a>
                    <a class="dropdown-item" href="../acceso/juegos.php?consola=Consola Xbox one">Consolas</a>
                    <a class="dropdown-item">Articulos reparados</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    XBOX 360
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../acceso/juegos.php?consola=Xbox 360">Videojuegos</a>
                    <a class="dropdown-item" href="../acceso/jurgos.php?consola=Accesorio 360">Accesorios</a>
                    <a class="dropdown-item" href="../acceso/juegos.php?consola=Consola Xbox 360">Consolas</a>
                    <a class="dropdown-item">Articulos reparados</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nintendo Switch
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../acceso/juegos.php?consola=Nintendo Switch">Videojuegos</a>
                    <a class="dropdown-item" href="../acceso/jurgos.php?consola=Accesorio Switch">Accesorios</a>
                    <a class="dropdown-item" href="../acceso/juegos.php?consola=Consola Switch">Consolas</a>
                    <a class="dropdown-item">Articulos reparados</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
        <div class="container" id="contenejuegos" style="margin-top: 200px; margin-bottom: 200px;">
            <div class="row">
                <div class="col">
                    <img src="../img/catalogs/xbox/gotg.jpg" alt="Spider-Man">
                </div>
                
                <div class="col" >
                    <h4>
                        Guardians of the Galaxy
                    </h4>
                    <br>
                    <h5>
                        Consola: 
                    </h5>
                    <h6>
                        XBOX ONE
                    </h6>
                    <br>
                    <h5>
                        Precio: 
                    </h5>
                    <h6>
                        $500
                    </h6>
                    <br>
                    <button type="button" class="btn btn-dark">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    
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
