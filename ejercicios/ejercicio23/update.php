<?php

require_once 'conexion.php';
require_once 'partials/auth.php';

function loadForm($con){
    if(isset($_POST['id'])){
        $id = $_POST['id'];

        // echo $id;

        $sqlLoadForm = "SELECT * FROM productos WHERE id='$id'";
        $queryLoadForm = mysqli_query($con, $sqlLoadForm);

        if($queryLoadForm && mysqli_affected_rows($con) == 1){   

            $product = mysqli_fetch_assoc($queryLoadForm);  ?>
            
            <form action="update.php" method="POST">
                <input type="text" name="name" value="<?= $product['nombre_producto'] ?>" /><br>
                <input type="text" name="price"  value="<?= $product['precio'] ?>" /><br>
                <input type="text" name="cuantity"  value="<?= $product['cantidad'] ?>" /><br>

                <!-- id de producto -->
                <input type="hidden" name="id"  value="<?= $product['id'] ?>" /><br>

                <button type="submit" name="btn_update">ACTUALIZAR</button>

            </form>

       <?php }

        else{
            echo "<h2>NO SE HA PODIDO CARGAR EL PRODUCTO</h2>";
        } 
    }

}

function update($con){
    if(isset($_POST['btn_update'])){

        $product_name = mysqli_real_escape_string($con, $_POST['name']);
        $price = mysqli_real_escape_string($con, $_POST['price']);
        $cuantity = mysqli_real_escape_string($con, $_POST['cuantity']);

        $id = $_POST['id'];

        $sqlUpdate = "UPDATE productos SET nombre_producto='$product_name',
        precio='$price', cantidad='$cuantity' WHERE id='$id'";

        $queryUpdate = mysqli_query($con,$sqlUpdate);

        if($queryUpdate && mysqli_affected_rows($con) == 1){
            echo "PRODUCTO ACTUALIZADO";
            header('refresh:2;url=admin.php');
        }
        else{
            echo "ERROR DE ACTUALIZACIÓN";
        }
    }

}


//Llamadas a funciones
loadForm($con);
update($con);