<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda_Tres</title>
</head>
<body>

    <h1>Lista de proveedores de Tienda_3</h1>

    <?php
    require_once 'conexion.php';
    function buscar($con){
                
                $sqlInner = "SELECT nombre_proveedor FROM proveedores WHERE tienda_id='3'";
                $queryInner = mysqli_query($con, $sqlInner); ?>

        <table border="1">
            <thead>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
    <?php

                if($queryInner && mysqli_num_rows($queryInner) > 0){
                    while($i = mysqli_fetch_assoc($queryInner)){ ?>
                        <tr>
                            <td><?= $i['nombre_proveedor']?></td>
                        </tr>
            
                    <?php }
                }
                else{
                    echo "<h2>SIN RESULTADOS...</h2>";
                }

    }

    // Llamada a la funcion
    buscar($con);

    ?>
    
</body>
</html>