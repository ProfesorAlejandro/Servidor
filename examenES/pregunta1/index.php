<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Inserte dos números para comprobar cuál es mayor</h2>
    <form action="index.php" method="GET">
        <input type="number" name="numUno" placeholder="Primer numero"><br>
        <input type="number" name="numDos" placeholder="Segundo número"><br>
        <button type="submit" name="btn_submit">Comprobar</button>
    </form>

    <?php

        if(isset($_GET['btn_submit'])){
            $num1 = $_GET['numUno'];
            $num2 = $_GET['numDos'];

            if($num1 > $num2){
                echo 'El número mayor es ' . $num1 . '.';
            }
            if($num2 > $num1){
                echo 'El número mayor es ' . $num2 . '.';
            }
            if($num1 === $num2){
                echo 'Son iguales.';
            }
        }



    ?>
</body>
</html>