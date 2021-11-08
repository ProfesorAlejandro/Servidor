<?php


if($_POST){
    if(isset($_POST['sumar'])){

        $num1 = $_POST['op1'];
        $num2 = $_POST['op2'];

        $suma = $num1+$num2;

        if(!is_dir('Operaciones')){
            mkdir('Operaciones', 0777);
        }

        if(!file_exists('operaciones_aritmeticas.txt')){
            $archivo = fopen('./Operaciones/operaciones_artimeticas.txt', 'a+') or die('Error al crar el archivo');
        }

        function escribirSuma($num1, $num2, $archivo, $suma){
            fwrite($archivo, "El resultado de sumar $num1 y $num2 es $suma". PHP_EOL);
        }

        escribirSuma($num1, $num2, $archivo, $suma);
    }
 }

 if($_POST){
    if(isset($_POST['restar'])){

        $num1 = $_POST['op1'];
        $num2 = $_POST['op2'];

        $resta = $num1-$num2;

        if(!is_dir('Operaciones')){
            mkdir('Operaciones', 0777);
        }

        if(!file_exists('operaciones_aritmeticas.txt')){
            $archivo = fopen('./Operaciones/operaciones_artimeticas.txt', 'a+') or die('Error al crar el archivo');
        }

        function escribirResta($num1, $num2, $archivo, $resta){
            fwrite($archivo, "El resultado de restar $num1 y $num2 es $resta ". PHP_EOL);
        }

        escribirResta($num1, $num2, $archivo, $resta);
    }
 }

 if($_POST){
    if(isset($_POST['multiplicar'])){

        $num1 = $_POST['op1'];
        $num2 = $_POST['op2'];

        $multipicacion = $num1*$num2;

        if(!is_dir('Operaciones')){
            mkdir('Operaciones', 0777);
        }

        if(!file_exists('operaciones_aritmeticas.txt')){
            $archivo = fopen('./Operaciones/operaciones_artimeticas.txt', 'a+') or die('Error al crar el archivo');
        }

        function escribirMultiplicacion($num1, $num2, $archivo,  $multipicacion){
            fwrite($archivo, "El resultado de multiplicar $num1 y $num2 es  $multipicacion ". PHP_EOL);
        }

        escribirMultiplicacion($num1, $num2, $archivo, $multipicacion);
    }
 }

 if($_POST){
    if(isset($_POST['dividir'])){

        $num1 = $_POST['op1'];
        $num2 = $_POST['op2'];

        $division = $num1/$num2;

        if(!is_dir('Operaciones')){
            mkdir('Operaciones', 0777);
        }

        if(!file_exists('operaciones_aritmeticas.txt')){
            $archivo = fopen('./Operaciones/operaciones_artimeticas.txt', 'a+') or die('Error al crar el archivo');
        }

        function escribirDivision($num1, $num2, $archivo,  $division){
            fwrite($archivo, "El resultado de dividir $num1 y $num2 es  $division ". PHP_EOL);
        }

        escribirDivision($num1, $num2, $archivo, $division);
    }
 }

