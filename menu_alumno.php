<?php
    session_start();

    if(!isset($_SESSION['numero_control'])){
        header("Location: login_alumnos.php");
        exit();
    }

    $numero_control = $_SESSION['numero_control'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal del alumno</title>
    <link rel="stylesheet" href="assets/css/menu.alumno.css">
</head>

<body>

    <h3 class="text">
        Bienvenido alumno <?php echo $numero_control ?>
    </h3>

    <div class="contenedor">
        <div class="contenedor-1">
            <h1>Datos generales</h1>
            <button onclick="window.location.href='datos_alumno.php'">Entrar</button>
        </div>
        <div class="contenedor-1">
            <h1>Entrar para iniciar tu proceso</h1>
            <button onclick="window.location.href='abrir_expediente_alumno.php'">Comenzar titulacion</button>
        </div>
        <div class="contenedor-1">
            <h1>Seguimiento de tu titulacion</h1>
            <button onclick="window.location.href='seguimiento_alumno.php'">Ver proceso</button>
        </div>
    </div>
</body>

</html>