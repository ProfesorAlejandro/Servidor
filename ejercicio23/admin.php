<?php

require_once 'conexion.php';
require_once 'partials/auth.php';

echo "<button><a href='index.php'>REGISTRAR PRODUCTO</a></button>";

function listOfProducts($con){

    $sqlListProducts = "SELECT * FROM productos";
    $queryListProducts = mysqli_query($con,$sqlListProducts);

    require_once 'partials/table.php';

        if($queryListProducts && mysqli_num_rows($queryListProducts) > 0){
            while($producto = mysqli_fetch_assoc($queryListProducts)){  ?>

                <tr>
                    <td><?= $producto['nombre_producto'] ?></td>
                    <td><?= $producto['precio'] ?></td>
                    <td><?= $producto['cantidad'] ?></td>
                    <td>
                        <!--  eliminar -->
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="id"  value="<?=$producto['id'] ?>"/>
                            <button type="submit">ELIMINAR</button>
                        </form>

                        <!--  actualizar -->
                        <form action="update.php" method="POST">
                            <input type="hidden" name="id"  value="<?=$producto['id'] ?>"/>
                            <button type="submit">ACTUALIZAR</button>
                        </form>
                       
                    </td>
                </tr>
        <?php }

        echo "</tbody>";
        echo "</table>";
    
    }
    else{
        echo "<h2>ERROR DE CONSULATA</h2>";
    }
}

//Lamadas a funciones
listOfProducts($con);



