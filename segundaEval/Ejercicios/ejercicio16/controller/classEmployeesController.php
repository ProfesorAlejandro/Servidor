<?php

class EmployeesController{

    public function employeesList($con){
        $employees = new Employees();
        return  $employees->getEmployees($con);
    }

    public function searchEmployee($con,$id){
        $employees = new Employees();
        return $employees->getById($con,$id);
    }


}