<?php
session_start();
if(!empty($_SESSION['active'])){
    header("location: ../index.html");
    

}else{

    $alert= '';
    if(!empty($_POST)){

        if(empty($_POST['email']) || empty($_POST['contraseña']))
        {
            $alert = 'Por favor rellene todos los campos';
        }else{

            require_once "conexion.php";
            $user = $_POST["email"];
            $pass = $_POST["contraseña"];

            $query=mysqli_query($conecta,"SELECT * FROM cliente WHERE email='$user' AND password_c='$pass'");
            $result=mysqli_num_rows($query);

            if($result > 0){
                $data = mysqli_fetch_array($query);
                echo 'conexion exitosa';
            
                $_SESSION['active'] = true;
                $_SESSION['iduser'] = $data['Id_Cliente'];
                $_SESSION['Nombre'] = $data['Nombre'];
                $_SESSION['user'] = $data['email'];
                //Antes apuntaba a binnvenida.php
                header("location: ../index.html");
            }else{
                    $alert = 'El usuario o la contraseña es incorreca'; 
                    session_destroy();
                }




        }

        
    }
}
            
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <header>
        <div class="container">

            <div class="row">
                <div class="col-md-auto">
                    <img src="../img/arcalogo.jpeg" alt="ARCADE" class="rounded float-left" height="90" width="90">
                </div>
                
            </div>
        </div>
    </header>
<body>
    <center>
    <section style = "margin-top = 200px" id="container">
    <form action="" method="post">
        <div class="foto"></div>
        <div></div>
        <p>
            Email: <br>
            <input class="id" type="text" name="email" id="email">
        </p>
        <p>
            Contraseña: <br>
            <input class="id" type="text" name="contraseña" id="contraseña"><br>
            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
            <input type="submit" value="Entrar">
            <br>
            
        </p>
        
    </form>
    <a href="registrar.php"><input type="submit" value="Registrarme">
    </a>
    </section>  
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