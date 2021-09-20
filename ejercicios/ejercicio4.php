<?php

// Recoger dos números por la url a través de dos parámetros get y realizar la suma, resta,
// multiplicación y división de esos dos números

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



