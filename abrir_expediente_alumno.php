<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir expediente</title>
    <link rel="stylesheet" href="assets/css/abrir.expediente.alumno.css">
</head>

<body>

    <h3 class="text">
        Abrir proceso de titulacion
    </h3>

    <div class="contenedor">
        <form action="php/subir_expediente.alumno.php" method="post" enctype="multipart/form-data">
            <div class="No_control">
                <p>Escribe tu numero de control</p>
                <label for="No_control" class="form__label"></label>
                <input type="text" name="No_control" required>
            </div>

            <div class="Nota">
                <p>Subir los documento en pdf</p>
            </div>
            
            <div class="Solicitud">
                <p>Solicitud de proceso de titulacion</p>
                <input type="file" name="solicitud" required>
            </div>

            <div class="Certificado">
                <p>Certificado total</p>
                <input type="file" name="certificado" required>
            </div>

            <div class="Ingles">
                <p>Hoja de liberacion de ingles</p>
                <input type="file" name="ingles" required>
            </div>
            
            <div class="No adeudo">
                <p>Hoja de no adeudo triplicado</p>
                <input type="file" name="adeudo" required>
            </div>

            <div class="Enviar">
                <input type="submit" onclick="mostrarDocumentos">
            </div>

        </form>
    </div>

    <script src="assets/js/alert.js"></script>

</body>

</html>