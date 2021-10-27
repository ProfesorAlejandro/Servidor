<?php

// Realiza un script en php que muestre en el navegador todos los núermos pares del 1 al 100.
// Los números se deben pintar dentro de un <h4></h4> y deben aparecer cada un o en un línea


for($i=0;$i<=100;$i++){
    if($i%2 == 0){
        echo '<h4>' . $i .'<br></h4>';
    }
}
