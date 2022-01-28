<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tiendas.php" method="post">
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
    </form>

    <?php
        require_once 'conexion.php';
        
        if(isset($_POST['tienda'])){
            $sqlListar ="SELECT *
            FROM encargados
            INNER JOIN tienda
            ON encargados.id_tienda = tienda.id";
            $queryListar = mysqli_query($con,$sqlListar);
            if ($queryLista && mysqli_num_rows($queryListar)>0) {
                while ($encargados=mysqli_fetch_assoc($queryListar)) {
                    echo $encargados['nombre_encargado'];
                }
            }
        }

       
    
    ?>
</body>
</html>