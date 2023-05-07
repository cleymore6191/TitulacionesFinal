<?php

    include 'conexion_be.php';

    if($_POST['subir']){
        if(file_exists($_FILES['archivo']['tmp_name'])){

            $asignacion_revisores = $_FILES['archivo']['name'];

            $sql = $con->query("INSERT INTO expediente_alumno (Asignacion_revisores) VALUES ('$asignacion_revisores')");
        }else{
            echo "No se subio";
        }

        }
?>