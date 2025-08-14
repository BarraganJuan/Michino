<?php

include 'conexion.php';

if (isset($_POST['nombre'], $_POST['correo'], $_POST['contrasena'])) {
    $usuario = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $sql = "INSERT INTO registro (Usuario, Correo, Contraseña) VALUES ('$usuario', '$correo', '$contrasena')";
    if (mysqli_query(mysql: $conexion, query: $sql)) {
        echo "Datos guardados exitosamente.";
        header(header: "Location: iniciar.php");
        exit();
    } else {
        echo "Error: " . mysqli_error(mysql: $conexion);
    }

    mysqli_close(mysql: $conexion);
} else {
    echo "Faltan datos en el formulario.";
}

?>