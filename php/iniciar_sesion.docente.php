<?php

session_start();

    include 'conexion_be.php';

    $usuario =$_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $validar_login = mysqli_query ($conexion, "SELECT * FROM login_docente
    WHERE usuario='$usuario' and Contraseña='$contraseña'");

    if(mysqli_num_rows($validar_login)> 0){
        $_SESSION['usuario']= $usuario;

        header("location: ../menu_docente.php");
        exit();
    }else{
        echo'';
        
        exit();
    }
?>