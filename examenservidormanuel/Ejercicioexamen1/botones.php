<?php
if (isset($_GET['boton'])) {
    if ($_GET['boton']==1) {
       echo "<h1>Ha presionado el botón 1</h1>";
    }else{
       echo "<h1>Ha presionado el botón 1</h1>";
    }
}

if (isset($_GET['error'])) {
    $error = $_GET['error'];
    echo $error;
}

