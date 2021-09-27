<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="procesar.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="imagen" />
        <button type="submit">ENVIAR</button>
    </form>

    <?php

        $directorio = opendir('./imagenes');

        if($directorio){
            while( ( $imagen = readdir($directorio)) !== false){
                if($imagen != '.' && $imagen != '..'){
                    echo "<img src='imagenes/$imagen'  width='200px' /><br>";
                }
            }
        }

    ?>
    

    
</body>
</html>

