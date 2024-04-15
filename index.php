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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .ejecutado {
            background-color: #9BFF00;
        }
        .en-ejecucion {
            background-color: orange;
        }
        .no-ejecutado {
            background-color: red;
        }
    </style>
</head>

<body>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>QUIROFANOS</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="vistas/images/search.png" alt="">
            </div>
        </section>
        <section class="table__body">
            <table id="data_alert">
                <thead>
                    <tr>
                        <th> Quirofano <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Profesional <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Paciente <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Ingreso <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Evaluacion pre Anestecia <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Evaluacion QX <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Registro Anestecia <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Post operatorio <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Recuperacion <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Anestecia en qx <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                        $sql = "SELECT * FROM TQMOVIMIENTOHC WHERE QM1_COD_TIPOATEN = 'X65C'and QM1_FCH_FECHA = '20210414'";
                        $result = $conexion->query($sql);

                        while($mostrar = $result->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <tr>
                            <td><?php echo $mostrar["QM1_COD_SALA"]                ?></td>
                    </tr>   
                       
                        
                <?php
                    }
                ?>
                </tbody>
            </table>
        </section>
    </main>
    <script src="script.js"></script>
    <script>
        // Obtener la tabla
        var tabla = document.getElementById('data_alert');

        // Recorrer cada fila de la tabla, excluyendo la fila del encabezado
        for (var i = 1; i < tabla.rows.length; i++) {
            // Recorrer cada celda de la fila actual
            for (var j = 0; j < tabla.rows[i].cells.length; j++) {
                // Obtener el texto de la celda y limpiar espacios en blanco
                var textoCelda = tabla.rows[i].cells[j].innerText.trim();
                
                // Aplicar el estilo según el texto de la celda
                if (textoCelda === "ejecutado") {
                    tabla.rows[i].cells[j].classList.add('ejecutado'); }
                if (textoCelda === "En ejecucion") {
                    tabla.rows[i].cells[j].classList.add('en-ejecucion'); }
                if (textoCelda === "No Ejecutado") {
                    tabla.rows[i].cells[j].classList.add('no-ejecutado');
                }
            }
        }
    </script>

</body>

</html>
<?php
// Cerrar la conexión
$conexion = null;
?>
