<?php


function conectarDB()
{
    // Configuración de la base de datos
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $base_datos = "validation_archivo_db";

    // Conectar a la base de datos
    $conexion = mysqli_connect($servidor, $usuario, $clave, $base_datos);

    // Verificar la conexión
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    return $conexion;
}
