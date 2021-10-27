<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Usuario" /><br>
        <input type="text" name="password" placeholder="Contraseña"/><br>

        <button type="submit" name="btn_login">log in</button>
    </form>

    <?php

        require_once 'conexion.php';

        session_start();

        function login($con){
            if(isset($_POST['btn_login'])){

                $username = mysqli_real_escape_string($con, $_POST['username']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                $sqlLogin = "SELECT * FROM usuarios WHERE nombre_usuario='$username'";
                $queryLogin = mysqli_query($con,$sqlLogin);

                if($queryLogin && mysqli_num_rows($queryLogin) > 0){

                    $user = mysqli_fetch_assoc($queryLogin);

                    $verify= password_verify($password,$user['password']);
                    if($verify){
                        $_SESSION['user'] = $user['nombre_usuario'];
                        echo "<h2>USUARIO VERIFICADO</h2>";
                    }
                    else{
                        echo "<h2>ERROR DE AUTENTICACIÓN</h2>";
                    }
                }
                else{
                    echo "<h2>ERROR DE AUTENTICACIÓN</h2>";
                }
            }
        }

        //Llamadas a funciones
        login($con);

    ?>
    
</body>
</html>