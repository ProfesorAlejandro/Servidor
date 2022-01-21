<?php

class Reserva{

    private $con;

    public function __construct()
    {
        $this->con = Conexion::conectar();
    }

    public function save($nombre, $fecha, $hora){

        $sql = $this->con->prepare("INSERT INTO horarios VALUES(null,:nombre_equipo,:fecha,:hora)");

        $sql->bindParam(':nombre_equipo', $nombre);
        $sql->bindParam(':fecha', $fecha);
        $sql->bindParam(':hora', $hora);

        $sql->execute();

    }



}