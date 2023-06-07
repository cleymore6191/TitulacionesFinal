<?php

    include 'conexion_be.php';
    
    $no_control = $_POST['No_control'];

    $liberacion = $_FILES['liberacion']['name'];
    $tipo = $_FILES['liberacion']['type'];
    $contenido = file_get_contents($_FILES['liberacion']['tmp_name']);

    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $liberacion = mysqli_real_escape_string($conexion, $liberacion);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO liberacion_de_titulacion (No_control, Liberacion, Tipo, Contenido)
                VALUES ('$no_control', '$liberacion', '$tipo', '$contenido')";

    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../buscador_proceso.php");
    exit();

?>