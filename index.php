<?php
$conexion = mysqli_connect('localhost','root','','xenco');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
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
             
                        $sql = "SELECT * FROM tb_datos_qx";
                        $result = mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                            <td><?php echo $mostrar["quirofano"]                   ?></td>
                            <td><?php echo $mostrar["profesional"]                 ?></td>
                            <td><?php echo $mostrar["paciente"]                    ?></td>
                            <td><?php echo $mostrar["ingreso"]                     ?></td>
                            <td><?php echo $mostrar["evaluacion_pre_anestecia"]    ?></td>
                            <td><?php echo $mostrar["evaluacion_qx"]               ?></td>
                            <td><?php echo $mostrar["registro_anestecia"]          ?></td>
                            <td><?php echo $mostrar["post_operatorio"]             ?></td>
                            <td><?php echo $mostrar["recuperacion"]                ?></td>
                            <td><?php echo $mostrar["anestecia_en_qx"]             ?></td>
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
$conexion->close();
?>
