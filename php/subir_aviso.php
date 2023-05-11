<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];
    $aviso = $_FILES['Aviso'];

    $contenido_aviso = file_get_contents($aviso['tmp_name']);

    $contenido_aviso = mysqli_real_escape_string($conexion, $contenido_aviso);

    $query = "INSERT INTO aviso(No_control, Aviso_titulacion) 
                VALUES ('$no_control','$contenido_aviso')";

    mysqli_query($conexion, $query);

    echo "<script>alert('Documento subido exitosamente');</script>";

    header("location: ../seguimiento_proceso.php");
    exit();
    
?>