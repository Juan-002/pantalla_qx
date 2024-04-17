<?php
try {
    // Configuración de la conexión
    $dsn = 'odbc:pruebasxenco1'; // Reemplaza 'nombre_del_dsn' con el nombre de tu DSN
    $usuario = 'SA';
    $contraseña = 'Clinic@031';

    // Conexión utilizando PHP PDO
    $conexion = new PDO($dsn, $usuario, $contraseña);

    // Configuración de opciones de PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Conexión exitosa a la base de datos SQL Server";
} catch (PDOException $e) {
    // Captura de excepciones con mejoras en PHP 8.1
    $códigoError = $e->getCode();
    $mensajeError = $e->getMessage();

    echo "Error en la conexión ($códigoError): " . $mensajeError;
}
?>
