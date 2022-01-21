<?php
--+

+

class ReservaController{

    public function saveReserva(){
        if(isset($_POST['btn_reserva'])){
            echo 'PASANDO POR EL CONTROLLER';
            $equipo = $_POST['equipo'];
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];

           
            $reserva = new Reserva();
            $reserva->save($equipo,$fecha,$hora);
            
        }
    }

    public function index(){
        require_once 'view/form.php';
    }
}