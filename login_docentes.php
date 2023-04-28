<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia Sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>

                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes cuenta</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">Registrarse</button>
                    <button onclick="window.location.href='login_alumnos.php'">Alumnos</button>
                </div>
            </div>

            <div class="contenedor__login-register">

                <form action="php/iniciar_sesion.docente.php" method="POST" class="formulario__login">
                    <h2>Docentes</h2>
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contraseña">
                    <button onclick="window.location.href='menu_docente.php'">Entrar</button>
                </form>

                <form action="php/registro_docente.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="text" placeholder="Email" name="email">
                    <input type="password" placeholder="Contraseña" name="contraseña">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/login.js"></script>
</body>

</html>