<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $no_adeudo = $_FILES['adeudo']['name'];
    $tipo = $_FILES['adeudo']['type'];
    $contenido = file_get_contents($_FILES['adeudo']['tmp_name']);

    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $no_adeudo = mysqli_real_escape_string($conexion, $no_adeudo);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO subir_adeudo(No_control, No_adeudo, Tipo, Contenido)
                VALUES ('$no_control', '$no_adeudo', '$tipo', '$contenido')";
                
    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../buscador_proceso.php");
    exit();

?>