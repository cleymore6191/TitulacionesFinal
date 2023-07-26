<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    if(empty($usuario) || empty($contraseña)){
        echo '
        <script>
            alert("No te has registrado");
            window.location = "../login_docentes.php";
        </script>
        ';
        exit();
    }

    $query = "INSERT INTO login_docente(Nombre_completo, Usuario, Email, Contraseña)
                    VALUES ('$nombre_completo', '$usuario', '$email', '$contraseña')";
    
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM login_docente
                WHERE Usuario='$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya esta registrado")
                window.location ="../login_docentes.php";
            </script>
            ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Registro exitoso, ya puedes iniciar sesion");
                window.location ="../login_docentes.php";
            </script>
            ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, Usuario no almacenado");
                window.location ="../login_docentes.php";
            </script>
            ';
    }

    exit();
?>