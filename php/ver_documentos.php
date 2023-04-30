<?php

    include 'conexion_be.php';

    if($conn->connect_error){
        die("Error al conectar con la base de datos: ". $conn->connect_error);

    }

    $asesor = $_POST["nombre"];

    $solicitud_titulacion = $_FILES['archivo']['name'];
    $certificado_total = $_FILES['archivo']['name'];
    $hoja_ingles = $_FILES['archivo']['name'];
    $no_adeudo = $_FILES['archivo']['name'];

    $sql = "INSERT INTO expediente_alumno "


?>