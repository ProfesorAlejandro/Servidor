<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="GET">
        <input type="text" name="buscar" />
        <button type="submit">Buscar</button>
    </form>

    <?php

        require_once 'conexion.php';

        function buscador($con){
            if($_GET){
                if(isset($_GET['buscar'])){
                    $termino = $_GET['buscar'];
                  
                    // $sql = "SELECT * FROM usuarios WHERE username='$termino'";


                    // Resultados que inicien con los caracteres 
                    // $sql = "SELECT * FROM usuarios WHERE username like'$termino%'";

                    // Resultados que finalicen con los caracteres 
                    // $sql = "SELECT * FROM usuarios WHERE username like'%$termino'";

                    // Resultados que inicien y finalicen con los caracteres 
                    $sql = "SELECT * FROM usuarios WHERE username like'%$termino%'";

                    $query = mysqli_query($con, $sql);
                    if(mysqli_num_rows($query) > 0){
                        echo "<h2>RESULTADOS DE LA BÚSQUEDA</h2>";
                        while($usuario = mysqli_fetch_assoc($query)){
                            echo $usuario['username']; 
                        }
                    }
                    else{
                        echo "<h2>SIN RESULTADOS</h2>";
                    } 
                }
            }
        }
        //Llamadas a funciones
        buscador($con);

    ?>
    
</body>
</html>