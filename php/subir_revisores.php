<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $revisores = $_FILES['revisores']['name'];
    $tipo = $_FILES['revisores']['type'];
    $contenido = file_get_contents($_FILES['revisores']['tmp_name']);

    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $revisores = mysqli_real_escape_string($conexion, $revisores);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO revisores (No_control, Asignacion_revisores, Tipo, Contenido)
                VALUES ('$no_control', '$revisores', '$tipo', '$contenido')";
    
    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../buscador_proceso.php");
    exit();


?>