<?php

session_start();

    include 'conexion_be.php';

    $numero_control = $_POST ['numero_control'];
    $contraseña = $_POST ['contraseña'];

    $validar_login = mysqli_query  ($conexion, "SELECT * FROM login_alumno 
    where No_control='$numero_control' and Contraseña='$contraseña'");

    if(mysqli_num_rows($validar_login)> 0){
        $_SESSION['usuario'] = $numero_control;

        header("location: ../menu_alumno.php");
        exit();
    }else{
        echo'';

        exit();
    }

?>