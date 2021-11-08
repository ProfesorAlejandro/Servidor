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
        Crea un formulario html con dos campos para recoger dos números.
        Crea cuatro botones con los textos "SUMAR", "RESTAR", "MULTIPLICAR" Y "DIVIDIR".
        Al hacer click en cada botón se deberá llamar a una función php que realice la operación
        aritmética correspondiente al texto del botón con los números introducidos en el formulario
        Además se deberá crear una carpeta llamada "Operaciones" en cuanto se prodzca la primera operación aritmética
        donde en un fichero de texto "operaciones_aritmeticas.txt"
        se escriban todas las operaciones realizadas.
     -->

     <form action="index.php" method="POST">
        <input type="text" name="op1" placeholder="Primer número" /><br>
        <input type="text" name="op2" placeholder="Segundo número" /><br>

        <!-- BOTONES -->
        <button type="submit" name="sumar">SUMAR</button><br>
        <button type="submit" name="restar">RESTAR</button><br>
        <button type="submit" name="multiplicar">MULTIPLICAR</button><br>
        <button type="submit" name="dividir">DIVIDIR</button>
     </form>

     <?php require_once 'operaciones.php' ?>

     
</body>
</html>
