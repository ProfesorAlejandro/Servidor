<?php


class Metodo{


    public function success(){

        $mensaje = [
            'success' => 'Ejecutando con éxito...'
        ];

        return json_encode($mensaje);
    }

    public function error(){

        $mensaje = [
            'error' => 'Ha sucedido un error...'
        ];

        return json_encode($mensaje);
    }



}