<?php

class Camion{

    private $peso;
    private $carga;

    public function __construct($peso, $carga)
    {
        $this->peso = $peso;
        $this->carga = $carga;   
    }

    public function getPeso(){
        return $this->peso;
    }
    public function getCarga(){
        return $this->carga;
    }


}