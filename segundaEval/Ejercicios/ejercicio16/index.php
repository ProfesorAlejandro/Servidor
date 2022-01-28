<?php


// Crea una aplicación que se conecte a una base de datos "emppresa_bd"
// con una tabla "empleados" y los campos "nombre_completo", "fecha_incorporacion" e "email".
//  A través de un router, tiene que crear los endpoints siguientes:
// '/list' ->listado de los empleados de la base de datos en formato json
//  '/employees?id= '.$id -> empleado encontrado por su id.
 

//Requires


require_once 'database.php';
require_once 'model/classEmployees.php';
require_once 'controller/classEmployeesController.php';
require_once 'recurso.php';

//Objetos

$con = Conexion::conectar();
$employeesController = new EmployeesController();


$request = $_SERVER['REQUEST_URI'];

$id = '';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}


switch($request){
    case '/aulanosa/ejercicios/ejercicio16/list':
        echo $employeesController->employeesList($con);
        break;

    case '/aulanosa/ejercicios/ejercicio16/employee?id='.$id:
        echo $employeesController->searchEmployee($con,$id);
}






