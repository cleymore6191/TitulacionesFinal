<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $aviso_titulacion = $_FILES['aviso']['name'];
    $tipo = $_FILES['aviso']['type'];
    $contenido = file_get_contents($_FILES['aviso']['tmp_name']);

    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $aviso_titulacion = mysqli_real_escape_string($conexion, $aviso_titulacion);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO aviso (No_control, Aviso_titulacion, Tipo, Contenido)
                VALUES ('$no_control', '$aviso_titulacion', '$tipo', '$contenido')";
    
    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../seguimiento_proceso.php");
    exit();

?>