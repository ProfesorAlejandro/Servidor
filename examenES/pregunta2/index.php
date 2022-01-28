<?php

require_once 'conexion.php';

echo "<h1>Registro de proveedores</h1>";
echo "<form action='index.php' method='POST'>";
echo "<input type='text' name='nombre_proveedor' placeholder='Nombre de proveedor' /><br>";
echo "<select name='tiendas'>";
echo "<option value=''>Seleccionar tienda</option>";

$sqlSelectTienda = "SELECT id, nombre_tienda FROM tiendas";
$querySelectTienda = mysqli_query($con, $sqlSelectTienda);

if($querySelectTienda && mysqli_num_rows($querySelectTienda) > 0){ 

    while($tienda = mysqli_fetch_assoc($querySelectTienda)){ ?>
        <option value="<?= $tienda['id'] ?>"><?= $tienda['nombre_tienda'] ?></option>
    <?php }

    echo "</select>";

    echo "<button type='submit' name='btn_submit'>Enviar</button>";

    echo "</form>";

}
else{
    echo "<h2>Error en la base de datos</h2>";
}
?>
<button onclick="location.href='tienda1.php'">Tienda 1</button>
<button onclick="location.href='tienda2.php'">Tienda 2</button>
<button onclick="location.href='tienda3.php'">Tienda 3</button>

<?php


function registrarProveedor($con){
    if(isset($_POST['btn_submit'])){
        $nombre = $_POST['nombre_proveedor'];
        $idTienda = $_POST['tiendas'];

        $sqlInsertProveedor = "INSERT INTO proveedores VALUE(null, '$nombre', '$idTienda')";

        $queryInsertProveedor = mysqli_query($con, $sqlInsertProveedor);
        
        if($queryInsertProveedor && mysqli_affected_rows($con) == 1){
            echo "<h2>Proveedor registrado</h2>";
            header('refresh:2;url=index.php');
        }
        else{
            echo "<h2>Error de registro</h2>";
        }

        
        
    }

    mysqli_close($con);
}

//Llamadas a funciones

registrarProveedor($con);



?>