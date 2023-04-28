<?php

    include 'conexion_be.php';

    $numero_control = $_POST['numero_control'];
    $contraseña = $_POST['contraseña'];

    $query = "INSERT INTO login_alumno(No_control, Contraseña)  
                VALUES('$numero_control', '$contraseña')";

    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../login_alumnos.php");
    exit();

?>