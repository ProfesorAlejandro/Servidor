<?php


require_once 'includes/conexion.php';


function cargarFormulario($con){

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM coches WHERE id='$id'";
        $query = mysqli_query($con,$sql);

        if($query){
            
            echo "<form action='actualizar.php' method='POST'>";
            
            while($coche = mysqli_fetch_assoc($query)){ ?>
                <input type="text" name="marca" value="<?= $coche['marca'] ?>" /><br>
                <input type="text" name="modelo" value="<?= $coche['modelo'] ?>" /><br>
                <input type="text" name="precio" value="<?= $coche['precio'] ?>" /></br>
                <input type="hidden" name="id" value="<?= $coche['id'] ?>" /></br>
        <?php } ?>

                <button type="submit" name="btn_edit">ACTUALIZAR</button>
            </form>
       <?php  }
            else{
                echo "<h2><ERROR AL CARGAR EL FORMULARIO/h2>";
            }
        
    }
}

function actualizar($con){
    if(isset($_POST['btn_edit'])){

        $id = $_POST['id'];

        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $precio = $_POST['precio'];

        $sql = "UPDATE coches SET marca='$marca', modelo='$modelo', precio='$precio' WHERE id='$id'";
        $query = mysqli_query($con, $sql);

        if($query){
            header('Location:home.php?success_edit');

        }
        else{
            header('Location:home.php?error_edit');
        }

    }

}


//Llamadas a funciones
cargarFormulario($con);
actualizar($con);


