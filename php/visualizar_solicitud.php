<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];
    

    $query = "SELECT Solicitud_titulacion FROM abrir_expediente WHERE No_control = '$no_control'";

    $resultado = mysqli_query($conexion, $query);

    $registro = mysqli_fetch_assoc($resultado);

    $documento = $registro['Solicitud_titulacion'];

    if (!$registro || empty($documento)){
        echo "El documento no existe o no esta disponible";
        exit;
    }
?>