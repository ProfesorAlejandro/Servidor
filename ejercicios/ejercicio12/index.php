<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        a{
            color: black;
        }

    
 
    </style>
</head>
<body>

    <!-- Crea una cookie con el color de página elejido por el usuario ( rojo o azul )  --> 
    <!-- La cookie tendrá una caducidad de un año  --> 

    <h2>Elija el color de fondo</h2>
    <a href="index.php?color=azul">Azul</a>
    <a href="index.php?color=rojo">Rojo</a>

    <br>

    <a href="home.php">HOME</a>

    <?php

        if(isset($_GET['color']) && $_GET['color'] == 'azul'){
            setcookie('color_azul','blue', time()+(60*60*24*365));
            if(isset($_COOKIE['color_rojo'])){
                unset($_COOKIE['color_rojo']);
                setcookie('color_rojo','rojo', time()-10);
            }
            
        }

        if(isset($_GET['color']) && $_GET['color'] == 'rojo'){
            setcookie('color_rojo', 'red', time()+(60*60*24*365));
            if(isset($_COOKIE['color_azul'])){
                unset($_COOKIE['color_azul']);
                setcookie('color_azul','azul', time()-10);
            }
            
        }

    ?>

</body>
</html>