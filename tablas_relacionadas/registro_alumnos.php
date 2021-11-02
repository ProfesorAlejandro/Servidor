<?php



require_once 'conexion.php';


function registroAlumnos($con){

 if(isset($_POST['btn_form'])){

        $id_grado = mysqli_real_escape_string($con,$_POST['grados']);

        $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
        $apellidos = mysqli_real_escape_string($con, $_POST['apellidos']);

        $sqlRegitroAlumno = "INSERT INTO alumnos VALUES(null,'$nombre', '$apellidos','$id_grado')";
        $queryRegistroAlumno = mysqli_query($con,$sqlRegitroAlumno );

        if($queryRegistroAlumno && mysqli_affected_rows($con) == 1){
            echo "<h2>ALUMNO REGISTRADO</h2>";

        }
        else{
            echo "<h2>ERROR DE REGISTRO</h2>";
        }

    }


}



    // Llamadas a funciones
    registroAlumnos($con);
