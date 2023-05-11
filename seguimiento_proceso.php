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


        <div class="Revisores">
            <form action="php/subir_revisores.php" method="POST" enctype="multipart/form-data">
                <p>Aviso de revisores</p>
                <input type="hidden" name="No_control" value="<?php echo $_GET['No_control']; ?>">
                <label for="Revisores"></label>
                <input type="file" name="Revisores">
                <input type="submit" value="Subir documento">
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

    

</div>

    <script src="assets/js/visualizar.js"></script>
    <script src="assets/js/detalleProcesos.js"></script>

</body>

</html>