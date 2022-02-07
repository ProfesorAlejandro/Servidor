<?php


require_once 'metodos.php';


$metodo = new Metodo();


if(isset($_GET['parametro'])){

    if($_GET['parametro'] === 'success'){
        echo $metodo->success();
    }
    if($_GET['parametro'] === 'error'){
        echo $metodo->error();
    }
}




