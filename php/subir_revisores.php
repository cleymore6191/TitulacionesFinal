<?php
    
    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    // Obtener información del nuevo documento
    $revisores = $_FILES['revisores']['name'];
    $tipo = $_FILES['revisores']['type'];
    $contenido = file_get_contents($_FILES['revisores']['tmp_name']);

    // Escapar valores para evitar inyección de SQL
    $no_control = mysqli_real_escape_string($conexion, $no_control);
    $revisores = mysqli_real_escape_string($conexion, $revisores);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    // Verificar si ya existe un registro para el número de control
    $query_verificar = "SELECT * FROM revisores WHERE No_control = '$no_control'";
    $resultado_verificar = mysqli_query($conexion, $query_verificar);

    if (mysqli_num_rows($resultado_verificar) > 0) {
        // Si existe un registro, actualizar los campos del documento
        $query_actualizar = "UPDATE revisores SET Asignacion_revisores = '$revisores', Tipo = '$tipo', Contenido = '$contenido' WHERE No_control = '$no_control'";
        mysqli_query($conexion, $query_actualizar);
    } else {
        // Si no existe un registro, insertar el nuevo documento
        $query_insertar = "INSERT INTO revisores (No_control, Asignacion_revisores, Tipo, Contenido)
                           VALUES ('$no_control', '$revisores', '$tipo', '$contenido')";
        mysqli_query($conexion, $query_insertar);
    }

    header("location: ../buscador_proceso.php");
    exit();
?>

<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $query = "INSERT INTO revisores (No_control, Asignacion_revisores, Tipo, Contenido)
                VALUES ('$no_control', '$revisores', '$tipo', '$contenido')";
    
    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../buscador_proceso.php");
    exit();


?>