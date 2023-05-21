<?php

    include 'conexion_be.php';

    $no_control = $_POST['No_control'];

    $query = "SELECT Contenido FROM subir_certificado WHERE No_control = '$no_control'";
    $resultado = mysqli_query($conexion, $query);

    if($resultado && mysqli_num_rows($resultado) > 0){

        $row = mysqli_fetch_assoc($resultado);
        $contenido = $row['Contenido'];

        header("Content-type: application/pdf");
        
        echo $contenido;
    }else{
        echo "El alumno no a abierto su expediente";
    }

?>