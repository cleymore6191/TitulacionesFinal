<?php

    include 'conexion_be.php';

    $impresion = $_FILES['impresion']['name'];
    $tipo = $_FILES['impresion']['type'];
    $contenido = file_get_contents($_FILES['impresion']['tmp_name']);

    $impresion = mysqli_real_escape_string($conexion, $impresion);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO autorizacion(Autorizacion_impresion, Tipo, Contenido)
                VALUES ('$impresion', '$tipo', '$contenido')";

    $ejecutar = mysqli_query($conexion, $query); 

?>