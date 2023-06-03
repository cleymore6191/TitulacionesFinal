<?php

    include 'conexion_be.php';

    $numero_control = $_POST['No_control'];

    $impresion = $_FILES['impresion']['name'];
    $tipo = $_FILES['impresion']['type'];
    $contenido = file_get_contents($_FILES['impresion']['tmp_name']);

    $numero_control = mysqli_real_escape_string($conexion, $numero_control);
    $impresion = mysqli_real_escape_string($conexion, $impresion);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO autorizacion(No_control, Autorizacion_impresion, Tipo, Contenido)
                VALUES ('$numero_control','$impresion', '$tipo', '$contenido')";

    $ejecutar = mysqli_query($conexion, $query); 

?>