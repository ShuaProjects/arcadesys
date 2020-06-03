<?php
    require_once "conexion.php";
    $user = $_POST["email"];
    $pass = $_POST["contraseña"];

    $query=mysqli_query($conecta,"Insert");
    $result=mysqli_num_rows($query);

    if($result > 0){
        $data = mysqli_fetch_array($query);
        session_start();
        $_SESSION['active'] = true;
        $_SESSION['iduser'] = $data['Id_Cliente'];
        $_SESSION['Nombre'] = $data['Nombre'];
        $_SESSION['user'] = $data['email'];
        
        header("location: bienvenida.php");
    }
    else{
        $alert = 'El usuario o la contraseña es incorreca'; 
    }
    //$$query = "SELECT * FROM cliente WHERE email='$email' and password_c='$contraseña'";
    
    //$query = "select * from c = '$email' and password = '$contraseña'";

    /*$consulta = mysqli_query($conecta, $query);
    $array = mysqli_fect_array($consulta);

    if($array['contar']){
        $_SESSION["email"] = $email; // variables de sesión        
        //header("location: bienvenida.php")
        echo "Usuario Incorrecto!";
    }else{
        echo "Usuario Incorrecto!";
    }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Bienvenido al menu para Registrarte</h1>
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
            <input type="submit" value="Guardar">
            <br>
            
        </p>
 
</body>
</html>