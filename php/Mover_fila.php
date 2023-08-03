<?php

    include 'conexion_be.php';

    if (isset($_GET['no_control'])) {
        $noControl = $_GET['no_control'];
    
    $query = "SELECT * FROM datos_alumno WHERE No_control = '$noControl'";
    $ejecutar = $conexion->query($query);
    
    // Verificar si se encontraron resultados
    if ($ejecutar->num_rows > 0) {
        // Iterar sobre los resultados y realizar las operaciones
        while ($fila = $ejecutar->fetch_assoc()) {
            // Obtener los datos de la fila
            $noControl = $fila['No_control'];
            $nombre = $fila['Nombre'];
            $apellido = $fila['Apellido'];
            $carrera = $fila['Carrera'];
            $asesor = $fila['Asesor'];
            $email = $fila['Email'];
            $telefono = $fila['Telefono'];
            $trabajo = $fila['Trabajo'];
            $empresa = $fila['Empresa'];
            $cargo = $fila['Cargo'];
    
            // Insertar los datos en otra tabla
            $insertQuery = "INSERT INTO datos_concluidos (No_control, Nombre, Apellido, Carrera, Telefono, Email, Asesor, Trabajas, Empresa, Cargo) 
                                VALUES ('$noControl', '$nombre', '$apellido', '$carrera', '$telefono', '$email', '$asesor',  '$trabajo', '$empresa', '$cargo')";
            $conexion->query($insertQuery);
    
            // Eliminar los datos de la tabla original
            $deleteQuery = "DELETE FROM datos_alumno WHERE No_control = '$noControl'";
            $conexion->query($deleteQuery);
        }
    }
}
    // Cerrar la conexión
    $conexion->close();

    header("Location: ../menu_docente.php");
    exit;
?>