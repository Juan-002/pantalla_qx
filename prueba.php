<?php
require 'modelo/select.php';
function quitarDuplicado() {
    
}
// Consulta SQL
$sql = "SELECT * FROM TQMOVIMIENTOHC WHERE QM1_FCH_FECHA = '20240410'";
$result = $conexion->query($sql);

$rows = $result->fetchAll(PDO::FETCH_ASSOC);
function isExecutado($rows, $data, $codigo)
{
    $date = date('Ymd');
    foreach ($rows as $row) {
        if ($row['QM1_FCH_FECHA'] == $date && $row['QM1_COD_TIPOATEN'] == $codigo && $data == 'S') {
            return "Ejecutado";
        }
    }
    return "No Ejecutado";
}
$conexion = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .Ejecutado {
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
            <img src="vistas/images/noel.png" alt="">
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
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

                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td>
                                <?php
                                echo $row['QM1_COD_SALA'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $row['QM1_NUM_MED'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $row['QM1_COD'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $row['QM1_COD_TIPOATEN'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo isExecutado($rows, $row['QM1_EST_CERRAR'], 'P18');
                                ?>
                            </td>
                        </tr>
                    <?php } ?>

            





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
                if (textoCelda === "Ejecutado") {
                    tabla.rows[i].cells[j].classList.add('Ejecutado');
                }
                if (textoCelda === "En ejecucion") {
                    tabla.rows[i].cells[j].classList.add('en-ejecucion');
                }
                if (textoCelda === "No Ejecutado") {
                    tabla.rows[i].cells[j].classList.add('no-ejecutado');
                }
            }
        }
    </script>

</body>

</html>