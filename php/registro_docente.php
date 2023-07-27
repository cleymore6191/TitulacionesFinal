<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $query_contar_usuarios = "SELECT COUNT(*) as Total_usuarios FROM login_docente";
    $resultado_contar_usuarios = mysqli_query($conexion, $query_contar_usuarios);
    $fila_contar_usuarios = mysqli_fetch_assoc($resultado_contar_usuarios);
    $total_usuarios = $fila_contar_usuarios['Total_usuarios'];

    $limite_usuarios = 5; // Establecer el límite máximo de usuarios

    if ($total_usuarios >= $limite_usuarios) {
        echo '
            <script>
                alert("Se ha alcanzado el límite máximo de usuarios registrados. No es posible realizar nuevos registros en este momento.");
                window.location = "../login_docentes.php";
            </script>
        ';
        exit();
    }

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