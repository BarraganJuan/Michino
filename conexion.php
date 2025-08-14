<?php

$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "usuario_pagina";

$conexion = new mysqli(hostname: $host, username: $usuario, password: $contrasena, database: $base_datos);

if ($conexion->connect_error) {
    die("X conexion fallida:" . $conexion->connect_error);
}

?>