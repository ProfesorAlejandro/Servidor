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
        if(isset($_GET['error_registro'])){
            echo "<h2>Error en el registro del coche</h2>";
        }
    ?>

    <form action="registro.php" method="POST">
        <input type="text" name="marca" placeholder="MARCA" /><br>
        <input type="text" name="modelo" placeholder="MODELO" /><br>
        <input type="text" name="precio" placeholder="PRECIO"  /><br>

        <button type="submit" name="btn_registro">GUARDAR</button>

    </form>
    
</body>
</html>