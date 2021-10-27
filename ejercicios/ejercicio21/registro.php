<?php

require_once 'includes/conexion.php';

function registrar($con){

    if(isset($_POST['btn_registro'])){
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $precio = $_POST['precio'];

        $sql = "INSERT INTO coches VALUES(null, '$marca','$modelo', '$precio')";
        $query = mysqli_query($con, $sql);

        if($query){
            header('Location:home.php?success_registro');
        }
        else{
            header('location:index.php?error_registro');
        }
    }
}


//Llamadas a funciones
registrar($con);
