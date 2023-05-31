<?php

    include 'conexion_be.php';

    $firmas = $_FILES['firmas']['name'];
    $tipo = $_FILES['firmas']['type'];
    $contenido = file_get_contents($_FILES['firmas']['tmp_name']);

    $firmas = mysqli_real_escape_string($conexion, $firmas);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO formato_firmas (3_firmas, Tipo, Contenido)
                VALUES ('$firmas', '$tipo', '$contenido')";

    $ejecutar = mysqli_query($conexion, $query);

?>