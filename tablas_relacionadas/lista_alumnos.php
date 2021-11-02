<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="lista_alumnos.php">
        <select name="alumnos">
            <option value="">SELECCIONAR GRADO</option>
            <option value="4">INGENIERÍA INFORMÁTICA</option>
            <option value="5">MEDICINA</option>
        </select>

        <button type="submit" name="btn_submit">ENVIAR</button>
    </form>

    <?php

        require_once 'conexion.php';

        function listarAlumnos($con){

            if(isset($_GET['btn_submit'])){

                $id_grado = $_GET['alumnos'];

                $sqlListar = "SELECT * FROM alumnos WHERE grado_id='$id_grado'";
                $queryListar = mysqli_query($con,$sqlListar);

                echo "<table>";
                echo "<tbody>";

                if($queryListar && mysqli_num_rows($queryListar) >0){

                    while($alumno = mysqli_fetch_assoc($queryListar)){  ?>

                        <tr>
                            <td><?= $alumno['nombre_alumno']?></td>
                            <td><?= $alumno['apellidos']?></td>
                        </tr>

                    <?php }


                echo "</tbody>";
                echo "</table>";


                }
                else{
                    echo "<h2>ERROR LISTANDO ALUMNOS</h2>";
                }

            
            }


        }

        //Llamadas a funciones
        listarAlumnos($con);


    ?>

   
</body>
</html>