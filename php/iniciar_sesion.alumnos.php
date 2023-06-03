<?php

    session_start();

    include 'conexion_be.php';

    $numero_control = $_POST ['numero_control'];
    $contraseña = $_POST ['contraseña'];

    $query = "SELECT * FROM login_alumno WHERE No_control='$numero_control' AND Contraseña='$contraseña'";
    $resultado = mysqli_query($conexion, $query);

    if(mysqli_num_rows($resultado) == 1){
        
        $_SESSION['numero_control'] = $numero_control;
        header("location: ../menu_alumno.php");
    }else{
        echo'';

        exit();
    }

?>