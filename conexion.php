<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '123456';
$basedatos = 'gestionInventarios';

$conexion = new mysqli($host, $usuario, $contrasena, $basedatos);

// Verificar si hubo error
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

?>
