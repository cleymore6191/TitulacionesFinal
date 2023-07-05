<?php
    session_start();

    if(!isset($_SESSION['numero_control'])){
        header ("Location: login_alumnos.php");
        exit();
    }

    $numero_control = $_SESSION['numero_control'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de tu titulacion</title>
    <link rel="stylesheet" href="assets/css/Seguimiento_alumno.css">
</head>

<body>

    <div class="container">
        <img src="assets/images/Tecnologico.png" style="max-width: 200px; height: auto;">
        <img src="assets/images/LOGO_TEC.jpeg" style="float: right; max-width: 85px; height: auto;">
    </div>

    <h3 class="text">
        Seguimiento del proceso de tu titulacion
        <?php echo $numero_control; ?>
    </h3>

        <div class="contenedor">
            <div class="Asesores">
                <form action="php/visualizar_revisores.php" method="POST">
                    <p>Asignacion de Revisores</p>
                    <input type="hidden" name="No_control" value="<?php echo $numero_control ?>"> 
                    <button id="visualizar-btn">Ver documento</button>
                </form>
            </div>

            <div class="Firmas">
                <form action="php/subir_firmas.php" method="POST" enctype="multipart/form-data">
                    <p>Formato de 3 firmas</p>
                    <input type="hidden" name="No_control" value="<?php echo $numero_control ?>"> 
                    <label for="firmas"></label>
                    <input type="file" name="firmas">
                    <input type="submit" value="Subir documento">
                </form>

                <form action="php/visualizar_firmas.php" method="POST">
                    <input type="hidden" name="No_control" value="<?php echo $numero_control ?>"> 
                    <button id="visualizar-btn">Ver documento</button>
                </form>
            </div>

            <div class="Autorizacion">
                <form action="php/subir_impresion.php" method="POST" enctype="multipart/form-data">
                    <p>Autorizacion de impresion</p>
                    <input type="hidden" name="No_control" value="<?php echo $numero_control ?>"> 
                    <label for="impresion"></label>
                    <input type="file" name="impresion">
                    <input type="submit" value="Subir documento">
                </form>

                <form action="php/visualizar_autorizacion.php" method="POST">
                    <input type="hidden" name="No_control" value="<?php echo $numero_control ?>"> 
                    <button id="visualizar-btn">Ver documento</button>
                </form>
            </div>

            <div class="Liberacion">
                <form action="php/subir_liberacion.php" method="POST" enctype="multipart/form-data">
                    <p>Liberacion de titulacion</p>
                    <input type="hidden" name="No_control" value="<?php echo $numero_control ?>">
                    <label for="liberacion"></label>
                    <input type="file" name="liberacion">
                    <input type="submit" value="Subir documento">
                </form>

                <form action="php/visualizar_liberacion.php" method="POST">
                    <input type="hidden" name="No_control" value="<?php echo $numero_control ?>"> 
                    <button id="visualizar-btn">Ver documento</button>
                </form>
            </div>

            <div class="Inconveniencia">
                <form action="php/subir_inconveniencia.php" method="POST" enctype="multipart/form-data">
                    <p>Hoja de no Inconveniencia y pago de titulacion</p>
                    <input type="hidden" name="No_control" value="<?php echo $numero_control ?>">
                    <label for="inconveniencia"></label>
                    <input type="file" name="inconveniencia">
                    <input type="submit" value="Subir documento">
                </form>    

                <form action="php/visualizar_inconveniencia.php" method="POST">
                    <input type="hidden" name="No_control" value="<?php echo $numero_control ?>"> 
                    <button id="visualizar-btn">Ver documento</button>
                </form>
            </div>

            <div class="Fecha"> 
                <form action="php/visualizar_titulacion.php" method="POST">
                    <p>Fecha de titulacion</p>
                    <input type="hidden" name="No_control" value="<?php echo $numero_control ?>">
                    <button id="visualizar-btn">Aviso de tu titulacion</button>
                </form>
            </div>

            <form action="php/cerrar_session.php" method="POST">
                <button type="submit">Cerrar Session</button>
            </form>
        </div>
    

    <script src="assets/js/imprimir.js"></script>
    <script src="assets/js/visualizar.js"></script>
</body>

</html>