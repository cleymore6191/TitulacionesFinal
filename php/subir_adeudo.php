<?php
    
    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    // Obtener información del nuevo documento
    $no_adeudo = $_FILES['adeudo']['name'];
    $tipo = $_FILES['adeudo']['type'];
    $contenido = file_get_contents($_FILES['adeudo']['tmp_name']);

    // Escapar valores para evitar inyección de SQL
    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $no_adeudo = mysqli_real_escape_string($conexion, $no_adeudo);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);
 
    // Verificar si ya existe un registro para el número de control
    $query_verificar = "SELECT * FROM subir_adeudo WHERE No_control = '$no_control'";
    $resultado_verificar = mysqli_query($conexion, $query_verificar);

    if (mysqli_num_rows($resultado_verificar) > 0) {
        // Si existe un registro, actualizar los campos del documento
        $query_actualizar = "UPDATE subir_adeudo SET No_adeudo = '$no_adeudo', Tipo = '$tipo', Contenido = '$contenido' WHERE No_control = '$no_control'";
        mysqli_query($conexion, $query_actualizar);
    } else {
        // Si no existe un registro, insertar el nuevo documento
        $query_insertar = "INSERT INTO subir_adeudo (No_control, No_adeudo, Tipo, Contenido)
                           VALUES ('$no_control', '$no_adeudo', '$tipo', '$contenido')";
        mysqli_query($conexion, $query_insertar);
    }

    header("location: ../buscador_proceso.php");
    exit();
?>