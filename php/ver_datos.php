<?php

    if(isset($_POST["No_control"])){

        $numero_control = $_POST["No_control"];

        $sql = "SELECT * No_control, Nombre, Apellidos, Carrera, Telefono, Email, Trabajo, Empresa, Cargo FROM datos_alumno WHERE No_control =  $numero_control";

        $resultado = mysqli_query($conn, $sql);

        if(mysqli_num_rows($resultado) == 1){

            $_fila = mysqli_fetch_assoc($resultado);

            
        
        } else {
            echo"No se han encontrado resultados";
        }


    }

?>