<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="ejercicio5.php?num1=5&num2=7">Mandar los parámetros</a>

<?php

// Igual que el ejercicio anterior pero los parámetros get los crarás tu a través de un enlace ( estos números seránel 5 y el 7)

echo '<br>';

    if(isset($_GET['num1']) && isset($_GET['num2'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $suma = $num1+$num2;
        $resta = $num1-$num2;
        $multiplicacion = $num1*$num2;
        $division = $num1/$num2;

        echo 'Suma ' . $suma . '<br>';
        echo 'Resta ' . $resta . '<br>';
        echo 'Multiplicación ' . $multiplicacion . '<br>';
        echo 'División ' . $division . '<br>';

    }

    ?>

</body>
</html>