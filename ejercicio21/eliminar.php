<?php

require 'includes/conexion.php';

function eliminar($con){

    if(isset($_GET['id'])){
        $id = $_GET['id'];

         $sql = "DELETE FROM coches WHERE  id='$id'";
         $query = mysqli_query($con,$sql);

         if($query){
             header('Location:home.php?success_eliminar');
         }
         else{
            header('Location:home.php?error_eliminar');
         }
    }
}

//Llamadas a funciones
eliminar($con);
