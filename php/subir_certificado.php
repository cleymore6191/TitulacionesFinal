<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $certificado = $_FILES['certificado']['name'];
    $tipo = $_FILES['certificado']['type'];
    $contenido = file_get_contents($_FILES['certificado']['tmp_name']);

    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $certificado = mysqli_real_escape_string($conexion, $certificado);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO subir_certificado(No_control, Certificado_total, Tipo, Contenido)
                VALUES ('$no_control', '$certificado', '$tipo', '$contenido')";
                
    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../buscador_proceso.php");
    exit();
?>