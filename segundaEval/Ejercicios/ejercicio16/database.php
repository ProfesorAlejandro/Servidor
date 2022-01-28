<?php


class Conexion{

    public static function conectar(){
        $pdo = new PDO('mysql:host=localhost;dbname=empresa_bd','root','')
        or die("<h2>Errord de conexión</h2>") . $pdo->errorInfo();

        return $pdo;
     
    }
}