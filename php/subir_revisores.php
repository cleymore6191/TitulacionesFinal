<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];
    $revisores = $_FILES['Revisores'];

    $contenido_revisores = file_get_contents($revisores['tmp_name']);

    $contenido_revisores = mysqli_real_escape_string($conexion, $contenido_revisores);

    $query = "INSERT INTO revisores(No_control, Asignacion_revisores)
                VALUES ('$no_control', '$contenido_revisores')";

    mysqli_query($conexion, $query);

    echo "<script>alert('Documento subido exitosamente');</script>";

    header("location: seguimiento_proceso.php?No_control=" . $no_control);
    exit();

?>