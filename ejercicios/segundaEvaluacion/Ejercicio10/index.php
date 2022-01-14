<?php

//Requires

require_once 'view/desplegable.php';
require_once 'model/calculos.php';


// ===================================================


if(isset($_GET['btn_cuadrado'])){
    $lado = $_GET['lado'];

    $calculo = new Calculo($lado);
    $areaCudrado =  $calculo->areaCuadrado();

    require_once 'view/areas/areaCuadrado.php';
}

if(isset($_GET['btn_rectangulo'])){
    $base = $_GET['base'];
    $altura = $_GET['altura'];

    $calculo = new Calculo($base);
    $areaRectangulo =  $calculo->areaRectangulo($altura);

    require_once 'view/areas/areaRectangulo.php';

}

if(isset($_GET['btn_circulo'])){
    $radio = $_GET['radio'];

    $calculo = new Calculo($radio);
    $areaCirculo =  $calculo->areaCirculo();

    require_once 'view/areas/areaCirculo.php';

}

