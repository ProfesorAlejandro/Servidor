<?php


if(isset($_POST['btn_enviar'])){

    $nombre = $_POST['nombre'];
    $edad= $_POST['edad'];
    $email= $_POST['email'];
    $password= $_POST['password'];

    /*
        echo "Nombre : $nombre<br>";
        echo "Edad: $edad<br>";
        echo "Email : $email<br>";
        echo "Contraseña: $password<br>";
    */

    //VALIDACIÓN DEL CAMPO NOMBRE

    //  el + ( uno o más)

    if(!empty($nombre) && !preg_match("/[a-zA-Z ]+/", $nombre)){
        echo "<h3 style='color:red'>*El nombre debe ser una cadena de texto</h3>";
    }
 
    if(empty($nombre)){
        echo "<h3 style='color:red'>*El nombre no puede estar vacío</h3>";
    }

    //VALIDACIÓN DEL CAMPO EDAD
    if(empty($edad)){
        echo "<h3 style='color:red'>*La edad no puede estar vacía</h3>";
    }
    if(!empty($edad) && !filter_var($edad, FILTER_VALIDATE_INT)){
        echo  "<h3 style='color:red'>*La edad debe ser un número</h3>";
    }

    //VALIDACIÓN DEL CAMPO EMAIL

    if(empty($email)){
        echo "<h3 style='color:red'>*El email no puede estar vacío</h3>";
    }
  
    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<h3 style='color:red'>*Formato de email incorrecto</h3>";
    }

    //VALIDACIÓN DEL CAMPO CONTRASEÑA 
    if(empty($password)){
        echo "<h3 style='color:red'>*La contraseña no puede estar vacía</h3>";
    }
    if(!empty($password) && strlen($password) <= 6){
        echo "<h3 style='color:red'>*La contraseña debe tener más de 6 caracteres</h3>";
    }


}
    
