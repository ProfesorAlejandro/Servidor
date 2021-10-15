<?php

require_once 'includes/conexion.php';

echo "<button><a href='index.php'>&laquo;Volver</button>";

require_once 'includes/mensajes.php';

function listar($con){

    $sql = "SELECT * FROM coches";
    $query = mysqli_query($con,$sql);

    require_once 'includes/tabla.php';

    while($coches = mysqli_fetch_assoc($query)){  ?>

        <tr>
            <td><?= $coches['marca'] ?></td>
            <td><?= $coches['modelo'] ?></td>
            <td><?= $coches['precio'] ?></td>
            <td>
                <button>
                    <a href="eliminar.php?id=<?= $coches['id']?>">ELIMINAR</a>
                </button>

                <button>
                    <a href="actualizar.php?id=<?= $coches['id']?>">ACTUALIZAR</a>
                </button>
            </td>
        </tr>


   <?php }

        echo "</tbody>";
        echo "</table>";

}

//Llamadas a funciones
listar($con);




