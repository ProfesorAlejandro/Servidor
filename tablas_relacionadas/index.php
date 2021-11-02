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

        function cargarDsplegable($con){

            $sqlDesplegable = "SELECT * FROM grados";
            $queryDesplegable = mysqli_query($con, $sqlDesplegable);


            echo "<form action='registro_alumnos.php' method='POST'>";

            echo "<input type='text' name='nombre'  placeholder='Nombre'/>";
            echo "<input type='text' name='apellidos' placeholder='Apellidos' />";

            echo "<select name='grados'>";
            echo "<option value=''>SELECCIONE UN GRADO</option>";


            if($queryDesplegable && mysqli_num_rows($queryDesplegable) > 0){

                while($grado = mysqli_fetch_assoc($queryDesplegable)){  ?>

                    <option value="<?=$grado['id'] ?>"><?= $grado['nombre_grado'] ?></option>
                    
             <?php   }

            }
            else{
                echo "<h2>ERROR AL CARGAR EL DESPLEGABLE</h2>";
            }

            echo "</select>";
            echo "<button type='submit' name='btn_form'>ENVIAR</button>";
            echo "</form>";


        }


        //Llamadas a funciones
        cargarDsplegable($con);




    ?>
    
</body>
</html>