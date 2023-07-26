<?php
    
    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    // Obtener información del nuevo documento
    $analisis = $_FILES['analisis']['name'];
    $tipo = $_FILES['analisis']['type'];
    $contenido = file_get_contents($_FILES['analisis']['tmp_name']);

    // Escapar valores para evitar inyección de SQL
    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $analisis = mysqli_real_escape_string($conexion, $analisis);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    // Verificar si ya existe un registro para el número de control
    $query_verificar = "SELECT * FROM analisis WHERE No_control = '$no_control'";
    $resultado_verificar = mysqli_query($conexion, $query_verificar);

    if (mysqli_num_rows($resultado_verificar) > 0) {
        // Si existe un registro, actualizar los campos del documento
        $query_actualizar = "UPDATE analisis SET Solicitud_analisis = '$analisis', Tipo = '$tipo', Contenido = '$contenido' WHERE No_control = '$no_control'";
        mysqli_query($conexion, $query_actualizar);
    } else {
        // Si no existe un registro, insertar el nuevo documento
        $query_insertar = "INSERT INTO analisis (No_control, Solicitud_analisis, Tipo, Contenido)
                           VALUES ('$no_control', '$analisis', '$tipo', '$contenido')";
        mysqli_query($conexion, $query_insertar);
    }

    header("location: ../buscador_proceso.php");
    exit();
?>