<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Realiza una aplicación que introduciendo un número en un campo de un formulario me permita averiguar si éste es par o impar
( Si es par deberá reflejas el texto ' PAR ' en un input de tipo texto deshabilitado hará slo mismo con impar como texto entonces 'IMPAR') -->
    

    <form action="ejercicio7.php" method="GET">
        <input type="text" name="numero"/><br>
        <button type="submit" >VERIFICAR</button>
    </form>

    <?php

        if($_GET){

            $numero = $_GET['numero'];

            echo '<br>';

            if($numero %2 == 0){
                echo '<input type="submit" disabled value="PAR" />';
            }
            else{
                echo '<input type="submit" disabled value="IMPAR" />';
            }


        }


    ?>



</body>
</html>