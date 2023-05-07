<?php

//Establecer la conexion a la base de datos
    require 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numero_control = $_POST['numero_control'];
    $carrera = $_POST['carrera'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $trabajo = $_POST['trabajo'];
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];

    $query = "INSERT INTO datos_alumno (Nombre, Apellidos, No_control, Carrera, Telefono, Email, Trabajo, Empresa, Cargo)
                        VALUES ('$nombre', '$apellido', '$numero_control', '$carrera', '$telefono', '$email', '$trabajo', '$empresa', '$cargo')";
            
    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../datos_alumno.php");
    exit();
    
?>