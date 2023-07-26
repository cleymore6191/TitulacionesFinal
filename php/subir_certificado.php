<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $certificado = $_FILES['certificado']['name'];
    $tipo = $_FILES['certificado']['type'];
    $contenido = file_get_contents($_FILES['certificado']['tmp_name']);

    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $certificado = mysqli_real_escape_string($conexion, $certificado);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query_verificar = "SELECT * FROM subir_certificado WHERE No_control = '$no_control'";
    $resultado_verificar = mysqli_query($conexion, $query_verificar);

    if(mysqli_num_rows($resultado_verificar) > 0){
        // Si existe un registro, actualizar los campos del documento
        $query_actualizar = "UPDATE subir_certificado SET Certificado_total = '$certificado', Tipo = '$tipo', Contenido = '$contenido' WHERE No_control = '$no_control'";
        mysqli_query($conexion, $query_actualizar);
    }else {
        // Si no existe un registro, insertar el nuevo documento
        $query_insertar = "INSERT INTO subir_certificado (No_control, Certificado_total, Tipo, Contenido)
                           VALUES ('$no_control', '$certificado', '$tipo', '$contenido')";
        mysqli_query($conexion, $query_insertar);
    }

    header("location: ../buscador_proceso.php");
    exit();

?>