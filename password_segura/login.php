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
        <input type="text" name="username" placeholder="Usuario"  autocomplete="off"/><br>
        <input type="text" name="password" placeholder="Contraseña" /><br>

        <button type="submit" name="btn_login">LOG IN</button>
    </form>

    <?php

        require_once 'conexion.php';

        session_start();

        function login($con){
            if(isset($_POST['btn_login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];

                $sql = "SELECT * FROM usuarios WHERE username='$username'";
                $login = mysqli_query($con,$sql);

                if($login && mysqli_num_rows($login) == 1){

                    $usuario = mysqli_fetch_assoc($login);

                    $verify = password_verify($password, $usuario['password']);

                    if($verify){
                        $_SESSION['usuario'] = $usuario['username'];
                        echo 'Bienvenido/a '. $_SESSION['usuario'];

                    }
                    else{
                        echo "<h2>ERROR DE AUTENTICACIÓN</h2>";
                    }



                }



            
                
            }



        }



        //Llamadas a funciones
        login($con);




    ?>

    
</body>
</html>