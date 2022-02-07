<?php

require_once 'camion.php';

if(isset($_GET['peso']) && isset($_GET['carga'])){
    $peso = $_GET['peso'];
    $carga = $_GET['carga'];


    $camion = new Camion($peso,$carga);

    echo 'Peso '. $camion->getPeso() . '<br>';
    echo 'Carga '. $camion->getCarga() . '<br>';
   



}