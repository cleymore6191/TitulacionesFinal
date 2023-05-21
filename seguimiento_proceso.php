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
            <form action="php/visualizar_solicitud.php" method="POST">
                <p>Solicitud de titulacion</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>"> 
                <button id="visualizar-btn">Ver documento</buttom>               
            </form>
        </div>

        <div class="Certificado">
            <form action="php/visualizar_certificado.php" method="POST">
                <p>Certificado total</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

        <div class="Ingles">
            <form action="php/visualizar_ingles.php" method="POST">
                <p>Hoja de ingles</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

        <div class="No adeudo">
            <form action="php/visualizar_adeudo.php" method="POST">
                <p>Hoja de no adeudo</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <button id="visualizar-btn">Ver documento</button>
            </form>
        </div>

        <div class="Revisores">
            <form action="php/subir_revisores.php" method="POST" enctype="multipart/form-data">
                <p>Aviso de revisores</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <label for="Revisores"></label>
                <input type="file" name="Revisores">
                <input type="submit" value="Subir documento">
            </form>
        </div>

        <div class="3 firmas">
            <form action="" method="" enctype="multipart/form-data">
                <p>Formato de 3 firmas</p>
                <button id="visualizar-btn">Visualizar documento</button>
            </form>
        </div>

        <div class="Autorizacion de impresion">
            <form action="" method="" enctype="multipart/form-data">
                <p>Autorizacion de impresion </p>
                <button id="visualizar-btn">Visualizar documento</button>
            </form>
        </div>

        <div class="Liberacion de titulacion">
            <form action="" method="" enctype="multipart/form-data">
                <p>Liberacion de titulacion</p>
                <button id="visualizar-btn">Visualizar documento</button>
            </form>
        </div>

        <div class="Inconveniencia">
            <form action="" method="" enctype="multipart/form-data">
                <p>Hoja de inconveniencia</p>
                <button id="visualizar-btn">Visualizar documento</button>
            </form>
        </div>

        <div class="Titulacion">
            <form action="php/subir_aviso.php" method="POST" enctype="multipart/form-data">
                <p>Aviso de Titulacion</p>
                <input type="hidden" name="No_control" value=" <?php echo $_GET['No_control']; ?>">
                <label for="Aviso"></label>
                <input type="file" name="Aviso">
                <input type="submit" value="Subir documento">
            </form>
        </div>

    </div>

    <script src="assets/js/visualizar.js"></script>
    <script src="assets/js/detalleProcesos.js"></script>

</body>

</html>