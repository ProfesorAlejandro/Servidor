<?php

//Requires

require_once 'config/database.php';
require_once 'model/ReservaModel.php';
require_once 'controller/ReservaController.php';

//Objetos

$reservaController = new ReservaController();

$reservaController->index();

$reservaController->saveReserva();





