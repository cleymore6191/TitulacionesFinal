<?php

    $conexion = mysqli_connect("localhost", "root", "", "titulaciones");

    $numero_control = $_POST['No_control'];

    $solicitud_titulacion = $_FILES['solicitud']['name'];
    $certificado_total = $_FILES['certificado']['name'];
    $hoja_ingles = $_FILES['ingles']['name'];
    $no_adeudo = $_FILES['adeudo']['name'];

    $sql = "INSERT INTO abrir_expediente (No_control, Solicitud_titulacion, Certificado_total, Hoja_ingles, No_Adeudo)
                VALUES ('$numero_control', '$solicitud_titulacion', '$certificado_total', '$hoja_ingles', '$no_adeudo')";

    mysqli_query($conexion, $sql);
    mysqli_close($conexion);

    header("location: ../abrir_expediente_alumno.php");
    exit();
?>