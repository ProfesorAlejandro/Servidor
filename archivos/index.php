<?php

// Abrir archivos
//'r'
$archivo  = fopen('hola.txt', 'a+');

// Leer contenido
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido . '<br>';
}

// Escribir en el archivo
fwrite($archivo, 'Texto desde PHP');


// Cerrar archivo
fclose($archivo);

//Copiar archivos
//copy('hola.txt', 'archivo_copia.txt');

//Renombrar archivos
rename('hola.txt', 'test.txt');

//Eliminar archivos
//unlink('test.txt');

//Comprobar si un archivo existe
if(file_exists('archivo_copia.txt')){
    echo 'El archivo existe';
}
else{
    echo 'El archivo no existe';
}

// Crear carpetas

if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die('No se ha podido crear la carpeta');
}
else{
    echo '<br>La carpeta ya existe';
}

//Eliminar carpetas

//rmdir('mi_carpeta');

if($carpeta = opendir('./mi_carpeta')){
    while(false != ($archivo = readdir($carpeta))){
        echo $archivo . '<br>';
    }
}








