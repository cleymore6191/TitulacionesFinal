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

        <div class="Solicitud">
            <p>Solicitud de proceso de titulacion</p>
            <button>Ver solicitud</button>
        </div>

        <div class="Certificado">
            <p>Certificado total</p>
            <button id="visualizar-btn">Ver certificado</button>
        </div>

        <div class="Hoja de ingles">
            <p>Hoja de ingles liberado</p>
            <button id="visualizar-btn">Ver hoja de ingles</button>
        </div>

        <div class="Hoja de no adeudo">
            <p>Hoja de no adeudo</p>
            <button id="visualizar-btn">Ver hoja de no adeudo</button>
        </div>
    
        <form action="php/asignacion.php" method="POST" enctype="multipart/form-data">
            <p>Asignacion de revisores</p>
            <input type="file" name="archivo">
            <input type="submit" name="subir" value="enviar">
        </form>

</div>

    <script src="assets/js/visualizar.js"></script>

</body>

</html>