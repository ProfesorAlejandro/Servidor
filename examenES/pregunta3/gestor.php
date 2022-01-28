<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    require_once 'conexion.php';
    session_start();

    if($_SESSION['rol']){
        $rol = $_SESSION['rol'];
        if($rol === '2' || $rol === '1'){
            echo '<h1>Bienvenido</h1>';
            echo '<h2>PÁGINA DE GESTORES</h2>';
            ?>
            <button onclick="location.href='index.php'">Volver</button>
        <?php }
        else{
            header('location:no_authorized.php');
        }
    }
    if($_SESSION['rol'] == false){
        header('location:no_authorized.php');
    }
    ?>
</body>
</html>