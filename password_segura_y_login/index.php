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
        <input type="text" name="username" /><br>
        <input type="text" name="password" /><br>

        <button type="submit" name="btn_registro">REGISTRAR</button>
    </form>

    <?php

            require_once 'conexion.php';

            session_start();

            function registrar($con){
                if(isset($_POST['btn_registro'])){
                    
                    $username = $_POST['username'];
                    $password = $_POST['password'];


                    $sqlUnique = "SELECT * FROM usuarios WHERE username='$username'";
                    $queryUnique = mysqli_query($con,$sqlUnique);

                    if($sqlUnique && mysqli_num_rows($queryUnique)>0){
                        echo "El usuario ya existe";
                    }
                    else{
                        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4 ]);

                        $sql = "INSERT INTO usuarios VALUES(null,'$username','$password_segura')";
                        $query = mysqli_query($con,$sql);
    
                        if($query){
                            echo "<h2>USUARIO REGISTRADO</h2>";
    
                        }
                        else{
                            echo "<h2>ERROR DE CONEXIÓN</h2>";
                        }

                    }

        
                   
                   
                }

            }

            //LLAMADAS A FUNCIONES
            registrar($con);



    ?>
    
    
</body>
</html>