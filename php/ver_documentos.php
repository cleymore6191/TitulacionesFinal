<?php

    $conexion = mysqli_connect("localhost", "root", "", "titulaciones");

    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero_control = $_POST["No_control"];
    $asignacion_asesor = $_FILES['archivo']['name'];
    $aviso = $_FILES['archivo']['name'];
    $protocolo = $_FILES['archivo']['name'];

    $contenido_archivo = file_get_contents($_FILES['archivo']['tmp_name']);

    $query = "INSERT INTO expediente_alumno ( Protocolo)
                        VALUES ( '$protocolo') WHEN  no_control=  $numero_control ";

    mysqli_query($conexion, $query);

    echo "El archivo se ha subido correctamente";

    }

?>
