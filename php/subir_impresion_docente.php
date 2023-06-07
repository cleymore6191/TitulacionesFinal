<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $autorizacion = $_FILES['impresion']['name'];
    $tipo = $_FILES['impresion']['type'];
    $contenido = file_get_contents($_FILES['impresion']['tmp_name']);

    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $autorizacion = mysqli_real_escape_string($conexion, $autorizacion);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO autorizacion (No_control, Autorizacion_impresion, Tipo, Contenido)
                VALUES ('$no_control', '$autorizacion', '$tipo', '$contenido')";

    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../buscador_proceso.php");
    exit();

?>