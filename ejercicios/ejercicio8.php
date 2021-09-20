<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio8.php" method="POST">

        <input type="text" name="numero"/>

        <button type="submit">CALCULAR</button>

    </form>

    <?php

    //Realiza un script con php que me permita a través de un formulario obtener la tabla de multiplicar(del 1 al 10)de ese número.
    // El formulario ha de enviarse a través de una petición http POST al servidor


    echo '<br>';


        if($_POST){

            $numero = $_POST['numero'];
            echo 'TABLA DE MULTIPLICAR DEL '. $numero;
            
            echo '<br>';
            echo '<br>';


            echo '<table border="1">';
			
			echo '<tbody>';

            for($i=1;$i <=10; $i++){

                
                    echo '<tr>';
                        echo '<td>' . $numero . 'x'.  $i . '  = '.  $numero * $i . '</td>';
                    echo '</tr>';

            }

			echo '<tbody>';
            echo '</table>';
            
        }

    ?>
    
</body>
</html>






