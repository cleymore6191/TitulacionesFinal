<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $ingles = $_FILES['ingles']['name'];
    $tipo = $_FILES['ingles']['type'];
    $contenido = file_get_contents($_FILES['ingles']['tmp_name']);

    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $ingles = mysqli_real_escape_string($conexion, $ingles);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO subir_ingles(No_control, Hoja_ingles, Tipo, Contenido)
                VALUES ('$no_control', '$ingles', '$tipo', '$contenido')";
                
    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../buscador_proceso.php");
    exit();
?>