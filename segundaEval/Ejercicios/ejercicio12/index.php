<?php

//Requires

require_once 'controller/ReservaController.php';
require_once 'model/ReservaModel.php';
require_once 'config/conexion.php';


//Objetos

$reservaController = new ReservaController();
$reservaController->index();
$reservaController->saveReserva();

$con = Conexion::conectar();
var_dump($con);


