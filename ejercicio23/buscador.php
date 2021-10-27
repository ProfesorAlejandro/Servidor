<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="buscador.php">
        <input type="text" name="search" />
        <button type="submit">Buscar</button>
    </form>

    <?php

        require_once 'conexion.php';


        function buscar($con){

            if(isset($_GET['search'])){
                $term = $_GET['search'];

                $sqlSearch = "SELECT * FROM productos WHERE nombre_producto='$term'";
                $querySearch = mysqli_query($con, $sqlSearch);

                if($querySearch && mysqli_num_rows($querySearch) == 1){

                    $producto = mysqli_fetch_assoc($querySearch);
 
                    echo "<h2>RESULTADOS DE LA BÚSQUEDA</h2>";

                    echo $producto['nombre_producto'] .'<br>';
                    echo $producto['precio'] .'<br>';
                }
                else{
                    echo "<h2>SIN RESULTADOS</h2>";
                }
                
            }

        }

        //Llamadas a funciones
        buscar($con);


    ?>
    
</body>
</html>