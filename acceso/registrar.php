<?php
$alert2= '';
if(!empty($_POST)){

    if(empty($_POST['email']) || empty($_POST['pass']))
    {
        $alert2 = 'Por favor rellene todos los campos';

        }else{
            
            include "conexion.php";
            if($_POST){
                $idcliente= $_POST['id_cliente'];   
                $nombre= $_POST['nombre'];
                $apellido= $_POST['apellido'];
                $telefono= $_POST['telefono'];
                $email= $_POST['email'];
                $domicilio= $_POST['domicilio'];
                $ciudad= $_POST['ciudad'];
                $codigo_zip= $_POST['codigo_zip'];
                $password= $_POST['pass'];


                $insertar = "INSERT INTO cliente(Id_Cliente,Nombre,Apellido,Telefono,Email,Domicilio,Ciudad,Codigo_Zip,password_c) 
                VALUES ('$idcliente','$nombre','$apellido','$telefono','$email','$domicilio','$ciudad','$codigo_zip','$password')";

                $resultado=mysqli_query($conecta,$insertar);

                if(!$resultado || empty($resultado)){
                    echo 'Error al registrarse';

                }else{
                    echo 'registro completado';
                    header("location: login.php");
                }
            }
    }  
    
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos.css">
    <title>Document</title>
</head>
<body class=bodys background="../img/linea.jpg" align="center" width="300">
    <section id="container">

    <form action="" method="post">
        <center>
            <div class="bienve">
            <h1>Bievenido al menu registrar</h1>
            <div  class>
            
            </div>
            
            </div>
<br>
<br>
<br>
        <p>
            Nombre: <br>
            <input class="nom"type="text" name="nombre" id="nombre"><br> 
        </p>
        <p>
            Apellido: <br>
            <input class="ape" type="text" name="apellido" id="apellido"><br> 
        </p>
        <p>
            Telefono: <br>
            <input class="tel" type="text" name="telefono" id="telefono"><br> 
        </p>
        <p>
            E-mail: <br>
            <input class="email" type="text" name="email" id="email"><br> 
        </p>
        <p>
            Domicilio: <br>
            <input class="domi" type="text" name="domicilio" id="domicilio"><br> 
        </p>
        <p>
            Ciudad: <br>
            <input class="ciu" type="text" name="ciudad" id="ciudad"><br> 
        </p>
        <p>
            Codigo Zip: <br>
            <input class="codigo" type="text" name="codigo_zip" id="codigo_zip"><br> 
        </p>
        <p>
            Contraseña: <br>
            <input class="contra" type="text" name="pass" id="pass"><br> 
        </p>
        <input type="submit" value="Guardar">
            <br>
            <div class="alert2"><?php echo isset($alert2) ? $alert2 : ''; ?></div>
            </center>
 
</body>
</html>



