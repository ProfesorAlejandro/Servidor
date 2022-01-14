<?php

class Calculo{

    public $ladoUno;
    public static $PI = 3.1416;

    public function __construct($ladoUno)
    {
        $this->ladoUno = $ladoUno;
    }

    public function areaCuadrado(){
        return $this->ladoUno * $this->ladoUno;
    }

    public function areaRectangulo($ladoDos){
        return $this->ladoUno * $ladoDos;
    }

    public function areaCirculo(){
        return $this->ladoUno *self::$PI;
    }

}