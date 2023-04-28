<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $query = "INSERT INTO login_docente(Nombre_completo, Usuario, Email, Contraseña)
                    VALUES ('$nombre_completo', '$usuario', '$email', '$contraseña')";
    
    $ejecutar = mysqli_query($conexion, $query);

    header("location: ../login_docentes.php");
    exit();


?>