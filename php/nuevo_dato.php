<?php

    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $numero_control = $_POST['numero_control'];
    $carrera = $_POST['carrera'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $query = "INSERT INTO datos_alumno (No_control, Nombre, Apellido, Carrera, Telefono, Email)
    VALUES ('$numero_control', '$nombre', '$apellido', '$carrera', '$telefono', '$email')";

    $ejecutar = mysqli_query($conexion, $query);

    header("Location: ../buscador_proceso.php");
    exit();
?>