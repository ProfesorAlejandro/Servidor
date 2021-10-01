<?php



//conexión a la base de datos

$conexion = mysqli_connect('localhost','root','','aula_nosa');

if($conexion){
    echo "<h2>CONECTADO</h2>";
}
else{
    echo "<h2>ERROR DE CONEXIÓN</h2>";
}

// Codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Seleccionar registros desde php ( SELECT )

$consulta = mysqli_query($conexion,"SELECT * FROM empleados");

while($emp = mysqli_fetch_assoc($consulta)){
    echo $emp['nombre'] . ' 
    ' . $emp['apellido1'].'
     ' .$emp['apellido2'].' ' .$emp['email']. '<br>';
}

// Insertar registros desde php ( INSERT )
$sql = "INSERT INTO empleados VALUES (null, 'Manolo','López','Cao','manolo@es.es')";
    $insert = mysqli_query($conexion, $sql);
    if($insert ){
        echo "<h2>EMPLEADO REGISTRADO<h2>";
    }
    else{
        echo "<h2>ERROR AL GUARDAR EL EMPLEADO<h2>";
    }

}









