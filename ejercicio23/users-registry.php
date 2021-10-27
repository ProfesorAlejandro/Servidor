<?php


require_once 'conexion.php';

function userRegistration($con){

    if(isset($_POST['btn_user_registry'])){

        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        
        $password_secure = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        $sqlUsersRegistry = "INSERT INTO usuarios VALUES(null, '$username','$password_secure')";
        $queryUsersRegistry = mysqli_query($con, $sqlUsersRegistry);

        if($queryUsersRegistry && mysqli_affected_rows($con) > 0){
            echo "<h2>USUARIO REGISTRADO</h2>";
        }
        else{
            echo "<h2>ERROR DE REGISTRO DE</h2>";
        }
    }
}



//Llamadas a funciones
userRegistration($con);