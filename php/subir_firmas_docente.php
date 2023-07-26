<?php
    
    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    // Obtener información del nuevo documento
    $firmas = $_FILES['firmas']['name'];
    $tipo = $_FILES['firmas']['type'];
    $contenido = file_get_contents($_FILES['firmas']['tmp_name']);

    // Escapar valores para evitar inyección de SQL
    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $firmas = mysqli_real_escape_string($conexion, $firmas);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    // Verificar si ya existe un registro para el número de control
    $query_verificar = "SELECT * FROM formato_firmas WHERE No_control = '$no_control'";
    $resultado_verificar = mysqli_query($conexion, $query_verificar);

    if (mysqli_num_rows($resultado_verificar) > 0) {
        // Si existe un registro, actualizar los campos del documento
        $query_actualizar = "UPDATE formato_firmas SET 3_firmas = '$firmas', Tipo = '$tipo', Contenido = '$contenido' WHERE No_control = '$no_control'";
        mysqli_query($conexion, $query_actualizar);
    } else {
        // Si no existe un registro, insertar el nuevo documento
        $query_insertar = "INSERT INTO formato_firmas (No_control, 3_firmas, Tipo, Contenido)
                           VALUES ('$no_control', '$firmas', '$tipo', '$contenido')";
        mysqli_query($conexion, $query_insertar);
    }

    header("location: ../buscador_proceso.php");
    exit();
?>
