<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action='index.php' method='POST'>
        <input type='text' name='username' placeholder='Nombre' /><br>

        <button type='submit' name='btn_submit'>Log in</button>
    </form>



    <?php

        require_once 'conexion.php';
        session_start();

        function login($con){

            if(isset($_POST['btn_submit'])){

                $username = $_POST['username'];

                $sqlRol = "SELECT * FROM usuarios WHERE username='$username'";
                $queryRol = mysqli_query($con, $sqlRol);

                if($sqlRol && mysqli_num_rows($queryRol) > 0){
                    $usuario = mysqli_fetch_assoc($queryRol);
                    $rol = $usuario['rol_id'];
                    $_SESSION['rol'] = $rol;
                }
                else{
                    echo "<h2>ERROR EN LA BASE DE DATOS</h2>";
                }

            }

        }

        

        // Llamadas a funciones

        login($con);


    ?>
</body>
</html>