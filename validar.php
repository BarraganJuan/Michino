<?php
// Incluimos la conexión a la base de datos
include 'conexion.php';

if (isset($_POST['nombre']) && isset($_POST['contrasena'])) {
	$usuario = $_POST['nombre'];
	$contrasena = $_POST['contrasena'];

	// Consulta SQL para verificar usuario
	$sql = "SELECT * FROM registro WHERE usuario='$usuario' AND contraseña='$contrasena'";

	$resultado = $conexion->query(query: $sql);


	if ($resultado->num_rows == 1) {
		// Usuario correcto, redirigimos a datos.php
		header(header: "Location: index.php");
		exit();
	} else {
		echo "X Usuario o contraseña incorrectos.";
	}
} else {
	echo "X No se recibieron los datos del formulario.";
}
?>