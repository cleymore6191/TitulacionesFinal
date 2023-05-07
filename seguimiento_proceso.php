<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento del proceso</title>
    <link rel="stylesheet" href="assets/css/seguimiento.alumno.css">
</head>
<body>

<div class="contenedor">


    <div style="text-align:center;">
        <?php echo "El numero de control del alumno: ". $_GET['No_control']; ?> 
    </div>

    <form action="php/visualizar_solicitud.php" method="$_FILES">
        <div class="Solicitud">
            <p>Solicitud de proceso de titulacion</p>
            <button id="visualizar-btn">Ver solicitud</button>
        </div>
    </form>
</div>

        

    <script src="assets/js/visualizar.js"></script>

</body>

</html>