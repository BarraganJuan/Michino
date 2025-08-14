<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Personales</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="formulario">
        <h2>Registrarse</h2>
        <form action="guardar_datos.php" method="POST">
            <label for="nombre">Usuario:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" name="correo" id="correo" required>

            <label for="contrasena">Contraseña:</label>
            <input type="text" name="contrasena" id="contrasena" required>

            <button type="submit">Guardar</button>
            <br>
            <br>
            <button><a style="color: white; outline-style: none;" href="Iniciar.php">Iniciar sesion</a></button>
        </form>
    </div>
    <div class="inmovil">
        <img src="img/La dulsura en persona.png" width="100px">
    </div>
</body>
</html>