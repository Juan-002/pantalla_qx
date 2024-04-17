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

<?php
function quirofano(){
    $sql = "SELECT * FROM TQMOVIMIENTOHC WHERE QM1_FCH_FECHA = '20240410'and QM1_COD_TIPOATEN = 'X65C'";
    $result = $conexion->query($sql);
    while($mostrarQuirofano  = $result->fetch(PDO::FETCH_ASSOC)){
    $quirofano    =    $mostrarQuirofano["QM1_COD_SALA"];
    }
    
    return $quirofano;
}
?>

<?php
function registroAnestecia($conexion) {
    try {
        // Consulta SQL
        $sql = "SELECT * FROM TQMOVIMIENTOHC WHERE QM1_FCH_FECHA = '20240410' AND QM1_COD_TIPOATEN = 'X65R'";
        $result = $conexion->query($sql);
        // Verificar si la columna QM1_EST_CERRAR existe
        $columnas = $result->fetch(PDO::FETCH_ASSOC);
        if (isset($columnas['QM1_EST_CERRAR'])) {
            // La columna QM1_EST_CERRAR existe, entonces iteramos sobre los resultados
            while ($mostrarRegAnex = $result->fetch(PDO::FETCH_ASSOC)) {
                $regAnex = $mostrarRegAnex["QM1_EST_CERRAR"];
                if ($regAnex == "S") {
                    echo "Ejecutado";
                } else {
                    echo "No Ejecutado";
                }
            }
        } else {
            echo "No Ejecutado prueba";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $conexion = null;
    }
}

// Llamada a la función
registroAnestecia($conexion);
?>