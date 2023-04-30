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

        <h3 class="text">
            Expediente del egresado
        </h3>

        <form action="php/ver_documentos.php" method="POST">
            <div class="contenedor">
                <div class="Solicitud">
                    <p>Solicitud de titulacion</p>
                    <button id="visualizar-btn">Ver Solicitud</button>
                </div>

                <div class="Certificado">
                    <p>Certificado total</p>
                    <button id="visualizar-btn">Ver certificado</button>
                </div>

                <div class="Ingles">
                    <p>Hoja de liberacion de ingles</p>
                    <button id="visualizar-btn">Ver hoja de ingles</button>
                </div>

                <div class="No adeudo">
                    <p>Hoja de no adeudo </p>
                    <button id="visualizar-btn">Ver hoja de no adeudo</button>
                </div>

                <div class="Asesor">
                    <p>Nombre del asesor:</p>
                </div>

                <div class="Asesores">
                    <p>Asignacion de Revisores</p>
                    <input type="file" name="archivo">
                    <input type="submit" name="submit" value="Subir documento">
                </div>

                <div class="Firmas">
                    <p>Formato de 3 firmas</p>
                    <button id="visualizar-btn">Ver 3 firmas</button>
                </div>

                <div class="Autorizacion">
                    <p>Autorizacion de impresion</p>
                    <button id="visualizar-btn">Ver Autorizacion de impresion</button>
                </div>

                <div class="Liberacion">
                    <p>Liberacion de titulacion</p>
                    <button id="visualizar-btn">Ver liberacion de titulacion</button>
                </div>

                <div class="No inconveniencia">
                    <p>Hoja de no inconveniencia</p>
                    <button id="visualizar-btn">Ver hoja de no inconveniencia</button>
                </div>

                <div class="Aviso">
                    <p>Aviso de titulacion</p>
                    <input type="file" name="archivo">
                    <input type="submit" name="submit" value="Subir documento">
                </div>
            </div>
        </form>

        <script src="assets/js/visualizar.js"></script>

    </body>

</html>