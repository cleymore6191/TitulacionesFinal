<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de tu titulacion</title>
    <link rel="stylesheet" href="assets/css/seguimiento.alumno.css">
</head>

<body>

    <h3 class="text">
        Seguimiento de tu proceso de titulacion
    </h3>

    <form action="" method="" enctype="multipart/form-data">
        <div class="contenedor">
            <div class="Asesores">
                <p>Asignacion de Revisores</p>
                <button id="visualizar-btn">Visualizar documento</button>
            </div>

            <div class="Firmas">
                <p>Formato de 3 firmas</p>
                <input type="file" name="archivo">
                <input type="submit" name="submit" value="Subir documento">
            </div>

            <div class="Autorizacion">
                <p>Autorizacion de impresion</p>
                <input type="file" name="archivo">
                <input type="submit" name="submit" value="Subir documento">
            </div>

            <div class="Liberacion">
                <p>Liberacion de titulacion</p>
                <input type="file" name="archivo">
                <input type="submit" name="submit" value="Subir documento">
            </div>

            <div class="Inconveniencia">
                <p>Hoja de no Inconveniencia</p>
                <input type="file" name="archivo">
                <input type="submit" name="submit" value="Subir documento">
            </div>

            <div class="Fecha">
                <p>Fecha de titulacion</p>
                <button id="visualizar-btn">Aviso de tu titulacion</button>
            </div>

            <div>
                <button onclick="window.location.href='menu_alumno.php'">Atras</button>
                <button onclick="window.location.href='login_alumnos.php'">Cerrar Session</button>
            </div>
        </div>
    </form>

    <script src="assets/js/imprimir.js"></script>
    <script src="assets/js/visualizar.js"></script>
</body>

</html>