<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        header("Location: login_docentes.php");
        exit();
    }

    $usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal del docente</title>
    <link rel="stylesheet" href="assets/css/Menu_docente.css">
</head>

<body>

    <div class="container">
        <img src="assets/images/Tecnologico.png" style="max-width: 200px; height: auto;">
        <img src="assets/images/LOGO_TEC.jpeg" style="float: right; max-width: 85px; height: auto;">
    </div>

    
    <h3 class="text">
        Division de Estudios Profesionales 
    </h3>

    <div class="contenedor">
        <div class="contenedor-1">
            <h1>Titulaciones en proceso</h1>
            <button onclick="window.location.href='buscador_proceso.php'">Entrar</button>
        </div>
        <div class="contenedor-1">
            <h1>Titulaciones concluidas</h1>
            <button onclick="window.location.href='titulaciones_concluidas.php'">Entrar</button>
        </div>
    </div>

    
</body>

</html>