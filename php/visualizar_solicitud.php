<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];
    

    $query = "SELECT Solicitud_titulacion FROM abrir_expediente WHERE No_control = '$no_control'";
    
    $resultado = mysqli_query($conexion, $query);

    if($row = mysqli_fetch_assoc($resultado)){

        $solicitud_titulacion = $row ['Solicitud_titulacion'];
    }

    header('content-Type: application/pdf');

    echo $solicitud_titulacion;
?>