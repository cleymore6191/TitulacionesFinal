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
            <div class="Solicitud">
                <p>Solicitud de proceso de titulacion</p>
            </div>
            <input type="file" name="archivo" required>

            <div class="Certificado">
                <p>Certificado total</p>
            </div>
            <input type="file" name="archivo" required>

            <div class="Ingles">
                <p>Hoja de liberacion de ingles</p>
            </div>
            <input type="file" name="archivo" required>

            <div class="No adeudo">
                <p>Hoja de no adeudo triplicado</p>
            </div>
            <input type="file" name="archivo" required>

            <div class="Asesor">
                <p>Nombre completo de tu asesor</p>
                <label for="nombre" class="form__label"></label>
                <input type="text" name="nombre" required>
            </div>

            <div class="Enviar">
                <input type="submit">
            </div>

        </form>
    </div>

</body>

</html>