<?php

class Conexion{

    public static function conectar(){
        $pdo = new PDO('mysql:host=localhost;dbname=canchas_bd','root','')
        or die("<h2>Error de conexión</h2>") . $pdo->errorInfo();

        return $pdo;
    }
}