<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $solicitud_titulacion = $_FILES['solicitud']['name'];
    $certificado_total = $_FILES['certificado']['name'];
    $hoja_ingles = $_FILES['ingles']['name'];
    $no_adeudo = $_FILES['adeudo']['name'];

    $contenido = file_get_contents($_FILES['solicitud']['tmp_name']);
    $contenido = file_get_contents($_FILES['certificado']['tmp_name']);
    $contenido = file_get_contents($_FILES['ingles']['tmp_name']);
    $contenido = file_get_contents($_FILES['adeudo']['tmp_name']);

    $query = "INSERT INTO abrir_expediente (No_control, Solicitud_titulacion, Certificado_total, Hoja_ingles, No_adeudo)
                VALUES ('$no_control', '$solicitud_titulacion', '$certificado_total', '$hoja_ingles', '$no_adeudo')";

    $ejecutar = mysqli_query($conexion, $query);

    echo 'El expediente ya se ha subido';

    header("location: ../abrir_expediente_alumno.php");
    exit();
?>.