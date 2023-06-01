<?php

    include 'conexion_be.php';

    $inconveniencia = $_FILES['inconveniencia']['name'];
    $tipo = $_FILES['inconveniencia']['type'];
    $contenido = file_get_contents($_FILES['inconveniencia']['tmp_name']);

    $inconveniencia = mysqli_real_escape_string($conexion, $inconveniencia);
    $tipo = mysqli_real_escape_string($conexion, $inconveniencia);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    $query = "INSERT INTO inconveniencia (Hoja_inconveniencia, Tipo, Contenido)
                VALUES ('$inconveniencia', '$tipo', '$contenido')";

    $ejecutar = mysqli_query($conexion, $query);
    

?>