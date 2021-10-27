<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="product-registry.php" method="POST">
        <input type="text" name="name"  placeholder="Nombre producto"/><br>
        <input type="text" name="price"  placeholder="Precio" /><br>
        <input type="text" name="cuantity"  placeholder="Cantidad" /><br>

        <button type="submit" name="btn_registry">REGISTRAR PRODUCTO</button>

    </form>

    <?php

        require_once 'conexion.php';
        require_once 'partials/auth.php';


    ?>
    
</body>
</html>