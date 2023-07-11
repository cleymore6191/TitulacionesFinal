<?php

    session_start();

    include 'conexion_be.php';

    $numero_control = $_POST ['numero_control'];
    $contraseña = $_POST ['contraseña'];

    $query = "SELECT * FROM login_alumno WHERE No_control='$numero_control' AND Contraseña='$contraseña'";
    $resultado = mysqli_query($conexion, $query);

    if(mysqli_num_rows($resultado) == 1) {
         
        $_SESSION['numero_control'] = $numero_control;
        header("Location: ../menu_alumno.php");
        exit();
        
    }else{
        echo '
        <script>
            alert("El número de control o la contraseña son incorrectos");
            window.location = "../login_alumnos.php";
        </script>
        ';
    exit();
    }

?>