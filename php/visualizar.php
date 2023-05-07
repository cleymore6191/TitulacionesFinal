<?php

    include 'conexion_be.php';

    $No_control = $_GET['No_control'];
    $sql = "SELECT * FROM expediente_alumno WHERE No_control = $No_control";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

?>