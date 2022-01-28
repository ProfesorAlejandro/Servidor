<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guardar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre"/><br>
        <input type="text" name="apellido"placeholder="Apellido"/><br>
        <input type="text" name="cargo"placeholder="Cargo"/><br>
        <select name="tienda">
            <?php
            require_once 'conexion.php';

            $sqlLista = "SELECT * FROM tienda";
            $queryLista = mysqli_query($con,$sqlLista);
            if ($queryLista && mysqli_num_rows($queryLista)>0) {
                while($tenda =mysqli_fetch_assoc($queryLista)){?>
                    <option value="<?=$tenda['id']?>"><?=$tenda['nombre_tienda']?></option>
            
                <?php }
            }

            
            ?>
        </select>
        <button type="submit" name="btn_submit">Registrar</button>
    </form>
</body>
</html>