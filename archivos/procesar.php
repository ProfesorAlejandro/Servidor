<?php

 $imagen = $_FILES['imagen'];

 $nombre = $imagen['name'];

 $tipo = $imagen['type'];

 echo '<br>';

 echo '<h2>datos del archivo</h2>';
 echo "Nombre " . $nombre , '<br>';
 echo "Tipo " . $tipo, '<br>';

 //Validación de formatos de subida

 if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png"){
     echo "<h2>ARCHIVO SUBIDA</h2>";

     if(!is_dir('imagenes')){
         mkdir('imagenes', 0777);
     }
     move_uploaded_file($imagen['tmp_name'], 'imagenes/'.$nombre);


 }
 else{
     echo "<h2>FORMATO NO PERMITIDO</h2>";
 }

 //var_dump($imagen);