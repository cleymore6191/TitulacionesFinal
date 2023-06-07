<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del alumno</title>
</head>
<body>

    <h3>Ingresar los datos del alumno que ya no siguieron su proceso de titulacion</h3>

    <form action="php/nuevo_dato.php" method="POST">
    <div class="formulario">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre">
        </div>

        <div class="formulario">
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido" id="apellido" placeholder="Escribe tus apellidos">
        </div>

        <div class="formulario">
            <label for="numero_control">Numero de control</label>
            <input type="text" name="numero_control" id="numero_control" placeholder="Escribe tu numero de control">
        </div>

        <div class="formulario">
            <label for="Carrera">Carrera</label>
            <select name="carrera" id="carrera">
                <option value=""></option>
                <option value="ISC">ISC</option>
                <option value="IME">IME</option>
                <option value="IGE">IGE</option>
                <option value="IIN">IIN</option>
            </select>
        </div>

        <div class="formulario">
            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" id="telefono" placeholder="Escribe tu numero de telefono">
        </div>

        <div class="formulario">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Escribe tu correo institucional">
        </div>

        <button type="submit" onclick="mostrarAlerta()">Guardar datos</button>

    </form>

    <script src="assets/js/alert.js"></script>
    
</body>
</html>