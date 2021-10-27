<?php

$con = mysqli_connect('localhost','root','','concesionario');

if(!$con){
    echo "<h2>ERROR DE CONEXIÓN</h2>";
}
