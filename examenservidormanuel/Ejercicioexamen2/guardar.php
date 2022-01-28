<?php

require_once 'conexion.php';

function guardar($con){
    if (isset($_POST['btn_submit'])) {
        $nombreEncargado = $_POST['nombre'];
        $apellidoEncargado = $_POST['apellido'];
        $cargoEncargado = $_POST['cargo'];
        $tiendaEncargado = $_POST['tienda'];

        $sqlInsertar = "INSERT INTO encargados
        VALUES (null,'$nombreEncargado','$apellidoEncargado','$cargoEncargado','$tiendaEncargado')";
        $queryInsertar = mysqli_query($con,$sqlInsertar);
    }
}


guardar($con);