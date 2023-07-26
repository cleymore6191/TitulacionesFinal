<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $solicitud = $_FILES['solicitud']['name'];
    $tipo = $_FILES['solicitud']['type'];
    $contenido = file_get_contents($_FILES['solicitud']['tmp_name']);

    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $solicitud = mysqli_real_escape_string($conexion, $solicitud);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query_verificar = "SELECT * FROM subir_solicitud WHERE No_control = '$no_control'";
    $resultado_verificar = mysqli_query($conexion, $query_verificar);

    if (mysqli_num_rows($resultado_verificar) > 0){
        $query_actualizar = "UPDATE subir_solicitud SET Solicitud_titulacion = '$solicitud', Tipo = '$tipo', Contenido = '$contenido' WHERE No_control = '$no_control'";
        mysqli_query($conexion, $query_actualizar);
    }else{
        // Si no existe un registro, Insertar el nuevo documento
        $query_insertar= "INSERT INTO subir_solicitud (No_control, Solicitud_titulacion, Tipo, Contenido)
                VALUES ('$no_control', '$solicitud', '$tipo', '$contenido')";
        $ejecutar = mysqli_query($conexion, $query_insertar);
    }
    header("location: ../buscador_proceso.php");
    exit();
?>