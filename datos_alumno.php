<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos generales</title>
    <link rel="stylesheet" href="assets/css/estilo_generales.css">
</head>

<body>

    <h3 class="text">
        Datos generales
    </h3>

    <form action="php/insertar_datos.php" method="POST">
        <div class="formulario">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre" required>
        </div>

        <div class="formulario">
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido" id="apellido" placeholder="Escribe tus apellidos" required>
        </div>

        <div class="formulario">
            <label for="numero_control">Numero de control</label>
            <input type="text" name="numero_control" id="numero_control" placeholder="Escribe tu numero de control" required>
        </div>

        <div class="formulario">
            <label for="Carrera">Carrera</label>
            <select name="carrera" id="carrera">
                <option value=""></option>
                <option value="ISC">ISC</option>
                <option value="IME">IME</option>
                <option value="IGE">IGE</option>
                <option value="IIN">IIN</option>
            </select required>
        </div>

        <div class="formulario">
            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" id="telefono" placeholder="Escribe tu numero de telefono" required>
        </div>

        <div class="formulario">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Escribe tu correo institucional" required>
        </div>

        <div class='formulario'>
            <label for="asesor">Asesor</label>
            <input type="text" name="asesor" id="asesor" placeholder="Escribe el asesor de tus residencias">
        </div>

        <p class="nota">
            Llena el formulario en caso de que estes trabajando
        </p>

        <p class="nota">
            en caso de que no trabajes llena los datos anteriores
        </p>

        <div class="formulario">
            <label for="trabajo">Trabajas en alguna empresa</label>
            <select name="trabajo" id="trabajo">
                <option value=""></option>
                <option value="SI">SI</option>
                <option value="NO">NO</option>
            </select>
        </div>

        <div class="formulario">
            <label for="empresa">empresa</label>
            <input type="text" name="empresa" id="empresa" placeholder="En que empresa trabajas">
        </div>

        <div class="formulario">
            <label for="cargo">Cargo</label>
            <input type="text" name="cargo" id="cargo" placeholder="En que cargo te encuentras">
        </div>

        <button type="submit" onclick="mostrarDatos()">Guardar datos</button>

    </form>

    <script src="assets/js/alert.js"></script>
</body>

</html>