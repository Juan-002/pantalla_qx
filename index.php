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
                    <?php
                        require 'modelo/select.php';
                        $sql = "SELECT * FROM TQMOVIMIENTOHC WHERE QM1_FCH_FECHA = '20240410'";
                        $result = $conexion->query($sql);
                        while($mostrar = $result->fetch(PDO::FETCH_ASSOC)){
                            $quirofano = $mostrar["QM1_COD_SALA"];
                            $profesional = $mostrar["QM1_NUM_MED"];      
                            $pasiente =    $mostrar["QM1_COD"];  
                            $ingreso  =    $mostrar["QM1_COD_TIPOATEN"];
                            $ev_pre   =    $mostrar["QM1_COD_TIPOATEN"];
                            $ev_qx    =    $mostrar["QM1_COD_TIPOATEN"];                       
                            $reg_anes =    $mostrar["QM1_COD_TIPOATEN"];
                            $post_op  =    $mostrar["QM1_COD_TIPOATEN"];
                            $recupera =    $mostrar["QM1_COD_TIPOATEN"];
                            $anes_qx  =    $mostrar["QM1_COD_TIPOATEN"];

                    ?>
                    <tr>  
                        <td> <?php if ($quirofano != "" )   { echo $quirofano;}  ?> </td> 
                        <td><?php echo $profesional             ?></td> 
                        <td><?php echo $pasiente                ?></td>
                        <td><?php if ($ingreso == "X65C")   { echo $ingreso;   } ?></td>
                        <td><?php if ($ev_pre == "P18")     { echo $ev_pre;    } ?></td>
                        <td><?php if ($ev_qx == "X65E")     { echo $ev_qx;    } ?></td>
                        <td><?php if ($reg_anes == "X65R")  { echo $reg_anes; } ?></td>
                        <td><?php if ($post_op == "P10")    { echo $post_op;  } ?></td>
                        <td><?php if ($recupera == "X65P")  { echo $recupera; } ?></td>
                        <td><?php if ($anes_qx == "X66R")   { echo $anes_qx;  } ?></td>

                            <?php $conexion = null; ?>
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
