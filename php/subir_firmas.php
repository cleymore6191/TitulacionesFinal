<?php

include 'conexion_be.php';

$numero_control = $_POST['numero_control'];

// Obtener información del nuevo documento
$firmas = $_FILES['firmas']['name'];
$tipo = $_FILES['firmas']['type'];
$contenido = file_get_contents($_FILES['firmas']['tmp_name']);

// Escapar valores para evitar inyección de SQL
$numero_control = mysqli_real_escape_string($conexion, $numero_control);
$firmas = mysqli_real_escape_string($conexion, $firmas);
$tipo = mysqli_real_escape_string($conexion, $tipo);
$contenido = mysqli_real_escape_string($conexion, $contenido);

// Verificar si ya existe un registro para el número de control
$query_verificar = "SELECT * FROM formato_firmas WHERE No_control = '$numero_control'";
$resultado_verificar = mysqli_query($conexion, $query_verificar);

if (mysqli_num_rows($resultado_verificar) > 0) {
    // Si existe un registro, actualizar los campos del documento
    $query_actualizar = "UPDATE formato_firmas SET 3_firmas = '$firmas', Tipo = '$tipo', Contenido = '$contenido' 
                            WHERE No_control = '$numero_control'";
    mysqli_query($conexion, $query_actualizar);
} else {
    // Si no existe un registro, insertar el nuevo documento
    $query_insertar = "INSERT INTO formato_firmas (No_control, 3_firmas, Tipo, Contenido)
                       VALUES ('$numero_control', '$firmas', '$tipo', '$contenido')";
    mysqli_query($conexion, $query_insertar);
}
    header("location: ../menu_alumno.php");
    exit();


?>