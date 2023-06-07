<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $solicitud = $_FILES['solicitud']['name'];
    $tipo = $_FILES['solicitud']['type'];
    $contenido = file_get_contents($_FILES['solicitud']['tmp_name']);

    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $solicitud = mysqli_real_escape_string($conexion, $solicitud);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO subir_solicitud(No_control, Solicitud_titulacion, Tipo, Contenido)
                VALUES ('$no_control', '$solicitud', '$tipo', '$contenido')";
    
    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../buscador_proceso.php");
    exit();
?>