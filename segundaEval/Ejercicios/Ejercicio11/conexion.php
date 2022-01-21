<?php

class Conexion{

    public static function conectar(){
        $con = new mysqli('localhost','root','','coches_bd')
        or die("<h2>ERROR DE CONEXIÓN</h2>") . $con->error;
        return $con;
    }
}