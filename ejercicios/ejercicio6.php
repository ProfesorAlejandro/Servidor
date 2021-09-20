<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Lo mismo que el ejercicio 5 pero los valores se enviarán a través de un formulario y puede ser cualquier valor introducido
en dos inputs uno para cada número -->

    <form action="ejercicio6.php">
        <input type="text" name="num1"/>
        <input type="text" name="num2"/> 
        <input type="submit" value="ENVIAR"/> 
    </form>

    <?php
         if($_GET){
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