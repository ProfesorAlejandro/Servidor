<?php


class Empleado{

    public function devolverJson(){

        $empleado = [
            'nombre' => 'Pepe',
            'apellido' => 'Pérez' 
        ];

        return json_encode($empleado);
    }


}