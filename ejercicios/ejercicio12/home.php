<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php 
                if(isset($_COOKIE['color_azul'])){
                    echo $_COOKIE['color_azul'];
                }
                if(isset($_COOKIE['color_rojo'])){
                    echo $_COOKIE['color_rojo'];
                }
              
              ?>;
        }
        h2{
            color: white;
        }

    </style>
  
</head>
<body>

        <h2>HOME</h2>

        <h3><a href="index.php">VOLVER</h3>
    
</body>
</html>