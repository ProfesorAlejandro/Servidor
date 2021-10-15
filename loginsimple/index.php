<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="POST">
        <input type="text" name="username" />
        <input type="password" name="password" />
        <button type="submit" name="login">Log in</button>
    </form>

    <?php

        session_start();

        require_once 'conexion.php';

        function login($con){
            if(isset($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];

                $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
                $query = mysqli_query($con,$sql);

                $_SESSION['usuario'] = $username;

               
                if(mysqli_num_rows($query) >0){
                    header('Location:home.php');
                }
                else{
                    echo "<h2>EL USUARIO NO EXISTE</h2>";
                }
            }
        }

        //Lamadas a funciones
        login($con);

    ?>
        
</body>
</html>