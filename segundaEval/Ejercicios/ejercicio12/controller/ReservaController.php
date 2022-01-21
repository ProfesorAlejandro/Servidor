<?php

class ReservaController{

    public function saveReserva(){

        if(isset($_POST['btn_submit'])){
            $equipo = $_POST['nombre_equipo'];
            $fecha = $_POST['fecha'];
            $time = $_POST['time'];

            $modelo = new Reserva();
            $modelo->save($equipo,$fecha,$time);

        }

    }

    public function index(){
        require_once 'view/form.php';
    }

}