<?php

require_once 'conexion.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    if($query){

        while($usuario = mysqli_fetch_assoc($query)){

            $nombre = $usuario['nombre'];
            $telefono = $usuario['telefono'];

            header('Location:form.php?id='.$usuario['id'].
            '&nombre='.$nombre.
            '&telefono='.$telefono.
            '&email='.$usuario['email']);
        }


    }
    else{
        echo "<h2>EL #ID NO EXISTE EN LA BASE DE DATOS</h2>";
    }




}

