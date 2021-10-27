<?php

session_start();

function auth(){
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    
        if($user === 'pepitoadmin'|| $user === 'juanitoadmin'){
            echo '<h4>'.$user.'<h4>';
        }
        else{
            header('location:login.php');
        }
    }
    else{
        header('location:login.php');
    }
}

//Lamadas a funciones
auth();

