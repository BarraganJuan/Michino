<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="formulario">
        <h2>Iniciar Sesión</h2>
        <form action="validar.php" method="POST">
            <label for="nombre">Usuario:</label>
            <input type="text" name="nombre" required>
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" required>
            <button type="submit">Ingresar</button>
            <br>
            <br>
            <button><a style="color: white; outline-style: none;" href="registrarse.php">Registrarse</a></button>
        </form>
    </div>
        <div class="inmovil">
        <img src="img/La dulsura en persona.png" width="100px">
    </div>
</body>
</html>