<?php

    session_start();

    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $query = "SELECT * FROM login_docente WHERE Usuario='$usuario' AND Contraseña='$contraseña'";
    $resultado = mysqli_query($conexion, $query);

    if(mysqli_num_rows($resultado) == 1) {

        $_SESSION['usuario'] = $usuario;
        header("Location: ../menu_docente.php");
        exit();
        
    } else {
        echo '
        <script>
            alert("El usuario o la contraseña son incorrectos");
            window.location = "../login_docentes.php";
        </script>
        ';
        exit();
    }

?>
