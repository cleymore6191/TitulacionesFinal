<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento del proceso</title>
    <link rel="stylesheet" href="assets/css/Seguimiento_alumno.css">
</head>
<body>
    
    <div class="container">
        <img src="assets/images/Tecnologico.png" style="max-width: 200px; height: auto;">
        <img src="assets/images/LOGO_TEC.jpeg" style="float: right; max-width: 85px; height: auto;">
    </div>


    <div class="contenedor">
        <div style="text-align:center;">
            <?php echo "El numero de control del alumno: ". $_GET['No_control']; ?> 
        </div>

        <p>Subir expediente en caso de que el alumno no continuo su tramite</p>

        <div class="Solicitud">
            <form action="php/subir_solicitud.php" method="POST" enctype="multipart/form-data">
                <p>Solicitud de titulacion</p> 
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <label for="solicitud"></label>
                <input type="file" name="solicitud">
                <input type="submit" value="Subir documento" onclick="mostrarExpediente()"> 
            </form>

            <form action="php/visualizar_solicitud.php" method="POST">
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>               
            </form>
        </div>

        <div class="Certificado">
            <form action="php/subir_certificado.php" method="POST" enctype="multipart/form-data">
                <p>Certificado total</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <label for="certificado"></label>
                <input type="file" name="certificado">
                <input type="submit" value="Subir documento" onclick="mostrarExpediente()">
            </form>

            <form action="php/visualizar_certificado.php" method="POST">
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

        <div class="Ingles">
            <form action="php/subir_ingles.php" method="POST" enctype="multipart/form-data">
                <p>Liberacion de ingles</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <label for="ingles"></label>
                <input type="file" name="ingles">
                <input type="submit" value="Subir documento" onclick="mostrarExpediente()">
            </form>

            <form action="php/visualizar_ingles.php" method="POST">
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

        <div class="No adeudo">
            <form action="php/subir_adeudo.php" method="POST" enctype="multipart/form-data">
                <p>Hoja de no adeudo</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <label for="adeudo"></label>
                <input type="file" name="adeudo">
                <input type="submit" value="Subir documento" onclick="mostrarExpediente()">
            </form>

            <form action="php/visualizar_adeudo.php" method="POST">
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

        <div class="analisis">
            <form action="php/subir_analisis.php" method="POST" enctype="multipart/form-data">
                <p>Analisis de titulacion</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <label for="analisis"></label>
                <input type="file" name="analisis">
                <input type="submit" value="Subir documento" onclick="mostrarExpediente()">
            </form>

            <form action="php/visualizar_analisis.php" method="POST">
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

        <div class="Revisores">
            <form action="php/subir_revisores.php" method="POST" enctype="multipart/form-data">
                <p>Aviso de revisores</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <label for="revisores"></label>
                <input type="file" name="revisores">
                <input type="submit" value="Subir documento" onclick="mostrarExpediente()">
            </form>

            <form action="php/visualizar_revisores.php" method="POST">
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

        <div class="3 firmas">
            <form action="php/subir_firmas_docente.php" method="POST" enctype="multipart/form-data">
                <p>Formato de 3 firmas</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <label for="firmas"></label>
                <input type="file" name="firmas">
                <input type="submit" value="Subir documento" onclick="mostrarExpediente()">
            </form>

            <form action="php/visualizar_firmas.php" method="POST">
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

        <div class="Autorizacion de impresion">
            <form action="php/subir_impresion_docente.php" method="POST" enctype="multipart/form-data">
                <p>Autorizacion de impresion</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <label for="impresion"></label>
                <input type="file" name="impresion">
                <input type="submit" value="Subir documento" onclick="mostrarExpediente()">
            </form>

            <form action="php/visualizar_autorizacion.php" method="POST">
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

        <div class="Liberacion de titulacion">
            <form action="php/subir_liberacion_docente.php" method="POST" enctype="multipart/form-data">
                <p>Liberacion de titulacion</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <label for="liberacion"></label>
                <input type="file" name="liberacion">
                <input type="submit" value="Subir documento" onclick="mostrarExpediente()">
            </form>

            <form action="php/visualizar_liberacion.php" method="POST">
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

        <div class="Inconveniencia">
            <form action="php/visualizar_inconveniencia.php" method="POST">
                <p>Hoja de inconveniencia</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

        <div class="Titulacion">
            <form action="php/subir_titulacion.php" method="POST" enctype="multipart/form-data">
                <p>Aviso de Titulacion</p>
                <input type="hidden" name="No_control" value=" <?php echo $_GET['No_control']; ?>">
                <label for="aviso"></label>
                <input type="file" name="aviso">
                <input type="submit" value="Subir documento" onclick="mostrarAviso()">
            </form>

            <form action="php/visualizar_titulacion.php" method="POST">
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

    </div>

    <script src="assets/js/alert.js"></script>
    <script src="assets/js/visualizar.js"></script>
    <script src="assets/js/detalleProcesos.js"></script>

</body>

</html>