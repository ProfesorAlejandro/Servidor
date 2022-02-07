<?php


class EmpleadoController{

    public function getModelo(){

        $empleado = new Empleado();

        $emp= $empleado->devolverJson();

        require_once 'view/empleadoView.php';



    }


}