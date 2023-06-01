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

        <div class="contenedor">
            <div class="Asesores">
                <form action="" method="">
                    <p>Asignacion de Revisores</p>
                    <button id="visualizar-btn">Visualizar documento</button>
                </form>
            </div>

            <div class="Firmas">
                <form action="php/subir_firmas.php" method="POST" enctype="multipart/form-data">
                    <p>Formato de 3 firmas</p>
                    <label for="firmas"></label>
                    <input type="file" name="firmas">
                    <input type="submit" value="Subir documento">
                </form>
            </div>

            <div class="Autorizacion">
                <form action="php/subir_impresion.php" method="POST" enctype="multipart/form-data">
                    <p>Autorizacion de impresion</p>
                    <label for="impresion"></label>
                    <input type="file" name="impresion">
                    <input type="submit" value="Subir documento">
                </form>
            </div>

            <div class="Liberacion">
                <form action="php/subir_liberacion.php" method="POST" enctype="multipart/form-data">
                    <p>Liberacion de titulacion</p>
                    <label for="liberacion"></label>
                    <input type="file" name="liberacion">
                    <input type="submit" value="Subir documento">
                </form>
            </div>

            <div class="Inconveniencia">
                <form action="php/subir_inconveniencia.php" method="POST" enctype="multipart/form-data">
                    <p>Hoja de no Inconveniencia</p>
                    <label for="inconveniencia"></label>
                    <input type="file" name="inconveniencia">
                    <input type="submit" value="Subir documento">
                </form>    
            </div>

            <div class="Fecha"> 
                <form action="" method="">
                <p>Fecha de titulacion</p>
                <button id="visualizar-btn">Aviso de tu titulacion</button>
                </form>
            </div>

            <div>
                <button onclick="window.location.href='menu_alumno.php'">Atras</button>
                <button onclick="window.location.href='login_alumnos.php'">Cerrar Session</button>
            </div>
        </div>
    

    <script src="assets/js/imprimir.js"></script>
    <script src="assets/js/visualizar.js"></script>
</body>

</html>