<?php

//OPERADORES

// A ) OPERADORES DE COMPARACION

    // A.1 ( igual que -> '==' , idéntico que '===')

    $num1 = 100;
    $num2 = '100';

    // if($num1 == $num2){
    //     echo 'SON IGUALES';
    // }
    // else{
    //     echo 'NO SON IGUALES';
    // }

    // A.2 ( distinto que '!=', no idéntico a '!==')

    if($num1 !== $num2){
        echo 'LOS NÚMEROS NO SON IGUALES';
    }
    else{
        echo 'LOS NÚMEROS SON IGUALES';
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';


     // A.3 ( mayor que =>  '>' , mayor o igual que '>=' , menor que '<', menor o igual que '<=' )

     $numeroUno = 90;
     $numeroDos = 120;

     if($numeroUno > $numeroDos){
         echo "El $numeroUno es mayor que $numeroDos"; 
     }
     elseif($numeroUno >= $numeroDos){
        echo "El $numeroUno es mayor o igual  que el $numeroDos"; 
     }
     elseif($numeroUno < $numeroDos){
        echo "El $numeroUno es menor que el $numeroDos"; 
     }
     elseif($numeroUno <= $numeroDos){
        echo "El $numeroUno es menor o igual que  el $numeroDos"; 
     }


// B ) OPERADORES DE ASIGNACIÓN  ( ' = ')

$a = 10;
echo '<h2>' . $a;


// C ) OPERADORES DE INCREMENTO/DECREMENTO ( ' ++ ' , ' -- ')

$numero = 890;

$numero ++ ;

echo '<br> ' . $numero;

$numero --;
$numero --;

echo '<br>' . $numero;

// C ) OPERADORES LÓGICOS 

 // C.1 AND -> '&&'

 echo '<br>';
 echo '<br>';
 echo '<br>';

 $numberOne = 1;
 $numberOTwo = 3;

 if($numberOne == 1 && $numberOTwo == 2){
     echo 'números encontrados';
 }
 else{
    echo 'números no encontrados';
 }

 echo '<br>';
 echo '<br>';
 echo '<br>';

  // C.2 OR -> ' || '

  if($numberOne == 1 || $numberOTwo == 2){
    echo 'números encontrados';
}
else{
   echo 'números no encontrados';
}

echo '<br>';
echo '<br>';
echo '<br>';

// C.2 NOT -> ' ! '

$pagado = true;
$pagado = !$pagado;

var_dump($pagado);


// C ) OPERADORES ARITMÉTICOS

// c.1 ) Suma ( ' + ') 

echo '<br>';
echo '<br>';
echo '<br>';

 $op1 = 12;
 $op2 = 10;

 $suma= $op1 + $op2;

 echo "<br>El resultado de la suma es $suma";

// c.2 ) Resta ( ' - ') 


$resta = $op1 - $op2;

echo "<br>El resultado de la resta es $resta";

// c.3 ) Multiplicación ( ' * ') 

$multiplicacion = $op1 * $op2;

echo "<br>El resultado de la multiplicación es $multiplicacion";

// c.4 ) División ( ' / ') 

$division = $op1 / $op2;

echo "<br>El resultado de la multiplicación es $division";

// c.4 ) Resto ( ' % ') 

$resto = $op1 % $op2;

echo "<br>El resultado de dividir $op1 entre $op2 es $resto";










     


 



    

   



