<?php

class Reserva{

    private $con;

    public function __construct()
    {
        $this->con = Conexion::conectar();
    }

    public function save($equipo,$fecha,$hora){
        
        echo 'Llamando al modelo';

        $sql = $this->con->prepare("INSERT INTO horarios VALUES(null,:nombre_equipo,:fecha,:hora)");


        if($sql){
            echo 'Ejecutando la sentencia';
        }
        else{
            echo 'error de sentencia';
        }

        if($sql->rowCount()> 0){
            echo 'Equipo guardado';
        }
        else{
            echo 'Error en la sentencia';
        }

        $sql->bindParam(':nombre_equipo',$equipo);
        $sql->bindParam(':fecha', $fecha);
        $sql->bindParam(':hora', $hora);

        echo $equipo .' '. $fecha.' '.$hora ;

        $sql->execute();

        
    }
}