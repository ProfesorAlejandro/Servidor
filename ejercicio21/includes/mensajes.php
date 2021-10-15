<?php

// Mensajes de éxito - error
if(isset($_GET['success_registro'])){
    echo "<h2>COCHE REGISTRADO</h2>";
    header( "refresh:2;home.php" ); 
}
if(isset($_GET['error_registro'])){
    echo "<h2>ERROR DE REGISTRO</h2>";
    header( "refresh:2;home.php" ); 
}
if(isset($_GET['success_eliminar'])){
    echo "<h2>COCHE ELIMINADO</h2>";
    header( "refresh:2;home.php" ); 
}
if(isset($_GET['error_eliminar'])){
    echo "<h2>ERROR AL ELIMINAR</h2>";
    header( "refresh:2;home.php" ); 
}
if(isset($_GET['success_edit'])){
    echo "<h2>COCHE MODIFICADO</h2>";
    header( "refresh:2;home.php" ); 
}

if(isset($_GET['error_edit'])){
    echo "<h2>ERROR AL ACTUALIZAR EL COCHE</h2>";
    header( "refresh:2;home.php" ); 
}