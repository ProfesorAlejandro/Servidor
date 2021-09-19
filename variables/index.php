<?php

//COMENTARIOS DE UNA SOLO LÍNEA

/*
    Comentarios 
    de 
    varias
    líneas
*/ 
 

//DIFERENCIA ENTRE COMILLAS SIMPLES Y DOBLES

$nombre = 'Alejandro';

echo "Mi nombre es  $nombre";

echo '<br>';

echo 'Mi nombre es  $nombre';


//VARIABLES

// A ) ENTEROS ( Integer )

echo "<h2>VARIABLES DE TIPO ENTERO</h2>";

$entero = 10;

var_dump($entero);

echo $entero;

// B ) CADENA ( String )

echo "<h2>VARIABLES DE TIPO CADENA</h2>";

echo '<br>';

$nombre = 'Paco';

var_dump($nombre);

// C ) FLOTANTE ( Float / Double )

echo "<h2>VARIABLES DE TIPO FLOTANTE</h2>";

$decimal = 10.2;

var_dump($decimal);

echo $decimal;

// C ) BOOLEANO ( Boolean)

echo "<h2>VARIABLES DE TIPO BOOLEANO</h2>";

$pagado  = false;

var_dump($pagado);

echo $pagado;

// C ) ARREGLOS - VECTORES ( Array)

echo "<h2>VARIABLES DE TIPO ARREGLO</h2>";

// C.1 Array indexado

$animales = ['Paloma','Vaca','Caballo'];  // Primera manera de declarar el array

var_dump($animales);

echo "<h4>PRIMER ANIMAL</h4>" . $animales[0];
echo "<h4>SEGUNDO ANIMAL</h4>" . $animales[1];

$coches = array('Ferrari', 'Porche');

echo "<h4>PRIMER COCHE</h4>" . $coches[0];

// C.2 Array asociativo

$empleado = ['nombre' => 'Paco', 'apellido' => 'Gómez', 'Edad'=> 43];


echo "<h4>Nombre empleado: " . $empleado['nombre'] .'</h4>';

// C.2 Arrays multidimensionales

// Necesito obligatoriamente un bucle para recorrer este array y acceder a lo que lleva dentro.

$empleados= array(
    'Primer_empleado' => array(
        'Nombre' => 'Jacinto',
        'Apellido' => 'López'
    ),
    'Segundo_empleado'=> array(
        'Nombre' => 'Ana',
        'Apellido' => 'Gómez'
    )
);


// D ) VARIABLES  DE TIPO OBJETO

    // ( las veremos más adelante en POO - Programación Orientada a Objetos)


//   =============================================================================== //


// CAMBIO DEL TIPO DE VARIABLES EN TIEMPO DE EJECUCIÓN

$numero = 100;

var_dump($numero);

$numero = (string) $numero;

var_dump($numero);

















































