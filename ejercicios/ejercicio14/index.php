<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- 
Crea una función con php  que reciba un parámetro que será un email pasado por GET a través de la url
         La lógica de la función es validar si el email tiene un formato correcto. Si el formato es válido
         Se imprimirá en el navegador un mensaje "Email válido" , caso contrario, "Formato de email incorrecto".
    -->
    <?php

        $email = '';

        if(isset($_GET['email'])){
            global $email;
            $email = $_GET['email'];
        }

        function validateEmail($email){
            if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<h2>Email válido</h2>";
            }
            if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<h2>Formato de email incorrecto</h2>";
            }



            return $email; 
        }

        validateEmail($email);


    ?>
    
</body>
</html>

