<?php

    include 'conexion_be.php';

        $no_control = $_POST['No_control'];

        $solicitud_titulacion = $_FILES['solicitud']['name'];
        $certificado_total = $_FILES['certificado']['name'];
        $hoja_ingles = $_FILES['ingles']['name'];
        $no_adeudo = $_FILES['adeudo']['name'];

        $tipo_1 = $_FILES['solicitud']['type'];
        $tipo_2 = $_FILES['certificado']['type'];
        $tipo_3 = $_FILES['ingles']['type'];
        $tipo_4 = $_FILES['adeudo']['type'];

        $contenido1 = file_get_contents($_FILES['solicitud']['tmp_name']);
        $contenido2 = file_get_contents($_FILES['certificado']['tmp_name']);
        $contenido3 = file_get_contents($_FILES['ingles']['tmp_name']);
        $contenido4 = file_get_contents($_FILES['adeudo']['tmp_name']);

        $no_control = mysqli_real_escape_string($conexion, $no_control);
        $solicitud_titulacion = mysqli_real_escape_string($conexion, $solicitud_titulacion);
        $tipo_1 = mysqli_real_escape_string($conexion, $tipo_1);
        $contenido1 = mysqli_real_escape_string($conexion, $contenido1);

        $no_control = mysqli_real_escape_string($conexion, $no_control);
        $certificado_total = mysqli_real_escape_string($conexion, $certificado_total);
        $tipo_2 = mysqli_real_escape_string($conexion, $tipo_2);
        $contenido2 = mysqli_real_escape_string($conexion, $contenido2);

        $no_control = mysqli_real_escape_string($conexion, $no_control);
        $hoja_ingles = mysqli_real_escape_string($conexion, $hoja_ingles);
        $tipo_3 = mysqli_real_escape_string($conexion, $tipo_3);
        $contenido3 = mysqli_real_escape_string($conexion, $contenido3);

        $no_control = mysqli_real_escape_string($conexion, $no_control);
        $no_adeudo = mysqli_real_escape_string($conexion, $no_adeudo);
        $tipo_4 = mysqli_real_escape_string($conexion, $tipo_4);
        $contenido4 = mysqli_real_escape_string($conexion, $contenido4);

        $query1 = "INSERT INTO subir_solicitud(No_control, Solicitud_titulacion, Tipo, Contenido)
                VALUES ('$no_control', '$solicitud_titulacion', '$tipo_1', '$contenido1')";

        $query2 = "INSERT INTO subir_certificado(No_control, Certificado_total, Tipo, Contenido)
                        VALUES ('$no_control', '$certificado_total', '$tipo_2', '$contenido2')";
        
        $query3 = "INSERT INTO subir_ingles(No_control, Hoja_ingles, Tipo, Contenido)
                        VALUES ('$no_control', '$hoja_ingles', '$tipo_3', '$contenido3')";
        
        $query4 = "INSERT INTO subir_adeudo(No_control, No_adeudo, Tipo, Contenido)
                        VALUES ('$no_control', '$no_adeudo', '$tipo_4', '$contenido4')";
        
                
        $ejecutar1 = mysqli_query($conexion, $query1);
        $ejecutar2 = mysqli_query($conexion, $query2);
        $ejecutar3 = mysqli_query($conexion, $query3);
        $ejecutar4 = mysqli_query($conexion, $query4);

        header("location: ../abrir_expediente_alumno.php");
        exit();

?>