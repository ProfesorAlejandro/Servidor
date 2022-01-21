<?php


class cocheDao{

    public function save($con,$modelo,$numMotor,$marca){

        $sql = "INSERT INTO coches VALUES(null,'$modelo','$numMotor','$marca')";
        $query = $con->query($sql);

        $mensaje = '';

        if($query){
            $mensaje = 'Coche guardado';
        }
        return $mensaje;
    }

    public function findById($con,$id){
        $sql = "SELECT * FROM coches WHERE marcas_coches_id='$id'";
        $query = $con->query($sql);

        $coche = [];

        if($query){
            while($row = $query->fetch_assoc()){
                $coche[] = $row;
            }
        }

        return $coche;
    }

   
}