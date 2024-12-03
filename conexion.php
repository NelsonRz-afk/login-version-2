<?php
$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$base_datos = 'registros';
$puerto = 3306;

$conexion = new mysqli($servidor, $usuario, $contraseña, $base_datos, $puerto);

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}
?>
