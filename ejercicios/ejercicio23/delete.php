<?php

require_once 'conexion.php';
require_once 'partials/auth.php';

function deleteProduct($con){

    if(isset($_POST['id'])){

        $id = $_POST['id'];

        $sqlDelete = "DELETE FROM productos WHERE id='$id'";
        $queryDelete = mysqli_query($con,$sqlDelete);

        if($queryDelete && mysqli_affected_rows($con) == 1){
            echo "<h2>PRODUCTO ELIMINADO</h2>";
            header('refresh:2;url=admin.php');
        }
    }
}

//Lamadasa funciones
deleteProduct($con);
