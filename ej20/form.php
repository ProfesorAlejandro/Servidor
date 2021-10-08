<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="form.php" method="GET">
        <input type="text" name="nombre" value="<?= $_GET['nombre'] ?>" /><br>
        <input type="text" name="telefono" value="<?= $_GET['telefono'] ?>" /><br>
        <input type="text" name="email" value="<?= $_GET['email'] ?>" /><br>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>" /><br>

        <button type="submit" name="btn_editar">MODIFICAR</button>


    </form>

    <?php

    require_once 'conexion.php';

        function editar($con){

            if(isset($_GET['btn_editar'])){

                $id = $_GET['id'];
                $nombre = $_GET['nombre'];
                $telefono = $_GET['telefono'];
                $email = $_GET['email'];

                $sql = "UPDATE usuarios SET nombre='$nombre', telefono='$telefono',
                 email= '$email' WHERE id='$id'";

                $query = mysqli_query($con, $sql);

                if($query){
                    echo "<h2>USARIO ACTUALIZADO</h2>";
                }
                else{
                    echo "<h2>ERRO EN LA ACTUALIZACIÓN</h2>";
                }

            }
        }

        //Llamadas a funciones

        editar($con);


    ?>
    
</body>
</html>