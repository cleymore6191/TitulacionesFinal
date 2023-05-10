<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];
    $aviso = $_FILES['Aviso'];

    $query = "INSERT INTO aviso(No_control, Aviso_titulacion) 
                VALUES ('$no_control', '$aviso')";

    mysqli_query($conexion, $query);

    echo "Archivo subido exitosamente";
    
?>