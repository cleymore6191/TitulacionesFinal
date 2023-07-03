<?php

    include 'conexion_be.php';

    $numero_control = $_POST['No_control'];

    $firmas = $_FILES['firmas']['name'];
    $tipo = $_FILES['firmas']['type'];
    $contenido = file_get_contents($_FILES['firmas']['tmp_name']);

    $numero_control = mysqli_real_escape_string($conexion, $numero_control);
    $firmas = mysqli_real_escape_string($conexion, $firmas);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO formato_firmas (No_control, 3_firmas, Tipo, Contenido)
                VALUES ('$numero_control', '$firmas', '$tipo', '$contenido')";

    $ejecutar = mysqli_query($conexion, $query);

?>