<?php

// Requires

require_once 'conexion.php';
require_once 'cocheDao.php';



function guardar(){
    if(isset($_POST['btn_submit'])){

        $modelo = $_POST['modelo'];
        $numMotor = $_POST['num_motor'];
        $marca = $_POST['marca'];
        
        $con = Conexion::conectar();
        $cocheDao = new cocheDao();

        $coche = $cocheDao->save($con, $modelo , $numMotor, $marca);
    
        echo $coche;
    }
}

function buscar(){
    $con = Conexion::conectar();
    $cocheDao = new cocheDao();

    if($_GET){
        $id = $_GET['marca_coche'];

        $coches = $cocheDao->findById($con, $id);

        foreach($coches as $coche){

            echo '<strong>' . $coche['modelo']  . '</strong>' . $coche['num_motor'];

        }


    }
}




//Llamadas a funciones

guardar();
buscar();










