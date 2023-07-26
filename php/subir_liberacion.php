<?php

include 'conexion_be.php';

$numero_control = $_POST['numero_control'];

// Obtener información del nuevo documento
$liberacion = $_FILES['liberacion']['name'];
$tipo = $_FILES['liberacion']['type'];
$contenido = file_get_contents($_FILES['liberacion']['tmp_name']);

// Escapar valores para evitar inyección de SQL
$numero_control = mysqli_real_escape_string($conexion, $numero_control);
$liberacion = mysqli_real_escape_string($conexion, $liberacion);
$tipo = mysqli_real_escape_string($conexion, $tipo);
$contenido = mysqli_real_escape_string($conexion, $contenido);

// Verificar si ya existe un registro para el número de control
$query_verificar = "SELECT * FROM liberacion_de_titulacion WHERE No_control = '$numero_control'";
$resultado_verificar = mysqli_query($conexion, $query_verificar);

if (mysqli_num_rows($resultado_verificar) > 0) {
    // Si existe un registro, actualizar los campos del documento
    $query_actualizar = "UPDATE liberacion_de_titulacion SET Liberacion = '$liberacion', Tipo = '$tipo', Contenido = '$contenido' 
                    WHERE No_control = '$numero_control'";
    mysqli_query($conexion, $query_actualizar);
} else {
    // Si no existe un registro, insertar el nuevo documento
    $query_insertar = "INSERT INTO liberacion_de_titulacion (No_control, Liberacion, Tipo, Contenido)
                       VALUES ('$numero_control', '$liberacion', '$tipo', '$contenido')";
    mysqli_query($conexion, $query_insertar);
}

    header("location: ../menu_alumno.php");
    exit();

?>