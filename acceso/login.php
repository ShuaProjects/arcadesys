<?php

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
                session_start();
                $_SESSION['active'] = true;
                $_SESSION['iduser'] = $data['Id_Cliente'];
                $_SESSION['Nombre'] = $data['Nombre'];
                $_SESSION['user'] = $data['email'];
                //Antes apuntaba a binnvenida.php
                header("location: ../index.html");
            }else{
                    $alert = 'El usuario o la contraseña es incorreca'; 
                }




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
    <section id="container">
    <form action="" method="post">
        <p>
            Email: <br>
            <input type="text" name="email" id="email">
        </p>
        <p>
            Contraseña: <br>
            <input type="text" name="contraseña" id="contraseña"><br>
            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
            <input type="submit" value="Entrar">
            <br>
            
        </p>
        
    </form>
    </section>  
    
    <a href="registrar.php"><input type="submit" value="Registrarme">
    </a>
</body>
</html>