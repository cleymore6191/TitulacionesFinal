<?php

//Establecer la conexion a la base de datos
    require 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numero_control = $_POST['numero_control'];
    $carrera = $_POST['carrera'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $trabajo = $_POST['trabajo'];
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];

    $query = "INSERT INTO datos_alumno (Nombre, Apellidos, No_control, Carrera, Email, Telefono, Trabajo, Empresa, Cargo)
                        VALUES ('$nombre', '$apellido', '$numero_control', '$carrera', '$email', '$telefono', '$trabajo', '$empresa', '$cargo')";
            
    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../datos_alumno.php");
    exit();
    
?>