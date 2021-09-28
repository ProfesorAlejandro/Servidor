<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--
    Crea un botón html con el texto "CREAR CARPETA" que cuando lo pulsemos cree una carpeta llamada "Servidor".
    Si la carpeta se ha generado crear dos botones uno con el texto "SERVIDOR UNO" y otro "SERVIDOR DOS".
    Al pulsar en "SERVIDOR UNO" se debe generar un archivo llamado "servidor_uno.text" y se generará
    con php el texto "Este es el servidor 1". Al pulsar en "SERVIDOR DOS" se generará un archivo "servidor_dos.txt"
    que tendrá el texto "Este es el servidor 2" ( creado con php).
 -->

 <form action="index.php" method="GET">
     <input type="submit" value="CREAR CARPETA" name="crear_carpeta" />
 </form>

 <?php

    if(isset($_GET['crear_carpeta'])){
        if(!is_dir('Servidor')){
            mkdir('Servidor' ,0777);
        }
    }

    if(is_dir('Servidor')){
        echo '<br>';
        echo "<button><a href='index.php?servidor=servidor_uno'>SERVIDOR UNO</button>";
        echo '<br><br>';
        echo "<button><a href='index.php?servidor=servidor_dos'>SERVIDOR DOS</button>";
    }

    function crearServidorUno(){

        if(isset($_GET['servidor']) && ($_GET['servidor'] == 'servidor_uno')){
            if(!file_exists('servidor_uno.txt')){
                $servidorUno = fopen('./Servidor/servidor_uno.txt', "a+") or die("Error al 
                crear el archivo");

                fwrite($servidorUno, "Este es el servidor 1");
                fclose($servidorUno);
            }
        }

    }

    function crearServidorDos(){

        if(isset($_GET['servidor']) && ($_GET['servidor'] == 'servidor_dos')){
            if(!file_exists('servidor_dos.txt')){
                $servidorDos = fopen('./Servidor/servidor_dos.txt', "a+") or die("Error al 
                crear el archivo");
                fwrite($servidorDos, "Este es el servidor 2");
                fclose($servidorDos);
            }
        }

    }


    //Llamadas a funciones
    crearServidorUno();
    crearServidorDos();


 ?>



    
</body>
</html>