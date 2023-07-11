<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $analisis = $_FILES['analisis']['name'];
    $tipo = $_FILES['analisis']['type'];
    $contenido = file_get_contents($_FILES['analisis']['tmp_name']);

    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $analisis = mysqli_real_escape_string($conexion, $analisis);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO analisis(No_control, Solicitud_analisis, Tipo, Contenido)
                VALUES ('$no_control', '$analisis', '$tipo', '$contenido')";
    
    $ejecutar = mysqli_query($conexion, $query);

    header("Location: ../buscador_proceso.php");
    exit();


?>