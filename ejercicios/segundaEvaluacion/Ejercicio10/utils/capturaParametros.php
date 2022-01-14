<?php



function getParameters(){
    if(isset($_GET['btn_submit'])){
        $opc = $_GET['poligono'];

        switch($opc){
            case '1':
                header('location:cuadrado.php');
                break;
            case '2':
                    header('location:rectangulo.php');
                    break;

            case '3':
                    header('location:circulo.php');
                    break;
        }
    }

}



getParameters();