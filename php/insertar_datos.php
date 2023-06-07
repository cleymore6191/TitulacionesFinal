<?php

//Establecer la conexion a la base de datos
    require 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $numero_control = $_POST['numero_control'];
    $carrera = $_POST['carrera'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $asesor = $_POST['asesor'];
    $trabajo = $_POST['trabajo'];
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];

    $query = "INSERT INTO datos_alumno (No_control, Nombre, Apellido, Carrera, Telefono, Email, Asesor, Trabajas, Empresa, Cargo)
                        VALUES ('$numero_control', '$nombre', '$apellido', '$carrera', '$telefono', '$email', '$asesor', '$trabajo', '$empresa', '$cargo')";

    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../menu_alumno.php");
    exit();

    
?>