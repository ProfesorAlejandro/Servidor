<?php

class Employees{

    public function getEmployees($con){
        $sql = "SELECT * FROM empleados";
        $query = $con->query($sql);

        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $jsonResult = json_encode($result);

        return   $jsonResult;
    }

    public function getById($con,$id){
        $sql = "SELECT * FROM empleados WHERE id='$id'";
        $query = $con->query($sql);

        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $jsonResult = json_encode($result);

        return   $jsonResult;

    }
}