<?php

    $conexion = mysqli_connect("localhost", "root", "", "titulaciones");
    
    $numero_control = $_POST["No_control"];
    $asesor = $_POST["nombre"];
    

    $solicitud_titulacion = $_FILES['archivo']['name'];
    $certificado_total = $_FILES['archivo']['name'];
    $hoja_ingles = $_FILES['archivo']['name'];
    $no_adeudo = $_FILES['archivo']['name'];

    $sql = "INSERT INTO expediente_alumno (No_control, Solicitud_titulacion, Certificado_total, Hoja_ingles, No_adeudo, Asesor) 
                        VALUES ('$numero_control', '$solicitud_titulacion', '$certificado_total', '$hoja_ingles', '$no_adeudo', '$asesor')";

    mysqli_query($conexion, $sql);
    mysqli_close($conexion);

    header("location: ../abrir_expediente_alumno.php");
    exit();

?>