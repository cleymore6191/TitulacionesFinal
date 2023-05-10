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

        <div>
            <form action="php/subir_aviso.php" method="POST" enctype="multipart/form-data">
                <div class="Titulacion">
                    <p>Aviso de Titulacion</p>
                    <input type="hidden" name="No_control" value=" <?php echo $_GET['No_control']; ?>">
                    <label for="Aviso"></label>
                    <input type="file" name="Aviso">
                    <input type="submit" value="Subir documento">
                </div>
            </form>
        </div>
        
    </div>

    

</div>

    <script src="assets/js/visualizar.js"></script>
    <script src="assets/js/detalleProcesos.js"></script>

</body>

</html>