<?php

    include 'conexion_be.php';

    $numero_control = $_POST['No_control'];

    $inconveniencia = $_FILES['inconveniencia']['name'];
    $tipo = $_FILES['inconveniencia']['type'];
    $contenido = file_get_contents($_FILES['inconveniencia']['tmp_name']);

    $numero_control = mysqli_real_escape_string($conexion, $numero_control);
    $inconveniencia = mysqli_real_escape_string($conexion, $inconveniencia);
    $tipo = mysqli_real_escape_string($conexion, $inconveniencia);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO inconveniencia (No_control, Hoja_inconveniencia, Tipo, Contenido)
                VALUES ('$numero_control', '$inconveniencia', '$tipo', '$contenido')";

    $ejecutar = mysqli_query($conexion, $query);
    
    header("location: ../menu_alumno.php");
    exit();

?>