<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        header("Location: login_docentes.php");
        exit();
    }

    $usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulaciones en proceso</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!--CSS personalizado-->
    <link rel="stylesheet" href="assets/css/diseño.tabla.css">
    <!--Estilos de botones-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!--datatables CSS basico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css">
    <!--datatables estilos bootstrap-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/DataTables-1.13.4/css/dataTables.bootstrap4.min.css">

</head>

<body>

    <header>
        <h1 class="text-center text-light">Division de estudios profesionales <img src="assets/images/LOGO_TEC.jpeg" style="float: right; max-width: 85px; height: auto;"></h1>
        <h2 class="text-center text-light">Buscador <span class="backge badge-danger">de estudiantes</span></h2>
    </header>

    <div style="height:50px"></div>

    <!--Tabla donde apareceran los alumnos registrados-->

    <?php
    $link = new PDO("mysql:host=fdb1028.awardspace.net;dbname=4353774_titulaciones", "4353774_titulaciones", "Fernando6191)",);
    ?>

    <div class="container">
    <div>
        <a class="custom-btn3" href="nuevo_registro.php" title="Nuevo Registro"><i class="bi bi-cloud-arrow-up"></i></a>
        <a class="custom-btn3" href="menu_docente.php" title="Menu principal"><i class="bi bi-box-arrow-in-left"></i></a>
        <a class="custom-btn3" href="php/cerrar_session.php" title="Cerrar Sesion"><i class="bi bi-person-x-fill"></i></a>
    </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No. de control</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Carrera</th>
                                <th>Asesor</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($link->query("SELECT * FROM datos_alumno") as $row){ ?>      
                                <tr>
                                    <td><?php echo $row['No_control'] ?></td>
                                    <td><?php echo $row['Nombre'] ?></td>
                                    <td><?php echo $row['Apellido'] ?></td>
                                    <td><?php echo $row['Carrera'] ?></td>
                                    <td><?php echo $row['Asesor'] ?></td>
                                    <td>
                                        <button class="custom-btn" title="Ver Datos" onclick="detailByStudent(<?php echo htmlspecialchars  (json_encode ($row))?>)"><i class="bi bi-file-person"></i></button>
                                        <button class="custom-btn1" title="Ver expediente" onclick="goToSeguimientoProceso(<?php echo $row['No_control'] ?>)"><i class="bi bi-database"></i></button>
                                        <a class="custom-btn2" title="Pasar a concluido" href="php/Mover_fila.php?no_control=<?php echo $row['No_control'] ?>" class="btn btn-outline-danger" onclick="mostrarTitulacion()"><i class="bi bi-upload"></i></a>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--Jquery, Popper.js Booststrap JS-->
    <script src="assets/jquery/jquery-3.6.4.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!--Datatable js-->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/js/tabla.js"></script>
    <script type="text/javascript" src="assets/js/detalleProcesos.js"></script>
    <script src="assets/js/alert.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>