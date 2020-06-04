<?php
    define("SERVIDOR", "localhost");
    define("BASE_DATOS", "arcade");
    define("USUARIO", "root");
    define("PASSWORD", "");
    define("PUERTO", "3306");

    try {
        $conecta = mysqli_connect(SERVIDOR, USUARIO, PASSWORD, BASE_DATOS, PUERTO);
        if(!mysqli_connect_errno()){
           echo "Conexión exitosa!";
            //echo"<br>";
            //Consulta
            //$query = "SELECT * FROM cliente";
             //$query = "SELECT * FROM cliente WHERE email='er@gmail.com' and password_c='e123'";
            /* $resultado =  mysqli_query($conecta,$query);
            while($consulta = mysqli_fetch_array($resultado))
            {
                echo $consulta ['Id_Cliente']; 
                echo" ";
                echo $consulta ['Nombre'];
                echo" ";
                echo $consulta ['Apellido'];
                
                echo"<br>";
            }
*/          
        }
    } catch (Exception $ex) {
        echo "Error: " + $ex -> getMessage();
    }

    //$consulta = mysqli_query($conecta,$query);
?>