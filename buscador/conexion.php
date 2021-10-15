<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'login';


$con = mysqli_connect($host,$user,$password,$db);

if(!$con)
    echo "ERROR DE CONEXIÓN";

