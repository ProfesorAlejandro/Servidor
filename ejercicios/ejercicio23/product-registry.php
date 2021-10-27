<?php

require_once 'conexion.php';


function productRegistration($con){

    if(isset($_POST['btn_registry'])){
        $product_name = mysqli_real_escape_string($con,$_POST['name']);
        $price = mysqli_real_escape_string($con,$_POST['price']);
        $cuantity = mysqli_real_escape_string($con,$_POST['cuantity']);

        $sqlInsert = "INSERT INTO productos VALUES(null, '$product_name','$price', '$cuantity')";
        $queryInsert = mysqli_query($con, $sqlInsert);

        if($queryInsert && mysqli_affected_rows($con) > 0){
            echo "<h2>PRODUCTO REGISTRADO</h2>";
            header('refresh:2;url=admin.php');
        }
        else{
            echo "<h2>ERROR DE REGISTRO</h2>";
        }
    }


}

//Llamadas a funciones
productRegistration($con);