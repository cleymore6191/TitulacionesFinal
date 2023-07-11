<?php

    include 'conexion_be.php';

    $numero_control = $_POST['numero_control'];
    $contraseña = $_POST['contraseña'];

    if (empty($numero_control) || empty($contraseña)) {
        echo '
            <script>
                alert("No te has registrado");
                window.location = "../login_alumnos.php";
            </script>
        ';
        exit();
    }

    $query = "INSERT INTO login_alumno(No_control, Contraseña)  
                VALUES('$numero_control', '$contraseña')";

    $verificar_no_control = mysqli_query($conexion, "SELECT * FROM login_alumno 
                WHERE No_control='$numero_control'");

    if(mysqli_num_rows($verificar_no_control) > 0 ){
        echo '
            <script>
                alert("Este numero de control ya esta registrado, intenta con otro")
                window.location ="../login_alumnos.php";
            </script>
            ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Registro exitoso, ya puedes iniciar sesion");
                window.location ="../login_alumnos.php";
            </script>
            ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, No. de control no almacenado");
                window.location ="../login_alumnos.php";
            </script>
            ';
    }
    
    header("location: ../login_alumnos.php");
    exit();

?>