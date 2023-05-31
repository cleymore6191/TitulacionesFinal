<?php

    include 'conexion_be.php';

    $liberacion = $_FILES['liberacion']['name'];
    $tipo = $_FILES['liberacion']['type'];
    $contenido = file_get_contents($files['liberacion']['tmp_name']);

    $liberacion = mysqli_real_escape_string($conexion, $liberacion);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO liberacion_titulacion (Liberacion, Tipo, Contenido)
                VALUES ('$liberacion', '$tipo', '$contenido')";

    $ejecutar = mysqli_query($conexion, $query);

?>