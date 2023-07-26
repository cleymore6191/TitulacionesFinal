<?php

    include 'conexion_be.php';

    $numero_control = $_POST['numero_control'];
    
    //Obtener informacion del nuevo documento
    $inconveniencia = $_FILES['inconveniencia']['name'];
    $tipo = $_FILES['inconveniencia']['type'];
    $contenido = file_get_contents($_FILES['inconveniencia']['tmp_name']);

    //Escapar valores para evitar inyeccion de SQL
    $numero_control = mysqli_real_escape_string($conexion, $numero_control);
    $inconveniencia = mysqli_real_escape_string($conexion, $inconveniencia);
    $tipo = mysqli_real_escape_string($conexion, $inconveniencia);
    $contenido = mysqli_real_escape_string($conexion, $contenido);

    // Verificar si ya existe un registro para el numero de control
    $query_verificar = "SELECT * FROM inconveniencia WHERE No_control = '$numero_control'";
    $resultado_verificar = mysqli_query($conexion, $query_verificar);

    if (mysqli_num_rows($resultado_verificar) > 0){
        //Si exite un registro, actualizar los campos del documento
        $query_actualizar = "UPDATE inconveniencia SET Hoja_inconveniencia = '$inconveniencia', Tipo = '$tipo', Contenido = '$contenido' 
                            WHERE No_control = $numero_control";
        mysqli_query($conexion, $query_actualizar);
    }else{
        $query_insertar = "INSERT INTO inconveniencia (No_control, Hoja_inconveniencia, Tipo, Contenido)
                VALUES ('$numero_control', '$inconveniencia', '$tipo', '$contenido')";
        mysqli_query($conexion, $query_insertar); 
    }
    
    header("location: ../menu_alumno.php");
    exit();

?>