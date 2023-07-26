<?php

include 'conexion_be.php';

$numero_control = $_POST['numero_control'];

// Obtener informacion del nuevo documento
$autorizacion = $_FILES['impresion']['name'];
$tipo = $_FILES['impresion']['type'];
$contenido = file_get_contents($_FILES['impresion']['tmp_name']);

// Escapar valores par evotar inyeccion de SQL
$numero_control = mysqli_real_escape_string($conexion, $numero_control);
$autorizacion = mysqli_real_escape_string($conexion, $autorizacion);
$tipo = mysqli_real_escape_string($conexion, $tipo);
$contenido = mysqli_real_escape_string($conexion, $contenido);

// Verificar si ya existe un regisro para el numero de control
$query_verificar = "SELECT * FROM autorizacion WHERE No_control = '$numero_control'";
$resultado_verificar = mysqli_query($conexion, $query_verificar);

if(mysqli_num_rows($resultado_verificar) > 0){
    // Si existe un registro, actualizar los campos del documento
    $query_actualizar = "UPDATE autorizacion SET Autorizacion_impresion = '$autorizacion', Tipo = '$tipo', Contenido = '$contenido' 
                            WHERE No_control = '$numero_control'";
    mysqli_query($conexion, $query_actualizar);
}else{
    // Si no existe un registro, insertar el nuevo documento
    $query_insertar = "INSERT INTO autorizacion (No_control, Autorizacion_impresion, Tipo, Contenido)
                        VALUES ('$numero_control', '$autorizacion', '$tipo', '$contenido')";
    mysqli_query($conexion, $query_insertar);
} 

    header("location: ../menu_alumno.php");
    exit();
?>